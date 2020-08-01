module.exports = {
    important: true,
    purge: [
        './resources/**/*.php',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            screens: {
                light: { raw: "(prefers-color-scheme: light)" },
                dark: { raw: "(prefers-color-scheme: dark)" }
            },
            colors: {
                'base-brand': '#04724d',
                'base-bg': '#E5E5E5',
                'black': '#0A0F0D',
            }
        },
        borderRadius: {
            'none': '0',
            'sm': '0.125rem',
            default: '0.25rem',
            'md': '0.375rem',
            'lg': '0.5rem',
            'full': '9999px',
            'large': '32px',
        }
    },
    variants: {
        borderRadius: ['responsive', 'hover', 'focus'],
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/custom-forms'),
    ],
}
