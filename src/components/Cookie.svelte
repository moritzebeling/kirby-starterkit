<script>

    import Cookies from 'js-cookie';

    let show = false;
    const config = {
        name: 'cookies-accepted',
        value: 'thank-you',
        reject: '?bitte-keine=cookies'
    };

    function checkForCookies(){
        if( Cookies.get( config.name ) !== undefined
            || window.location.search === config.reject ){
            show = false;
        }
        show = true;
    }
    checkForCookies();

    function accept(){
        Cookies.set(config.name, config.value, { expires: 90 });
        show = false;
    }

</script>

{#if show}
    <div class="cookies">
        <p><span class="l">Diese Website verwendet </span>Cookies.</p>
        <button class="button" on:click={accept}>Na gut</button>
        <a class="button" href="{config.reject}">Lieber nicht</a>
    </div>
{/if}

<style lang="scss">

</style>
