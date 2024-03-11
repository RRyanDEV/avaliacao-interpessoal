/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{php,html,js}",
    "./pages/**/*.{php,html,js}",
    "./components/**/*.{php,html,js}",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        default: {
          80: "#082f49",
        },
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
