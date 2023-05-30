const { defineConfig } = require('vite');

module.exports = defineConfig({
  root: './',
  build: {
    outDir: 'assets/dist',
    assetsDir: '',
    rollupOptions: {
      input: {
        main: './assets/js/index.js',
      },
      output: {
        entryFileNames: '[name].js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
      },
    },
  },
});
