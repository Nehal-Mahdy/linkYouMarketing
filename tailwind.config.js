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
        // Primary brand colors - Professional education blue palette
        primary: {
          50: '#eff6ff',
          100: '#dbeafe', 
          200: '#bfdbfe',
          300: '#93c5fd',
          400: '#60a5fa',
          500: '#1e40af', // Main primary color - Professional education blue
          600: '#1d4ed8',
          700: '#1e3a8a',
          800: '#1e293b',
          900: '#0f172a',
          DEFAULT: '#1e40af'
        },
        // Secondary colors - Warm accent for trust and approachability
        secondary: {
          50: '#fef7f0',
          100: '#feecdc',
          200: '#fed4b9',
          300: '#fdba85',
          400: '#fb9550',
          500: '#f97316', // Main secondary color - Professional orange
          600: '#ea580c',
          700: '#c2410c',
          800: '#9a3412',
          900: '#7c2d12',
          DEFAULT: '#f97316'
        },
        // Success colors for positive actions
        success: {
          50: '#f0fdf4',
          100: '#dcfce7',
          200: '#bbf7d0',
          300: '#86efac',
          400: '#4ade80',
          500: '#22c55e', // Success green
          600: '#16a34a',
          700: '#15803d',
          800: '#166534',
          900: '#14532d',
          DEFAULT: '#22c55e'
        },
        // Neutral grays for text and backgrounds
        neutral: {
          50: '#fafafa',
          100: '#f5f5f5',
          200: '#e5e5e5',
          300: '#d4d4d4',
          400: '#a3a3a3',
          500: '#737373',
          600: '#525252',
          700: '#404040',
          800: '#262626',
          900: '#171717',
        },
        // Button backgrounds
        bgBtn: {
          primary: '#1e40af',
          secondary: '#f97316',
          success: '#22c55e',
          dark: '#1f2937',
          light: '#ffffff',
        },
        // Educational theme specific colors
        education: {
          blue: '#1e40af',
          orange: '#f97316',
          green: '#22c55e',
          purple: '#7c3aed',
          teal: '#0d9488',
        }
      },
      fontFamily: {
        // Primary font for headings and important text
        'heading': ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
        // Body text font - excellent readability
        'body': ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
        // Alternative elegant font for special sections
        'display': ['Poppins', 'Inter', 'system-ui', 'sans-serif'],
        // Default sans-serif
        'sans': ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
        // Monospace for code or technical content
        'mono': ['JetBrains Mono', 'Fira Code', 'Consolas', 'Monaco', 'Courier New', 'monospace'],
      },
      // Add custom animations for our services section
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'float-slow': 'float 8s ease-in-out infinite',
        'gradient': 'gradient 8s ease infinite',
        'blob': 'blob 7s infinite',
        'fade-in': 'fadeIn 0.6s ease-out',
        'slide-up': 'slideUp 0.8s ease-out',
        'bounce-gentle': 'bounceGentle 2s ease-in-out infinite',
        'pulse-slow': 'pulse 3s ease-in-out infinite',
        'immigration-float': 'immigrationFloat 10s ease-in-out infinite',
        'glow': 'glow 2s ease-in-out infinite alternate',
      },
      // Custom spacing for consistent layouts
      spacing: {
        '18': '4.5rem',
        '88': '22rem',
        '128': '32rem',
        '144': '36rem',
      },
      // Custom border radius for modern look
      borderRadius: {
        'xl': '1rem',
        '2xl': '1.5rem',
        '3xl': '2rem',
      },
      // Custom shadows for depth
      boxShadow: {
        'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
        'medium': '0 4px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        'strong': '0 10px 40px -10px rgba(0, 0, 0, 0.15), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        'colored': '0 10px 40px -10px rgba(30, 64, 175, 0.15)',
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
        fadeIn: {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        slideUp: {
          '0%': { opacity: '0', transform: 'translateY(40px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        bounceGentle: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-10px)' },
        },
        immigrationFloat: {
          '0%, 100%': { transform: 'translateY(0px) scale(1)' },
          '25%': { transform: 'translateY(-15px) scale(1.02)' },
          '50%': { transform: 'translateY(-30px) scale(1.05)' },
          '75%': { transform: 'translateY(-15px) scale(1.02)' },
        },
        glow: {
          '0%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.2)' },
          '100%': { boxShadow: '0 0 30px rgba(59, 130, 246, 0.4)' },
        },
      },
      
    },
  },
  plugins: [],
};
