<script>

    import Link from "./Link.svelte";

    export let pages = [];

</script>

<header>

    <nav class="main">
        {#each pages as page}
            <Link to="{page.path}">{page.title}</Link>
        {/each}
    </nav>

</header>

<style lang="scss">

    nav {
        display: flex;
        padding: 0 1rem;
        :global( a ){
            padding: 0.5rem;
        }
    }

</style>
