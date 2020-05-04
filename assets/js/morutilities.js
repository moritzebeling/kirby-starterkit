/*
*
* Moritz’ Utilities
* v0.000000001 2020
* https://moritzebeling.com
*
* /

/* console.log */
function log( object ){
	console.log( object );
}

/* on click */
function onClick( selector, callFunction ){
	const elements = document.querySelectorAll( selector );
	for (let element of elements) {
		element.addEventListener( 'click', ()=>{
			callFunction( element )
		}, false );
	}
	return elements;
}

/* window size */
function getWindowSize(){
	return {
		width: window.innerWidth,
		height: window.innerHeight
	};
}

/* on resize */
let _onResizeTimeout;
let _onResizeFunctions = [];
window.onresize = function(){
  clearTimeout(_onResizeTimeout);
  _onResizeTimeout = setTimeout(function(){
		for (let f in _onResizeFunctions) {
			_onResizeFunctions[f]( getWindowSize() );
		}
  }, 150);
};

function onResize( callFunction ){
	_onResizeFunctions.push( callFunction );
	return getWindowSize();
}

/* scroll position */
function getScrollPosition(){
	return window.scrollY;
}

/* on scroll */
let _onScrollTimeout = false;
let _onScrollFunctions = [];
let _scrollLastPosition;
let _scrollPosition;
window.addEventListener('scroll', (event)=>{
  _scrollPosition = getScrollPosition();
  if( _onScrollTimeout === false && _scrollPosition !== _scrollLastPosition ) {
    window.requestAnimationFrame(function() {
			_scrollPosition = Math.floor( _scrollPosition );

			for (let f in _onScrollFunctions) {
				_onScrollFunctions[f]( _scrollPosition );
			}

			_scrollLastPosition = _scrollPosition;
      _onScrollTimeout = false;
    });
    _onScrollTimeout = true;
  }
});

function onScroll( callFunction ){
	_onScrollFunctions.push( callFunction );
	return getScrollPosition();
}

/* on load */
let _onLoadFunctions = [];
window.addEventListener('load', (event)=>{
	for (let f in _onLoadFunctions) {
		_onLoadFunctions[f]();
	}
});
function onLoad( callFunction ){
	_onLoadFunctions.push( callFunction );
}
