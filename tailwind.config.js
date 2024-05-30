/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily:{
            'figtree':['frigtree','open sans'],
            'roboto':['Roboto','open sans'],
        },
        colors:{
            'color-f5':"#022F50",
        }
    },
  },
  plugins: [],
}

