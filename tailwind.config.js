const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './node_modules/flowbite/**/*.js',
    './resources/**/*.js',
  ],

  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      backgroundImage: {
        'hero-pattern': "url('images/landingSalad.png')",
      },

      colors: {
        'yellow-rgba-84': 'rgba(255, 222, 108, 0.84)',
        primary: '#FFCE01',
        primarySecondary: '#FFDE6C',
        secondary: '#FFFCF0',
        accent: '#A07C00',
        accentSecondary: '#EDB01C',
        dark: '#282222',
        light: '#fffcf0',
        lightSecondary: '#FFFDF6',
      },
    },
  },

  daisyui: {
    themes: [
      {
        mytheme: {
          primary: '#FF7B54',

          secondary: '#FFB26B',

          accent: '#FFD56B',

          neutral: '#3D4451',

          'base-100': '#FFFFFF',

          info: '#3ABFF8',

          success: '#36D399',

          warning: '#FBBD23',

          error: '#F87272',
        },
      },
    ],
  },
  plugins: [require('@tailwindcss/forms', 'daisyui', 'flowbite')],
};
