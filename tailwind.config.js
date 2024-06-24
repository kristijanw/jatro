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
        'hero-pattern': "url('img/header.webp')",
      },
    },
    fontFamily: {
      'exo': 'Exo, sans-serif'
    }
  },
  plugins: [],
}