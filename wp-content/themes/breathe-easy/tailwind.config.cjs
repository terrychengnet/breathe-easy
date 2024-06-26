// https://tailwindcss.com/docs/configuration
module.exports = {
  content: [
    './index.php', 
    './app/**/*.php', 
    './resources/**/*.{php,vue,js}',
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        // 'blue-main':    '#154487',
        'blue-main':    '#4db2ec',
        'blue-second':  '#1481c3',
        'blue-light':   '#59bcee',
        'blue-solid':   '#154487',
        'blue-cta':     '#00a2ff',
        'white':        '#ffffff',
        'black':        '#000000',
        'grey':         '#d9d9d9',
        'grey-dark':    '#212121',
      },
      container: {
        center: true,
        padding: '1rem',
        // padding: {
        //   DEFAULT: '1rem',
        //   sm: '2rem',
        //   lg: '4rem',
        //   xl: '5rem',
        //   '2xl': '6rem',
        // },
      },
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
        'sans': ['Helvetica']
      },
    },
  },
  plugins: [
    // require("tw-elements/dist/plugin.cjs")
  ],
};
