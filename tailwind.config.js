/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        Mochiy: "'Mochiy Pop One', sans-serif",
        Poppins: "'Poppins', sans-serif",
      }
    },
  },
  plugins: [],
}