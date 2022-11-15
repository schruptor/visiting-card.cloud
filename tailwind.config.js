const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'eminence': {
                    DEFAULT: '#5D296E',
                    '50': '#BC7FCF',
                    '100': '#B470CA',
                    '200': '#A453BF',
                    '300': '#8F3FA9',
                    '400': '#76348C',
                    '500': '#5D296E',
                    '600': '#3A1A45',
                    '700': '#180B1C',
                    '800': '#000000',
                    '900': '#000000'
                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
