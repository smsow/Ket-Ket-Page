/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      fontSize: {
        'title': '96px',
        'h1': '61.04px',
        'h2': '48.83px',
        'h3': '39.06px',
        'h4': '31.25px',
        'h5': '25px',
        'h6': '20px',
        'p': '16px',
      },
      lineHeight: {
        'title': '110px',
        'h1': '70px',
        'h2': '56px',
        'h3': '45px',
        'h4': '36px',
        'h5': '29px',
        'h6': '25px',
        'p': '18px',
      },
      fontFamily: {
        'arial': ['Arial', 'sans-serif'],
        'inter': ['Inter', 'sans-serif'],
        'quicksand': ['Quicksand', 'sans-serif'],
        'r-mono': ['Roboto Mono', 'monospace'],
      },
      backgroundColor: {
        'dark-gray': '#333333',
        'main-red': "#C8102E",
        'main-blue': "#1D428A",
        'main-black': "#333333",
      },

      textColor: {
        'main-blue': "#1D428A",
        'main-black': "#333333",
        'custom-white': 'rgba(255, 255, 255, 0.05)',
      },

      backgroundImage: {
        'hero-texture': "url('../public/img/dots.png')",
        'hero-image': "url('../public/img/hero-image.png')",
        'test-image': "url('../../../public/storage/images/vy1aimQe7qacefWO1eqroIxX2xBCS3-metaU2NyZWVuc2hvdCAyMDI0LTA3LTIyIGF0IDEwLjExLjIyLnBuZw==-.png')",
        'dots-about': "url(../public/img/dots_about.png)",
        'macbook-about': "url(../public/img/macbook.png)",
        'dots-advantage': "url(../public/img/dot-adv.png)",
      },
   
    },
    screens: {
      "xs": "375px",
      sm: "640px",
      md: "769px",
      lg: "1025px",
      xl: "1281px",
      "ml": "1441px",
      "2xl": "1536px",
      "3xl": "1920px"
    }
  },
  plugins: [],
}