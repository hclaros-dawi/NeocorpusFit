import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        host: "0.0.0.0",
        port: 5173,
        hmr: {
            host: "192.168.1.18",
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/dropdown.js",
                "resources/js/dropdown-menu.js",
                "resources/js/proteina.js",
                "resources/js/snackbar.js",
                "resources/js/creatina.js",
                "resources/js/grasaCorp.js",
                "resources/js/harrisB.js",
                "resources/js/imc.js",
                "resources/js/loadFilter.js",
                "resources/js/select.js",
            ],
            refresh: true,
        }),
    ],
});
