/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php", // Main WordPress theme files
    "./template-parts/**/*.php",
    "./assets/js/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};

