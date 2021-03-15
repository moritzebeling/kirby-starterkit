<script>
	import { Router, Link, Route } from "svelte-routing";
	import Debug from './templates/debug/index.svelte';

	let templates = {
		debug: Debug
	};

	export let data;
	export let url = "";
</script>

<Router url="{url}">

	{#each data.listed.concat( data.unlisted ) as page}
		{#if page.template in templates}
			<Route path={page.path} component={templates[page.template]} {page} />
		{/if}
	{/each}
	<Route path="*" component={Debug} page={data} />

</Router>

<style lang="scss">

</style>
