const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.{html,js}",
    "./resources/pages/**/*.php",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        "kuis-purple": "#472183",
        "kuis-blue": "#4B56D2",
        "kuis-sky": "#82C3EC",
        "kuis-white": "#F1F6F5",
        "kuis-black": "#202020",
      },
      fontFamily: {
        nunito: ["Nunito"],
        oxygen: ["Oxygen"],
        prompt: ["Prompt"],
        sans: ["Figtree", ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [require("@tailwindcss/forms"), require("flowbite/plugin")],
};
