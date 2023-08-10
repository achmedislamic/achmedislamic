import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

export default {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",

        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
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
                "nama-white": "url('../../public/img/nama-white.png')",
                nama: "url('../../public/img/nama.png')",
                "ilustrasi-dark": "url('../../public/img/ilustrasi-tall-stack-dark.png')",
                ilustrasi: "url('../../public/img/ilustrasi-tall-stack.png')",
                "digital-marketing": "url('../../public/img/digitalmarketing.jpg')",
            },
        },
    },

    plugins: [forms],
};
