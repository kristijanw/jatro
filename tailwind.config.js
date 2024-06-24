/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "linear-gradient(to top, #0c1728 20%, #0c172800), url('img/header.webp')",
      },
    },
    fontFamily: {
      'exo': 'Exo, sans-serif'
    }
  },
  plugins: [],
}