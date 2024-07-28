/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#8D493A',
        secondary: '#D0B8A8',
        tertiary: '#DFD3C3',
        background: '#F8EDE3',
      },
    },
  },
  plugins: [],
}
