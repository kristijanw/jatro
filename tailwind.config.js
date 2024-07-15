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
        'hero-pattern': "url('img/header.jpg')",
        'hero-pattern2': "url('img/header2.jpg')",
        'about-hero-pattern': "url('img/aboutheader.png')",
        'custom-gradient': 'linear-gradient(270deg, rgba(12, 23, 40, 0) 0%, rgba(12, 23, 40, 0.7) 24.03%, #0C1728 96.11%)',
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