module.exports = {
    "globDirectory": "public/",
    "globPatterns": [
        "**/*.{css,ico,png,jpg,jpeg,js,json,html}",
        "offline.html"
    ],
    "swSrc": "public/sw-base.js",
    "swDest": "public/sw.js",
    "globIgnores": [
        '../workbox-cli-config.js'
    ]
};
