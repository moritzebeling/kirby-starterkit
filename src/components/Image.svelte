<script>

    export let image;

    function srcset( set ){
        let s = '';
        for (const size of set ) {
            s += `${size.url} ${size.width}w, `;
        }
        return s;
    }

</script>

<div class="img">
    <img alt={image.alt}
        src={image.url}
        class="lazyload"
        data-sizes="auto"
        data-src={image.url}
        data-srcset={srcset(image.srcset)} />
</div>

<style lang="scss">

    div {
        position: relative;
        &:after {
            content: '';
            background-color: #000;
            opacity: 0.03;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
            z-index: 2;
        }
    }

</style>
