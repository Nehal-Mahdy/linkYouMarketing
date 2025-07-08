/**
 * @type {import('tailwindcss/tailwind-config').TailwindConfig }
 */
module.exports = {
  future: {
    hoverOnlyWhenSupported: true,
  },
  content: [
    // WordPress theme files
    './*.php',
    './template-parts/**/*.php',
    './includes/**/*.php',
    './woocommerce/**/*.php',
    
    // JavaScript 
    './src/**/*.{js}',
    './assets/**/*.{js}',
    
    // HTML files (if any)
    './src/**/*.html',
    
    // Exclude node_modules and other unnecessary directories
    '!./node_modules/**/*',
    '!./vendor/**/*',
    '!./.git/**/*',
  ],
  theme: {
    extend: {
      colors: {
        primary: "#0063a4",
        secondary: "#CDD9EA",
        bgBtn: "#3773C9",
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
      // Add custom animations for our services section
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'float-slow': 'float 8s ease-in-out infinite',
        'gradient': 'gradient 8s ease infinite',
        'blob': 'blob 7s infinite',
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-20px)' },
        },
        gradient: {
          '0%, 100%': {
            'background-size': '200% 200%',
            'background-position': 'left center'
          },
          '50%': {
            'background-size': '200% 200%',
            'background-position': 'right center'
          },
        },
        blob: {
          '0%': {
            transform: 'translate(0px, 0px) scale(1)',
          },
          '33%': {
            transform: 'translate(30px, -50px) scale(1.1)',
          },
          '66%': {
            transform: 'translate(-20px, 20px) scale(0.9)',
          },
          '100%': {
            transform: 'translate(0px, 0px) scale(1)',
          },
        },
      },
      
    },
  },
  plugins: [],
};
