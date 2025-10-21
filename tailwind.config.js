/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './page-template/**/*.php'
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "primary": "#17cf17",
        "background-light": "#f6f8f6",
        "background-dark": "#112111",
        "text-light": "#0e1b0e",
        "text-dark": "#e7f3e7",
        "accent-light": "#4e974e",
        "accent-dark": "#a3d3a3",
        "subtle-light": "#d0e7d0",
        "subtle-dark": "#2a422a"
      },
      fontFamily: {
        "display": ["Newsreader", "serif"],
        "sans": ["Noto Sans", "sans-serif"]
      }
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/container-queries')
  ]
}