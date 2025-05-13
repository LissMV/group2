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
            'white2': '#FEFAE0',
            'light-brown': '#DDA15E',
            'brown': '#BC6C25',
            'azul' : '#162A2C',
            'celeste' : '#D6E0E2',
            'verde' : '#4a583d',
            'verde_menta' : '#8BB174',
            'verde_azul' : '#2b4f37',

        },
        fontFamily:{
            'lora': ["Lora", ...defaultTheme.fontFamily.sans],
            'montserrat': ["Montserrat", ...defaultTheme.fontFamily.sans],
        }
    },
  },
  plugins: [],
}



