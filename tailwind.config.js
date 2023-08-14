/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        colors: {
          dasarataBlue: '#0B4B93',
          dasarataPastel: '#049BBE',
          dasarataHover: '#056299',
          dasarataSidebar: '#F6F7FB',
          dasarataDarkBlue : '#072D58',
          dasarataDarkBlue2 : '#041E3B',
        }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }

