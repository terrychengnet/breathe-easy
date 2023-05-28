// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'blue-main':    '#154487',
        'blue-second':  '#1481c3',
        'blue-light':   '#59bcee',
        'white':        '#ffffff',
        'black':        '#000000',
        'grey':         '#d9d9d9',
        'grey-dark':    '#212121',
      },
      container: {
        center: true,
        // padding: {
        //   DEFAULT: '1rem',
        //   sm: '2rem',
        //   lg: '4rem',
        //   xl: '5rem',
        //   '2xl': '6rem',
        // },
      },
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif']
      },
    },
  },
  plugins: [],
};
