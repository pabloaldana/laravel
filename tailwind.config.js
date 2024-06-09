/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "custom-bg": "url('/images/fondos/fondo1.jpg')",
            },
        },
    },
    plugins: [],
};
