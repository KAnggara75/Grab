/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Roboto", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                header: "url('http://grab.test/img/bg-header.png')",
                grab: "url('http://grab.test/img/logo.png')",
            },
            colors: {
                "primary": "#1c1c1c",
                "secondary": "#00b14f",
                "third": "#818181",
            },
        },
    },
    plugins: [],
};
