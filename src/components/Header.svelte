<script>

    import { Link } from "svelte-routing";

    let pages = [
        ['/','Start']
    ];

</script>

<header>

    <nav class="main">
        {#each pages as [path,title]}
            <Link to="{path}">{title}</Link>
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
