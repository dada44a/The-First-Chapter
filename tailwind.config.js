/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.php",             // Root index.php
    "./dist/php/**/*.php", 
    "./dist/js/**/*.js",     // All PHP files in dist/php directory
    "./src/**/*.{html,js,php,ts}"] ,
  theme: {
    extend: {
      
    },
  },
  plugins: [],
}

