module.exports = {
  content: [
    "./*.html",
    "./*.php",
    "./template-parts/*.php",
    "./template-parts/blocks/*.php"
  ],
  theme: {
    extend: {
      colors: {
        'a-tan': '#EAD7BA',
        'a-tan-light': '#F4EADB',
        'blue': {
          'DEFAULT':'#272D40',
        }
      },
  },
},
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}
