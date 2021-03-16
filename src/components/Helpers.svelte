<script>

    function handleResize(){
        document.documentElement.style.setProperty('--full-height', `${Math.floor(window.innerHeight)}px`);
    }
    handleResize();

</script>

<svelte:window on:resize={handleResize} />

<style lang="scss">

</style>
