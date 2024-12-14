import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: "#194cd3",
                    100: "#2763ff",
                },
                secondary: {
                    50: "#f7f7f7",
                    100: "#a6a6a6",
                },
                light: "#ffffff",
                dark: "#080808",
                warning: "#f2dd4e",
            },
        },
    },
    plugins: [],
};
