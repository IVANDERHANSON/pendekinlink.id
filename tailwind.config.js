/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'custom-blue': '#0075FF',
        'custom-whitegrey': '#E3E3E3',
        'custom-lightergrey': '#999999',
        'custom-lightgrey': "#666666",
        'custom-grey': '#2E2E2E',
        'custom-black': '#111111'
      },
      fontFamily: {
        body: ['Archivo']
      },
      spacing: {
        'custom-600px': '37.5rem',
      },
      boxShadow: {
        'custom': '2px 2px 6px rgba(0, 0, 0, 0.16)',
      },
      borderWidth: {
        '3': '3px',
      },
      backgroundImage: {
        'gradient1': "url('/assets/gradient1.png')",
      }
    },
  },
  plugins: [],
}

