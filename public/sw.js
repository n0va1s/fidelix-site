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

    workbox.precaching.precacheAndRoute([{"revision":"d41d8cd98f00b204e9800998ecf8427e","url":"css/app.css"},{"revision":"3846d12e77681df29f50df4f3560ea87","url":"css/bootstrap.min.css"},{"revision":"345dd3c1d88e9a7aa7d9766cf07bde2d","url":"css/materialdesignicons.min.css"},{"revision":"0c3476de5518de84e454d0ff754199c1","url":"css/owl.carousel.min.css"},{"revision":"594b81805a98b267e47c70a8fad30d9f","url":"css/owl.theme.default.min.css"},{"revision":"0ec71ec4848ce9ba12864b540e2839f8","url":"css/pe-icon-7.css"},{"revision":"1f73dd88b53ab8c8799507ccd36f2f6d","url":"css/style-dark.css"},{"revision":"3f789118f150c0e4719a0bfcdc98018e","url":"css/style-dark.min.css"},{"revision":"ad23d1af1c538639ae716fa670916899","url":"css/style.css"},{"revision":"0436ca2ac8cbad7e52c99ff0d38f3447","url":"css/style.min.css"},{"revision":"d41d8cd98f00b204e9800998ecf8427e","url":"favicon.ico"},{"revision":"0ec71ec4848ce9ba12864b540e2839f8","url":"fonts/pe-icon-7.css"},{"revision":"18894109b029bf4642d21545e8650784","url":"images/counter-bg-1.jpg"},{"revision":"4435a20c42f09c00de841fbe132b20f4","url":"images/favicon.ico"},{"revision":"b044f583d4bc2f453034b9cfa41e4475","url":"images/Favicon1.png"},{"revision":"0fd51e9d8b36f308afba4db85f447f3b","url":"images/Favicon1T.png"},{"revision":"c38eab84898c9c3e04a250268ebcb3b5","url":"images/Favicon1T2.png"},{"revision":"b3915ddbfbcdbac2294058b75ff695d8","url":"images/favicon2.ico"},{"revision":"d51cd7e6889a94989e5e2834a7e4b34b","url":"images/features/cartaofidelidade.jpeg"},{"revision":"9d007b83f3b6168dc5a09812f20278a1","url":"images/features/chiquinho_cabelo.jpg"},{"revision":"78ff60b609144ce8238e19053621bb0d","url":"images/features/chiquinho.png"},{"revision":"6dee1910ed0db4d0bdbf9362363bf20a","url":"images/features/Doubt.png"},{"revision":"3fe40a2fe3c2856e678eb842900ab89a","url":"images/features/features-bg.png"},{"revision":"bc74e6dd83e42555d785e771d3590712","url":"images/features/ImagemCelular1.png"},{"revision":"758e885c6dc149eccbda1886004df662","url":"images/features/img-1.png"},{"revision":"84a187c8aab90ee53acec38d3da03592","url":"images/features/img-2.png"},{"revision":"5f04e43ab26371c95479b92c35f1b032","url":"images/features/img-3.png"},{"revision":"758e885c6dc149eccbda1886004df662","url":"images/features/img1.png"},{"revision":"f78ad5165628b828ed356df14e62beaa","url":"images/features/SemFundo118x110.png"},{"revision":"8d0187a58594c0bbf30efdd2bb3c3eff","url":"images/features/vitrine.png"},{"revision":"bc74e6dd83e42555d785e771d3590712","url":"images/features/voucher.png"},{"revision":"bc633477656083a27845596a6a49a386","url":"images/hero-1-img.png"},{"revision":"85cba2a105fc17c095696537589dc841","url":"images/hero-1-img1.png"},{"revision":"2ac4c7c19217937ff14e2d4d97ccdcd5","url":"images/hero-2-img.png"},{"revision":"e59598f8ba31a9e5422d2c6fab6a70e3","url":"images/hero-2-shape.png"},{"revision":"d5e7c6f1108daca8eb7b3ed7ed6524ca","url":"images/hero-3-bg.png"},{"revision":"80001e158fc93c167939321866a2cbcb","url":"images/hero-3-img.png"},{"revision":"3e25722e1f3d45464ca5eba361b87a77","url":"images/hero-3-img2.png"},{"revision":"c4ece6e050e18d971f855b5cf4ef363d","url":"images/hero-4-bg.png"},{"revision":"e68545b3f8069743545441974900f4e0","url":"images/hero-5-img.png"},{"revision":"c2f8b033313f3d1823eebe50143f9457","url":"images/hero-6-bg.jpg"},{"revision":"cbf1c7788423669cc5a0871460b18856","url":"images/icon/1.png"},{"revision":"12f2ef802b4a897df186b5200d1ee67d","url":"images/icon/2.png"},{"revision":"9379dae0fb3752521a5c9a15ee1e5224","url":"images/icon/3.png"},{"revision":"25f696cea1aa4e4b1caf3da5c39c388f","url":"images/icon/icon-128.png"},{"revision":"d1b67926b2e28f2bf7479d8be0c430fe","url":"images/icon/icon-144.png"},{"revision":"8f4c9d0f7ba248fe33253286b4aec25e","url":"images/icon/icon-152.png"},{"revision":"581a62987efb6b6ec95f964387f9328c","url":"images/icon/icon-192.png"},{"revision":"486f33defe586dca1ee5633766c0ded6","url":"images/icon/icon-256.png"},{"revision":"3386b94b95b421b8766d0926f4279324","url":"images/icon/icon-512.png"},{"revision":"b165cb648ab16f4a44b2d4252078bc4d","url":"images/icon/WhatsApp.png"},{"revision":"7d1e148d7b585f5bafaf84ad85a16639","url":"images/logo-dark.png"},{"revision":"2cfd0f142e94bf9708e8f1876714ed9b","url":"images/logo-dark1.png"},{"revision":"b762d8f9f446949b4848a4e0142ca90b","url":"images/logo-dark2.png"},{"revision":"ef885db14e2acfd1355775ddaa2f861b","url":"images/logo-light.png"},{"revision":"fccfd701cbb7ee7888573b55978c2719","url":"images/logodark2-light.png"},{"revision":"ac0cd7e4081c700c722bd943b08423fe","url":"images/Metodologia.png"},{"revision":"24f593d7275419a2fd5537f90480be9a","url":"images/user/img-1.jpg"},{"revision":"199db6667f580eb22a3fb7ec24b15b5a","url":"images/user/img-2.jpg"},{"revision":"d40f52344ad67d2ffb1ff453b3168880","url":"images/user/img-3.jpg"},{"revision":"91adc930184528feec74e49c18ee8a25","url":"images/user/img-4.jpg"},{"revision":"17807eff15d8fd4e45b876e9903a5952","url":"images/user/img-5.jpg"},{"revision":"e6a90ad616c9795b7890d391bc9fa1b3","url":"js/app.js"},{"revision":"a5334e475209f965b4862f3bedf32618","url":"js/bootstrap.bundle.min.js"},{"revision":"5d65f642e9f0040e8be16d61b83ee2fe","url":"js/counter.int.js"},{"revision":"e2d41e5c8fed838d9014fea53d45ce75","url":"js/jquery.easing.min.js"},{"revision":"220afd743d9e9643852e31a135a9f3ae","url":"js/jquery.min.js"},{"revision":"f416f9031fef25ae25ba9756e3eb6978","url":"js/owl.carousel.min.js"},{"revision":"b639ce20896b2515f7ac02330bbaa878","url":"js/particles.app.js"},{"revision":"fa32e217efc54121c2642ba46ba82e6d","url":"js/particles.js"},{"revision":"6859e339eb414513c601a6b765fd8700","url":"js/scrollspy.min.js"},{"revision":"a69bb802cef191b048ae65db1eebb4bd","url":"manifest.json"},{"revision":"207fd484b7c2ceeff7800b8c8a11b3b6","url":"mix-manifest.json"},{"revision":"8ef0fb032ecd3b174231753930ee20fb","url":"offline.html"}]);

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
