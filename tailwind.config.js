/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./pages/**/*.{js,ts,jsx,tsx}",
    "./components/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        'black-netflix': '#151515',
        'red-netflix': '#E50914',
        'gray-netflix': '#8c8c8c',
        'input-netflix': '#333333',
      },

      fontFamily: {
        'netflix-light': ['Netflix Light'],
        'netflix-regular': ['Netflix Regular'],
        'netflix-medium': ['Netflix Medium'],
        'netflix-bold': ['Netflix Bold']
      }

    },
  },
  plugins: [
    
  ],
}
