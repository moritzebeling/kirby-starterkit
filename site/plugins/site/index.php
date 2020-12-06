<?php

// https://getkirby.com/docs/reference/plugins/extensions

require_once 'models/home.php';

Kirby::plugin('moritzebeling/site', [

  'pageModels' => [
    'home' => 'HomePage',
  ],

  'pageMethods' => [
    'metaDescription' => function (): string {

			if( $this->description()->isNotEmpty() ){
				return $this->description()->value();
			}
			return $this->site()->description()->value();

		},
		'metaKeywords' => function (): array {

			$tags = array_unique( array_merge(
				$this->tags()->split(),
				$this->site()->tags()->split()
			));
			return array_slice( $tags, 0, 12 );

		},
		'ogImage' => function () {

			if( $image = $this->image() ){
				return $image;
			}
			return $this->site()->image();

		},
  ],

  'pagesMethods' => [
    'pluckStructure' => function ( $structureField, $innerField = false ) {
  		/*
  		* needed to suggest autocompletes for fields within structures
  		* $field: name of the structure field you want to pluck
  		* $innerField: field within the structure field, that you actually want to recieve
  		*/
  		$structures = $this->pluck( $structureField );
  		$return = [];
  		foreach( $structures as $structure ){
  			foreach( $structure->{$structureField}()->yaml() as $row ){
  				if( !$innerField && array_filter($row) ){
  					$return[] = $row;
  				} else if( isset( $row[$innerField] ) ){
  					$return[] = $row[$innerField];
  				}
  			}
  		}
  		return array_unique($return);
  	},
  ],

  'fieldMethods' => [
    'before' => function ($field, string $before): string {
			if( $field->isNotEmpty() ){
				return $before . $field->value;
      }
      return '';
    },
    'after' => function ($field, string $after): string {
			if( $field->isNotEmpty() ){
				return $field->value . $after;
      }
      return '';
    },
    'toAnchor' => function($field, string $text = null, bool $external = true ) {
      if( $field->isEmpty() ){
        return;
      }
      if( $text === null ){
        $text = parse_url( $field->value, PHP_URL_HOST );
      } else {
        $text = str_replace('http://','',$text);
        $text = str_replace('https://','',$text);
      }
      if( $external === true ){
        $attr = [
          'target' => '_blank',
          'rel' => 'noopener'
        ];
      }
      $text = str_replace('www.','',$text);
      return Html::a($field->value, $text, $attr ?? []);
    },
  ],

  'fileMethods' => [
    'title' => function (): Kirby\Cms\Field {

  		if( $this->content()->title()->isNotEmpty() ){
        return $this->content()->title();
      }
      return $this->parent()->title();
      return new Field( $this, 'title', $this->filename() );

  	},
    'caption' => function (): Kirby\Cms\Field {

      return $this->content()->caption();

  	},
    'img' => function ( string $size = 'l' ): string {

  		return Html::tag( 'img', null, [
  			'src' => $this->thumb( $size )->url(),
  			'title' => $this->title()->value(),
  			'alt' => $this->caption()->isNotEmpty() ? $this->caption() : $this->title(),
        'srcset' => $this->srcset( $size )
  		]);

  	},
    'figcaption' => function ( $includeCaption = false ): string {

  		$html = '';

      if( $this->caption()->isNotEmpty() ){
        $html .= $this->caption()->kirbytext();
      }
      if( $this->credits()->isNotEmpty() ){
        $html .= '<span class="credits">'.$this->credits()->kirbytext().'</span>';
      }
      if( $html !== '' ){
        $html = Html::tag('figcaption', $html );
      }

      return $html;

  	},
    'figure' => function ( $includeCaption = false ): string {

  		$img = $this->img();

  		$figcaption = '';
  		if( $includeCaption === true ){
  			$figcaption = $this->figcaption();
  		}

      return Html::tag('figure', $img.$figcaption );

  	},
  ]


]);
