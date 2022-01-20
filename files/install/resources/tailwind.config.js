module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './resources/**/*.antlers.html',
            './resources/**/*.blade.php',
            './resources/**/*.vue',
            './content/**/*.md',
            './resources/css/dontpurge.txt'
        ]
    },
    important: true,
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        }
    }
}
