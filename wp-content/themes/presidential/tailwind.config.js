/** @type {import('tailwindcss').Config} */

const customTheme = require('./theme');

module.exports = {
  content: require('fast-glob').sync([
    './**/*.php'
  ]),
  theme: {
    extend: {
      colors: ({ color }) => ({
        ...customTheme.colors,
      }),
      fontFamily: {
        decimal: 'Decimal',
        mercury: 'Mercury',
      },
      fontSize: {
        ...customTheme.fontSize,
      },
      borderRadius: {
        ...customTheme.borderRadius,
      },
      breakPoints: {
        ...customTheme.breakPoints,
      }
    },
  },
  plugins: [],
}
