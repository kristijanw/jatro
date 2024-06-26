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
        'about-hero-pattern': "url('img/aboutheader.png')",
      },
      maxWidth: {
        'maxcontainer': '1438px',
        'mincontainer': '1228px',
      },
    },
    fontFamily: {
      'exo': 'Exo, sans-serif'
    },
  },
  plugins: [],
}