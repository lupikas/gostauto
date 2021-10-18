const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            roboto: ['Roboto', ...defaultTheme.fontFamily.serif],
        },
        screens: {
            'xxl': '1640px',
        },
        spacing: {
            '14px': '14px',
            '15px': '15px',
            '20px': '20px',
            '24px': '24px',
            '25px': '25px',
            '30px': '30px',
            '35px': '35px',
            '36px': '36px',
            '40px': '40px',
            '45px': '45px',
            '50px': '50px',
            '55px': '55px',
            '60px': '60px',
            '70px': '70px',
            '90px': '90px',
            '100px': '100px',
            '105px': '105px',
            '117px': '117px',
            '140px': '140px',
            '185px': '185px',
            '200px': '200px',
        },
        colors: {
            gray: {
                450: '#707070',
            },
            blue: {
                850: '#0b4784',
            },
            green: {
                1: '#3ac451',
            },
        },
        fontSize: {
            '10px': '0.625rem',
            '12px': '0.75rem',
            '14px': '0.875rem',
            '15px': '0.937rem',
            '17px': '1.062rem',
            '18px': '1.125rem',
            '20px': '1.25rem',
            '21px': '1.312rem',
            '22px': '1.375rem',
            '23px': '1.437rem',
            '24px': '1.5rem',
            '25px': '1.562rem',
            '30px': '1.875rem',
            '35px': '2.187rem',
            '45px': '2.812rem',
            '50px': '3.125rem',
            '55px': '3.437rem',
            '60px': '3.75rem',
        },
        width: {
            '260px': '260px',
            '274px': '274px',
            '400px': '400px',
            '530px': '530px',
            '700px': '700px',
            '900px': '900px',
        },
        maxWidth: {
            '100px': '100px',
            '150px': '150px',
            '500px': '500px',
            '530px': '530px',
            '536px': '536px',
            '550px': '550px',
            '812px': '812px',
            '1640px': '1640px',
        },
        height: {
            '140px': '140px',
            '195px': '195px',
            '210px': '210px',
            '260px': '260px',
            '328px': '328px',
            '350px': '350px',
            '400px': '400px',
            '436px': '436px',
            '674px': '674px',
            '1000px': '1000px',
        },
        minHeight: {
            '350px': '350px',
            '490px': '490px',
        },
        maxHeight: {
            '680px': '680px',
            '925px': '925px',
        },
        borderRadius: {
            '15px': '15px',
            '20px': '20px',
            '30px': '30px',
        },
        borderWidth: {
            '3px': '3px',
        },
        lineHeight: {
            'xtight': '1.1'
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/typography'),
      require('@tailwindcss/forms'),
  ],
}
