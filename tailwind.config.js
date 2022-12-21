/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'dark-primary' : '#0d1117',
        'green-primary' : '#238636',
        'dark-main' : '#010409',
        'gray-dark' : '#223645',
        'dark-blue-gray' : '#161a38',
      },
      screens: {
        'xs': {'min': '320px'},
      },
    },
  },
  plugins: [],
}
