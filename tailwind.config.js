import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/auth/*.blade.php",
        "./resources/views/components/*.blade.php",
        "./resources/views/errors/*.blade.php",
        "./resources/views/layouts/*.blade.php",
        "./resources/views/profile/*.blade.php",
        "./resources/views/profile/partials/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                "custom-blue": "#0075FF",
                "custom-white": "#EFEFEF",
                "custom-whitegrey": "#E3E3E3",
                "custom-lightergrey": "#999999",
                "custom-lightgrey": "#666666",
                "custom-grey": "#2E2E2E",
                "custom-black": "#111111",
            },
            fontFamily: {
                body: ["Archivo"],
            },
            spacing: {
                "custom-600px": "37.5rem",
            },
            boxShadow: {
                custom1: "2px 2px 6px rgba(0, 0, 0, 0.08)",
                custom2: "2px 2px 6px rgba(0, 0, 0, 0.3)",
            },
            borderWidth: {
                3: "3px",
            },
            borderRadius: {
                "4xl": "32px",
            },
            backgroundImage: {
                gradient1: "url('/assets/gradient1.png')",
            },
        },
    },

    plugins: [forms],
};
