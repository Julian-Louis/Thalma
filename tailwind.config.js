const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')


module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {

        extend: {
            height:{
                bgs:'30rem'
            },
            fontFamily: {
                montse: ['Montserrat']
            },
            colors: {
                // Build your palette here
                dark:'#050606',
                primary:'#2d40b2',
                transparent: 'transparent',
                current: 'currentColor',
                gray: colors.trueGray,
                red: colors.red,
                blue: colors.lightBlue,
                yellow: colors.amber,
            }
        },

    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
