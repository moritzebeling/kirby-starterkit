<script>

    export let alt = '';
    export let src = '';
    export let srcset = '';

</script>

<img {alt} {src} class="lazyload" data-sizes="auto"
    data-src={src}
    data-srcset={srcset} />
