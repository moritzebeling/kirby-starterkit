<script>

	import { load } from "../utilities/load.js";

    export let path;

    let data = load( path );

</script>

{#await data}
    <p>Loading...</p>
{:then page}

    <slot prop={page.data} />

{:catch error}
    <p class="error">Error</p>
{/await}

<style lang="scss">

    p {
        margin: size(1);
        opacity: 0.5;
    }

</style>
