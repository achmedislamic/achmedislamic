const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    presets: [require("./vendor/wireui/wireui/tailwind.config.js")],
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/wireui/wireui/resources/**/*.blade.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/View/**/*.php",
    ],

    theme: {
        container: {
            center: true,
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                "nama-white": "url('/img/nama-white.png')",
                nama: "url('/img/nama.png')",
                "ilustrasi-dark": "url('/img/ilustrasi-tall-stack-dark.png')",
                ilustrasi: "url('/img/ilustrasi-tall-stack.png')",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
