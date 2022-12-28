/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    listStyleType: {
      roman: 'upper-roman',
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
