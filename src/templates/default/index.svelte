<script>

    import Load from '../Load.svelte';
    import Debug from '../../components/Debug.svelte';

    export let item;

</script>

<Load path={item.path} let:prop={page}>

    <article>

        <header>
            <h1>{page.title}</h1>
        </header>

        <main class="text">
        </main>

        <footer>
        </footer>

    </article>

</Load>

<style lang="scss">
</style>
