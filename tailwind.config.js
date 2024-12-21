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
        fontFamily: {
          poppins: "Poppins, sans-serif",
        },
        extend: {
          colors: {
            'primary': '#FD915A',
            'secondary': '#F7F1F0',
            'black': '#121212',
            'grey': '#ADAAB4',
            'lilac': '#E6D3F8',
          },
        },
      },
    plugins: [forms],
};





  