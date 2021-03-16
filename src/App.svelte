<script>
	import { Router, Link, Route } from "svelte-routing";
	import Default from './templates/default/index.svelte';
	import Debug from './components/Debug.svelte';

	let templates = {
		default: Default
	};

	export let data;
	export let url = "";
</script>

<Router url="{url}">

	{#each data.listed.concat( data.unlisted ) as item}
		{#if item.template in templates}
			<Route path={item.path} component={templates[item.template]} {item} />
		{:else}
			<Route path={item.path} component={Default} {item} />
		{/if}
	{/each}

	<Route path="*" />

	<Debug {data} />

</Router>

<style lang="scss">

</style>
