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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],

    colors: {
        'text': {
          50: '#f1eafb',
          100: '#e3d4f7',
          200: '#c6aaee',
          300: '#aa7fe6',
          400: '#8e55dd',
          500: '#712ad5',
          600: '#5b22aa',
          700: '#441980',
          800: '#2d1155',
          900: '#17082b',
          950: '#0b0415',
        },
        'background': {
          50: '#f1eafa',
          100: '#e3d5f6',
          200: '#c8abed',
          300: '#ac82e3',
          400: '#9058da',
          500: '#752ed1',
          600: '#5d25a7',
          700: '#461c7d',
          800: '#2f1254',
          900: '#17092a',
          950: '#0c0515',
        },
        'primary': {
          50: '#f1eafb',
          100: '#e3d4f7',
          200: '#c6a9ef',
          300: '#aa7ee7',
          400: '#8d54de',
          500: '#7129d6',
          600: '#5a21ab',
          700: '#441881',
          800: '#2d1056',
          900: '#17082b',
          950: '#0b0415',
        },
        'secondary': {
          50: '#f1eafb',
          100: '#e2d4f7',
          200: '#c5a9ef',
          300: '#a87ee7',
          400: '#8b54de',
          500: '#6e29d6',
          600: '#5821ab',
          700: '#421881',
          800: '#2c1056',
          900: '#16082b',
          950: '#0b0415',
        },
        'accent': {
          50: '#f1eafb',
          100: '#e3d4f7',
          200: '#c6a9ef',
          300: '#aa7ee7',
          400: '#8d54de',
          500: '#7129d6',
          600: '#5a21ab',
          700: '#441881',
          800: '#2d1056',
          900: '#17082b',
          950: '#0b0415',
        },
       },
       

fontSize: {
    sm: '0.750rem',
    base: '1rem',
    xl: '1.333rem',
    '2xl': '1.777rem',
    '3xl': '2.369rem',
    '4xl': '3.158rem',
    '5xl': '4.210rem',
  },
  fontFamily: {
    heading: 'Saira',
    body: 'Saira',
  },
  fontWeight: {
    normal: '400',
    bold: '700',
  },



};
