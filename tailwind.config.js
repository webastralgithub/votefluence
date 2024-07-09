/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      width: {
        'p-80': '80%'
      },
      backgroundImage: {
      },
      fontFamily: {
        'lato': ['Lato', 'sans-serif']
      },
      container: {
        center: true,
        'padding': '1rem'
      },
    },
  },
  plugins: [],
}

