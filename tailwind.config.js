/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        container:{
            padding:{
                default : '15px'
            }
        },
        screens: {
            sm: "480px",
            md: "768px",
            lg: "978px",
            xl: "1440px",
        },
        extend: {
            fontFamily: {
                Montserrat: ['Montserrat']
            },
            colors: {
                merahMM: "#690B0B",
                kuningMM: "#FFB800",
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
