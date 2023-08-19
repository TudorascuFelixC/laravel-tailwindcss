/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/**/*.blade.php', // Include Blade template files
      './resources/**/*.js',        // Include JavaScript files
      './resources/**/*.vue',       // Include Vue.js files
    ],
    // Other Tailwind CSS configurations...
  
  theme: {
    extend: {
      borderOpacity: ['active']
    },
  },
  plugins: [],
};