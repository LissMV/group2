/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
     "./resources/**/*.blade.php",
     "./resources/**/*.js",
     "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'light-green': '#606c38',
            'dark-green': '#283618',
            'white': '#FEFAE0',
            'light-brown': '#DDA15E',
            'brown': '#BC6C25',
        },
        fontFamily:{
            'lora': ["Lora", ...defaultTheme.fontFamily.sans],
            'montserrat': ["Montserrat", ...defaultTheme.fontFamily.sans],
        }
    },
  },
  plugins: [],
}



