import './scss/global.scss';
import 'lazysizes';

import App from './App.svelte';

const app = new App({
	target: document.body,
	props: {
		data: window.siteData
	}
});

export default app;
