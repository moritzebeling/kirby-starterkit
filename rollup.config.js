import sveltePreprocess from 'svelte-preprocess';
import svelte from 'rollup-plugin-svelte';
import commonjs from '@rollup/plugin-commonjs';
import resolve from '@rollup/plugin-node-resolve';
import livereload from 'rollup-plugin-livereload';
import { terser } from 'rollup-plugin-terser';
import scss from 'rollup-plugin-scss';

const production = !process.env.ROLLUP_WATCH;

function serve() {
	let server;

	function toExit() {
		if (server) server.kill(0);
	}

	return {
		writeBundle() {
			if (server) return;
			server = require('child_process').spawn('npm', ['run', 'start', '--', '--dev'], {
				stdio: ['ignore', 'inherit', 'inherit'],
				shell: true
			});

			process.on('SIGTERM', toExit);
			process.on('exit', toExit);
		}
	};
}

export default {
	input: 'src/main.js',
	output: {
		sourcemap: !production,
		format: 'iife',
		name: 'app',
		file: 'public/build/bundle.js'
	},
	plugins: [
		svelte({
			compilerOptions: {
				// do run-time checks when not in production
				dev: !production
			},
			preprocess: sveltePreprocess({
				defaults: {
					style: 'scss'
				},
				scss: {
					// relative to root
					prependData: `@import 'src/scss/_mixins.scss';`
				},
			}),
		}),

		scss({
			output: true,
			outputStyle: "compressed",
			sourceMapEmbed: !production,
		}),

		resolve({
			browser: true,
			dedupe: ['svelte']
		}),
		commonjs(),

		// in dev, run `npm run start` once the bundle has been generated
		!production && serve(),

		// watch `public` directory in dev
		!production && livereload('public/build'),

		// build and minify
		production && terser()
	],
	watch: {
		clearScreen: false
	}
};
