const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/pages/**/*.vue",
        "./resources/js/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            ccolors: {
                "kuis-blue": {
                    300: "#E5E0FF",
                    500: "#8EA7E9",
                    800: "#7286D3",
                },
                "kuis-yellow": {
                    500: "#FDF7C3",
                    700: "#FFDEB4",
                },
                "kuis-purple": "#B2A4FF",
                "kuis-red": "#FFB4B4",
                "kuis-white": "#FFFFFF",
            },
            fontFamily: {
                nunito: ["Nunito"],
                oxygen: ["Oxygen"],
                prompt: ["Prompt"],
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require('flowbite/plugin')
    ],
};
