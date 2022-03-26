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
        'red': {
          'DEFAULT': '#E00A28'
        },
        'a-tan': '#EAD7BA',
        'a-tan-light': '#F4EADB',
        'blue': {
          'DEFAULT': '#272D40',
          '2': '#434E6E',
          '3': '#1F2433'
        }
      },
  },
},
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}