import { fileURLToPath, URL } from "node:url";
import url from 'rollup-plugin-url';

import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue({
    type: 'module'
  })],
  
  build: {
    rollupOptions: {
      output: {
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].js`,
        assetFileNames: `assets/[name].[ext]`
      },
      plugins: [
        url({
          limit: 0,
          include: ['**/*.jpg', '**/*.jpeg', '**/*.png', '**/*.gif','**/*.svg'],
          publicPath: '/wp-content/plugins/CalcVue/dist/assets/',
        }),
      ],
    }
  },
  
  resolve: {
    alias: {
      "@": fileURLToPath(new URL("./src", import.meta.url)),  
    },
  },
});
