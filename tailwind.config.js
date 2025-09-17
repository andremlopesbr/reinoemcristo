/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./index.php", // Seu arquivo principal
        "./src/**/*.{html,js,php}", // Outros arquivos onde você usa classes Tailwind
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}