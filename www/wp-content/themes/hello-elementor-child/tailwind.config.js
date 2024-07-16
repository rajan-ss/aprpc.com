/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ['./**/*.php'],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      },
    },
    extend: {
      colors: {
        primary: {
          DEFAULT: '#6341A5',
          100: '#6542A2',
          200: '#32006405',
        },
        danger: {
          DEFAULT: '#dc3545',
        },
        'ss-gray': {
          DEFAULT: '#dddddd',
          900: '#1d1d1d',
        },
        'ss-lightgray': {
          DEFAULT: '#F6F4FA',
          100: '#C1C6DB80',
        },
        'ss-dark': {
          DEFAULT: '#11161E',
          100: '#141414',
          200: '#00060F',
        },
        'ss-yellow': {
          DEFAULT: '#FFC107',
        },
      },
      screens: {
        '2xl': '1312px',
      },
      fontFamily: {
        lead: ['Dosis', ...defaultTheme.fontFamily.sans],
        base: ['Open Sans', ...defaultTheme.fontFamily.sans],
        icomoon: ['icomoon'],
      },
      backgroundImage: {
        'gradient-primary': 'linear-gradient(to right, rgba(50,32,83,1) 0%,rgba(51,34,86,1) 20%,rgba(95,62,159,1) 100%)',
      },
    },
  },
  plugins: [],
}
