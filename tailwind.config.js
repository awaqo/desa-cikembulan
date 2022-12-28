/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    listStyleType: {
      roman: 'upper-roman',
    }
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
