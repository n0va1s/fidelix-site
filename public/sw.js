//https://shareurcodes.com/blog/how-to-easily-convert-your-existing-laravel-application-into-a-progressive-web-app-by-using-workbox
importScripts('https://storage.googleapis.com/workbox-cdn/releases/5.1.2/workbox-sw.js');

if (workbox) {
    console.log('Workbox is loaded');
    workbox.core.setCacheNameDetails({
        prefix: 'fidelix'
    });

    // 1. css
    workbox.routing.registerRoute(
        new RegExp('\.css$'),
        new workbox.strategies.CacheFirst({
            cacheName: 'fidelix-stylesheets',
            plugins: [
                new workbox.expiration.ExpirationPlugin({
                    maxAgeSeconds: 60 * 60 * 24 * 7, // cache for one week
                    maxEntries: 20, // only cache 20 request
                    purgeOnQuotaError: true
                })
            ]
        })
    );

    // 2. images
    workbox.routing.registerRoute(
        new RegExp('\.(png|svg|jpg|jpeg)$'),
        new workbox.strategies.CacheFirst({
            cacheName: 'fidelix-images',
            plugins: [
                new workbox.expiration.ExpirationPlugin({
                    maxAgeSeconds: 60 * 60 * 24 * 7,
                    maxEntries: 50,
                    purgeOnQuotaError: true
                })
            ]
        })
    );

    //Giving Offline Support with a fallback page
    const networkFirstHandler = new workbox.strategies.NetworkFirst({
        cacheName: 'fidelix-dynamic',
        plugins: [
            new workbox.expiration.ExpirationPlugin({
                maxEntries: 10
            }),
            new workbox.cacheableResponse.CacheableResponsePlugin({
                statuses: [200]
            })
        ]
    });

    const FALLBACK_URL = workbox.precaching.getCacheKeyForURL('/offline.html');
    const matcher = ({
        event
    }) => event.request.mode === 'navigate';
    const handler = args =>
        networkFirstHandler
        .handle(args)
        .then(response => response || caches.match(FALLBACK_URL))
        .catch(() => caches.match(FALLBACK_URL));

    workbox.routing.registerRoute(matcher, handler);

    workbox.precaching.precacheAndRoute([{"revision":"d41d8cd98f00b204e9800998ecf8427e","url":"css/app.css"},{"revision":"3846d12e77681df29f50df4f3560ea87","url":"css/bootstrap.min.css"},{"revision":"345dd3c1d88e9a7aa7d9766cf07bde2d","url":"css/materialdesignicons.min.css"},{"revision":"0c3476de5518de84e454d0ff754199c1","url":"css/owl.carousel.min.css"},{"revision":"594b81805a98b267e47c70a8fad30d9f","url":"css/owl.theme.default.min.css"},{"revision":"0ec71ec4848ce9ba12864b540e2839f8","url":"css/pe-icon-7.css"},{"revision":"1f73dd88b53ab8c8799507ccd36f2f6d","url":"css/style-dark.css"},{"revision":"3f789118f150c0e4719a0bfcdc98018e","url":"css/style-dark.min.css"},{"revision":"ad23d1af1c538639ae716fa670916899","url":"css/style.css"},{"revision":"0436ca2ac8cbad7e52c99ff0d38f3447","url":"css/style.min.css"},{"revision":"d41d8cd98f00b204e9800998ecf8427e","url":"favicon.ico"},{"revision":"0ec71ec4848ce9ba12864b540e2839f8","url":"fonts/pe-icon-7.css"},{"revision":"e20a5dd7b05698f4728b670befeac235","url":"images/features/acredite.jpg"},{"revision":"215cb8ce5b147c151bf5c99f4846a51f","url":"images/features/anuncie_aqui.png"},{"revision":"d51cd7e6889a94989e5e2834a7e4b34b","url":"images/features/cartaofidelidade.jpeg"},{"revision":"9d007b83f3b6168dc5a09812f20278a1","url":"images/features/chiquinho_cabelo.jpg"},{"revision":"78ff60b609144ce8238e19053621bb0d","url":"images/features/chiquinho.png"},{"revision":"bc74e6dd83e42555d785e771d3590712","url":"images/features/ImagemCelular1.png"},{"revision":"758e885c6dc149eccbda1886004df662","url":"images/features/img1.png"},{"revision":"8d0187a58594c0bbf30efdd2bb3c3eff","url":"images/features/vitrine.png"},{"revision":"bc74e6dd83e42555d785e771d3590712","url":"images/features/voucher.png"},{"revision":"b3915ddbfbcdbac2294058b75ff695d8","url":"images/fidelix.ico"},{"revision":"85cba2a105fc17c095696537589dc841","url":"images/hero-1-img1.png"},{"revision":"d5e7c6f1108daca8eb7b3ed7ed6524ca","url":"images/hero-3-bg.png"},{"revision":"3e25722e1f3d45464ca5eba361b87a77","url":"images/hero-3-img2.png"},{"revision":"c4ece6e050e18d971f855b5cf4ef363d","url":"images/hero-4-bg.png"},{"revision":"e68545b3f8069743545441974900f4e0","url":"images/hero-5-img.png"},{"revision":"cbf1c7788423669cc5a0871460b18856","url":"images/icon/1.png"},{"revision":"12f2ef802b4a897df186b5200d1ee67d","url":"images/icon/2.png"},{"revision":"9379dae0fb3752521a5c9a15ee1e5224","url":"images/icon/3.png"},{"revision":"f944900ed50259c1e50ca885559ee48b","url":"images/icon/app-icon-144-144.png"},{"revision":"820c67f6d95879858ef9051e0c6a334d","url":"images/icon/app-icon-152-152.png"},{"revision":"354a90df6f50c43b63c2678e3cb972df","url":"images/icon/app-icon-192-192.png"},{"revision":"99de34a0a4e494214b14874f11e376eb","url":"images/icon/app-icon-256-256.png"},{"revision":"fc7850a47a87588261a6236b9355531b","url":"images/icon/app-icon-384-384.png"},{"revision":"ca3b98ff35592be4871965d8861de614","url":"images/icon/app-icon-48-48.png"},{"revision":"9ab1ab8bec3b6f41c79691390f1ec1e0","url":"images/icon/app-icon-512-512.png"},{"revision":"9c7f10c0d58d163bc586e82b4d49e70e","url":"images/icon/app-icon-96-96.png"},{"revision":"b165cb648ab16f4a44b2d4252078bc4d","url":"images/icon/WhatsApp.png"},{"revision":"2cfd0f142e94bf9708e8f1876714ed9b","url":"images/logo-dark1.png"},{"revision":"b762d8f9f446949b4848a4e0142ca90b","url":"images/logo-dark2.png"},{"revision":"ef885db14e2acfd1355775ddaa2f861b","url":"images/logo-light.png"},{"revision":"fccfd701cbb7ee7888573b55978c2719","url":"images/logodark2-light.png"},{"revision":"ac0cd7e4081c700c722bd943b08423fe","url":"images/Metodologia.png"},{"revision":"e6a90ad616c9795b7890d391bc9fa1b3","url":"js/app.js"},{"revision":"a5334e475209f965b4862f3bedf32618","url":"js/bootstrap.bundle.min.js"},{"revision":"5d65f642e9f0040e8be16d61b83ee2fe","url":"js/counter.int.js"},{"revision":"e2d41e5c8fed838d9014fea53d45ce75","url":"js/jquery.easing.min.js"},{"revision":"220afd743d9e9643852e31a135a9f3ae","url":"js/jquery.min.js"},{"revision":"f416f9031fef25ae25ba9756e3eb6978","url":"js/owl.carousel.min.js"},{"revision":"b639ce20896b2515f7ac02330bbaa878","url":"js/particles.app.js"},{"revision":"fa32e217efc54121c2642ba46ba82e6d","url":"js/particles.js"},{"revision":"6859e339eb414513c601a6b765fd8700","url":"js/scrollspy.min.js"},{"revision":"a69bb802cef191b048ae65db1eebb4bd","url":"manifest.json"},{"revision":"207fd484b7c2ceeff7800b8c8a11b3b6","url":"mix-manifest.json"},{"revision":"8ef0fb032ecd3b174231753930ee20fb","url":"offline.html"}]);

    // add offline analytics
    workbox.googleAnalytics.initialize();

    /* Install a new service worker and have it update
    and control a web page as soon as possible
    */

    workbox.core.skipWaiting();
    workbox.core.clientsClaim();

} else {
    console.log('Oops! Workbox didnt load');
}
