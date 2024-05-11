import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: [

                // Resources paths
                'resources/css/app.css', 
                'resources/sass/app.scss', 
                'resources/js/app.js',
               
                // Resources assets js file paths
                'resources/assets/js/401-error',
                'resources/assets/js/about',
                'resources/assets/js/addproduct',
                'resources/assets/js/apexchart',
                'resources/assets/js/blog-edit',
                'resources/assets/js/blog',
                'resources/assets/js/canada',
                'resources/assets/js/cart',
                'resources/assets/js/chartjs-charts',
                'resources/assets/js/chat',
                'resources/assets/js/checkout',
                'resources/assets/js/choices',
                'resources/assets/js/colorpicker',
                'resources/assets/js/contacts',
                'resources/assets/js/datatable',
                'resources/assets/js/defaultmenu',
                'resources/assets/js/draggable',
                'resources/assets/js/echarts',
                'resources/assets/js/editdata',
                'resources/assets/js/editproduct',
                'resources/assets/js/file-details',
                'resources/assets/js/filemanager',
                'resources/assets/js/fileupload',
                'resources/assets/js/flatpickr',
                'resources/assets/js/form-layout',
                'resources/assets/js/form-validation',
                'resources/assets/js/fullcalendar',
                'resources/assets/js/gallery',
                'resources/assets/js/google-maps',
                'resources/assets/js/index',
                'resources/assets/js/index-2',
                'resources/assets/js/index-3',
                'resources/assets/js/index-4',
                'resources/assets/js/index-5',
                'resources/assets/js/index-6',
                'resources/assets/js/index-7',
                'resources/assets/js/index-8',
                'resources/assets/js/index-9',
                'resources/assets/js/index-10',
                'resources/assets/js/index-11',
                'resources/assets/js/index-12',
                'resources/assets/js/invoice',
                'resources/assets/js/jsvectormap',
                'resources/assets/js/landing',
                'resources/assets/js/leaflet',
                'resources/assets/js/mail-inbox',
                'resources/assets/js/mail-settings',
                'resources/assets/js/notifications',
                'resources/assets/js/order-details',
                'resources/assets/js/product-list',
                'resources/assets/js/product',
                'resources/assets/js/profile-settings',
                'resources/assets/js/profile',
                'resources/assets/js/quill',
                'resources/assets/js/rangeslider',
                'resources/assets/js/rating',
                'resources/assets/js/reviews',
                'resources/assets/js/russia',
                'resources/assets/js/spain',
                'resources/assets/js/swetalert',
                'resources/assets/js/swiper',
                'resources/assets/js/tasks',
                'resources/assets/js/team',
                'resources/assets/js/todo',
                'resources/assets/js/tom-select',
                'resources/assets/js/treeview',
                'resources/assets/js/us-merc-en',
                'resources/assets/js/widgets',
                'resources/assets/js/wishlist',
                'resources/assets/js/switch',
                'resources/assets/js/custom-pages',

            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
              {
                src: (['resources/assets/img/', 'resources/assets/libs/', 'resources/assets/iconfonts/', 'resources/assets/js/apexcharts-stock-prices.js', 
                'resources/assets/js/dataseries.js', 'resources/assets/js/two-step-verification.js', 'resources/assets/js/main.js', 'resources/assets/js/sticky.js',]),
                dest: 'assets/'
              }
            ]
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    build: {
        chunkSizeWarningLimit: 1600,
    },
});

