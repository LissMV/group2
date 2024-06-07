/** @type {import('tailwindcss').Config} */
export default {
  content: [
     "./resources/**/*.blade.php",
     "./resources/**/*.js",
     "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
        'light-green': '#606c38',
        'dark-green': '#283618',
        'white': '#FEFAE0',
        'light-brown': '#DDA15E',
        'brown': '#BC6C25',
    }
  },
  plugins: [],
}

