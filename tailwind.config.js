/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*/.js"
    ],
    theme: {
        extend: {
          backgroundColor: {
            'custom-gradient-keluar': '#363045, #463F57, #5B536F',
            'custom-gradient-pinjam': '#B2836B, #9C7260, #61453E',
            'custom-gradient-inv': '#598072, #3F655C, #193E3E',
          },
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
  }
