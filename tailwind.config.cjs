/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        schoolNavy: '#0D3B52',
        schoolSky: '#5BB8D4',
        schoolGold: '#C9A84C',
      },
    },
  },
  plugins: [],
}
