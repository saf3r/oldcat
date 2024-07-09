import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'golos-text': ['Noto Sans', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'basic': '#7367f0',
                'basic-hover': '#685dd8',
            },
            screens: {
                '2xl': '1440px',
            },
        },
    },

    plugins: [forms, require('daisyui'), require('flowbite/plugin')],

    aisyui: {
        themes: ['light'],
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
      },
};
