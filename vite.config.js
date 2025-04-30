import { defineConfig } from 'vite';
import packageJson from './package.json';

// Extracting entry and output configuration from package.json
const { entry, output } = packageJson.config.js;

export default defineConfig(({ mode }) => {
  return {
    build: {
      rollupOptions: {
        // Use the entry defined in package.json
        input: entry,
        output: {
          dir: output,  // The output directory for the build files
          entryFileNames: '[name].js', // Name of the output JS files
        },
      },
      sourcemap: mode === 'development', // Enable source maps in development
      minify: mode === 'production', // Minify in production mode
    },
    optimizeDeps: {
      include: ['aos', 'flowbite', 'swiper'],
    },
  };
});
