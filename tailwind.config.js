/** @type {import('tailwindcss').Config} */
export const content = [
  './resources/**/*.blade.php',
  './resources/**/*.js',
  './resources/**/*.vue', // Include Vue.js files
];
export const theme = {
  extend: {
    borderOpacity: ['active'],
    backgroundImage: {
      'my': 'url("/photos/AdobeStock_606546933.png")'
    },
  },
};
export const plugins = [];