const colors = require("tailwindcss");
module.exports = {
    purge: [],
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                principal: {
                    normal: '#43cea2',
                    light: '#81ddb5',
                    dark: '#185447',
                },
                secondaria: {
                    normal: '#185a9d',
                    light: '#739fd7',
                    dark: '#0d2f53',
                },
            },
            fontFamily: {
                'roboto': ['Roboto Condensed', 'sans-serif']
            },
        },
    },
    variants: {
        extend: {
            tableLayout: ['hover', 'focus'],
        },
    },
    plugins: [],
}
