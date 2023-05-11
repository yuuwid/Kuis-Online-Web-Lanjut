const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/pages/**/*.vue",
        "./resources/pages/**/*.html",
        "./resources/js/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            colors: {
                "kuis-blue": {
                    300: "#E5E0FF",
                    500: "#799AF1",
                    800: "#2E3DAB",
                },
                "kuis-yellow": {
                    500: "#FDF7C3",
                    700: "#FFDEB4",
                },
                "kuis-purple": "#BD7BFF",
                "kuis-red": "#F35B5B",
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
