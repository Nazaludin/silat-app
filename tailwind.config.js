import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/preline/dist/*.js',
    ],

    theme: {
        extend: {
            colors: {
                'main': '#0f172a'
              },
              boxShadow: {
                 'flat': '0px 0px 30px -3px rgba(163,163,163,1);'
              },
              fontFamily: {
                'primary':['poppins', 'sans-serif']
              }
        },
    },

    plugins: [
        forms,
        require('preline/plugin'),
    ],
};
