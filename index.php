 <?php
echo '
<!doctype html >
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="">

<head>





































    <script type="text/javascript">
        window._currentDevice = \'desktop\';
        window.Parameters = window.Parameters || {
            AjaxContainer: \'div.dmBody\',
            WrappingContainer: \'div.dmOuter\',
            HomeUrl: \'https://bestofferhere.link/ikarialeanbelly\',
            AccountUUID: \'19d0d723242d41c686e32a53450f6733\',
            SystemID: \'US_DIRECT_PRODUCTION\',
            SiteAlias: \'9a89cede\',
            SiteType: atob(\'RFVEQU9ORQ==\'),
            PublicationDate: \'Sat Jun 03 04:57:44 UTC 2023\',
            ExternalUid: null,
            IsSiteMultilingual: false,
            InitialPostAlias: \'\',
            InitialDynamicItem: \'\',
            DynamicPageInfo: {
                isDynamicPage: false,
                base64JsonRowData: \'null\',
            },
            InitialPageAlias: \'home\',
            InitialPageUuid: \'30d53e8d5cfe424e99183f13ad322f1f\',
            InitialEncodedPageAlias: \'aG9tZQ==\',
            CurrentPageUrl: \'\',
            IsCurrentHomePage: true,
            AllowAjax: false,
            AfterAjaxCommand: null,
            HomeLinkText: \'Back To Home\',
            UseGalleryModule: false,
            CurrentThemeName: \'Layout Theme\',
            ThemeVersion: \'9955\',
            DefaultPageAlias: \'\',
            RemoveDID: true,
            WidgetStyleID: null,
            IsHeaderFixed: false,
            IsHeaderSkinny: false,
            IsBfs: true,
            StorePageAlias: \'null\',
            StorePagesUrls: \'e30=\',
            IsNewStore: \'false\',
            StorePath: \'\',
            StoreId: \'null\',
            StoreVersion: 0,
            StoreBaseUrl: \'\',
            StoreCleanUrl: true,
            StoreDisableScrolling: true,
            IsStoreSuspended: false,
            NotificationSubDomain: \'ikarialeanbellyjuice\',
            HasCustomDomain: true,
            showCookieNotification: false,
            cookiesNotificationMarkup: \'null\',
            translatedPageUrl: \'\',
            isFastMigrationSite: false,
            sidebarPosition: \'NA\',
            currentLanguage: \'en\',
            currentLocale: \'en\',
            NavItems: \'{}\',
            errors: {
                general: \'There was an error connecting to the page.<br/> Make sure you are not offline.\',
                password: \'Incorrect name/password combination\',
                tryAgain: \'Try again\'
            },
            NavigationAreaParams: {
                ShowBackToHomeOnInnerPages: true,
                NavbarSize: -1,
                NavbarLiveHomePage: \'https://bestofferhere.link/ikarialeanbelly\',
                BlockContainerSelector: \'.dmBody\',
                NavbarSelector: \'#dmNav:has(a)\',
                SubNavbarSelector: \'#subnav_main\'
            },
            hasCustomCode: true,
            planID: \'7\',
            customTemplateId: \'null\',
            siteTemplateId: \'null\',
            productId: \'DM_DIRECT\',
            disableTracking: false,
            pageType: \'FROM_SCRATCH\',
            isRuntimeServer: true,
            isInEditor: false,
        };

        window.Parameters.LayoutID = {};
        window.Parameters.LayoutID[window._currentDevice] = 6;
        window.Parameters.LayoutVariationID = {};
        window.Parameters.LayoutVariationID[window._currentDevice] = 5;
    </script>

























    <!-- Injecting site-wide to the head -->

    <meta name="google-site-verification" content="TCOTJhp5v-xSDmLdEWnwaam9POPaDM6WxcCz04DCi3s" data-swh-uuid="5bad8c0879b3446eb9c399f7c7e2a6c7" />



    <!-- End Injecting site-wide to the head -->

    <!-- Inject secured cdn script -->


    <!-- ========= Meta Tags ========= -->
    <!-- PWA settings -->
    <script>
        function toHash(str) {
            var hash = 5381,
                i = str.length;
            while (i) {
                hash = hash * 33 ^ str.charCodeAt(--i)
            }
            return hash >>> 0
        }
    </script>
    <script>
        (function(global) {
            //const cacheKey = global.cacheKey;
            const isOffline = \'onLine\' in navigator && navigator.onLine === false;
            const hasServiceWorkerSupport = \'serviceWorker\' in navigator;
            if (isOffline) {
                console.log(\'offline mode\');
            }
            if (!hasServiceWorkerSupport) {
                console.log(\'service worker is not supported\');
            }
            if (hasServiceWorkerSupport && !isOffline) {
                window.addEventListener(\'load\', function() {
                    const serviceWorkerPath = \'/runtime-service-worker.js?v=3\';
                    navigator.serviceWorker
                        .register(serviceWorkerPath, {
                            scope: \'./\'
                        })
                        .then(
                            function(registration) {
                                // Registration was successful
                                console.log(
                                    \'ServiceWorker registration successful with scope: \',
                                    registration.scope
                                );
                            },
                            function(err) {
                                // registration failed :(
                                console.log(\'ServiceWorker registration failed: \', err);
                            }
                        )
                        .catch(function(err) {
                            console.log(err);
                        });
                });

                // helper function to refresh the page
                var refreshPage = (function() {
                    var refreshing;
                    return function() {
                        if (refreshing) return;
                        // prevent multiple refreshes
                        var refreshkey = \'refreshed\' + location.href;
                        var prevRefresh = localStorage.getItem(refreshkey);
                        if (prevRefresh) {
                            localStorage.removeItem(refreshkey);
                            if (Date.now() - prevRefresh < 30000) {
                                return; // dont go into a refresh loop
                            }
                        }
                        refreshing = true;
                        localStorage.setItem(refreshkey, Date.now());
                        console.log(\'refereshing page\');
                        window.location.reload();
                    };
                })();

                function messageServiceWorker(data) {
                    return new Promise(function(resolve, reject) {
                        if (navigator.serviceWorker.controller) {
                            var worker = navigator.serviceWorker.controller;
                            var messageChannel = new MessageChannel();
                            messageChannel.port1.onmessage = replyHandler;
                            worker.postMessage(data, [messageChannel.port2]);

                            function replyHandler(event) {
                                resolve(event.data);
                            }
                        } else {
                            resolve();
                        }
                    });
                }
            }
        })(window);
    </script>
    <!-- Add manifest -->
    <!-- End PWA settings -->


    <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    <meta charset="utf-8">

    <link rel="canonical" href="https://bestofferhere.link/ikarialeanbelly">

    <meta id="view" name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!--Add favorites icons-->

    <link rel="apple-touch-icon" href="https://irp.cdn-website.com/9a89cede/dms3rep/multi/icon.png" />

    <link rel="icon" type="image/x-icon" href="https://irp.cdn-website.com/9a89cede/site_favicon_16_1681203522980.ico" />

    <!-- End favorite icons -->

    <link rel="preconnect" href="https://lirp.cdn-website.com/" crossorigin />



    <!-- render the required CSS and JS in the head section -->
    <script>
        window.SystemID = \'US_DIRECT_PRODUCTION\';

        if (!window.dmAPI) {
            window.dmAPI = {
                registerExternalRuntimeComponent: function() {},
                getCurrentDeviceType: function() {
                    return window._currentDevice;
                }
            };
        }

        if (!window.requestIdleCallback) {
            window.requestIdleCallback = function(fn) {
                setTimeout(fn, 0);
            }
        }
    </script>
    <!-- loadCSS function -->
    <script>
        (function() {
            let cssLinks = {};

            function loadCssLink(link) {
                link.onload = null;
                link.rel = "stylesheet";
                link.type = "text/css";
            }

            function checkCss() {
                if (cssLinks && cssLinks.runtime && cssLinks.global) {
                    loadCssLink(cssLinks.runtime);
                    loadCssLink(cssLinks.global);
                    cssLinks = null;
                }
            }

            function loadCSS(link) {
                try {
                    var urlParams = new URLSearchParams(window.location.search);
                    var noCSS = !!urlParams.get("nocss");
                    var cssTimeout = urlParams.get("cssTimeout") || 0;

                    if (noCSS) {
                        return;
                    }
                    if (link.href.includes("d-css-runtime")) {
                        cssLinks.runtime = link;
                        checkCss();
                    } else if (link.id === "siteGlobalCss") {
                        cssLinks.global = link;
                        checkCss();
                    } else {
                        requestIdleCallback(function() {
                            window.setTimeout(function() {
                                loadCssLink(link);
                            }, parseInt(cssTimeout, 10));
                        });
                    }
                } catch (e) {
                    /* Never fail - this is just a tool for measurements */
                }
            }
            window.loadCSS = window.loadCSS || loadCSS;
        })();
    </script>

    <script data-role="deferred-init" type="text/javascript">
        /* usage: window.getDeferred(<deferred name>).resolve() or window.getDeferred(<deferred name>).promise.then(...)*/
        function Def() {
            this.promise = new Promise((function(a, b) {
                this.resolve = a, this.reject = b
            }).bind(this))
        }
        const defs = {};
        window.getDeferred = function(a) {
            return null == defs[a] && (defs[a] = new Def), defs[a]
        }
        window.waitForDeferred = function(b, a, c) {
            let d = window ? .getDeferred ? .(b);
            d
                ?
                d.promise.then(a) :
                c && ["complete", "interactive"].includes(document.readyState) ?
                setTimeout(a, 1) :
                c ?
                document.addEventListener("DOMContentLoaded", a) :
                console.error(`Deferred  does not exist`);
        };
    </script>
    <style id="forceCssIncludes">
        /* This file is auto-generated from a `scss` file with the same name */

        .videobgwrapper {
            overflow: hidden;
            position: absolute;
            z-index: 0;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            border-radius: inherit
        }

        .videobgframe {
            position: absolute;
            width: 101%;
            height: 100%;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
            object-fit: fill
        }

        #dm video.videobgframe {
            margin: 0
        }

        @media (max-width:767px) {
            .dmRoot .dmPhotoGallery.newPhotoGallery:not(.photo-gallery-done) {
                min-height: 80vh
            }
        }

        @media (min-width:1025px) {
            .dmRoot .dmPhotoGallery.newPhotoGallery:not(.photo-gallery-done) {
                min-height: 45vh
            }
        }

        @media (min-width:768px) and (max-width:1024px) {
            .responsiveTablet .dmPhotoGallery.newPhotoGallery:not(.photo-gallery-done) {
                min-height: 45vh
            }
        }

        #dm [data-show-on-page-only] {
            display: none !important
        }
    </style>
    <style id="cssVariables" type="text/css">
        :root {
            --color_1: rgba(38, 49, 105, 1);
            --color_2: rgba(38, 49, 105, 1);
            --color_3: rgba(255, 255, 255, 1);
            --color_4: rgba(7, 104, 221, 1);
            --color_5: rgba(131, 156, 234, 1);
            --color_6: rgba(227, 238, 237, 1);
            --color_7: rgba(25, 206, 173, 1);
            --color_8: rgba(153, 153, 153, 1);
        }
    </style>


    <style id="hideAnimFix">
        .dmDesktopBody:not(.editGrid) [data-anim-desktop]:not([data-anim-desktop=\'none\']),
        .dmDesktopBody:not(.editGrid) [data-anim-extended] {
            visibility: hidden;
        }

        .dmDesktopBody:not(.editGrid) .dmNewParagraph[data-anim-desktop]:not([data-anim-desktop=\'none\']),
        .dmDesktopBody:not(.editGrid) .dmNewParagraph[data-anim-extended] {
            visibility: hidden !important;
        }
    </style>



    <style id="criticalCss">
        @charset "UTF-8";
        #dm [data-show-on-page-only],
        a.u_1326948130 .iconBg {
            display: none !important
        }

        [dmtemplateid*=amburger] .dmLayoutWrapper,
        body {
            overflow: hidden
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Poppins;
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/poppins/v20/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Poppins;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(data:font/woff2;base64,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) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Poppins;
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/poppins/v20/pxiGyp8kv8JHgFVrJJLucHtA.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(data:font/woff2;base64,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) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(data:font/woff2;base64,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) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Poppins;
            font-style: italic;
            font-weight: 600;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmr19VF9eO.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Poppins;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(data:font/woff2;base64,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) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: \'Work Sans\';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://irp.cdn-website.com/fonts/s/worksans/v18/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format(\'woff2\');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        :root {
            --color_1: rgba(38, 49, 105, 1);
            --color_2: rgba(38, 49, 105, 1);
            --color_3: rgba(255, 255, 255, 1);
            --color_4: rgba(7, 104, 221, 1);
            --color_5: rgba(131, 156, 234, 1);
            --color_6: rgba(227, 238, 237, 1);
            --color_7: rgba(25, 206, 173, 1);
            --color_8: rgba(153, 153, 153, 1)
        }

        .dmInner {
            min-height: 100vh !important;
            position: relative
        }

        @media (hover:none) and (pointer:coarse) {
            #dmRoot #dm .dmOuter :not(.dmInner) {
                background-attachment: scroll !important
            }
        }

        #dm .dmWidget .icon {
            font-size: 26px
        }

        body.dmRoot #dm .dmOuter .dmInner .dmWidget .icon.hasFontIcon {
            height: 26px;
            margin-top: -13px;
            line-height: normal;
            text-align: center;
            background-image: none
        }

        .dmRoot .hasFontIcon {
            background-image: none !important
        }

        .dmPopupMask {
            position: fixed;
            margin: 0;
            display: none;
            width: 10px;
            z-index: 1000000999;
            top: 0;
            left: 0
        }

        #dmRoot .dmPopup,
        .dmPopup,
        .dmPopupClose:before,
        [data-display-type=block] {
            display: block
        }

        .dmPopup {
            padding: 10px;
            text-align: left;
            position: fixed;
            margin: 0 10px;
            top: 10px;
            left: 0;
            width: 93%;
            z-index: 1000009999 !important;
            box-sizing: border-box;
            background: #f5f5f5;
            overflow-y: auto;
            height: 100%
        }

        .dmPopup .dmPopupTitle {
            text-align: left;
            font: 700 19px Helvetica, Arial;
            margin: 20px 20px 35px;
            color: #999
        }

        #dmPopup {
            opacity: 0
        }

        .dmPopupClose,
        .dmPopupClose:before {
            position: absolute;
            visibility: visible
        }

        .dmDesktopBody:not(.editGrid) [data-anim-desktop]:not([data-anim-desktop=none]),
        .dmDesktopBody:not(.editGrid) [data-anim-extended],
        :not(.runtime-module-container) .layout-drawer,
        :not(.runtime-module-container) .layout-drawer-hamburger,
        :not(.runtime-module-container) .layout-drawer-overlay {
            visibility: hidden
        }

        .dmPopupClose {
            border-radius: 25px;
            width: 27px;
            height: 27px;
            z-index: 1;
            background-color: rgba(255, 255, 255, .4);
            top: 12px;
            right: 12px
        }

        .dmPopupClose:before {
            font-size: 20px;
            color: #000;
            top: 3px;
            right: 3px
        }

        body.dmDesktopBody:not(.mac) .data::-webkit-scrollbar {
            width: 5px;
            height: 5px
        }

        body.dmDesktopBody:not(.mac) .data::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, .1)
        }

        body.dmDesktopBody:not(.mac) .data::-webkit-scrollbar-thumb {
            background: #c8c8c8;
            box-shadow: inset 0 1px 2px #454545;
            border-radius: 45px
        }

        .dmRespRow.fullBleedMode>.dmRespColsWrapper {
            width: 100% !important;
            max-width: 100% !important
        }

        .dmRespRow.fullBleedMode {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        #dm .dmRespRow .dmRespColsWrapper {
            display: flex
        }

        .pswp {
            display: none;
            z-index: 9999999999 !important
        }

        #dm .dmInner .dmWidget.align-center,
        .align-center {
            margin-left: auto;
            margin-right: auto
        }

        .text-align-center {
            text-align: center
        }

        body.fix-mobile-scrolling {
            overflow: initial
        }

        #dmRoot {
            text-decoration-skip-ink: none
        }

        #dm .sticky-widgets-container-global [data-element-type] {
            position: fixed !important
        }

        @media (min-width:1025px) {
            #dmRoot.responsiveTablet #dm #dmStyle_outerContainer #dmStyle_innerContainer .showOnMedium,
            #dmRoot.responsiveTablet #dm .dmInner .hide-for-large {
                display: none !important
            }
            #dmRoot.responsiveTablet #dm [data-responsive-name=ResponsiveDesktopTopTabletHamburger] .site_content {
                margin-top: 0 !important
            }
            :root {
                --btn-text-font-size: 43px
            }
        }

        @media (min-width:768px) and (max-width:1024px) {
            #dmRoot.responsiveTablet #dm #dmStyle_outerContainer #dmStyle_innerContainer #hamburger-header-container~#stickyHeaderSpacer,
            #dmRoot.responsiveTablet #dm #dmStyle_outerContainer #dmStyle_innerContainer .showOnLarge,
            #dmRoot.responsiveTablet #dm .dmInner .hide-for-medium {
                display: none !important
            }
            :root {
                --btn-text-font-size: 43px
            }
        }

        @media (max-width:767px) {
            #dmRoot.responsiveTablet #dm #dmStyle_outerContainer #dmStyle_innerContainer #hamburger-header-container~#stickyHeaderSpacer,
            #dmRoot.responsiveTablet #dm #dmStyle_outerContainer #dmStyle_innerContainer .showOnLarge,
            #dmRoot.responsiveTablet #dm .dmInner .hide-for-small {
                display: none !important
            }
        }

        body {
            -webkit-overflow-scrolling: touch
        }

        :not(.runtime-module-container) .layout-drawer {
            position: fixed;
            transform: translate(-100%, -100%)
        }

        :not(.runtime-module-container) .layout-drawer[data-origin=side-reverse] {
            transform: translate(100%, 0)
        }

        :not(.runtime-module-container) .layout-drawer-overlay {
            opacity: 0
        }

        .runtime-module-container {
            width: 100%
        }

        .runtime-module-container[dmtemplateid*=amburger] #site_content,
        .runtime-module-container[dmtemplateid*=amburger] .dmInner {
            position: static
        }

        .runtime-module-container[dmtemplateid*=amburger] #site_content .site_content {
            position: relative
        }

        .runtime-module-container[dmtemplateid*=amburger] .dmLayoutWrapper {
            background-color: transparent
        }

        .runtime-module-container .hamburger-header-container {
            position: fixed;
            z-index: 2;
            top: 0;
            left: 0;
            width: 100%
        }

        .runtime-module-container .hamburger-header-container .hamburger-header {
            min-height: 43px
        }

        .runtime-module-container .layout-drawer,
        .runtime-module-container .layout-drawer-hamburger,
        .runtime-module-container .layout-drawer-overlay {
            visibility: visible
        }

        .runtime-module-container[dmtemplateid*=amburger] .site_content {
            margin-top: 59px
        }

        .runtime-module-container .layout-drawer,
        .runtime-module-container .layout-drawer-overlay {
            height: 100%;
            position: fixed;
            top: 0;
            left: 0
        }

        .runtime-module-container .layout-drawer {
            background-color: #fff;
            width: 75vw;
            transform: translate(-100%, 0);
            overflow: auto;
            -webkit-overflow-scrolling: auto;
            z-index: 13;
            display: flex;
            flex-direction: column
        }

        .runtime-module-container .layout-drawer .dmRespRow:not(.dmPlaceHolderRespRow) .dmRespColsWrapper .dmRespCol:not(.content-removed):only-child:empty {
            min-height: 0
        }

        .runtime-module-container .layout-drawer[data-origin=side-reverse] {
            transform: translate(100%, 0);
            left: auto;
            right: 0
        }

        .runtime-module-container .layout-drawer-overlay {
            width: 100vw;
            background-color: rgba(0, 0, 0, .4);
            opacity: 0;
            z-index: 6
        }

        body:not([data-flex-site]) .layout-drawer .dmRespRow:not(:first-of-type):not(:last-of-type) {
            flex: 1 1 auto
        }

        .layout-drawer-hamburger {
            position: fixed;
            left: 18px;
            margin-left: env(safe-area-inset-left);
            padding: 17px 11px;
            z-index: 13;
            width: 52px;
            height: 52px;
            background-color: transparent;
            color: #787878;
            display: flex;
            flex-direction: column;
            border: 0;
            justify-content: space-between;
            align-items: stretch;
            outline: 0;
            top: 18px;
            border-radius: 0
        }

        .layout-drawer-hamburger .hamburger__slice {
            display: block;
            height: 0;
            width: 100%;
            border: 1px solid currentColor;
            transform-origin: center
        }

        @media (max-width:767px) {
            .layout-drawer-hamburger {
                position: fixed;
                left: 10px;
                margin-left: env(safe-area-inset-left);
                padding: 13px 9px;
                z-index: 13;
                width: 40px;
                height: 40px;
                background-color: transparent;
                color: #787878;
                display: flex;
                flex-direction: column;
                border: 0;
                justify-content: space-between;
                align-items: stretch;
                outline: 0;
                top: 10px;
                border-radius: 0
            }
            .layout-drawer-hamburger .hamburger__slice {
                display: block;
                height: 0;
                width: 100%;
                border: 1px solid currentColor;
                transform-origin: center
            }
        }

        .hamburger-reverse .layout-drawer-hamburger {
            left: auto;
            right: 10px;
            margin-right: env(safe-area-inset-right)
        }

        #dm-outer-wrapper #hamburger-header-container #hamburger-header .dmRespCol {
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        nav {
            display: block
        }

        html {
            font-family: Source Sans Pro;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        img {
            border: 0;
            max-width: 100%;
            -ms-interpolation-mode: bicubic;
            display: inline-block
        }

        button {
            font-family: inherit;
            font-size: 100%;
            margin: 0;
            line-height: normal;
            text-transform: none;
            -webkit-appearance: button
        }

        button::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        .dmRespRow {
            padding-top: 15px;
            padding-bottom: 15px
        }

        .dmRespRow .dmRespRow:after,
        .dmRespRow .dmRespRow:before,
        .dmRespRow:after,
        .dmRespRow:before {
            content: \' \';
            display: table
        }

        .dmRespRow .dmRespRow:after,
        .dmRespRow:after {
            clear: both
        }

        .dmRespRow,
        .dmRespRow .dmRespColsWrapper {
            max-width: 960px;
            position: relative;
            margin: 0 auto;
            width: 100%
        }

        .dmHeader,
        .dmRespRow .dmRespCol>* {
            max-width: 100%
        }

        .dmRespRow .dmRespCol {
            position: relative;
            width: 100%;
            display: inline-block;
            vertical-align: top;
            float: left
        }

        .dmRespRow .dmRespRow {
            width: auto;
            margin-top: 0;
            margin-bottom: 0;
            max-width: none
        }

        .dmDesktopBody .dmRespRow .large-2 {
            position: relative;
            width: 16.66667%
        }

        .dmDesktopBody .dmRespRow .large-4 {
            position: relative;
            width: 33.33333%
        }

        .dmDesktopBody .dmRespRow .large-6 {
            position: relative;
            width: 50%
        }

        .dmDesktopBody .dmRespRow .large-10 {
            position: relative;
            width: 83.33333%
        }

        .dmDesktopBody .dmRespRow .large-12 {
            position: relative;
            width: 100%
        }

        [class*=\' dm-common-icons-\'] {
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: dm-common-icons !important
        }

        .dm-common-icons-close:before {
            content: \'\e901\'
        }

        #dm div.dmContent [class*=\' icon-\'],
        [class*=\' icon-\'] {
            font-family: FontAwesome !important;
            font-weight: 400;
            font-style: normal;
            text-decoration: inherit;
            -webkit-font-smoothing: antialiased
        }

        [class*=\' icon-\']:before {
            text-decoration: none;
            display: inline-block;
            speak: none
        }

        a [class*=\' icon-\'] {
            display: inline
        }

        [class*=\' icon-\'] {
            display: inline;
            width: auto;
            height: auto;
            line-height: normal;
            vertical-align: baseline;
            background-image: none;
            background-position: 0 0;
            background-repeat: repeat;
            margin-top: 0
        }

        .icon-star:before {
            content: \'\f005\'
        }

        .icon-angle-down:before {
            content: \'\f107\'
        }

        #dm .dmRespRow .dmRespCol>.dmWidget {
            overflow: initial
        }

        @media (min-width:768px) {
            .hamburger-reverse .layout-drawer-hamburger {
                right: 18px
            }
            #dm .dmRespRow .dmRespCol>.dmWidget {
                width: 280px;
                max-width: 100%
            }
            #dm .sticky-widgets-container-global .dmWidget {
                width: 230px;
                max-width: 100%
            }
        }

        @media (max-width:767px) {
            #dm .dmInner .dmWidget {
                width: 100%
            }
        }

        #dm .dmInner .dmWidget:not(.displayNone) {
            display: inline-block
        }

        #dm .dmInner .dmWidget:not(.displayNone)[data-display-type=block] {
            display: block
        }

        #dm .dmInner .dmWidget {
            text-decoration: none;
            margin: 10px 0;
            clear: both;
            position: relative;
            text-align: center;
            line-height: 22px;
            box-shadow: none;
            background-image: none;
            padding: 0;
            height: auto;
            border-style: solid;
            white-space: nowrap
        }

        #dm .dmInner .dmWidget:after {
            content: \'\';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            width: 0;
            margin-right: -.25em
        }

        #dm .dmInner .dmWidget .iconBg {
            position: absolute;
            left: 0;
            width: 50px;
            top: 50%;
            margin-top: -13px
        }

        #dm .dmWidget .text {
            display: inline-block;
            vertical-align: middle;
            font-size: 1.125em;
            line-height: normal;
            white-space: normal;
            padding: 10px 7px;
            max-width: 98%
        }

        .dmInner {
            min-width: 768px !important;
            font-size: 16px;
            background: #fff;
            color: #666
        }

        html:not(.ios-preview) #dm .hasStickyHeader .dmInner div.dmHeaderContainer {
            position: fixed !important;
            z-index: 101;
            width: 100%;
            min-width: 768px
        }

        #dm .sticky-widgets-container-global [data-element-type].sticky-desktop-position-bottom,
        #dm .sticky-widgets-container-global [data-element-type].sticky-desktop-position-bottom-right {
            top: initial !important;
            bottom: 0 !important;
            margin-bottom: 40px
        }

        #dm .sticky-widgets-container-global [data-element-type].sticky-desktop-position-bottom {
            right: initial !important;
            left: 50% !important;
            transform: translateX(-50%);
            margin-left: 0;
            margin-right: 0
        }

        #dm .sticky-widgets-container-global [data-element-type].sticky-desktop-position-bottom-right {
            right: 0 !important;
            left: initial !important;
            margin-right: 40px
        }

        .dmNewParagraph[data-version] {
            line-height: initial
        }

        .dmNewParagraph[data-version] .text-align-left {
            text-align: left !important
        }

        .dmNewParagraph[data-version] .text-align-center {
            text-align: center !important
        }

        .dmNewParagraph[data-version] h1,
        .dmNewParagraph[data-version] h4,
        .dmNewParagraph[data-version] p {
            margin-top: 0;
            margin-bottom: 0
        }

        .dmNewParagraph[data-version] a {
            vertical-align: initial
        }

        .imageWidget a {
            font-style: italic;
            text-align: center
        }

        .imageWidget img[width][height],
        img[width][height] {
            height: auto
        }

        * {
            border: 0 solid #333;
            scrollbar-arrow-color: #fff;
            scrollbar-track-color: #F2F2F2;
            scrollbar-face-color: silver;
            scrollbar-highlight-color: silver;
            scrollbar-3dlight-color: silver;
            scrollbar-shadow-color: silver;
            scrollbar-darkshadow-color: silver;
            scrollbar-width: 12px
        }

        A IMG {
            border: none
        }

        h1,
        h4,
        ul {
            margin-left: 0;
            margin-right: 0
        }

        .dmInner * {
            -webkit-font-smoothing: antialiased
        }

        a,
        iframe,
        img,
        li,
        ul {
            vertical-align: top
        }

        #site_content {
            position: relative
        }

        .dmOuter {
            word-wrap: break-word
        }

        .dmDesktopBody .dmInner {
            min-width: 960px
        }

        .dmInner a {
            color: #463939;
            outline: 0;
            vertical-align: inherit
        }

        .dmInner ul:not(.defaultList) {
            padding: 0
        }

        .dmHeader {
            background: #68ccd1;
            color: #666;
            text-align: center;
            position: relative;
            width: 100%
        }

        DIV.dmBody {
            padding: 0;
            clear: both
        }

        .dmContent {
            margin: 0;
            padding: 0
        }

        #site_content ul:not(.defaultList) {
            -webkit-padding-start: 0;
            -moz-padding-start: 0;
            list-style-position: inside
        }

        .dmRespRowsWrapper {
            max-width: 960px;
            margin: 0 auto
        }

        .dmLargeBody .imageWidget:not(.displayNone) {
            display: inline-block;
            max-width: 100%
        }

        .imageWidget:not(.displayNone) img {
            width: 100%
        }

        #dm .dmRespColsWrapper {
            display: block
        }

        .dmNewParagraph {
            text-align: left;
            margin: 8px 0;
            padding: 2px 0
        }

        .dmLargeBody .dmRespRowsWrapper>.dmRespRow .dmRespCol,
        .dmLargeBody .fHeader .dmRespRow .dmRespCol {
            padding-left: .75%;
            padding-right: .75%
        }

        .dmLargeBody .dmRespRowsWrapper>.dmRespRow .dmRespCol:first-child,
        .dmLargeBody .fHeader .dmRespRow .dmRespCol:first-child {
            padding-left: 0;
            padding-right: 1.5%
        }

        .dmLargeBody .dmRespRowsWrapper>.dmRespRow .dmRespCol:last-child,
        .dmLargeBody .fHeader .dmRespRow .dmRespCol:last-child {
            padding-right: 0;
            padding-left: 1.5%
        }

        .dmLargeBody .dmRespRowsWrapper>.dmRespRow .dmRespCol:only-child {
            padding-left: 0;
            padding-right: 0
        }

        .dmLinksMenu>ul {
            display: block;
            margin: 0;
            font-size: inherit
        }

        .dmStandardDesktop {
            display: block;
            margin: 0 auto
        }

        .dmSpacer {
            border: 0;
            height: 15px
        }

        body {
            width: 100%;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            background-color: #eee
        }

        .main-navigation.unifiednav {
            -js-display: flex;
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            overflow: visible
        }

        .main-navigation.unifiednav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 1rem
        }

        .main-navigation.unifiednav .unifiednav__container {
            -js-display: flex;
            display: flex;
            justify-content: flex-start;
            list-style: none
        }

        .main-navigation.unifiednav .unifiednav__container>.unifiednav__item-wrap {
            -js-display: flex;
            display: flex;
            justify-content: flex-start;
            position: relative;
            font-weight: 400
        }

        .main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap::after,
        .main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap::before {
            content: \'\';
            align-self: center;
            font-weight: 700
        }

        .main-navigation.unifiednav .unifiednav__container>.unifiednav__item-wrap>.unifiednav__item {
            -js-display: flex;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: row;
            color: inherit;
            text-decoration: none;
            position: relative;
            padding: 12px 15px;
            margin: 0;
            font-weight: inherit;
            letter-spacing: .03em
        }

        .main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item {
            padding: 0 15px
        }

        .main-navigation.unifiednav .unifiednav__container>.unifiednav__item-wrap>.unifiednav__item .nav-item-text {
            white-space: nowrap
        }

        .main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::after,
        .main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::before {
            content: \'\';
            width: 100%;
            height: 0;
            border: 0 solid transparent;
            border-top-color: currentColor;
            display: block;
            opacity: 0
        }

        #dm .dmOuter .dmInner .dmWidget[data-buttonstyle=ROUND_SIDES] .iconBg,
        #dm .dmWidget:not([data-buttonstyle]) .iconBg,
        .main-navigation.unifiednav .unifiednav__container .unifiednav__item:not(.unifiednav__item_has-sub-nav) .icon {
            display: none
        }

        .main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item.dmNavItemSelected .nav-item-text::after,
        .main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item.dmNavItemSelected .nav-item-text::before {
            opacity: 1
        }

        .main-navigation.unifiednav.effect-bottom2 {
            padding: calc(12px - .2em - 2px) 15px
        }

        .main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::after,
        .main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::before {
            transform: scaleX(0);
            border-top-width: 2px
        }

        .main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::after {
            margin-top: .2em
        }

        .main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::before {
            margin-bottom: .2em;
            border-top-color: transparent
        }

        .main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item.dmNavItemSelected .nav-item-text::after,
        .main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item.dmNavItemSelected .nav-item-text::before {
            transform: scaleX(1)
        }

        .main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::after,
        .main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::before {
            transform-origin: left
        }

        .main-navigation.unifiednav.effect-text-color {
            padding: 12px 15px
        }

        .main-navigation.unifiednav:not(.unifiednav_vertical)>.unifiednav__container {
            justify-content: inherit
        }

        #dm .p_hfcontainer nav.main-navigation.unifiednav {
            min-width: 9em !important;
            text-align: initial !important
        }

        #dm .main-navigation.unifiednav[data-nav-structure=VERTICAL] .unifiednav__container {
            flex-direction: column;
            flex: 1 1 100%
        }

        #dm .main-navigation.unifiednav[data-nav-structure=VERTICAL] .unifiednav__container>.unifiednav__item-wrap>.unifiednav__item {
            padding: 8px 0;
            margin: 0
        }

        #dm .main-navigation.unifiednav[data-nav-structure=VERTICAL] .unifiednav__container>.unifiednav__item-wrap>.unifiednav__item .nav-item-text {
            white-space: initial
        }

        #dm .main-navigation.unifiednav[data-nav-structure=VERTICAL] .unifiednav__container:not([data-depth])>.unifiednav__item-wrap {
            flex-direction: column
        }

        #dm .main-navigation.unifiednav[data-nav-structure=VERTICAL] .unifiednav__container:not([data-depth])>.unifiednav__item-wrap::after {
            content: \'\' !important;
            width: 100%;
            height: 0;
            color: #d1d1d1;
            align-self: flex-start;
            border: 0 solid currentColor
        }

        #dm .main-navigation.unifiednav[data-nav-structure=VERTICAL][layout-main=vertical_nav_layout_2] .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item {
            padding: 5px 0
        }

        #dm .main-navigation.unifiednav[data-nav-structure=VERTICAL][data-show-vertical-sub-items=HIDE]>.unifiednav__container:not([data-depth])>.unifiednav__item-wrap .unifiednav__item.dmNavItemSelected>.nav-item-text .icon::before {
            transform: rotate(180deg)
        }

        #dm .main-navigation.unifiednav:not([data-nav-structure=VERTICAL])>.unifiednav__container {
            flex-wrap: wrap;
            justify-content: inherit
        }

        #dm .main-navigation.unifiednav:not([data-nav-structure=VERTICAL])>.unifiednav__container .nav-item-text::before {
            text-align: left
        }

        #dm .main-navigation.unifiednav:not([data-nav-structure=VERTICAL]) .unifiednav__container:not([data-depth])>.unifiednav__item-wrap:not(:last-child)::after,
        #dm .main-navigation.unifiednav:not([data-nav-structure=VERTICAL]) .unifiednav__container:not([data-depth])>.unifiednav__item-wrap:not(:last-child)::before,
        #dm .main-navigation.unifiednav:not([data-nav-structure=VERTICAL])[data-divider]:not([data-direction=RIGHT]) .unifiednav__container:not([data-depth])>.unifiednav__item-wrap:not(:last-child)::before {
            content: \'\'
        }

        #dm .dmBody .dmRespRowsWrapper {
            max-width: none;
            background-color: transparent
        }

        .dmLargeBody .dmRespRow {
            width: 100%;
            max-width: none;
            margin-left: 0;
            margin-right: 0;
            padding-left: 40px;
            padding-right: 40px
        }

        .dm-bfs.dm-layout-home div.dmInner {
            background-color: #fff
        }

        .dmStandardDesktop .dmHeader {
            background-color: #68ccd1;
            max-width: 100%
        }

        .dmRespRow:not(.dmPlaceHolderRespRow) .dmRespColsWrapper .dmRespCol:not(.content-removed).empty-column,
        .dmRespRow:not(.dmPlaceHolderRespRow) .dmRespColsWrapper .dmRespCol:not(.content-removed):only-child:empty {
            min-height: 100px
        }

        .dmRespRow:not(.dmPlaceHolderRespRow) .dmRespCol:not(.content-removed).empty-column,
        .dmRespRow:not(.dmPlaceHolderRespRow) .dmRespCol:not(.content-removed):empty {
            min-height: 1px
        }

        .dmRespRow:not(.dmPlaceHolderRespRow) .dmRespColsWrapper .dmRespCol:not(.content-removed):only-child.empty-column {
            min-height: 100px
        }

        #dm div.dmRespCol>* {
            line-height: 1.5
        }

        #dm div.dmContent h1,
        #dm div.dmContent h4,
        #dm div.dmInner {
            line-height: initial
        }

        #dm div.dmInner h1,
        #dm div.dmInner h4 {
            font-family: Montserrat
        }

        #dm DIV.dmInner {
            background-repeat: no-repeat;
            background-image: url(https://irt-cdn.multiscreensite.com/ce0bb35f932b47bb809d0e37905542ba/dms3rep/multi/site_background_education-2087x1173.jpg);
            background-size: cover;
            background-position: 50% 0
        }

        #dm div.dmOuter div.dmInner {
            background-position: center center;
            background-repeat: repeat;
            background-size: auto
        }

        #dm div.dmContent h4 {
            color: #333
        }

        #dm .dmNewParagraph a,
        #dm div.dmNewParagraph a {
            text-decoration: underline;
            color: rgba(147, 147, 147, 1)
        }

        #dm div.dmContent h1,
        #dm div.dmContent h4 {
            text-decoration: none;
            text-shadow: none;
            font-weight: 400;
            font-style: normal
        }

        #dm div.dmInner,
        #dm div.dmInner .dmRespCol {
            color: rgba(147, 147, 147, 1);
            font-family: Roboto;
            font-size: 16px
        }

        .dmLargeBody .dmBody .dmRespRowsWrapper {
            background-color: transparent
        }

        #dm .dmRespCol div.dmNewParagraph,
        #dm div.dmInner,
        #dm div.dmInner .dmRespCol {
            color: var(--color_1);
            font-family: Poppins;
            font-weight: 400
        }

        #dm div.dmContent h1 {
            font-family: Recoleta-SemiBold;
            color: #000;
            direction: ltr
        }

        #dm div.dmContent h4 {
            font-family: "Bebas Neue Pro Bold";
            color: rgba(192, 27, 27, 1);
            direction: ltr
        }

        #dm div.dmContent .dmNewParagraph[data-version] h1 {
            text-decoration: inherit
        }

        #dm div.dmContent .dmNewParagraph[data-version] h1 * {
            text-decoration: none
        }

        #dm div.dmContent .dmNewParagraph[data-version] h4 {
            text-decoration: inherit
        }

        #dm div.dmContent .dmNewParagraph[data-version] h4 * {
            text-decoration: none
        }

        #dm .dmNewParagraph a,
        #dm div.dmNewParagraph a {
            color: var(--color_4)
        }

        #dm div.dmNewParagraph p {
            color: rgba(0, 0, 0, 1);
            direction: ltr;
            font-family: Poppins;
            font-weight: 400;
            font-style: normal;
            text-decoration: none
        }

        #dm DIV.dmOuter DIV.dmInner {
            background-image: none;
            background-color: var(--color_3)
        }

        #dm div.dmContent h4 {
            font-size: 38px;
            line-height: normal
        }

        #dm .dmRespCol div.dmNewParagraph,
        #dm div.dmInner,
        #dm div.dmInner .dmRespCol {
            font-size: 18px
        }

        #dm div.dmContent h1 {
            font-size: 45px
        }

        #dm .dmContent .dmRespRow {
            margin: 0;
            padding: 15px 40px
        }

        @media all {
            :root {
                --btn-text-direction: ltr;
                --btn-border-r-color: var(--btn-border-color);
                --btn-border-l-color: var(--btn-border-color);
                --btn-border-b-width: var(--btn-border-width);
                --btn-border-width: 1px;
                --btn-border-radius: 10px;
                --btn-border-t-width: var(--btn-border-width);
                --btn-border-tl-radius: var(--btn-border-radius);
                --btn-border-br-radius: var(--btn-border-radius);
                --btn-border-bl-radius: var(--btn-border-radius);
                --btn-bg-color: rgb(192, 27, 27);
                --btn-box-shadow: rgba(0, 0, 0, 0.25) 0px 3px 11px 0px;
                --btn-border-color: rgb(168, 12, 12);
                --btn-border-tr-radius: var(--btn-border-radius);
                --btn-border-r-width: var(--btn-border-width);
                --btn-border-b-color: var(--btn-border-color);
                --btn-border-l-width: var(--btn-border-width);
                --btn-border-t-color: var(--btn-border-color);
                --btn-text-align: center;
                --btn-text-color: var(--color_3);
                --btn-text-decoration: none;
                --btn-text-font-weight: 700;
                --btn-text-font-family: "Bebas Neue Pro Bold";
                --btn-icon-color: rgb(247, 247, 247);
                --btn-icon-fill: rgb(247, 247, 247);
                --btn-icon-wrpr-display: none;
                --btn-hover-border-b-color: var(--btn-hover-border-color);
                --btn-hover-bg: var(--btn-bg-color);
                --btn-hover-border-t-color: var(--btn-hover-border-color);
                --btn-hover-border-r-color: var(--btn-hover-border-color);
                --btn-hover-border-l-color: var(--btn-hover-border-color);
                --btn-hover-border-color: var(--btn-border-color);
                --btn-hover-text-color: var(--btn-text-color);
                --btn-hover-text-font-weight: var(--btn-text-font-weight);
                --btn-hover-text-decoration: underline;
                --btn-hover-text-font-style: var(--btn-text-font-style)
            }
        }

        @media (min-width:0px) and (max-width:767px) {
            :root {
                --btn-text-font-size: 43px
            }
        }

        #dm .dmWidget:not([data-buttonstyle]) {
            overflow: initial;
            background-clip: border-box;
            border-radius: 1px
        }

        #dm .dmWidget:not([data-buttonstyle]) .text {
            padding: 16px 0
        }

        @media (min-width:768px) {
            #dm .dmRespRow .dmRespCol>.dmWidget,
            #dm .sticky-widgets-container-global .dmWidget {
                width: 222px
            }
            #dm .dmRespRow .dmRespCol>.dmWidget[data-buttonstyle]:not([data-buttonstyle=BORDER_SHORT]) {
                width: 280px
            }
            #dm .sticky-widgets-container-global .dmWidget[data-buttonstyle]:not([data-buttonstyle=BORDER_SHORT]) {
                width: 230px
            }
        }

        #dm .dmOuter .dmInner .dmWidget[data-buttonstyle=ROUND_SIDES] {
            border-radius: 50px
        }

        #dm .dmOuter .dmInner .dmWidget[data-buttonstyle=ROUND_SIDES] .text {
            padding: 10px 0
        }

        #dm div.dmInner #site_content .dmWidget {
            background-color: var(--btn-bg-color);
            border-color: var(--btn-border-color);
            border-bottom-color: var(--btn-border-b-color);
            border-left-color: var(--btn-border-l-color);
            border-right-color: var(--btn-border-r-color);
            border-top-color: var(--btn-border-t-color);
            border-radius: var(--btn-border-radius);
            border-bottom-left-radius: var(--btn-border-bl-radius);
            border-bottom-right-radius: var(--btn-border-br-radius);
            border-top-left-radius: var(--btn-border-tl-radius);
            border-top-right-radius: var(--btn-border-tr-radius);
            border-width: var(--btn-border-width);
            border-bottom-width: var(--btn-border-b-width);
            border-left-width: var(--btn-border-l-width);
            border-right-width: var(--btn-border-r-width);
            border-top-width: var(--btn-border-t-width);
            box-shadow: var(--btn-box-shadow);
            direction: var(--btn-text-direction);
            text-align: var(--btn-text-align)
        }

        #dm div.dmInner #site_content .dmWidget span.text {
            color: var(--btn-text-color);
            font-family: var(--btn-text-font-family);
            font-size: var(--btn-text-font-size);
            font-weight: var(--btn-text-font-weight);
            text-decoration: var(--btn-text-decoration)
        }

        #dm .p_hfcontainer .main-navigation.unifiednav:not(.unifiednav_vertical) .unifiednav__container:not([data-depth])>.unifiednav__item-wrap:not(:last-child)::after,
        #dm .p_hfcontainer .main-navigation.unifiednav:not(.unifiednav_vertical) .unifiednav__container:not([data-depth])>.unifiednav__item-wrap:not(:last-child)::before,
        #dm .p_hfcontainer .u_1749703268.main-navigation.unifiednav:not([data-nav-structure=VERTICAL]) .unifiednav__container:not([data-depth])>.unifiednav__item-wrap:not(:last-child)::after,
        #dm .p_hfcontainer .u_1749703268.main-navigation.unifiednav:not([data-nav-structure=VERTICAL]) .unifiednav__container:not([data-depth])>.unifiednav__item-wrap:not(:last-child)::before {
            font-size: 14px !important
        }

        #dm div.dmInner #site_content .dmWidget span.icon {
            color: var(--btn-icon-color);
            fill: var(--btn-icon-fill)
        }

        #dm div.dmInner #site_content .dmWidget:not([data-buttonstyle]) .iconBg {
            display: var(--btn-icon-wrpr-display)
        }

        #dm .p_hfcontainer div.u_1923160809 img {
            border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -webkit-border-radius: 0 !important
        }

        #dm .p_hfcontainer .u_1144820115.main-navigation.unifiednav[data-nav-structure=VERTICAL] .unifiednav__container:not([data-depth])>.unifiednav__item-wrap::after {
            align-self: flex-start !important
        }

        #dm .p_hfcontainer div.u_1011018909 img {
            border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -webkit-border-radius: 0 !important
        }

        a.u_1018980443,
        a.u_1370129344 {
            box-shadow: rgba(0, 0, 0, .53) 0 3px 11px 0 !important;
            border-radius: 20px !important
        }

        #dm .p_hfcontainer .u_1011018909,
        #dm .p_hfcontainer .u_1923160809 {
            width: 100% !important
        }

        #dm .p_hfcontainer nav.u_1144820115.main-navigation.unifiednav.effect-bottom2 .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item .nav-item-text::after {
            border-top-style: solid !important;
            border-top-width: 1px !important
        }

        #dm .p_hfcontainer nav.u_1144820115.main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item.dmNavItemSelected {
            font-weight: 400 !important;
            color: var(--color_1) !important
        }

        #dm .p_hfcontainer .u_1144820115.main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item {
            text-align: left !important;
            padding: 10px 0 0 !important;
            margin: 0 !important
        }

        #dm .p_hfcontainer nav.u_1144820115 {
            color: #000 !important
        }

        #dm .p_hfcontainer nav.u_1749703268 {
            color: #fff !important
        }

        a.u_1018980443 {
            background-color: rgba(255, 216, 26, 1) !important;
            -moz-box-shadow: rgba(0, 0, 0, .53) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .53) 0 3px 11px 0 !important;
            -moz-border-radius: 20px !important;
            -webkit-border-radius: 20px !important;
            border-style: solid !important;
            border-width: 5px !important;
            border-color: rgba(10, 10, 221, 1) !important
        }

        #dm .dmBody div.u_1643891832,
        #dm .p_hfcontainer div.u_1705692124,
        #dm .p_hfcontainer div.u_1861705244 {
            background-color: rgba(0, 0, 0, 0) !important
        }

        #dm .p_hfcontainer .u_1749703268.main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item {
            margin: 0 !important;
            padding: 0 10px !important
        }

        #dm .p_hfcontainer nav.u_1144820115.main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item {
            color: var(--color_1) !important;
            font-weight: 400 !important;
            font-family: Poppins-SemiBold !important
        }

        #dm .dmInner div.dmHeader,
        #dm .dmInner div.dmHeader.u_hcontainer,
        #dm .dmInner div.u_hcontainer {
            background-color: rgba(35, 38, 80, 1) !important;
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        a.u_1370129344,
        a.u_1590115101 {
            background-color: rgba(255, 216, 26, 1) !important;
            border-style: solid !important;
            border-width: 5px !important;
            border-color: rgba(10, 10, 221, 1) !important
        }

        #dm .p_hfcontainer nav.u_1749703268.main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item {
            color: var(--color_3) !important;
            font-family: Poppins-Medium !important
        }

        a.u_1018980443 span.text,
        a.u_1370129344 span.text,
        a.u_1590115101 span.text {
            font-family: Poppins-SemiBold !important;
            color: rgba(19, 19, 175, 1) !important
        }

        a.u_1370129344 {
            -moz-box-shadow: rgba(0, 0, 0, .53) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .53) 0 3px 11px 0 !important;
            -moz-border-radius: 20px !important;
            -webkit-border-radius: 20px !important
        }

        a.u_1590115101 {
            box-shadow: rgba(0, 0, 0, .53) 0 3px 11px 0 !important;
            -moz-box-shadow: rgba(0, 0, 0, .53) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .53) 0 3px 11px 0 !important;
            border-radius: 20px !important;
            -moz-border-radius: 20px !important;
            -webkit-border-radius: 20px !important
        }

        #dm .dmBody div.u_1655782199 img,
        a.u_1326948130 {
            border-style: solid !important;
            border-width: 2px !important;
            box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        a.u_1326948130 {
            border-radius: 10px !important;
            -moz-border-radius: 10px !important;
            -webkit-border-radius: 10px !important;
            background-color: rgba(210, 35, 35, 1) !important;
            border-color: rgba(242, 242, 242, 1) !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmInner div.dmHeader.u_hcontainer {
            padding-bottom: 20px !important;
            padding-top: 25px !important
        }

        #dm .p_hfcontainer div.u_1183846399 {
            padding: 0 !important;
            margin: 0 !important
        }

        #dm .p_hfcontainer div.u_1826294544 {
            margin-top: 0 !important;
            padding: 0 !important
        }

        #dm .p_hfcontainer div.u_1021493186 {
            padding-top: 30px !important;
            margin-top: 0 !important;
            padding-right: 40px !important;
            padding-left: 40px !important
        }

        #dm .p_hfcontainer div.u_1676049285 {
            margin-top: 0 !important;
            padding: 100px 40px !important
        }

        #dm .p_hfcontainer div#hamburger-drawer.layout-drawer {
            background-color: var(--color_3) !important
        }

        #dm .p_hfcontainer div.u_1655486006 {
            margin-left: 0 !important;
            margin-right: 0 !important;
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        #dm .p_hfcontainer #hamburger-drawer.layout-drawer:not([data-origin=top]) {
            width: 49vw !important
        }

        #dm .p_hfcontainer nav.u_1144820115 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            position: relative !important;
            height: auto !important;
            max-width: calc(100% - 0px) !important;
            justify-content: flex-start !important;
            align-items: stretch !important;
            min-width: 25px !important;
            text-align: start !important;
            padding: 0 !important;
            margin: 113px 0 0 !important
        }

        #dm .dmInner div.u_hcontainer,
        a.u_1018980443 {
            min-width: 0 !important;
            text-align: center !important
        }

        #dm .dmInner div.fHeader .dmHeader[freeheader=true] {
            padding-top: 12px !important;
            padding-bottom: 12px !important
        }

        .fHeader #hcontainer.dmHeader[freeheader=true] {
            padding-top: initial !important;
            padding-bottom: initial !important
        }

        [dmtemplateid=Hamburger].runtime-module-container .layout-drawer-hamburger {
            top: 3.69px !important
        }

        [dmtemplateid=Hamburger] .site_content {
            margin-top: 59.38px !important
        }

        .stickyHeaderSpacer {
            height: 129px !important
        }

        @media (min-width:1025px) {
            .responsiveTablet .stickyHeaderSpacer {
                height: 142.22px !important
            }
        }

        #dm .p_hfcontainer nav.u_1144820115.main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item {
            font-size: 22px !important
        }

        [dmtemplateid=Hamburger] .layout-drawer-hamburger.hamburger-on-header {
            color: var(--color_3) !important;
            background-color: var(--color_2) !important
        }

        @media (min-width:768px) and (max-width:1024px) {
            .responsiveTablet [dmtemplateid=Hamburger].runtime-module-container .layout-drawer-hamburger {
                top: 12.47px !important
            }
            .responsiveTablet [dmtemplateid=Hamburger] .site_content {
                margin-top: 76.94px !important
            }
        }

        #dm .dmInner div.u_hcontainer,
        #dm .p_hfcontainer nav.u_1749703268,
        a.u_1018980443 {
            top: 0 !important;
            left: 0 !important;
            float: none !important;
            max-width: 100% !important
        }

        #dm .dmInner div.fHeader.dmHeaderContainer #hcontainer.dmHeader[freeheader=true] {
            margin: 0 !important;
            padding: 12px 0 !important
        }

        #dm .d-page-1716942098 DIV.dmInner {
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-attachment: fixed !important;
            background-position: 50% 50% !important
        }

        #dm .dmInner div.u_hcontainer {
            width: 100% !important;
            position: relative !important;
            height: auto !important;
            padding: 0 !important;
            margin: 0 auto !important
        }

        a.u_1018980443 span.text {
            font-size: 26px !important
        }

        #dm .p_hfcontainer nav.u_1749703268.main-navigation.unifiednav .unifiednav__container:not([data-depth])>.unifiednav__item-wrap>.unifiednav__item,
        .font-size-14,
        .size-14 {
            font-size: 14px !important
        }

        a.u_1018980443 {
            display: block !important;
            width: 512px !important;
            position: relative !important;
            height: 78px !important;
            padding: 0 !important;
            margin: 0 0 40px !important
        }

        #dm .p_hfcontainer div.u_1677919435 {
            padding: 0 !important;
            margin: 0 !important
        }

        #dm .p_hfcontainer nav.u_1749703268 {
            width: calc(100% - 0px) !important;
            position: relative !important;
            height: auto !important;
            justify-content: flex-end !important;
            align-items: stretch !important;
            min-width: 25px !important;
            text-align: start !important;
            padding: 6px 0 6.4px 15px !important;
            margin: 3px 0 0 !important
        }

        #dm .p_hfcontainer div.u_1705692124,
        #dm .p_hfcontainer div.u_1923160809 {
            top: 0 !important;
            left: 0 !important;
            position: relative !important;
            text-align: center !important
        }

        #dm .p_hfcontainer div.u_1923160809 {
            float: none !important;
            width: 115.13px !important;
            max-width: 100% !important;
            min-width: 25px !important;
            display: block !important;
            height: auto !important;
            padding: 0 !important;
            margin: 0 722px 0 0 !important
        }

        #dm .p_hfcontainer div.u_1705692124,
        #dm .p_hfcontainer div.u_1861705244 {
            width: auto !important;
            max-width: 100% !important;
            min-width: 0 !important;
            height: auto !important;
            float: none !important
        }

        #dm .p_hfcontainer div.u_1705692124 {
            margin: 0 !important;
            padding: 11px 40px !important
        }

        #dm .p_hfcontainer div#hamburger-header {
            background-color: rgba(35, 38, 80, 1) !important;
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            border-bottom-style: solid !important;
            border-bottom-color: var(--color_3) !important;
            border-bottom-width: 0 !important;
            margin: 0 !important;
            padding: 10px 0 !important
        }

        #dm .p_hfcontainer div.u_1011018909,
        #dm .p_hfcontainer div.u_1861705244,
        a.u_1370129344 {
            top: 0 !important;
            left: 0 !important;
            position: relative !important;
            text-align: center !important;
            padding: 0 !important
        }

        #dm .p_hfcontainer div.u_1861705244 {
            margin: 0 !important
        }

        #dm .p_hfcontainer div.u_1011018909 {
            float: none !important;
            width: calc(100% - 0px) !important;
            max-width: 116.22px !important;
            min-width: 25px !important;
            display: block !important;
            height: auto !important;
            margin: 0 24.11px 2px 0 !important
        }

        a.u_1370129344,
        a.u_1590115101 {
            width: 512px !important;
            height: 78px !important;
            min-width: 0 !important;
            max-width: 100% !important
        }

        a.u_1370129344 span.text {
            font-size: 26px !important
        }

        a.u_1370129344 {
            display: block !important;
            float: none !important;
            margin: 0 0 40px !important
        }

        a.u_1326948130,
        a.u_1590115101 {
            padding: 0 !important;
            margin: 0 40px 40px 0 !important;
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            position: relative !important;
            text-align: center !important
        }

        a.u_1590115101 span.text {
            font-size: 26px !important
        }

        a.u_1590115101 {
            display: block !important
        }

        #dm .dmBody a.u_1032607088 .iconBg,
        #dm .dmBody a.u_1400356193 .iconBg,
        #dm .dmBody a.u_1604899368 .iconBg {
            display: none !important
        }

        a.u_1326948130 span.text {
            font-family: \'Bebas Neue Pro Bold\' !important;
            color: var(--color_3) !important;
            font-weight: 400 !important;
            text-decoration: none !important;
            font-style: normal !important;
            font-size: 43px !important
        }

        a.u_1326948130 {
            width: calc(100% - 149px) !important;
            height: 76px !important;
            max-width: 662px !important;
            min-width: 25px !important
        }

        #dm .dmBody .u_1003038128,
        #dm .dmBody .u_1009455740,
        #dm .dmBody .u_1036418329,
        #dm .dmBody .u_1056920397,
        #dm .dmBody .u_1122952119,
        #dm .dmBody .u_1161961137,
        #dm .dmBody .u_1163816115,
        #dm .dmBody .u_1212164071,
        #dm .dmBody .u_1228282364,
        #dm .dmBody .u_1248956498,
        #dm .dmBody .u_1277270535,
        #dm .dmBody .u_1287882325,
        #dm .dmBody .u_1372137229,
        #dm .dmBody .u_1376885473,
        #dm .dmBody .u_1433617148,
        #dm .dmBody .u_1527640081,
        #dm .dmBody .u_1560300675,
        #dm .dmBody .u_1599389746,
        #dm .dmBody .u_1602306441,
        #dm .dmBody .u_1631544903,
        #dm .dmBody .u_1646249374,
        #dm .dmBody .u_1655782199,
        #dm .dmBody .u_1749118172,
        #dm .dmBody .u_1775660254,
        #dm .dmBody .u_1810531468,
        #dm .dmBody .u_1847169422,
        #dm .dmBody .u_1875411363,
        #dm .dmBody .u_1876280566,
        #dm .dmBody .u_1882237318,
        #dm .dmBody .u_1895757223,
        #dm .dmBody .u_1907039317,
        #dm .dmBody .u_1952082330,
        #dm .dmBody .u_1974181893,
        #dm .dmBody .u_1989502636 {
            width: 100% !important
        }

        #dm .dmBody div.u_1655782199 img {
            border-color: var(--color_4) !important;
            border-radius: 3% !important;
            -moz-border-radius: 3% !important;
            -webkit-border-radius: 3% !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody div.u_1527640081 img,
        #dm .dmBody div.u_1876280566 img {
            border-width: 2px !important;
            border-color: rgba(153, 153, 153, .5) !important;
            border-style: solid !important
        }

        #dm .dmBody div.u_1527640081 img {
            border-radius: 3% !important;
            -moz-border-radius: 3% !important;
            -webkit-border-radius: 3% !important;
            box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody div.u_1876280566 img {
            border-radius: 3% !important;
            -moz-border-radius: 3% !important;
            -webkit-border-radius: 3% !important;
            box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody a.u_1400356193,
        #dm .dmBody a.u_1604899368 {
            border-radius: 10px !important;
            border-width: 1px !important
        }

        #dm .dmBody div.u_1189926563 {
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        #dm .dmBody div.u_1891465517 {
            background-color: rgba(196, 25, 25, 1) !important
        }

        #dm .dmBody a.u_1400356193 span.text {
            font-family: \'Bebas Neue Pro Bold\' !important;
            color: var(--color_3) !important;
            font-weight: 400 !important;
            text-decoration: none !important;
            font-style: normal !important;
            font-size: 24px !important
        }

        #dm .dmBody a.u_1400356193 {
            -moz-border-radius: 10px !important;
            -webkit-border-radius: 10px !important;
            background-color: rgba(210, 35, 35, 1) !important;
            border-style: solid !important;
            border-color: rgba(84, 3, 3, 1) !important;
            box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody div.u_1433617148 img,
        #dm .dmBody div.u_1847169422 img {
            border-radius: 1% !important;
            box-shadow: none !important;
            border-style: solid !important;
            border-width: 4px !important
        }

        #dm .dmBody div.u_1433617148 img {
            -moz-border-radius: 1% !important;
            -webkit-border-radius: 1% !important;
            border-color: rgba(153, 153, 153, .5) !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        #dm .dmBody div.u_1847169422 img {
            -moz-border-radius: 1% !important;
            -webkit-border-radius: 1% !important;
            border-color: rgba(0, 117, 89, 1) !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        #dm .dmBody div.u_1277270535 img {
            border-radius: 1% !important;
            -moz-border-radius: 1% !important;
            -webkit-border-radius: 1% !important;
            border-style: solid !important;
            border-width: 4px !important;
            border-color: rgba(153, 153, 153, .5) !important;
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        #dm .dmBody div.u_1631544903 img {
            border-color: rgba(34, 94, 62, 1) !important;
            border-width: 3px !important;
            border-style: solid !important;
            border-radius: 2% !important;
            -moz-border-radius: 2% !important;
            -webkit-border-radius: 2% !important
        }

        #dm .dmBody div.u_1056920397 img,
        #dm .dmBody div.u_1163816115 img,
        #dm .dmBody div.u_1228282364 img,
        #dm .dmBody div.u_1372137229 img,
        #dm .dmBody div.u_1560300675 img,
        #dm .dmBody div.u_1749118172 img {
            border-color: rgba(153, 153, 153, .5) !important;
            border-width: 3px !important;
            border-style: solid !important
        }

        #dm .dmBody div.u_1163816115 img,
        #dm .dmBody div.u_1749118172 img {
            border-radius: 2% !important;
            -moz-border-radius: 2% !important;
            -webkit-border-radius: 2% !important
        }

        #dm .dmBody div.u_1056920397 img,
        #dm .dmBody div.u_1560300675 img {
            border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -webkit-border-radius: 0 !important;
            box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody div.u_1228282364 img,
        #dm .dmBody div.u_1372137229 img {
            border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -webkit-border-radius: 0 !important;
            box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody div.u_1902863971 {
            background-color: rgba(21, 117, 195, 1) !important;
            border-style: solid !important;
            border-width: 0 !important
        }

        #dm .dmBody div.u_1036418329 img,
        #dm .dmBody div.u_1212164071 img {
            border-color: rgba(31, 102, 172, 1) !important;
            border-width: 3px !important
        }

        #dm .dmBody div.u_1212164071 img {
            border-style: solid !important;
            border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -webkit-border-radius: 0 !important;
            box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody a.u_1604899368,
        #dm .dmBody div.u_1036418329 img {
            border-style: solid !important;
            box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody div.u_1036418329 img {
            border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -webkit-border-radius: 0 !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important
        }

        #dm .dmBody a.u_1604899368 span.text {
            font-family: GiorgioSans-Bold !important;
            color: var(--color_3) !important;
            font-weight: 400 !important;
            text-decoration: none !important;
            font-style: normal !important;
            font-size: 50px !important
        }

        #dm .dmBody div.u_1529169554 {
            height: 77px !important
        }

        #dm .dmBody div.u_1631183507 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: auto !important;
            position: relative !important;
            height: auto !important;
            max-width: 100% !important;
            min-width: 0 !important;
            text-align: start !important;
            padding: 0 40px !important;
            margin: 0 !important
        }

        #dm .dmBody div.u_1189926563 {
            padding: 40px 20px 70px 70px !important
        }

        #dm .dmBody div.u_1134608113 {
            padding: 0 !important
        }

        #dm .dmBody div.u_1775730817 {
            height: 44px !important
        }

        @media (min-width:1025px) {
            .responsiveTablet .d-header-wrapper,
            .responsiveTablet .stickyHeaderSpacer {
                display: none !important
            }
        }

        @media (min-width:768px) and (max-width:1024px) {
            .responsiveTablet .d-header-wrapper,
            .responsiveTablet .hamburger-drawer,
            .responsiveTablet .hamburger-header,
            .responsiveTablet .layout-drawer-hamburger,
            .responsiveTablet .stickyHeaderSpacer {
                display: none !important
            }
            .responsiveTablet [dmtemplateid*=amburger] #site_content .site_content {
                margin-top: 0 !important
            }
        }

        #dm .dmBody div.u_1881947210 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 0px) !important;
            position: relative !important;
            height: auto !important;
            max-width: 100% !important;
            min-width: 25px !important;
            padding: 2px 0 !important;
            margin: -8px auto 8px !important
        }

        #dm .dmBody div.u_1297471497 {
            padding: 0 !important
        }

        #dm .dmBody div.u_1875203639 {
            margin: 30px 0 8px !important;
            padding: 2px 0 !important
        }

        #dm .dmBody div.u_1759545246,
        #dm .dmBody div.u_1891465517 {
            float: none !important;
            left: 0 !important;
            width: auto !important;
            position: relative !important;
            height: auto !important;
            max-width: 100% !important;
            min-width: 0 !important;
            text-align: start !important;
            margin: 0 !important;
            top: 0 !important
        }

        #dm .dmBody div.u_1759545246 {
            padding: 11px 40px !important
        }

        #dm .dmBody div.u_1891465517 {
            padding: 0 !important
        }

        #dm .dmBody div.u_1045735263,
        #dm .dmBody div.u_1703653727 {
            float: none !important;
            left: 0 !important;
            position: relative !important;
            max-width: 100% !important;
            min-width: 25px !important;
            height: auto !important
        }

        #dm .dmBody div.u_1648729293 {
            margin: 5px 0 !important;
            padding: 0 !important
        }

        #dm .dmBody div.u_1045735263 {
            top: 0 !important;
            width: calc(100% - 0px) !important;
            padding: 8px 0 15px !important;
            margin: -8px 0 8px !important
        }

        #dm .dmBody div.u_1332701410 {
            margin: 0 !important;
            padding: 0 0 0 14.39px !important
        }

        #dm .dmBody div.u_1703653727 {
            top: 0 !important;
            width: calc(100% - 0px) !important;
            padding: 8px 0 !important;
            margin: -8px 0 8px !important
        }

        #dm .dmBody div.u_1287882325,
        #dm .dmBody div.u_1882237318 {
            width: 191.59px !important;
            max-width: 100% !important;
            min-width: 0 !important;
            text-align: start !important;
            float: none !important;
            top: 0 !important;
            position: relative !important;
            left: 0 !important;
            display: block !important
        }

        #dm .dmBody div.u_1882237318 {
            height: auto !important;
            padding: 0 !important
        }

        #dm .dmBody div.u_1287882325 {
            padding: 0 !important
        }

        #dm .dmBody div.u_1056920397,
        #dm .dmBody div.u_1212164071,
        #dm .dmBody div.u_1560300675 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 0px) !important;
            position: relative !important;
            max-width: 214px !important;
            min-width: 25px !important;
            text-align: center !important;
            display: block !important;
            padding: 0 !important
        }

        #dm .dmBody div.u_1646249374 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: 247.59px !important;
            position: relative !important;
            height: auto !important;
            max-width: 100% !important;
            min-width: 0 !important;
            text-align: start !important;
            display: block !important;
            padding: 0 !important;
            margin: 0 auto !important
        }

        #dm .dmBody a.u_1400356193,
        #dm .dmBody div.u_1376885473,
        #dm .dmBody div.u_1779393432 {
            min-width: 25px !important;
            max-width: 100% !important;
            position: relative !important;
            float: none !important;
            top: 0 !important
        }

        #dm .dmBody a.u_1400356193 {
            left: 0 !important;
            width: calc(100% - 0px) !important;
            height: 55px !important;
            text-align: center !important;
            padding: 0 !important;
            margin: 10px auto !important
        }

        #dm .dmBody div.u_1779393432 {
            left: 0 !important;
            width: calc(100% - 0px) !important;
            height: auto !important;
            padding: 2px 0 !important;
            margin: 14px 0 8px !important
        }

        #dm .dmBody div.u_1376885473 {
            left: 0 !important;
            width: calc(100% - 0px) !important;
            height: auto !important;
            text-align: start !important;
            padding: 0 !important;
            margin: 0 auto !important
        }

        #dm .dmBody div.u_1567341520 {
            background-image: url(https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/salepage-background-b2fcf08e-1920w.jpg), url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAABhGlDQ1BJQ0MgcHJvZmlsZQAAKJF9kT1Iw0AcxV9TpUUqHSwo4pChOlkQFemoVShChVArtOpgcukXNGlIUlwcBdeCgx+LVQcXZ10dXAVB8APEzc1J0UVK/F9aaBHjwXE/3t173L0DhEaFaVbPBKDptplOJsRsblUMvEJAGEEMIi4zy5iTpBQ8x9c9fHy9i/Es73N/jn41bzHAJxLPMsO0iTeIZzZtg/M+cYSVZJX4nHjcpAsSP3JdafEb56LLAs+MmJn0PHGEWCx2sdLFrGRqxNPEUVXTKV/ItljlvMVZq9RY+578haG8vrLMdZojSGIRS5AgQkENZVRgI0arToqFNO0nPPzDrl8il0KuMhg5FlCFBtn1g//B726twtRkKymUAHpfHOdjFAjsAs2643wfO07zBPA/A1d6x19tAPFP0usdLXoEhLeBi+uOpuwBlzvA0JMhm7Ir+WkKhQLwfkbflAMGboG+tVZv7X2cPgAZ6ip1AxwcAmNFyl73eHewu7d/z7T7+wFwJnKmZ9+MiwAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAuIwAALiMBeKU/dgAAAAd0SU1FB+UCDwksLkLIPkkAAAAZdEVYdENvbW1lbnQAQ3JlYXRlZCB3aXRoIEdJTVBXgQ4XAAAAC0lEQVQI12NgAAIAAAUAAeImBZsAAAAASUVORK5CYII=) !important;
            background-position: 50% 0 !important;
            background-repeat: repeat !important;
            background-size: auto !important;
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: auto !important;
            position: relative !important;
            height: auto !important;
            max-width: 100% !important;
            min-width: 0 !important;
            text-align: start !important;
            padding: 0 40px !important
        }

        #dm .dmBody div.u_1163816115,
        #dm .dmBody div.u_1631544903,
        #dm .dmBody div.u_1749118172 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 0px) !important;
            position: relative !important;
            max-width: 214px !important;
            min-width: 25px !important;
            text-align: center !important;
            display: block !important;
            padding: 0 !important
        }

        #dm .dmBody div.u_1974181893 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 2px) !important;
            position: relative !important;
            height: auto !important;
            max-width: 383.59px !important;
            min-width: 25px !important;
            text-align: start !important;
            display: block !important;
            padding: 0 !important
        }

        #dm .dmBody div.u_1036418329,
        #dm .dmBody div.u_1228282364,
        #dm .dmBody div.u_1372137229,
        #dm .dmBody div.u_1615271845 {
            left: 0 !important;
            width: calc(100% - 0px) !important;
            min-width: 25px !important;
            float: none !important;
            position: relative !important;
            top: 0 !important
        }

        #dm .dmBody div.u_1615271845 {
            height: auto !important;
            max-width: 100% !important;
            padding: 2px 0 !important;
            margin: 9px 0 8px !important
        }

        #dm .dmBody div.u_1036418329,
        #dm .dmBody div.u_1228282364,
        #dm .dmBody div.u_1372137229 {
            max-width: 214px !important;
            text-align: center !important;
            display: block !important;
            padding: 0 !important
        }

        #dm .dmBody div.u_1431374399,
        #dm .dmBody div.u_1810531468,
        #dm .dmBody div.u_1875411363 {
            text-align: start !important;
            left: 0 !important
        }

        #dm .dmBody div.u_1875411363 {
            float: none !important;
            top: 0 !important;
            width: 247.59px !important;
            position: relative !important;
            height: auto !important;
            max-width: 100% !important;
            min-width: 0 !important;
            display: block !important;
            padding: 0 !important
        }

        #dm .dmBody div.u_1810531468 {
            float: none !important;
            top: 0 !important;
            width: calc(100% - 361px) !important;
            position: relative !important;
            height: auto !important;
            max-width: 238px !important;
            min-width: 25px !important;
            display: block !important;
            padding: 0 !important;
            margin: 0 auto !important
        }

        #dm .dmBody div.u_1124100189,
        #dm .dmBody div.u_1187763792,
        #dm .dmBody div.u_1819394880 {
            width: calc(100% - 0px) !important;
            min-width: 25px !important
        }

        #dm .dmBody div.u_1124100189,
        #dm .dmBody div.u_1187763792,
        #dm .dmBody div.u_1431374399,
        #dm .dmBody div.u_1819394880 {
            max-width: 100% !important;
            position: relative !important;
            height: auto !important;
            float: none !important
        }

        #dm .dmBody div.u_1187763792 {
            top: 0 !important;
            left: 0 !important;
            padding: 2px 0 !important;
            margin: 13px auto 8px !important
        }

        #dm .dmBody div.u_1819394880 {
            top: 0 !important;
            left: 0 !important;
            padding: 2px 0 !important;
            margin: -15px auto 8px !important
        }

        #dm .dmBody div.u_1124100189 {
            top: 0 !important;
            left: 0 !important;
            padding: 2px 0 !important;
            margin: 0 auto 8px !important
        }

        #dm .dmBody div.u_1431374399 {
            top: 0 !important;
            width: auto !important;
            min-width: 0 !important;
            padding: 4px 40px !important;
            margin: 0 !important
        }

        #dm .dmBody div.u_1012458858 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 18px) !important;
            position: relative !important;
            height: auto !important;
            max-width: 447.63px !important;
            min-width: 25px !important;
            display: block !important;
            padding: 0 !important;
            margin: 18px 8.31px 35px 18px !important
        }

        #dm .dmBody div.u_1261934970,
        #dm .dmBody div.u_1698263131,
        #dm .dmBody div.u_1703996163 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 18px) !important;
            position: relative !important;
            height: auto !important;
            max-width: 447.63px !important;
            min-width: 25px !important;
            display: block !important;
            padding: 0 !important;
            margin: -8px 0 35px 18px !important
        }

        #dm .dmBody div.u_1291641442,
        #dm .dmBody div.u_1657162425 {
            width: calc(100% - 17px) !important;
            max-width: 447.63px !important;
            padding: 0 !important;
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            position: relative !important;
            min-width: 25px !important;
            height: auto !important;
            display: block !important
        }

        #dm .dmBody div.u_1657162425 {
            margin: -9px 0 35px 17.98px !important
        }

        #dm .dmBody div.u_1291641442 {
            margin: -10px 0 0 17.98px !important
        }

        #dm .dmBody div.u_1902863971 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 55px) !important;
            position: relative !important;
            height: auto !important;
            max-width: 355px !important;
            min-width: 25px !important;
            display: block !important;
            padding: 2px 0 !important;
            margin: 14px auto 8px !important
        }

        #dm .dmBody div.u_1321267085,
        #dm .dmBody div.u_1833541305 {
            width: auto !important;
            max-width: 100% !important;
            min-width: 0 !important;
            margin: 0 !important;
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            position: relative !important;
            text-align: start !important
        }

        #dm .dmBody div.u_1833541305 {
            height: auto !important;
            padding: 0 !important
        }

        #dm .dmBody div.u_1321267085 {
            height: auto !important;
            padding: 13.5px 40px 33.5px !important
        }

        #dm .dmBody div.u_1599389746 {
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 40px) !important;
            position: relative !important;
            max-width: 385.61px !important;
            min-width: 25px !important;
            text-align: start !important;
            display: block !important;
            height: auto !important;
            padding: 0 !important;
            margin: 0 auto !important
        }

        #dm .dmBody div.u_1039290038,
        #dm .dmBody div.u_1615954667 {
            width: calc(100% - 0px) !important;
            height: auto !important;
            max-width: 100% !important;
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            position: relative !important;
            min-width: 25px !important
        }

        #dm .dmBody div.u_1039290038 {
            padding: 2px 0 !important;
            margin: -1.17px 0 8px !important
        }

        #dm .dmBody div.u_1615954667 {
            display: block !important;
            padding: 2px 0 10px !important;
            margin: 11.72px 0 10px !important
        }

        #dm .dmBody div.u_1164697018,
        #dm .dmBody div.u_1238934127,
        #dm .dmBody div.u_1272642908,
        #dm .dmBody div.u_1308396829,
        #dm .dmBody div.u_1314881644,
        #dm .dmBody div.u_1649213186,
        #dm .dmBody div.u_1652795593,
        #dm .dmBody div.u_1740636457,
        #dm .dmBody div.u_1778514162,
        #dm .dmBody div.u_1879519027 {
            padding: 0 !important
        }

        #dm .dmBody a.u_1604899368 {
            -moz-border-radius: 10px !important;
            -webkit-border-radius: 10px !important;
            background-color: rgba(207, 30, 30, 1) !important;
            border-color: rgba(178, 8, 8, 1) !important;
            -moz-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            -webkit-box-shadow: rgba(0, 0, 0, .25) 0 3px 11px 0 !important;
            float: none !important;
            top: 0 !important;
            left: 0 !important;
            width: calc(100% - 187px) !important;
            position: relative !important;
            height: 84px !important;
            max-width: 586px !important;
            min-width: 25px !important;
            text-align: center !important;
            padding: 0 !important;
            margin: 30px auto 10px !important
        }

        .font-size-70,
        .size-70 {
            font-size: 70px !important
        }

        .font-size-60,
        .size-60 {
            font-size: 60px !important
        }

        .font-size-19,
        .size-19 {
            font-size: 19px !important
        }

        .font-size-30 {
            font-size: 30px !important
        }

        .font-size-21,
        .size-21 {
            font-size: 21px !important
        }

        .font-size-22,
        .size-22 {
            font-size: 22px !important
        }

        .font-size-40,
        .size-40 {
            font-size: 40px !important
        }

        .font-size-16,
        .size-16 {
            font-size: 16px !important
        }

        .font-size-23,
        .size-23 {
            font-size: 23px !important
        }

        .font-size-20,
        .size-20 {
            font-size: 20px !important
        }

        .dmDesktopBody [data-anim-desktop]:not([data-anim-desktop=\'none\']) {
            visibility: hidden;
        }
    </style>




    <!-- End render the required css and JS in the head section -->






    <meta property="og:type" content="website">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Ikaria Lean Belly Juice",
            "url": "https://bestofferhere.link/ikarialeanbelly"
        }
    </script>
    <meta property="og:image" content="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/social+share-cd23dd27-1920w.png" />
    <title>
        Ikaria Lean Belly Juice™ USA | Buy Genuine Ikaria Juice
    </title>
    <meta name="keywords" content="ikaria lean belly juice,ikaria lean belly juice usa,ikaria lean belly juice official, buy ikaria lean belly juice" />
    <meta name="description" content="Lean Belly Juice is a powdered weight loss supplement from Ikaria. The supplement uses natural ingredients to support various benefits, including weight loss." />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                \'gtm.start\': new Date().getTime(),
                event: \'gtm.js\'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != \'dataLayer\' ? \'&l=\' + l : \'\';
            j.async = true;
            j.src =
                \'https://www.googletagmanager.com/gtm.js?id=\' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, \'script\', \'dataLayer\', \'GTM-5STRKFC\');
    </script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "gmta8gzamc");
    </script>
    <meta name="p:domain_verify" content="1afb352bcb89c17378d697671ae9ec19" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Ikaria Lean Belly Juice™ USA | Buy Genuine Ikaria Juice" />
    <meta name="twitter:description" content="Lean Belly Juice is a powdered weight loss supplement from Ikaria. The supplement uses natural ingredients to support various benefits, including weight loss." />
    <meta property="og:description" content="Lean Belly Juice is a powdered weight loss supplement from Ikaria. The supplement uses natural ingredients to support various benefits, including weight loss." />
    <meta property="og:title" content="Ikaria Lean Belly Juice™ USA | Buy Genuine Ikaria Juice" />
    <script type="application/ld+json">
        {
            "@context": {
                "@vocab": "http://schema.org/"
            },
            "@type": "HealthAndBeautyBusiness",
            "name": "Ikaria Lean Belly Juice",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "667 Ridgeview Dr",
                "addressLocality": "McHenry",
                "addressRegion": "IL",
                "postalCode": "60050",
                "addressCountry": "USA"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "42.31745",
                "longitude": "-88.28589"
            },
            "url": "https://bestofferhere.link/ikarialeanbelly",
            "description": "Lean Belly Juice is a powdered weight loss supplement from Ikaria. The supplement uses natural ingredients to support various benefits, including weight loss, blood pressure, joint health, digestion, and more.",
            "email": "contact@theikariajuice.com",
            "logo": "https://irp.cdn-website.com/9a89cede/dms3rep/multi/icon.png",
            "image": ["https://irp.cdn-website.com/9a89cede/dms3rep/multi/social+share-cd23dd27.png"],
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "00:00",
                "closes": "24:00"
            }],
            "@id": "https://bestofferhere.link/ikarialeanbelly"
        }
    </script>



    <!-- SYS- VVNfRElSRUNUX1BST0RVQ1RJT04= -->
</head>























<body id="dmRoot" data-page-alias="home" class="dmRoot dmDesktopBody fix-mobile-scrolling addCanvasBorder dmResellerSite dmLargeBody responsiveTablet " style="padding:0;margin:0;">
















    <!-- ========= Site Content ========= -->
    <div id="dm" class=\'dmwr\'>

        <div class="dm_wrapper standard-var5 widgetStyle-3 standard">
            <div dmwrapped="true" id="1901957768" class="dm-home-page" themewaschanged="true" desktop-global-classes="" tablet-global-classes="">
                <div dmtemplateid="Hamburger" data-responsive-name="ResponsiveDesktopTopTabletHamburger" class="runtime-module-container dm-bfs dm-layout-home hasAnimations inMiniHeaderMode hasStickyHeader hamburger-reverse dmPageBody d-page-1716942098 dmFreeHeader"
                    id="dm-outer-wrapper" data-page-class="1716942098" data-soch="true" data-background-parallax-selector=".dmHomeSection1, .dmSectionParallex">
                    <div id="dmStyle_outerContainer" class="dmOuter">
                        <div id="dmStyle_innerContainer" class="dmInner">
                            <div class="dmLayoutWrapper standard-var dmStandardDesktop">
                                <div id="site_content">
                                    <div class="p_hfcontainer showOnMedium">
                                        <div id="hamburger-drawer" class="hamburger-drawer layout-drawer" layout="e9d510f4eb904e939c2be8efaf777e6e===header" data-origin="side-reverse" data-auto-height="true">
                                            <div class="u_1826294544 dmRespRow" style="text-align: center;" id="1826294544">
                                                <div class="dmRespColsWrapper" id="1337204992">
                                                    <div class="u_1183846399 dmRespCol small-12 medium-12 large-12 empty-column" id="1183846399"></div>
                                                </div>
                                            </div>
                                            <div class="u_1021493186 dmRespRow middleDrawerRow" style="text-align: center;" id="1021493186">
                                                <div class="dmRespColsWrapper" id="1170137577">
                                                    <div class="dmRespCol small-12 u_1808057136 medium-12 large-12" id="1808057136">
                                                        <nav class="u_1144820115 effect-bottom2 main-navigation unifiednav dmLinksMenu" role="navigation" layout-main="vertical_nav_layout_2" layout-sub="" data-show-vertical-sub-items="HIDE" id="1144820115"
                                                            dmle_extension="onelinksmenu" data-element-type="onelinksmenu" data-logo-src="" alt="" data-nav-structure="VERTICAL" wr="true" icon="true" surround="true" adwords="" navigation-id="unifiedNav">
                                                            <ul role="menubar" class="unifiednav__container  " data-auto="navigation-pages">
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/" class="unifiednav__item  dmNavItemSelected  dmUDNavigationItem_010101747136  " target="" data-target-page-alias="" data-auto="selected-page"> <span class="nav-item-text " data-link-text="
         Ikaria Lean Belly Juice Official Website
        " data-auto="page-text-style">Ikaria Lean Belly Juice Official Website<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews" class="unifiednav__item  dmUDNavigationItem_010101296085  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Ikaria Lean Belly Juice Reviews
        " data-auto="page-text-style">Ikaria Lean Belly Juice Reviews<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#Overview" class="unifiednav__item  dmUDNavigationItem_010101388904  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Overview
        " data-auto="page-text-style">Overview<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#Rating" class="unifiednav__item  dmUDNavigationItem_0101016014  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Rating
        " data-auto="page-text-style">Rating<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#ProsandCons" class="unifiednav__item  dmUDNavigationItem_010101325646  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Pros and Cons
        " data-auto="page-text-style">Pros and Cons<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#Summary" class="unifiednav__item  dmUDNavigationItem_010101446004  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Summary
        " data-auto="page-text-style">Summary<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#HowDoesItWork" class="unifiednav__item  dmUDNavigationItem_010101257908  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         How Does It Work
        " data-auto="page-text-style">How Does It Work<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#Ingredients" class="unifiednav__item  dmUDNavigationItem_010101975061  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Ingredients
        " data-auto="page-text-style">Ingredients<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#WhoShouldBuy" class="unifiednav__item  dmUDNavigationItem_010101185760  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Who Should Buy
        " data-auto="page-text-style">Who Should Buy<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#FAQ" class="unifiednav__item  dmUDNavigationItem_010101747849  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         FAQ
        " data-auto="page-text-style">FAQ<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#Conclusion" class="unifiednav__item  dmUDNavigationItem_010101144156  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Conclusion
        " data-auto="page-text-style">Conclusion<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#Reviews" class="unifiednav__item  dmUDNavigationItem_010101142089  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Reviews
        " data-auto="page-text-style">Reviews<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/reviews#QaA" class="unifiednav__item  dmUDNavigationItem_010101388993  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Q a A
        " data-auto="page-text-style">Q a A<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                                <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/salepage" class="unifiednav__item  dmUDNavigationItem_01010154412  " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Ikaria Lean Belly Juice Salepage
        " data-auto="page-text-style">Ikaria Lean Belly Juice Salepage<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dmRespRow u_1676049285" style="text-align: center;" id="1676049285">
                                                <div class="dmRespColsWrapper" id="1888750820">
                                                    <div class="u_1916182198 dmRespCol small-12 medium-12 large-12 empty-column" id="1916182198"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layout-drawer-overlay" id="layout-drawer-overlay"></div>
                                    </div>
                                    <div class="site_content">
                                        <div id="hamburger-header-container" class="showOnMedium hamburger-header-container p_hfcontainer">
                                            <div id="hamburger-header" class="hamburger-header p_hfcontainer" layout="44dc38f951e9489490b055748e10ba9f===header">
                                                <div class="u_1705692124 dmRespRow" style="text-align: center;" id="1705692124">
                                                    <div class="dmRespColsWrapper" id="1469942216">
                                                        <div class="dmRespCol small-12 u_1655486006 medium-12 large-12" id="1655486006">
                                                            <div class="u_1923160809 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1923160809" data-binding="W3siYmluZGluZ05hbWUiOiJpbWFnZSIsInZhbHVlIjoic2l0ZV9pbWFnZXMubG9nbyJ9XQ==">
                                                            <a href="/home-404" id="1573522578" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/icon-1920w.png" id="1761992403" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/icon.png" width="243" height="42" alt="Logo" data-diy-image="" onerror="handleImageLoadError(this)"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dmHeaderContainer fHeader d-header-wrapper showOnLarge">
                                            <div id="hcontainer" class="u_hcontainer dmHeader p_hfcontainer" freeheader="true" headerlayout="b58ba5b5703b4cd7b5f5f7951565dc87===horizontal-layout-5" layout="78f5c343822e4eb3aac27f4ad5d13812===header" data-scrollable-target="body"
                                                data-scrollable-target-threshold="1" data-scroll-responder-id="1" logo-size-target="100%">
                                                <div dm:templateorder="85" class="dmHeaderResp dmHeaderStack noSwitch" id="1709005236">
                                                    <div class="u_1861705244 dmRespRow dmDefaultListContentRow" style="text-align:center" id="1861705244">
                                                        <div class="dmRespColsWrapper" id="1914255413">
                                                            <div class="u_1677919435 small-12 dmRespCol large-2 medium-2" id="1677919435">
                                                                <div class="u_1011018909 imageWidget align-center" data-widget-type="image" id="1011018909" data-element-type="image" data-binding="W3siYmluZGluZ05hbWUiOiJpbWFnZSIsInZhbHVlIjoic2l0ZV9pbWFnZXMubG9nbyJ9XQ==">
                                                                <a id="1066210600" class="" href="/old-home" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/icon-1920w.png" id="1456770677" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/icon.png" width="243" height="42" alt="Alpilean - Logo" data-diy-image="" onerror="handleImageLoadError(this)"/></a>
                                                                </div>
                                                            </div>
                                                            <div class="u_1455199902 dmRespCol small-12 large-10 medium-10" id="1455199902">
                                                                <nav class="u_1749703268 effect-text-color main-navigation unifiednav dmLinksMenu" role="navigation" layout-main="horizontal_nav_layout_1" layout-sub="submenu_horizontal_1" data-show-vertical-sub-items="HOVER"
                                                                    id="1749703268" dmle_extension="onelinksmenu" data-element-type="onelinksmenu" data-logo-src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/logo-1920w.png" alt="" data-nav-structure="HORIZONTAL"
                                                                    wr="true" icon="true" surround="true" adwords="" navigation-id="unifiedNav">
                                                                    <ul role="menubar" class="unifiednav__container  " data-auto="navigation-pages">
                                                                        <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/site/031d05f4/newlegit#About" class="unifiednav__item    " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         About
        " data-auto="page-text-style">About<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                        </li>
                                                                        <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/site/031d05f4/newlegit#Ingredients" class="unifiednav__item    " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Ingredients
        " data-auto="page-text-style">Ingredients<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                        </li>
                                                                        <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/site/031d05f4/newlegit#Benefits" class="unifiednav__item    " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Benefits
        " data-auto="page-text-style">Benefits<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                        </li>
                                                                        <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/site/031d05f4/newlegit#SideEffects" class="unifiednav__item    " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="
         Side Effects
        " data-auto="page-text-style">Side Effects<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                        </li>
                                                                        <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/newlegit#UserReviews" class="unifiednav__item    " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="User Reviews" data-auto="page-text-style">User Reviews<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                        </li>
                                                                        <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/newlegit#Guarantee" class="unifiednav__item    " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="Guarantee" data-auto="page-text-style">Guarantee<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                        </li>
                                                                        <li role="menuitem" class=" unifiednav__item-wrap " data-auto="more-pages" data-depth="0"> <a href="/newlegit#FAQ" class="unifiednav__item    " target="" data-target-page-alias=""> <span class="nav-item-text " data-link-text="FAQ" data-auto="page-text-style">FAQ<span class="icon icon-angle-down"></span> 
</span> 
</a>
                                                                        </li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stickyHeaderSpacer" id="stickyHeaderSpacer" data-new="true"></div>
                                        <div dmwrapped="true" id="1901957768" class="dmBody u_dmStyle_template_home dm-home-page" themewaschanged="true" desktop-global-classes="" tablet-global-classes="">
                                            <div id="allWrapper" class="allWrapper">
                                                <!-- navigation placeholders -->
                                                <div id="dm_content" class="dmContent">
                                                    <div dm:templateorder="170" class="dmHomeRespTmpl mainBorder dmRespRowsWrapper dmFullRowRespTmpl" id="1716942098">
                                                        <div class="u_1891465517 dmRespRow" id="1891465517">
                                                            <div class="dmRespColsWrapper" id="1968652097">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1054645433">
                                                                    <div class="dmNewParagraph sweezy-custom-cursor-hover u_1648729293" data-element-type="paragraph" data-version="5" id="1648729293" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center m-size-11 size-14"><span class="m-font-size-11 font-size-14" style="color: rgb(247, 236, 166); display: unset;">Warning:</span><span class="m-font-size-11 font-size-14" style="color: var(--color_3); display: unset;"> <span class="m-font-size-11 font-size-14" style="color: var(--color_3); display: unset;">Due to extremely high media demand, there is limited supply of Ikaria Juice&trade; Bottles in stock as of</span>
                                                                            </span><span class="m-font-size-11 font-size-14" style="color: rgb(247, 236, 166); display: unset;">June, 2023 HURRY!</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1431374399 dmRespRow" id="1431374399">
                                                            <div class="dmRespColsWrapper" id="1215253565">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1645438550">
                                                                    <div class="dmNewParagraph sweezy-custom-cursor-hover u_1875203639 ql-disabled" data-element-type="paragraph" data-version="5" id="1875203639" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <h1 style="line-height: 1; letter-spacing: 0.02em;" class="text-align-center m-size-35 size-70"><span style="display: initial; text-shadow: rgba(153, 153, 153, 0.1) 0px 3px 3px; font-weight: 600; font-family: GiorgioSans-Bold; color: rgb(21, 117, 195); text-transform: none;"
                                                                                class="font-size-70 m-font-size-35" m-font-size-set="true">Ikaria Lean Belly Juice</span></h1>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1759545246 dmRespRow" id="1759545246">
                                                            <div class="dmRespColsWrapper" id="1153184000">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1018417582">
                                                                    <div class="u_1124100189 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1124100189" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center size-60 m-size-45" style="letter-spacing: 0.02em; line-height: 1;"><span class="font-size-60 m-font-size-45" style="text-shadow: none; font-weight: normal; font-family: GiorgioSans-Bold; display: initial;"><span class="font-size-60 m-font-size-45" m-font-size-set="true" style="text-shadow: none; font-weight: normal; font-family: GiorgioSans-Bold; display: initial;">Flash Sale</span>
                                                                            </span><span class="font-size-60 m-font-size-45" style="text-shadow: none; font-weight: normal; font-family: GiorgioSans-Bold; display: initial; text-decoration: none;" m-font-size-set="true">ONLY</span>
                                                                            <span
                                                                                class="font-size-60 m-font-size-45" style="text-shadow: none; font-weight: normal; font-family: GiorgioSans-Bold; display: initial;"> <span class="font-size-60 m-font-size-45" style="text-shadow: none; font-weight: normal; font-family: GiorgioSans-Bold; display: initial;" m-font-size-set="true">For Today - Special Offer</span></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="u_1045735263 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1045735263" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h4 class="m-size-32 text-align-center size-40" style="letter-spacing: 0.02em;"><span class="m-font-size-32 font-size-40" style="font-family: GiorgioSans-Bold; display: unset;"><span style="font-family: GiorgioSans-Bold; display: unset;" class="m-font-size-32 font-size-40" m-font-size-set="true">Save Upto</span>
                                                                            </span><span style="font-family: \'Bebas Neue Pro Bold\'; display: unset;" class="m-font-size-32 font-size-40" m-font-size-set="true">$</span><span class="m-font-size-32 font-size-40"
                                                                                style="font-family: GiorgioSans-Bold; display: unset;"><span style="font-family: GiorgioSans-Bold; display: unset;" class="m-font-size-32 font-size-40" m-font-size-set="true">840</span>
                                                                            </span><span style="font-family: \'Bebas Neue Pro Bold\'; display: unset;" class="m-font-size-32 font-size-40" m-font-size-set="true">+</span><span class="m-font-size-32 font-size-40"
                                                                                style="font-family: GiorgioSans-Bold; display: unset;"> <span style="font-family: GiorgioSans-Bold; display: unset;" class="m-font-size-32 font-size-40" m-font-size-set="true">3 FREE Bonuses</span>
                                                                            </span><span style="font-family: \'Bebas Neue Pro Bold\'; display: unset;" class="m-font-size-32 font-size-40" m-font-size-set="true">+</span><span class="m-font-size-32 font-size-40"
                                                                                style="font-family: GiorgioSans-Bold; display: unset;"> <span style="font-family: GiorgioSans-Bold; display: unset;" class="m-font-size-32 font-size-40" m-font-size-set="true">180 Day Money Back Guarantee</span></span>
                                                                        </h4>
                                                                    </div>
                                                                    <div class="dmNewParagraph u_1881947210 sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1881947210" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <p style="line-height: 1; letter-spacing: 0.02em;" class="m-size-15 text-align-center size-19"><span style="font-weight: 300; font-family: Poppins; color: rgb(0, 0, 0); display: unset; font-style: normal;" class="m-font-size-15 font-size-19">(Limited Time Offer)</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1833541305 dmRespRow" id="1833541305">
                                                            <div class="dmRespColsWrapper" id="1129157967">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1529104882">
                                                                    <div class="dmRespRow u_1297471497" id="1297471497">
                                                                        <div class="dmRespColsWrapper" id="1035857010">
                                                                            <div class="dmRespCol small-12 medium-6 large-6" id="1919063053">
                                                                                <div class="u_1599389746 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1599389746"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/main-2498d3a0-462w.png" alt="Ikaria Lean Belly Juice Introducing" id="1061042112" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/main-2498d3a0.png"
                                                                                        width="510" height="358" onerror="handleImageLoadError(this)" /></div>
                                                                                <div class="u_1902863971 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1902863971" style="transition: none 0s ease 0s; text-align: left;">
                                                                                    <p class="m-size-15 text-align-center size-16" style="letter-spacing: -0.02em;"><a href="https://bestofferhere.link/ikarialeanbelly" runtime_url="https://bestofferhere.link/ikarialeanbelly" type="url" style="font-weight: 500; font-family: Poppins; display: unset; text-decoration: none; color: var(--color_3);"
                                                                                            class="m-font-size-15 font-size-16" m-font-size-set="true">One Time Purchase. No Subscription.</a></p>
                                                                                </div>
                                                                                <div class="u_1615954667 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1615954667" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p style="letter-spacing: -0.02em; line-height: 1.3;" class="text-align-center m-size-15 size-16"><span style="color: rgb(253, 142, 6); display: unset;" class="font-size-23 m-font-size-40" m-font-size-set="true">★★★★★</span><span single-space="true" class="font-size-23 m-font-size-40"
                                                                                            style="color: rgb(253, 142, 6); display: unset;"> <span style="color: rgb(253, 142, 6); display: unset;" class="font-size-23 m-font-size-40"></span>
                                                                                        </span><span style="display: unset;" class="font-size-16 m-font-size-15" m-font-size-set="true">Rated&nbsp;</span><span style="display: unset; font-family: Poppins; font-weight: 600;"
                                                                                            class="font-size-16 m-font-size-15" m-font-size-set="true">Excellent</span><span style="display: unset;" class="font-size-16 m-font-size-15" m-font-size-set="true">&nbsp;by&nbsp;</span>
                                                                                        <span
                                                                                            style="display: unset; font-family: Poppins; font-weight: 600;" class="font-size-16 m-font-size-15" m-font-size-set="true">215,000</span><span single-space="true" class="font-size-16 m-font-size-15" style="display: unset;"> <span style="display: unset;" class="font-size-16 m-font-size-15"></span>
                                                                                            </span><span style="display: unset;" class="font-size-16 m-font-size-15" m-font-size-set="true">Happy Customers</span></p>
                                                                                </div>
                                                                                <div class="u_1703653727 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1703653727" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="text-align-center m-size-17 size-21" style="line-height: 1;"><span class="font-size-21 m-font-size-17" style="display: unset;"><span class="font-size-21 m-font-size-17" style="display: unset;">Regular Price:</span>
                                                                                        </span><span class="font-size-30 m-font-size-24" style="display: unset; font-family: Poppins; font-weight: 700; text-decoration: line-through; color: rgb(192, 27, 27);">$199</span>
                                                                                        <span
                                                                                            class="font-size-21 m-font-size-17" style="display: unset;">/Bottle</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="u_1039290038 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1039290038" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="text-align-center size-23 m-size-22" style="line-height: 1;"><span class="font-size-23 m-font-size-22" style="font-weight: 500; font-family: Poppins; color: rgb(192, 27, 27); display: unset;" m-font-size-set="true">Now Only:</span>
                                                                                        <span
                                                                                            single-space="true" class="font-size-23 m-font-size-22" style="font-weight: 700; font-family: Poppins; color: rgb(192, 27, 27); display: unset;"> <span class="font-size-23 m-font-size-22" style="font-weight: 700; font-family: Poppins; color: rgb(192, 27, 27); display: unset;" m-font-size-set="true"></span>
                                                                                            </span><span class="font-size-40 m-font-size-35" style="font-weight: 700; font-family: Poppins; color: rgb(192, 27, 27); display: unset;" m-font-size-set="true">$39</span>
                                                                                            <span
                                                                                                class="font-size-23 m-font-size-22" style="font-weight: 500; font-family: Poppins; color: rgb(192, 27, 27); display: unset;" m-font-size-set="true">/Bottle</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dmRespCol small-12 medium-6 large-6 u_1332701410" id="1332701410">
                                                                                <div class="u_1615271845 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1615271845" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="text-align-left m-size-18 size-22" style="line-height: 1.9;"><span style="color: rgb(0, 0, 0); font-weight: 500; font-family: Poppins; display: unset;" class="font-size-22 m-font-size-18" m-font-size-set="true">The Breakthrough Natural Juice Formula That Burns Fat Easily and Effectively</span></p>
                                                                                </div>
                                                                                <div class="u_1012458858 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1012458858" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1;"><span style="font-family: CalendarSymbolWizard-Regular; display: unset; color: rgb(21, 117, 195);" class="m-font-size-16 font-size-20">~</span><span class="m-font-size-18 font-size-22"
                                                                                            style="display: unset; color: rgb(34, 94, 62);"><span style="display: unset; color: rgb(34, 94, 62);" class="m-font-size-18 font-size-22">&nbsp;</span>
                                                                                        </span><span style="display: unset; color: rgb(0, 0, 0); font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-20" m-font-size-set="true">Increase fat oxidation and fat burning</span></p>
                                                                                </div>
                                                                                <div class="u_1703996163 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1703996163" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1.3;"><span style="color: rgb(21, 117, 195); display: unset; font-family: CalendarSymbolWizard-Regular;" class="m-font-size-16 font-size-20">~</span><span class="m-font-size-18 font-size-22"
                                                                                            style="color: rgb(34, 94, 62); display: unset;"><span style="color: rgb(34, 94, 62); display: unset;" class="m-font-size-18 font-size-22">&nbsp;</span>
                                                                                        </span><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-20" m-font-size-set="true">Reduce cravings, control appetite and snacking</span></p>
                                                                                </div>
                                                                                <div class="u_1261934970 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1261934970" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1;"><span style="display: unset; color: rgb(21, 117, 195); font-family: CalendarSymbolWizard-Regular;" class="font-size-20 m-font-size-16">~</span><span class="m-font-size-18 font-size-22"
                                                                                            style="display: unset; color: rgb(34, 94, 62);"><span style="display: unset; color: rgb(34, 94, 62);" class="m-font-size-18 font-size-22">&nbsp;</span>
                                                                                        </span><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-20" m-font-size-set="true">Boost metabolism and increase energy</span></p>
                                                                                </div>
                                                                                <div class="u_1698263131 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1698263131" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1;"><span style="display: unset; color: rgb(21, 117, 195); font-family: CalendarSymbolWizard-Regular;" class="font-size-20 m-font-size-16">~</span><span class="m-font-size-18 font-size-22"
                                                                                            style="display: unset; color: rgb(34, 94, 62);"><span style="display: unset; color: rgb(34, 94, 62);" class="m-font-size-18 font-size-22">&nbsp;</span>
                                                                                        </span><span style="display: unset; color: rgb(0, 0, 0); font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-20" m-font-size-set="true">Support healthy blood pressure</span></p>
                                                                                </div>
                                                                                <div class="u_1657162425 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1657162425" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1;"><span style="display: unset; color: rgb(21, 117, 195); font-family: CalendarSymbolWizard-Regular;" class="font-size-20 m-font-size-16">~</span><span class="font-size-22 m-font-size-18"
                                                                                            style="display: unset; color: rgb(34, 94, 62);"><span style="display: unset; color: rgb(34, 94, 62);" class="font-size-22 m-font-size-18">&nbsp;</span>
                                                                                        </span><span style="display: unset; font-family: Poppins; font-weight: 400;" class="font-size-20 m-font-size-16" m-font-size-set="true">Support joint health</span></p>
                                                                                </div>
                                                                                <div class="u_1291641442 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1291641442" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1;"><span style="color: rgb(21, 117, 195); display: unset; font-family: CalendarSymbolWizard-Regular;" class="font-size-20 m-font-size-16">~</span><span class="m-font-size-18 font-size-22"
                                                                                            style="color: rgb(34, 94, 62); display: unset;"><span style="color: rgb(34, 94, 62); display: unset;" class="m-font-size-18 font-size-22">&nbsp;</span>
                                                                                        </span><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-20" m-font-size-set="true">Encourage healthy digestion</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1321267085 dmRespRow" id="1321267085">
                                                            <div class="dmRespColsWrapper" id="1386096960">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1510054909"> <a data-display-type="block" class="u_1604899368 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient" file="false" href="https://bestofferhere.link/ikarialeanbelly"
                                                                        data-element-type="dButtonLinkId" id="1604899368" data-buttonstyle="ROUND_SIDES"> <span class="iconBg" aria-hidden="true" id="1399251820"> <span class="icon hasFontIcon icon-star" id="1902371531"></span> 
</span> 
 <span class="text" id="1775964942">Buy Genuine Ikaria Juice Now &rarr;</span> 
</a>
                                                                    <div class="u_1014787302 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1014787302" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center m-size-14" style="line-height: 1;"><span style="font-weight: 400; font-family: Poppins; color: rgb(192, 27, 27); display: unset;" class="m-font-size-14" m-font-size-set="true">Offer Expires Soon!</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1920272822 dmRespRow" id="1920272822" data-anchor="Guarantee">
                                                            <div class="dmRespColsWrapper" id="1133595477">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1780518269">
                                                                    <div class="u_1374670749 dmRespRow" id="1374670749">
                                                                        <div class="dmRespColsWrapper" id="1158515546">
                                                                            <div class="dmRespCol large-12 medium-12 small-12" id="1989935343">
                                                                                <div class="u_1965043789 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1965043789" style="transition: none 0s ease 0s; text-align: left;">
                                                                                    <p style="line-height: 1.1; letter-spacing: 0.02em;" class="m-size-40 text-align-center size-55"><span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); text-transform: uppercase; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px;" class="m-font-size-40 font-size-55"
                                                                                            m-font-size-set="true">100</span><span style="font-family: \'Bebas Neue Pro Bold\'; display: unset; color: var(--color_3); text-transform: uppercase; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px;"
                                                                                            class="m-font-size-40 font-size-55" m-font-size-set="true">%</span><span single-space="true" class="m-font-size-40 font-size-55" style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); text-transform: uppercase; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px;"> <span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); text-transform: uppercase; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px;" class="m-font-size-40 font-size-55"></span>
                                                                                        </span><span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); text-transform: uppercase; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px;"
                                                                                            class="m-font-size-40 font-size-55" m-font-size-set="true">Satisfaction</span></p>
                                                                                    <p style="line-height: 1.1; letter-spacing: 0.02em;" class="m-size-40 text-align-center size-55"><span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); text-transform: uppercase; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px;" class="m-font-size-40 font-size-55"
                                                                                            m-font-size-set="true">180-Day Money Back Guarantee</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1411761696 dmRespRow" id="1411761696">
                                                                        <div class="dmRespColsWrapper" id="1235346224">
                                                                            <div class="u_1965351538 dmRespCol small-12 large-3 medium-3" id="1965351538">
                                                                                <div class="u_1022408258 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1022408258"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/guarantee-74c1ab69-265w.png" alt="Ikaria Lean Belly Juice Money Back Guarantee" id="1876013224" class=""
                                                                                        data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/guarantee-74c1ab69.png" width="250" height="250" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"
                                                                                    /></div>
                                                                            </div>
                                                                            <div class="u_1640795349 dmRespCol small-12 large-9 medium-9" id="1640795349">
                                                                                <div class="u_1773048383 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1773048383" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-18 m-text-align-center text-align-left size-23" style="line-height: 1.8;"><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="m-font-size-18 font-size-23" m-font-size-set="true">We are so confident you&rsquo;ll</span>
                                                                                        <span
                                                                                            single-space="true" class="m-font-size-18 font-size-23" style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);"> <span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="m-font-size-18 font-size-23"></span>
                                                                                            </span><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: rgb(237, 187, 2); font-weight: 600; font-family: Poppins;" class="m-font-size-18 font-size-23"
                                                                                                m-font-size-set="true">enjoy life-changing</span><span single-space="true" class="m-font-size-18 font-size-23" style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3); font-weight: 600; font-family: Poppins;"> <span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3); font-weight: 600; font-family: Poppins;" class="m-font-size-18 font-size-23"></span>
                                                                                            </span><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3); font-weight: 600; font-family: Poppins;" class="m-font-size-18 font-size-23"
                                                                                                m-font-size-set="true">results</span><span single-space="true" class="m-font-size-18 font-size-23" style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);"> <span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="m-font-size-18 font-size-23"></span>
                                                                                            </span><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="m-font-size-18 font-size-23" m-font-size-set="true">that we&rsquo;re prepared to back up the Ikaria Lean Belly Juice with a 100% satisfaction guarantee for the next 180 days.</span></p>
                                                                                    <p
                                                                                        class="m-text-align-center text-align-left" style="line-height: 1.8;"><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);"><br/></span></p>
                                                                                        <p class="m-text-align-center text-align-left m-size-16 size-18"
                                                                                            style="line-height: 1.8;"><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="font-size-18 m-font-size-16" m-font-size-set="true">If you are not absolutely astounded by how quickly your excess fat melt from your frame, and how much younger and healthier you feel day after day&hellip;</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dmRespRow u_1039389069" id="1039389069">
                                                                        <div class="dmRespColsWrapper" id="1355430169">
                                                                            <div class="dmRespCol small-12 medium-12 large-12" id="1904524285">
                                                                                <div class="dmNewParagraph u_1353454925" data-element-type="paragraph" data-version="5" id="1353454925" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p style="line-height: 1.8;" class="m-text-align-center"><span style="display: unset; color: var(--color_3); text-shadow: rgba(0, 0, 0, 0.2) 0px 3px 3px;">Then we will only be too happy to refund you every cent. No questions asked. It&rsquo;s time to get in the driver&rsquo;s seat and be in control of your health again.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1919486970 dmRespRow" id="1919486970" data-anchor="User Reviews">
                                                            <div class="dmRespColsWrapper" id="1806787989">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1507249258">
                                                                    <div data-element-type="spacer" class="u_1838994095 dmSpacer hide-for-small" id="1838994095"></div>
                                                                    <div class="u_1766986756 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1766986756" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h2 style="line-height: 1; letter-spacing: 0.02em;" class="text-align-center m-size-40 size-55"><span class="font-size-55 m-font-size-40" style="color: rgb(0, 0, 0); font-family: GiorgioSans-Bold; font-weight: normal; display: initial; text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 5px;"><span style="color: rgb(0, 0, 0); font-family: GiorgioSans-Bold; font-weight: normal; display: initial; text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 5px;" class="font-size-55 m-font-size-40" m-font-size-set="true">Real Ikaria Lean Belly Juice Users.</span>
                                                                            </span>
                                                                        </h2>
                                                                        <h2 style="line-height: 1; letter-spacing: 0.02em;" class="text-align-center m-size-40 size-55"><span style="color: rgb(0, 0, 0); font-family: GiorgioSans-Bold; font-weight: normal; display: initial; text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 5px;" class="font-size-55 m-font-size-40"
                                                                                m-font-size-set="true"><span class="ql-cursor">﻿</span>Real</span><span single-space="true" class="font-size-55 m-font-size-40" style="color: rgb(0, 0, 0); font-family: GiorgioSans-Bold; display: initial;"> <span style="color: rgb(0, 0, 0); font-family: GiorgioSans-Bold; display: initial;" class="font-size-55 m-font-size-40"></span>
                                                                            </span><span style="color: rgb(192, 27, 27); font-family: GiorgioSans-Bold; display: initial; font-weight: normal; text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 5px; font-style: normal; text-decoration: none;"
                                                                                class="font-size-55 m-font-size-40" m-font-size-set="true">Life Changing-Results</span></h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1476038171 dmRespRow" id="1476038171">
                                                            <div class="dmRespColsWrapper" id="1562683092">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1422968807">
                                                                    <div class="u_1775660254 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1775660254"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/userm-1920w.jpg" id="1344730266" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/userm.jpg"
                                                                            width="1052" height="1030" alt="Ikaria Lean Belly Juice Testimonials" onerror="handleImageLoadError(this)" /></div>
                                                                    <div class="u_1064732768 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1064732768"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/user-1082w.jpg" id="1994094308" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/user.jpg"
                                                                            width="1539" height="434" alt="Ikaria Lean Belly Juice Testimonials" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1768602736 dmRespRow" id="1768602736">
                                                            <div class="dmRespColsWrapper" id="1857751287">
                                                                <div class="u_1014348871 dmRespCol small-12 large-2 medium-2" id="1014348871">
                                                                    <div class="u_1425417497 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1425417497"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/user1-174w.jpg" alt="Ikaria Lean Belly Juice User 1" id="1982894242" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/user1.jpg"
                                                                            width="250" height="250" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                                <div class="u_1343943560 dmRespCol small-12 large-10 medium-10" id="1343943560">
                                                                    <div class="dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1798836537" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-18 size-22" style="line-height: 1.5;"><span style="color: rgb(0, 0, 0); display: unset; font-family: Poppins; font-weight: 600; font-style: italic;" class="font-size-22 m-font-size-18">Greg has dropped a staggering 27.5lbs</span>
                                                                            <span
                                                                                style="display: initial;"><br/></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="u_1393711786 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1393711786" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-14 size-18" style="line-height: 1;"><span class="font-size-24 m-font-size-19" style="color: rgb(234, 143, 4); display: unset;">★★★★★</span><span single-space="true" class="font-size-24 m-font-size-19" style="color: rgb(192, 27, 27); display: unset;"> <span class="font-size-24 m-font-size-19" style="color: rgb(192, 27, 27); display: unset;"></span>
                                                                            </span><span class="font-size-18 m-font-size-14" style="color: rgb(192, 27, 27); display: unset; font-family: Poppins; font-weight: 600;">Verified Purchase</span></p>
                                                                    </div>
                                                                    <div class="u_1685755932 dmRespRow" id="1685755932">
                                                                        <div class="dmRespColsWrapper" id="1313625935">
                                                                            <div class="dmRespCol small-12 medium-12 large-12 u_1672268946" id="1672268946">
                                                                                <div class="u_1541059906 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1541059906" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p style="direction: ltr; line-height: 1.7;" class="m-size-14 size-18"><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-14 font-size-18" m-font-size-set="true">&quot;All that I can say is that I love this. I&rsquo;m down a pant size in less than 3 weeks. I can&rsquo;t even believe it. It&rsquo;s so unexpected because I still enjoy my regular food, plus wine and beer a few times a week. The best thing is I know that I&rsquo;m losing weight the healthy way.&quot;</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-element-type="spacer" class="dmSpacer u_1249897630" id="1249897630"></div>
                                                                    <div class="dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1852596802" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p><span style="font-weight: 600; font-family: Poppins; display: unset;">Greg R.</span><span class="" style="display: unset;"> <span style="display: unset;">- Akron, OH</span></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1567928955 dmRespRow" id="1567928955">
                                                            <div class="dmRespColsWrapper" id="1476040958">
                                                                <div class="u_1208645724 dmRespCol small-12 large-2 medium-2" id="1208645724">
                                                                    <div class="u_1870579074 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1870579074"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/user2-174w.jpg" alt="Ikaria Lean Belly Juice User 2" id="1720664715" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/user2.jpg"
                                                                            width="250" height="250" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                                <div class="u_1990189342 dmRespCol small-12 large-10 medium-10" id="1990189342">
                                                                    <div class="dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1601585726" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-18 size-22" style="line-height: 1.5;"><span style="display: unset; font-weight: 600; color: rgb(0, 0, 0); font-family: Poppins; font-style: italic;" class="font-size-22 m-font-size-18">Nancy is 32lbs lighter and still going strong</span>
                                                                            <span
                                                                                style="display: initial;"><br/></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="u_1792736249 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1792736249" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-14 size-18" style="line-height: 1;"><span class="font-size-24 m-font-size-19" style="color: rgb(234, 143, 4); display: unset;">★★★★★</span><span single-space="true" class="font-size-24 m-font-size-19" style="color: rgb(204, 121, 0); display: unset;"> <span class="font-size-24 m-font-size-19" style="color: rgb(204, 121, 0); display: unset;"></span>
                                                                            </span><span class="font-size-18 m-font-size-14" style="color: rgb(192, 27, 27); display: unset; font-family: Poppins; font-weight: 600;">Verified Purchase</span></p>
                                                                    </div>
                                                                    <div class="u_1777686850 dmRespRow" id="1777686850">
                                                                        <div class="dmRespColsWrapper" id="1605907820">
                                                                            <div class="dmRespCol small-12 medium-12 large-12 u_1807826073" id="1807826073">
                                                                                <div class="u_1003009059 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1003009059" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p style="direction: ltr; line-height: 1.7;" class="m-size-14 size-18"><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-14 font-size-18" m-font-size-set="true">&quot;Over the last 3 months, I&rsquo;m down an amazing 32 pounds! My mindset, self-image and outlook on life is better than ever. I&rsquo;m able to be more active with my children. My life has changed so dramatically and my children have a healthier mommy that can enjoy life with them.&quot;</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-element-type="spacer" class="dmSpacer u_1871803630" id="1871803630"></div>
                                                                    <div class="dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1341801146" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p><span style="display: unset; font-family: Poppins; font-weight: 600;">Nancy B.</span><span class="" style="display: unset;"> <span style="display: unset;">- Ann Arbor, MI</span></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1415570939 dmRespRow" id="1415570939">
                                                            <div class="dmRespColsWrapper" id="1357078517">
                                                                <div class="u_1275753431 dmRespCol small-12 large-2 medium-2" id="1275753431">
                                                                    <div class="u_1666162566 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1666162566"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/user3-174w.jpg" alt="Ikaria Lean Belly Juice User 3" id="1215786945" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/user3.jpg"
                                                                            width="250" height="250" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                                <div class="u_1709381249 dmRespCol small-12 large-10 medium-10" id="1709381249">
                                                                    <div class="dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1961536364" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-18 size-22" style="line-height: 1.5;"><span style="font-weight: 600; display: unset; font-style: italic; font-family: Poppins; color: rgb(0, 0, 0);" class="m-font-size-18 font-size-22">Debbi obliterated 24lbs</span>
                                                                            <span
                                                                                style="display: initial;"><br/></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="u_1956567991 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1956567991" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-14 size-18" style="line-height: 1;"><span style="color: rgb(234, 143, 4); display: unset;" class="font-size-24 m-font-size-19">★★★★★</span><span single-space="true" class="font-size-24 m-font-size-19" style="color: rgb(204, 121, 0); display: unset;"> <span style="color: rgb(204, 121, 0); display: unset;" class="font-size-24 m-font-size-19"></span>
                                                                            </span><span style="color: rgb(192, 27, 27); display: unset; font-family: Poppins; font-weight: 600;" class="font-size-18 m-font-size-14">Verified Purchase</span></p>
                                                                    </div>
                                                                    <div class="u_1741408716 dmRespRow" id="1741408716">
                                                                        <div class="dmRespColsWrapper" id="1366189931">
                                                                            <div class="dmRespCol small-12 medium-12 large-12 u_1511315040" id="1511315040">
                                                                                <div class="u_1009733197 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1009733197" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p style="direction: ltr; line-height: 1.7;" class="m-size-14 size-18"><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-14 font-size-18" m-font-size-set="true">&quot;This morning I actually cried. Because when I stepped on the scale I was down almost 24lbs after only 8 weeks which is crazy. Every time I walk past a mirror I actually have to do a double-take because I&rsquo;m just looking at myself in a whole new way and people are as well. Sometimes I can&rsquo;t actually believe that this is me.&quot;</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-element-type="spacer" class="dmSpacer u_1739662571" id="1739662571"></div>
                                                                    <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1536377041" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p><span style="display: unset; font-family: Poppins; font-weight: 600;">Debbi S.</span><span class="" style="display: unset;"> <span style="display: unset;">- Henderson, NV</span></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1841998348 dmRespRow" id="1841998348">
                                                            <div class="dmRespColsWrapper" id="1858678396">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1421450849">
                                                                    <div data-element-type="spacer" class="u_1891022185 dmSpacer hide-for-small" id="1891022185"></div>
                                                                    <div data-element-type="spacer" class="dmSpacer u_1020531290" id="1020531290"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1124661870 dmRespRow" id="1124661870" data-anchor="Guarantee">
                                                            <div class="dmRespColsWrapper" id="1532091608">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1376932707">
                                                                    <div class="u_1972583192 dmRespRow" id="1972583192">
                                                                        <div class="dmRespColsWrapper" id="1933063910">
                                                                            <div class="dmRespCol large-12 medium-12 small-12 u_1207721568" id="1207721568">
                                                                                <div class="u_1682947824 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1682947824" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <h2 class="m-size-40 text-align-center m-text-align-center size-55" style="line-height: 1; letter-spacing: 0.02em;"><span style="display: unset; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 3px; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3);" class="m-font-size-40 font-size-55"
                                                                                            m-font-size-set="true">WHY CHOOSE IKARIA LEAN BELLY JUICE</span></h2>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1146575732 dmRespRow hide-for-small" id="1146575732">
                                                                        <div class="dmRespColsWrapper" id="1102073951">
                                                                            <div class="dmRespCol small-12 large-3 medium-3" id="1834897984">
                                                                                <div class="u_1295279532 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1295279532"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/usa-229w.png" alt="Ikaria Lean Belly Juice USA" id="1280651138" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/usa.png"
                                                                                        width="300" height="300" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                            <div class="dmRespCol small-12 large-3 medium-3" id="1689211308">
                                                                                <div class="u_1097891153 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1097891153"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/natural-229w.png" alt="Ikaria Lean Belly Juice Natural" id="1178063522" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/natural.png"
                                                                                        width="300" height="300" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                            <div class="dmRespCol small-12 large-3 medium-3" id="1686248518">
                                                                                <div class="u_1921527786 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1921527786"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/fda-229w.png" alt="Ikaria Lean Belly Juice FDA" id="1230460884" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/fda.png"
                                                                                        width="300" height="300" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                            <div class="dmRespCol large-3 medium-3 small-12" id="1079447115">
                                                                                <div class="u_1883736097 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1883736097"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/gmp-229w.png" alt="Ikaria Lean Belly Juice GMP" id="1687503526" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/gmp.png"
                                                                                        width="300" height="300" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dmRespRow u_1089135743" id="1089135743">
                                                                        <div class="dmRespColsWrapper" id="1806083256">
                                                                            <div class="dmRespCol small-12 large-3 medium-3" id="1893708853">
                                                                                <div class="u_1882237318 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1882237318"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/usa-e014d5c9-1920w.png" alt="Ikaria Lean Belly Juice USA" id="1269289354" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/usa-e014d5c9.png"
                                                                                        width="1263" height="864" onerror="handleImageLoadError(this)" /></div>
                                                                                <div class="u_1019051324 dmNewParagraph hide-for-small" data-element-type="paragraph" data-version="5" id="1019051324" style="transition: opacity 1s ease-in-out 0s;">
                                                                                    <p class="text-align-center m-size-28 size-35" style="line-height: 1;"><span style="color: var(--color_3); display: unset; font-family: GiorgioSans-Bold; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 3px;" class="font-size-35 m-font-size-28">Made in the USA</span></p>
                                                                                </div>
                                                                                <div class="u_1247076667 dmNewParagraph sweezy-custom-cursor-hover hide-for-small" data-element-type="paragraph" data-version="5" id="1247076667" style="transition: none 0s ease 0s; text-align: left;">
                                                                                    <p class="text-align-center"><span style="color: var(--color_3); display: unset;">Ikaria Lean Belly Juice manufactured on US Soil.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dmRespCol small-12 large-3 medium-3" id="1423177275">
                                                                                <div class="u_1287882325 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1287882325"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/gmp-1ccb89e7-1920w.png" alt="Ikaria Lean Belly Juice Natural" id="1963140653" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/gmp-1ccb89e7.png"
                                                                                        width="1263" height="936" onerror="handleImageLoadError(this)" /></div>
                                                                                <div class="u_1592896043 dmNewParagraph hide-for-small" data-element-type="paragraph" data-version="5" id="1592896043" style="transition: opacity 1s ease-in-out 0s; text-align: left;">
                                                                                    <p class="text-align-center m-size-28 size-35" style="line-height: 1;"><span style="color: var(--color_3); display: unset; font-family: GiorgioSans-Bold; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 3px;" class="font-size-35 m-font-size-28">100</span>
                                                                                        <span
                                                                                            style="color: var(--color_3); display: unset; font-family: \'Bebas Neue Pro Bold\'; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 3px;" class="font-size-35 m-font-size-28">%</span><span class="font-size-35 m-font-size-28" style="color: var(--color_3); display: unset; font-family: GiorgioSans-Bold; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 3px;"> <span style="color: var(--color_3); display: unset; font-family: GiorgioSans-Bold; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 3px;" class="font-size-35 m-font-size-28">All Natural</span></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="u_1236421798 dmNewParagraph sweezy-custom-cursor-hover hide-for-small" data-element-type="paragraph" data-version="5" id="1236421798" style="transition: none 0s ease 0s; text-align: left;">
                                                                                    <p class="text-align-center"><span style="display: unset; color: var(--color_3);">All ingredients are purely natural and carefully sourced.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dmRespCol small-12 large-3 medium-3" id="1667848464">
                                                                                <div class="u_1493135457 dmNewParagraph hide-for-small" data-element-type="paragraph" data-version="5" id="1493135457" style="transition: opacity 1s ease-in-out 0s; text-align: left;">
                                                                                    <p class="text-align-center m-size-28 size-35" style="line-height: 1;"><span style="color: var(--color_3); display: unset; font-family: GiorgioSans-Bold; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 3px;" class="font-size-35 m-font-size-28">FDA Approved</span></p>
                                                                                </div>
                                                                                <div class="u_1695617313 dmNewParagraph sweezy-custom-cursor-hover hide-for-small" data-element-type="paragraph" data-version="5" id="1695617313" style="transition: none 0s ease 0s; text-align: left;">
                                                                                    <p class="text-align-center"><span style="display: unset; color: var(--color_3);">Ikaria Lean Belly Juice manufactured according to the latest standards.</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dmRespCol large-3 medium-3 small-12" id="1711778130">
                                                                                <div class="u_1323165413 dmNewParagraph hide-for-small" data-element-type="paragraph" data-version="5" id="1323165413" style="transition: opacity 1s ease-in-out 0s; text-align: left;">
                                                                                    <p class="text-align-center m-size-28 size-35" style="line-height: 1;"><span style="color: var(--color_3); display: unset; font-family: GiorgioSans-Bold; text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 3px;" class="font-size-35 m-font-size-28">GMP-Certified</span></p>
                                                                                </div>
                                                                                <div class="u_1945213421 dmNewParagraph sweezy-custom-cursor-hover hide-for-small" data-element-type="paragraph" data-version="5" id="1945213421" style="transition: none 0s ease 0s; text-align: left;">
                                                                                    <p class="text-align-center"><span style="display: unset; color: var(--color_3);">Ikaria Lean Belly Juice is Good manufacturing practice.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1355534888 dmRespRow" id="1355534888">
                                                            <div class="dmRespColsWrapper" id="1853453035">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1912042617">
                                                                    <div class="u_1738762018 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1738762018" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h2 style="letter-spacing: 0.02em; line-height: 1;" class="m-size-40 text-align-center size-55"><span style="font-weight: normal; text-shadow: none; color: rgb(0, 0, 0); display: initial; font-family: GiorgioSans-Bold;" class="m-font-size-40 font-size-55" m-font-size-set="true">Ikaria Lean Belly Juice Ingredients</span></h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1763077514 dmRespRow" id="1763077514">
                                                            <div class="dmRespColsWrapper" id="1806533740">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1553666941">
                                                                    <div class="u_1589329659 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1589329659" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p style="line-height: 1.9;" class="m-size-16"><span style="font-weight: 600; font-family: Poppins; display: unset;" m-font-size-set="true" class="m-font-size-16">In every scoop of Ikaria Lean Belly Juice you&rsquo;ll find:</span>
                                                                            <span
                                                                                class="m-font-size-16" style="display: unset;"> <span style="display: unset;" m-font-size-set="true" class="m-font-size-16">A metabolic blend of 8 of the most powerful, exotic fat-burning nutrients on the planet.</span></span>
                                                                                <span
                                                                                    style="display: initial;"><br/></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="u_1649213186 dmRespRow hide-for-medium hide-for-large" id="1649213186">
                                                                        <div class="dmRespColsWrapper" id="1251133992">
                                                                            <div class="dmRespCol small-12 medium-12 large-12" id="1732699929">
                                                                                <div class="u_1989502636 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1989502636"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/ingredients+list+1-a5fa7bb1-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 1" id="1075188515" class=""
                                                                                        data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/ingredients+list+1-a5fa7bb1.png" width="1013" height="711" onerror="handleImageLoadError(this)"
                                                                                    /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1238934127 dmRespRow hide-for-medium hide-for-large" id="1238934127">
                                                                        <div class="dmRespColsWrapper" id="1250803628">
                                                                            <div class="dmRespCol small-12 medium-12 large-12" id="1812355916">
                                                                                <div class="u_1003038128 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1003038128"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/ingredients+list+2-daed6496-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 2" id="1801053123" class=""
                                                                                        data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/ingredients+list+2-daed6496.png" width="948" height="612" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1652795593 dmRespRow hide-for-medium hide-for-large" id="1652795593">
                                                                        <div class="dmRespColsWrapper" id="1627233686">
                                                                            <div class="dmRespCol small-12 medium-12 large-12" id="1119195744">
                                                                                <div class="u_1009455740 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1009455740"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/ingredients+list+3-6f013f9b-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 3" id="1265732055" class=""
                                                                                        data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/ingredients+list+3-6f013f9b.png" width="984" height="663" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1143648392 dmRespRow hide-for-small" id="1143648392">
                                                                        <div class="dmRespColsWrapper" id="1894587026">
                                                                            <div class="dmRespCol small-12 medium-12 large-12" id="1958463857">
                                                                                <div class="imageWidget align-center u_1319767731" data-element-type="image" data-widget-type="image" id="1319767731"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/ingredients-list-1-70e6e73d-1152w.png" alt="Ikaria Lean Belly Juice Ingredients List 1" id="1926559484" class=""
                                                                                        data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/ingredients-list-1-70e6e73d.png" width="1571" height="712" onerror="handleImageLoadError(this)"
                                                                                    /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1571904791 dmRespRow hide-for-small" id="1571904791">
                                                                        <div class="dmRespColsWrapper" id="1134749398">
                                                                            <div class="dmRespCol small-12 medium-12 large-12" id="1339357044">
                                                                                <div class="u_1799179057 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1799179057"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/ingredients-list-2-6dcaa68a-1152w.png" alt="Ikaria Lean Belly Juice Ingredients List 2" id="1788011187" class=""
                                                                                        data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/ingredients-list-2-6dcaa68a.png" width="1657" height="674" onerror="handleImageLoadError(this)"
                                                                                    /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1503322030 dmRespRow hide-for-small" id="1503322030">
                                                                        <div class="dmRespColsWrapper" id="1565257768">
                                                                            <div class="dmRespCol small-12 medium-12 large-12 u_1508090708" id="1508090708">
                                                                                <div class="u_1814784785 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1814784785"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/ingredients+list+3-736w.png" alt="Ikaria Lean Belly Juice Ingredients List 3" id="1013334854" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/ingredients+list+3.png"
                                                                                        width="1083" height="723" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1778514162 dmRespRow hide-for-medium hide-for-large" id="1778514162">
                                                                        <div class="dmRespColsWrapper" id="1357101263">
                                                                            <div class="dmRespCol small-12 medium-12 large-12" id="1710239672">
                                                                                <div class="u_1952082330 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1952082330"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/ingredients+list+4-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 4" id="1187803682" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/ingredients+list+4.png"
                                                                                        width="924" height="702" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1710531079 dmRespRow" id="1710531079">
                                                                        <div class="dmRespColsWrapper" id="1521436946">
                                                                            <div class="dmRespCol large-12 medium-12 small-12" id="1880369995">
                                                                                <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1179454994" style="transition: opacity 1s ease-in-out 0s;">
                                                                                    <p class="text-align-center m-size-35 size-55" style="line-height: 1;"><span style="font-family: GiorgioSans-Bold; display: unset;" class="font-size-55 m-font-size-35" m-font-size-set="true">+ A proprietary blend of 8 additional ingredients</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1260756097 dmRespRow hide-for-small" id="1260756097">
                                                                        <div class="dmRespColsWrapper" id="1064604013">
                                                                            <div class="dmRespCol small-12 medium-12 large-12 u_1035261442" id="1035261442">
                                                                                <div class="u_1482093476 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1482093476"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/additional+ingredients-1152w.png" alt="Ikaria Lean Belly Juice Ingredients List 4" id="1139824926" class=""
                                                                                        data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/additional+ingredients.png" width="1701" height="852" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1164697018 dmRespRow hide-for-medium hide-for-large" id="1164697018">
                                                            <div class="dmRespColsWrapper" id="1205370460">
                                                                <div class="dmRespCol small-12 medium-12 large-12" id="1937356597">
                                                                    <div class="u_1895757223 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1895757223"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/add+ingredients+1-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 5" id="1015145065" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/add+ingredients+1.png"
                                                                            width="1179" height="573" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1272642908 dmRespRow hide-for-medium hide-for-large" id="1272642908">
                                                            <div class="dmRespColsWrapper" id="1540582732">
                                                                <div class="dmRespCol small-12 medium-12 large-12" id="1661772324">
                                                                    <div class="u_1248956498 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1248956498"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/add+ingredients+2-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 6" id="1416061005" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/add+ingredients+2.png"
                                                                            width="652" height="549" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1308396829 dmRespRow hide-for-medium hide-for-large" id="1308396829">
                                                            <div class="dmRespColsWrapper" id="1069081905">
                                                                <div class="dmRespCol small-12 medium-12 large-12" id="1800696493">
                                                                    <div class="u_1907039317 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1907039317"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/add+ingredients+3-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 7" id="1602719658" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/add+ingredients+3.png"
                                                                            width="533" height="547" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1314881644 dmRespRow hide-for-medium hide-for-large" id="1314881644">
                                                            <div class="dmRespColsWrapper" id="1202998463">
                                                                <div class="dmRespCol small-12 medium-12 large-12" id="1155334883">
                                                                    <div class="u_1602306441 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1602306441"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/add+ingredients+4-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 8" id="1075782384" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/add+ingredients+4.png"
                                                                            width="722" height="563" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1879519027 dmRespRow hide-for-medium hide-for-large" id="1879519027">
                                                            <div class="dmRespColsWrapper" id="1243483386">
                                                                <div class="dmRespCol small-12 medium-12 large-12" id="1362124938">
                                                                    <div class="u_1161961137 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1161961137"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/add+ingredients+5-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 9" id="1955929920" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/add+ingredients+5.png"
                                                                            width="660" height="565" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1740636457 dmRespRow hide-for-medium hide-for-large" id="1740636457">
                                                            <div class="dmRespColsWrapper" id="1716866600">
                                                                <div class="dmRespCol small-12 medium-12 large-12" id="1063678324">
                                                                    <div class="u_1122952119 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1122952119"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/add+ingredients+6-1920w.png" alt="Ikaria Lean Belly Juice Ingredients List 10" id="1748623584" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/add+ingredients+6.png"
                                                                            width="588" height="558" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1335801560 dmRespRow" id="1335801560">
                                                            <div class="dmRespColsWrapper" id="1882427169">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1920440003">
                                                                    <div class="u_1766064744 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1766064744" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <p style="letter-spacing: 0.02em; line-height: 1.2;" class="text-align-center m-size-35 size-50"><span style="font-style: normal; color: rgb(255, 214, 0); display: unset; font-family: GiorgioSans-Bold;" class="font-size-50 m-font-size-35" m-font-size-set="true">ACT NOW:</span>
                                                                            <span
                                                                                single-space="true" class="font-size-50 m-font-size-35" style="font-style: normal; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;"> <span style="font-style: normal; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;" class="font-size-50 m-font-size-35"></span>
                                                                                </span><span style="font-style: normal; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;" class="font-size-50 m-font-size-35" m-font-size-set="true">Due To High Demand And Stock Running Low These Discount Prices Are</span>
                                                                                <span
                                                                                    single-space="true" class="font-size-50 m-font-size-35" style="font-style: normal; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;"> <span style="font-style: normal; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;" class="font-size-50 m-font-size-35"></span>
                                                                                    </span><span style="font-style: normal; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;" class="font-size-50 m-font-size-35" m-font-size-set="true">For A</span>
                                                                                    <span
                                                                                        single-space="true" class="font-size-50 m-font-size-35" style="font-style: normal; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;"> <span style="font-style: normal; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;" class="font-size-50 m-font-size-35"></span>
                                                                                        </span><span style="font-style: normal; color: rgb(255, 214, 0); display: unset; font-family: GiorgioSans-Bold;" class="font-size-50 m-font-size-35" m-font-size-set="true">Limited Time ONLY!</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1683509226 dmRespRow" id="1683509226">
                                                            <div class="dmRespColsWrapper" id="1075337943">
                                                                <div class="dmRespCol small-12 large-4 medium-4" id="1603846329">
                                                                    <div class="u_1212164071 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1212164071"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1752730432" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/6-bottles-0b2b31d1-1920w.png" alt="6 Bottles" id="1691784934" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/6-bottles-0b2b31d1.png" width="395" height="837" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                    <div class="u_1560300675 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1560300675"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1372754967" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/3-bottles-e3a13598-1920w.png" alt="3 Bottles" id="1175659892" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/3-bottles-e3a13598.png" width="399" height="821" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                    <div class="u_1056920397 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1056920397"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1109552836" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/1-bottle-9ed61256-1920w.png" alt="1 Bottle" id="1617059810" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/1-bottle-9ed61256.png" width="400" height="861" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                    <div class="u_1502011428 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1502011428"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1022343209" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/1+bottle-366w.png" alt="1 bottle" id="1652710414" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/1+bottle.png" width="400" height="937" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                </div>
                                                                <div class="dmRespCol small-12 large-4 medium-4" id="1621562524">
                                                                    <div class="u_1389351381 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1389351381"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1986857270" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/6+bottles-366w.png" alt="6 bottles" id="1574034697" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/6+bottles.png" width="395" height="935" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                </div>
                                                                <div class="dmRespCol large-4 medium-4 small-12" id="1032323626">
                                                                    <div class="u_1473951776 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1473951776"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1542743844" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/3+bottles-366w.png" alt="3 bottles" id="1995897323" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/3+bottles.png" width="399" height="939" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1880317706 dmRespRow" id="1880317706">
                                                            <div class="dmRespColsWrapper" id="1432922786">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1371706225">
                                                                    <div class="u_1987157318 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1987157318" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-16 text-align-center size-20"><span class="m-font-size-16 font-size-20" style="display: unset;">Our customers say</span><span style="display: initial;"><br/></span></p>
                                                                    </div>
                                                                    <div class="u_1406273959 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1406273959"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/5star-285w.jpg" alt="Rating" id="1035497712" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/5star.jpg"
                                                                            width="1230" height="229" onerror="handleImageLoadError(this)" /></div>
                                                                    <div class="u_1788967407 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1788967407" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center m-size-16 size-20"><span class="font-size-20 m-font-size-16" style="display: unset;"><span class="font-size-20 m-font-size-16" style="display: unset;">based on</span>
                                                                            </span><span class="font-size-20 m-font-size-16" style="display: unset; font-family: Poppins; font-weight: 600;">215,000 reviews!</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1064756322 dmRespRow" id="1064756322">
                                                            <div class="dmRespColsWrapper" id="1676698252">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1372295431">
                                                                    <div class="u_1802883494 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1802883494" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h2 style="line-height: 1; letter-spacing: 0.02em;" class="m-size-40 text-align-center size-55"><span style="text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px; display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3);" class="m-font-size-40 font-size-55"
                                                                                m-font-size-set="true">Order</span><span single-space="true" class="m-font-size-40 font-size-55" style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3);"> <span style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3);" class="m-font-size-40 font-size-55"></span>
                                                                            </span><span style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: rgb(255, 214, 0); text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;" class="m-font-size-40 font-size-55"
                                                                                m-font-size-set="true">3 or 6 Bottles</span><span single-space="true" class="m-font-size-40 font-size-55" style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_4);"> <span style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_4);" class="m-font-size-40 font-size-55"></span>
                                                                            </span><span style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3); text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;" class="m-font-size-40 font-size-55"
                                                                                m-font-size-set="true">and Get 3 Incredible Bonuses</span><span single-space="true" class="m-font-size-40 font-size-55" style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3); text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;"> <span style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3); text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;" class="m-font-size-40 font-size-55"></span>
                                                                            </span><span style="display: initial; font-family: \'Bebas Neue Pro Bold\'; font-weight: normal; color: var(--color_3); text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;" class="m-font-size-40 font-size-55"
                                                                                m-font-size-set="true">+</span><span single-space="true" class="m-font-size-40 font-size-55" style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3); text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;"> <span style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3); text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;" class="m-font-size-40 font-size-55"></span>
                                                                            </span><span style="display: initial; font-family: GiorgioSans-Bold; font-weight: normal; color: var(--color_3); text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;" class="m-font-size-40 font-size-55"
                                                                                m-font-size-set="true">FREE SHIPPING</span></h2>
                                                                    </div>
                                                                    <div class="u_1159557915 dmRespRow" id="1159557915">
                                                                        <div class="dmRespColsWrapper" id="1201933905">
                                                                            <div class="u_1393265608 dmRespCol small-12 large-3 medium-3" id="1393265608">
                                                                                <div class="u_1344904757 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1344904757"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/anti-aging-270w.png" alt="Ikaria Lean Belly Juice Bonus 1" id="1157964530" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/anti-aging.png"
                                                                                        width="534" height="626" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                            <div class="u_1123698161 dmRespCol small-12 large-9 medium-9" id="1123698161">
                                                                                <div class="u_1595662000 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1595662000" style="transition: opacity 1s ease-in-out 0s;">
                                                                                    <h3 class="m-size-32 size-40" style="letter-spacing: 0.02em;"><span style="color: rgb(192, 27, 27); display: unset; font-family: GiorgioSans-Bold;" class="font-size-40 m-font-size-32">Bonus 1 &ndash; Anti-Aging Blueprint</span></h3>
                                                                                </div>
                                                                                <div class="u_1652831440 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1652831440" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-21 size-26" style="line-height: 1;"><span class="m-font-size-21 font-size-26" style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0);"><span style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0);" class="m-font-size-21 font-size-26">RRP:</span>
                                                                                        </span><span style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0); text-decoration: line-through;"
                                                                                            class="m-font-size-21 font-size-26">$97</span><span class="m-font-size-21 font-size-26" style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0);"> <span style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0);" class="m-font-size-21 font-size-26">Today:</span></span>
                                                                                        <span
                                                                                            class="m-font-size-21 font-size-26" style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(192, 27, 27);">
                                                                                        <span style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(192, 27, 27);" class="m-font-size-21 font-size-26">FREE</span></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="u_1263883332 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1263883332" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1.5;"><span style="text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0); font-weight: 400;" class="font-size-20 m-font-size-16">Discover breakthrough ways to regenerate your cells to make you feel years younger than your real age. Power up your daily energy levels, sleep better and boost your love life with our powerful aphrodisiac foods and drinks.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1919415156 dmRespRow" id="1919415156">
                                                                        <div class="dmRespColsWrapper" id="1525287084">
                                                                            <div class="u_1855982279 dmRespCol small-12 large-3 medium-3" id="1855982279">
                                                                                <div class="u_1538829864 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1538829864"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/energy-b-270w.png" alt="Ikaria Lean Belly Juice Bonus 2" id="1421134514" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/energy-b.png"
                                                                                        width="541" height="622" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                            <div class="u_1127565061 dmRespCol small-12 large-9 medium-9" id="1127565061">
                                                                                <div class="u_1377810782 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1377810782" style="transition: opacity 1s ease-in-out 0s;">
                                                                                    <h3 class="m-size-32 size-40" style="letter-spacing: 0.02em;"><span style="color: rgb(192, 27, 27); display: unset; font-family: GiorgioSans-Bold;" class="font-size-40 m-font-size-32">Bonus 2 &ndash; Energy Boosting Smoothies</span></h3>
                                                                                </div>
                                                                                <div class="u_1899909645 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1899909645" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-21 size-26" style="line-height: 1;"><span class="font-size-26 m-font-size-21" style="color: rgb(0, 0, 0); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; font-weight: 600;"><span style="color: rgb(0, 0, 0); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; font-weight: 600;" class="font-size-26 m-font-size-21">RRP:</span>
                                                                                        </span><span style="color: rgb(0, 0, 0); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; font-weight: 600; text-decoration: line-through;"
                                                                                            class="font-size-26 m-font-size-21">$69</span><span class="font-size-26 m-font-size-21" style="color: rgb(0, 0, 0); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; font-weight: 600;"> <span style="color: rgb(0, 0, 0); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; font-weight: 600;" class="font-size-26 m-font-size-21">Today:</span></span>
                                                                                        <span
                                                                                            class="font-size-26 m-font-size-21" style="color: rgb(192, 27, 27); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; font-weight: 600;">
                                                                                        <span style="color: rgb(192, 27, 27); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; font-weight: 600;" class="font-size-26 m-font-size-21">FREE</span></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="dmNewParagraph u_1646006775" data-element-type="paragraph" data-version="5" id="1646006775" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1.5;"><span style="font-weight: 400; color: rgb(0, 0, 0); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px;" class="m-font-size-16 font-size-20">These delicious, nutrient-rich smoothies will have you bursting with energy all day long. The herbs, foods and spices allow you to curb cravings and help you to stay fuller for longer. They also help your body to fight against pain and deadly conditions.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1203292337 dmRespRow" id="1203292337">
                                                                        <div class="dmRespColsWrapper" id="1464719598">
                                                                            <div class="u_1833823513 dmRespCol small-12 large-5 medium-5" id="1833823513">
                                                                                <div class="u_1498766446 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1498766446"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/vip-402w.png" alt="Ikaria Lean Belly Juice Bonus 3" id="1120594850" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/vip.png"
                                                                                        width="394" height="229" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                            <div class="u_1361555657 dmRespCol small-12 large-7 medium-7" id="1361555657">
                                                                                <div class="u_1595329521 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1595329521" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <h3 class="m-size-32 size-40" style="letter-spacing: 0.02em;"><span style="font-family: GiorgioSans-Bold; display: unset; color: rgb(192, 27, 27);" class="m-font-size-32 font-size-40">Bonus 3 &ndash; VIP Coaching</span></h3>
                                                                                </div>
                                                                                <div class="u_1595658330 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1595658330" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-21 size-26" style="line-height: 1;"><span class="m-font-size-21 font-size-26" style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0);"><span style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0);" class="m-font-size-21 font-size-26">RRP:</span>
                                                                                        </span><span style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0); text-decoration: line-through;"
                                                                                            class="m-font-size-21 font-size-26">$397</span><span class="m-font-size-21 font-size-26" style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0);"> <span style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(0, 0, 0);" class="m-font-size-21 font-size-26">Today:</span></span>
                                                                                        <span
                                                                                            class="m-font-size-21 font-size-26" style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(192, 27, 27);">
                                                                                        <span style="font-weight: 600; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px; display: unset; font-family: Poppins; color: rgb(192, 27, 27);" class="m-font-size-21 font-size-26">FREE</span></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="u_1861942090 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1861942090" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-20" style="line-height: 1.5;"><span style="font-weight: 400; color: rgb(0, 0, 0); font-family: Poppins; display: unset; text-shadow: rgba(0, 0, 0, 0.1) 0px 3px 3px;" class="m-font-size-16 font-size-20">Receive unwavering support and motivation from our team of experts to help you stay on track to reach your goal weight even faster. Get full access to mouth- watering healthy recipes, key nutrition guides and strategies and body movement videos.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1850466057 dmRespRow" id="1850466057">
                                                            <div class="dmRespColsWrapper" id="1207040364">
                                                                <div class="u_1961788960 dmRespCol small-12 large-3 medium-3" id="1961788960">
                                                                    <div class="u_1147406985 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1147406985"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/shipping-70445dd5-228w.png" alt="Free Shipping" id="1815267529" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/shipping-70445dd5.png"
                                                                            width="300" height="164" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                                <div class="u_1241890009 dmRespCol small-12 large-9 medium-9" id="1241890009">
                                                                    <div class="u_1909745939 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1909745939" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h3 style="letter-spacing: 0.02em; line-height: 1;" class="text-align-center m-size-35 size-55"><span style="font-family: GiorgioSans-Bold; font-weight: normal; display: unset;" class="font-size-55 m-font-size-35" m-font-size-set="true">Every</span><span single-space="true"
                                                                                class="font-size-55 m-font-size-35" style="font-family: GiorgioSans-Bold; font-weight: normal; display: unset;"> <span style="font-family: GiorgioSans-Bold; font-weight: normal; display: unset;" class="font-size-55 m-font-size-35"></span>
                                                                            </span><span style="font-family: GiorgioSans-Bold; font-weight: normal; display: unset; color: rgb(255, 214, 0);" class="font-size-55 m-font-size-35" m-font-size-set="true">3 and 6 Bottle</span>
                                                                            <span
                                                                                single-space="true" class="font-size-55 m-font-size-35" style="font-family: GiorgioSans-Bold; font-weight: normal; display: unset;"> <span style="font-family: GiorgioSans-Bold; font-weight: normal; display: unset;" class="font-size-55 m-font-size-35"></span>
                                                                                </span><span style="font-family: GiorgioSans-Bold; font-weight: normal; display: unset;" class="font-size-55 m-font-size-35" m-font-size-set="true">Order Get With FREE Shipping Too!</span></h3>
                                                                    </div>
                                                                    <div class="u_1867998829 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1867998829" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <p class="m-size-15 size-20 text-align-center" style="line-height: 1.2;"><span style="display: unset; font-weight: 400; color: var(--color_3); font-family: Poppins;" class="font-size-20 m-font-size-15" m-font-size-set="true">*96% Of Customers Order 6 Bottles</span>
                                                                            <span
                                                                                single-space="true" class="font-size-20 m-font-size-15" style="display: unset; font-weight: 400; color: var(--color_3); font-family: Poppins;"> <span style="display: unset; font-weight: 400; color: var(--color_3); font-family: Poppins;" class="font-size-20 m-font-size-15"></span>
                                                                                </span><span style="display: unset; font-weight: 700; color: var(--color_3); font-family: Poppins;" class="font-size-20 m-font-size-15" m-font-size-set="true">(Our Recommended Option)</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1189644386 dmRespRow" id="1189644386">
                                                            <div class="dmRespColsWrapper" id="1430472473">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1774856757">
                                                                    <div class="u_1499342019 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1499342019" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h2 class="text-align-center m-size-40 size-55" style="letter-spacing: 0.02em;"><span style="text-shadow: none; color: rgb(0, 0, 0); display: unset; font-family: GiorgioSans-Bold; font-weight: normal;" class="font-size-55 m-font-size-40" m-font-size-set="true">What Is Ikaria Lean Belly Juice ?</span></h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1912256412 dmRespRow" id="1912256412">
                                                            <div class="dmRespColsWrapper" id="1593704266">
                                                                <div class="u_1392313254 dmRespCol small-12 large-5 medium-5" id="1392313254">
                                                                    <div class="u_1182051977 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1182051977"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/full-product-37dbca92-462w.png" alt="What Is Ikaria Lean Belly Juice?" id="1967073297" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/full-product-37dbca92.png"
                                                                            width="600" height="413" onerror="handleImageLoadError(this)" /></div>
                                                                    <a data-display-type="block" class="u_1032607088 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient hide-for-small" file="false" href="https://bestofferhere.link/ikarialeanbelly" data-element-type="dButtonLinkId" id="1032607088"
                                                                        data-buttonstyle="ROUND_SIDES"> <span class="iconBg" aria-hidden="true" id="1505988848"> <span class="icon hasFontIcon icon-star" id="1008715110"></span> 
</span> 
 <span class="text" id="1459357479">Order Your Ikaria Juice Now! &rarr;</span> 
</a>
                                                                    <div class="u_1273414278 dmNewParagraph sweezy-custom-cursor-hover hide-for-small" data-element-type="paragraph" data-version="5" id="1273414278" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center size-16 m-size-13" style="line-height: 1;"><span style="display: unset; font-style: italic;" class="font-size-16 m-font-size-13">Free Shiping If You Purchase Today!</span></p>
                                                                    </div>
                                                                    <div class="u_1345532759 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1345532759"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/credit-cards-badges-462w.png" alt="Metabo Flex Payment Methods" id="1912131227" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/credit-cards-badges.png"
                                                                            width="786" height="102" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                                <div class="u_1361823973 dmRespCol small-12 large-7 medium-7" id="1361823973">
                                                                    <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1358215673" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-15" style="line-height: 1.9;"><span style="font-weight: 600; font-family: Poppins; display: unset;" class="m-font-size-15" m-font-size-set="true">Lean Belly Juice</span><span single-space="true" class="m-font-size-15"
                                                                                style="display: unset;"> <span style="display: unset;" class="m-font-size-15"></span>
                                                                            </span><span style="display: unset;" class="m-font-size-15" m-font-size-set="true">is a powdered weight loss supplement from Ikaria. The supplement uses natural ingredients to support various benefits, including weight loss, blood pressure, joint health, digestion, and more.</span></p>
                                                                    </div>
                                                                    <div class="u_1875411363 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1875411363"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/full-product-60944e27-1920w.png" alt="Prostadine How It Works?" id="1981476738" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/full-product-60944e27.png"
                                                                            width="600" height="413" onerror="handleImageLoadError(this)" /></div>
                                                                    <div class="u_1118050054 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1118050054" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <p class="m-size-15" style="line-height: 1.9;"><span style="font-weight: 400; font-family: Poppins; display: unset;" class="m-font-size-15" m-font-size-set="true">By taking one scoop of Lean Belly Juice daily, anyone can purportedly lose weight by targeting</span>
                                                                            <span
                                                                                single-space="true" class="m-font-size-15" style="font-weight: 400; font-family: Poppins; display: unset;"> <span style="font-weight: 400; font-family: Poppins; display: unset;" class="m-font-size-15"></span>
                                                                                </span><span style="font-weight: 500; font-family: Poppins; display: unset; color: rgb(31, 102, 172);" class="m-font-size-15" m-font-size-set="true">the root cause of stubborn belly fat.</span>
                                                                                <span
                                                                                    style="display: initial;"><br/></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="u_1438472847 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1438472847" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p style="line-height: 1.9;" class="m-size-15"><span class="m-font-size-15" m-font-size-set="true" style="display: unset;">Key ingredients in Lean Belly Juice include kelp extract, dandelion, turmeric, probiotics, and cranberry powder, among dozens of other superfoods. Just mix one scoop daily with the beverage of your choice, then enjoy an advanced superfood complex for multiple weight loss results.</span>
                                                                            <span
                                                                                style="display: initial;"><br/></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1209190643 dmRespRow hide-for-medium hide-for-large" id="1209190643">
                                                            <div class="dmRespColsWrapper" id="1241819195">
                                                                <div class="u_1405166864 dmRespCol small-12 medium-12 large-12" id="1405166864">
                                                                    <div class="u_1646249374 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1646249374"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/1-bottle-759bc5f8-1920w.png" alt="" id="1605094663" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/1-bottle-759bc5f8.png"
                                                                            width="196" height="364" onerror="handleImageLoadError(this)" /></div>
                                                                    <a data-display-type="block" class="u_1400356193 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient" file="false" href="https://bestofferhere.link/ikarialeanbelly" data-element-type="dButtonLinkId" id="1400356193" data-buttonstyle="ROUND_SIDES"> <span class="iconBg" aria-hidden="true" id="1022892192"> <span class="icon hasFontIcon icon-star" id="1897927418"></span> 
</span> 
 <span class="text" id="1063450376">Order Your Ikaria Juice Now! &rarr;</span> 
</a>
                                                                    <div class="u_1779393432 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1779393432" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center size-16 m-size-13" style="line-height: 1;"><span style="display: unset; font-style: italic;" class="font-size-16 m-font-size-13">Free Shiping If You Purchase Today!</span></p>
                                                                    </div>
                                                                    <div class="u_1376885473 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1376885473"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/credit-cards-badges-1920w.png" alt="" id="1053837662" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/credit-cards-badges.png"
                                                                            width="786" height="102" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1697534743 dmRespRow" id="1697534743">
                                                            <div class="dmRespColsWrapper" id="1768176857">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1881004320">
                                                                    <div class="u_1968012660 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1968012660" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h2 class="text-align-center m-size-40 size-55" style="letter-spacing: 0.02em; line-height: 1;"><span class="font-size-55 m-font-size-40" m-font-size-set="true" style="font-weight: normal; font-family: GiorgioSans-Bold; display: initial; color: rgb(0, 0, 0); text-shadow: none;">How Does Ikaria Lean Belly Juice Work?</span></h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1946224951 dmRespRow" id="1946224951">
                                                            <div class="dmRespColsWrapper" id="1104640300">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1178607078">
                                                                    <div class="u_1196518732 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1196518732" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-15"><span style="display: unset; font-family: Poppins; font-weight: 600;" class="m-font-size-15" m-font-size-set="true">Lean Belly Juice claims to work differently than other weight loss supplements because it targets uric acid. According to Ikaria, uric acid is &ldquo;the mysterious cause of stubborn belly fat.&rdquo;</span></p>
                                                                    </div>
                                                                    <div class="u_1993145130 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1993145130">
                                                                        <p class="m-size-15" style="line-height: 1.9;"><span style="font-weight: 400; font-family: Poppins; display: unset;" class="m-font-size-15" m-font-size-set="true">If you feel tired and overwhelmed with weight loss, and if you feel like you&rsquo;ve tried other diet and exercise programs without success, then your weight loss struggles may be linked to uric acid.</span></p>
                                                                    </div>
                                                                    <div class="u_1129740776 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1129740776">
                                                                        <p class="m-size-15" style="line-height: 1.9;"><span style="display: unset;" class="m-font-size-15" m-font-size-set="true">Here&rsquo;s how Ikaria explains the dangers of uric acid:</span></p>
                                                                    </div>
                                                                    <div class="u_1068808918 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1068808918">
                                                                        <p class="m-size-15" style="line-height: 1.9;"><span style="display: unset;" class="m-font-size-15" m-font-size-set="true">&ldquo;It can cause tiredness, feelings of overwhelm and in some cases, may not help with healthy digestion. It doesn&rsquo;t matter if you eat healthy, work out or follow every diet under the sun&hellip;You&rsquo;ll never be able to keep your weight under control unless you target uric acid first.&rdquo;</span></p>
                                                                    </div>
                                                                    <div class="u_1007169120 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1007169120" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <p class="m-size-15" style="line-height: 1.9;"><span style="display: unset;" class="m-font-size-15" m-font-size-set="true">With that in mind, Lean Belly Juice can purportedly target uric acid and help your body work normally again. It switches your body to fat burning mode, allowing you to convert your food to energy instead of storing it as fat.</span></p>
                                                                    </div>
                                                                    <div class="u_1426309700 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1426309700" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <p class="m-size-15" style="line-height: 1.9;"><span style="font-weight: 400; font-family: Poppins; display: unset;" class="m-font-size-15" m-font-size-set="true">When you enter fat burning mode, you&rsquo;ll feel more satisfied after eating. You won&rsquo;t have as many urges to snack. Plus, your metabolism rises, which means you burn more calories at rest.</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1567341520 dmRespRow hide-for-medium hide-for-large hide-for-small" id="1567341520">
                                                            <div class="dmRespColsWrapper" id="1374642819">
                                                                <div class="dmRespCol small-12 large-4 medium-4" id="1404360820">
                                                                    <div class="u_1631544903 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1631544903"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/6bottles-ddf0dd4c-1920w.jpg" alt="6 Bottles" id="1963866089" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/6bottles-ddf0dd4c.jpg"
                                                                            width="1075" height="681" data-hover-effect="zoomout" onerror="handleImageLoadError(this)" /></div>
                                                                    <div class="u_1163816115 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1163816115"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/3bottles-bb547b12-1920w.jpg" alt="3 Bottles" id="1666343886" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/3bottles-bb547b12.jpg"
                                                                            width="1071" height="677" data-hover-effect="zoomout" onerror="handleImageLoadError(this)" /></div>
                                                                    <div class="u_1749118172 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1749118172"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/1bottle-2a50cd13-1920w.jpg" alt="1 Bottle" id="1612673720" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/1bottle-2a50cd13.jpg"
                                                                            width="1073" height="680" data-hover-effect="zoomout" onerror="handleImageLoadError(this)" /></div>
                                                                    <div class="u_1433617148 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1433617148"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/1bottle-1920w.jpg" alt="" id="1412109721" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/1bottle.jpg"
                                                                            width="445" height="1045" data-hover-effect="zoomout" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                                <div class="dmRespCol small-12 large-4 medium-4" id="1679169689">
                                                                    <div class="u_1847169422 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1847169422"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/6bottles-1920w.jpg" alt="" id="1754916928" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/6bottles.jpg"
                                                                            width="445" height="1042" data-hover-effect="zoomout" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                                <div class="dmRespCol large-4 medium-4 small-12" id="1189783374">
                                                                    <div class="u_1277270535 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1277270535"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/3bottles-1920w.jpg" alt="" id="1007473168" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/3bottles.jpg"
                                                                            width="447" height="1046" data-hover-effect="zoomout" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1696355072 dmRespRow" id="1696355072">
                                                            <div class="dmRespColsWrapper" id="1502904720">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1686270452">
                                                                    <div class="u_1091269401 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1091269401" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h2 class="m-size-40 text-align-center size-55" style="letter-spacing: 0.02em; line-height: 1;"><span class="m-font-size-40 font-size-55" m-font-size-set="true" style="font-family: GiorgioSans-Bold; display: initial; color: rgb(0, 0, 0); text-shadow: none; font-weight: normal;">Benefits of Ikaria Lean Belly Juice</span></h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1419847486 dmRespRow" id="1419847486">
                                                            <div class="dmRespColsWrapper" id="1871956088">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1832078336">
                                                                    <div class="u_1261879923 dmRespRow" id="1261879923">
                                                                        <div class="dmRespColsWrapper" id="1096836951">
                                                                            <div class="u_1279009832 dmRespCol small-12 large-7 medium-7" id="1279009832">
                                                                                <div class="u_1974181893 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1974181893"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/smilingCouple-1920w.png" alt="Benefits" id="1007884626" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/smilingCouple.png"
                                                                                        width="761" height="752" onerror="handleImageLoadError(this)" /></div>
                                                                                <div class="u_1910547320 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1910547320" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-18" style="line-height: 1.8;"><span style="font-weight: 400; font-family: CalendarSymbolWizard-Regular; display: unset; color: rgb(14, 102, 200);" class="font-size-18 m-font-size-16" m-font-size-set="true">~</span>
                                                                                        <span
                                                                                            single-space="true" class="font-size-18 m-font-size-16" style="font-weight: 400; font-family: CalendarSymbolWizard-Regular; display: unset;"> <span style="font-weight: 400; font-family: CalendarSymbolWizard-Regular; display: unset;" class="font-size-18 m-font-size-16" m-font-size-set="true"></span>
                                                                                            </span><span style="font-weight: 400; font-family: Poppins; display: unset;" class="font-size-18 m-font-size-16" m-font-size-set="true">Ikaria Lean Belly Juice supplement places your body into fat-burning process through increasing the rate of fat oxidation</span></p>
                                                                                </div>
                                                                                <div class="dmNewParagraph u_1973413986 sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1973413986" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-18" style="line-height: 1.8;"><span class="m-font-size-16 font-size-18" style="display: unset; font-family: CalendarSymbolWizard-Regular; font-weight: 400; color: rgb(14, 102, 200);"><span style="display: unset; font-family: CalendarSymbolWizard-Regular; font-weight: 400; color: rgb(14, 102, 200);" class="m-font-size-16 font-size-18" m-font-size-set="true">~</span>
                                                                                        </span><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-18" m-font-size-set="true">This supplement is known as a super food that contains belly-burning flowers and plants that are rich in nutrients</span></p>
                                                                                </div>
                                                                                <div class="dmNewParagraph u_1248801649 sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1248801649" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="size-18 m-size-14" style="line-height: 1.8;"><span style="font-weight: 400; font-family: CalendarSymbolWizard-Regular; display: unset; color: rgb(14, 102, 200);" class="font-size-18 m-font-size-14" m-font-size-set="true">~</span>
                                                                                        <span
                                                                                            single-space="true" class="font-size-20 m-font-size-16" style="font-weight: 400; font-family: CalendarSymbolWizard-Regular; display: unset; color: rgb(14, 102, 200);">
                                                                                        <span style="font-weight: 400; font-family: CalendarSymbolWizard-Regular; display: unset; color: rgb(14, 102, 200);" class="font-size-20 m-font-size-16" m-font-size-set="true"></span>
                                                                                            </span><span style="font-weight: 400; font-family: Poppins; display: unset;" class="font-size-18 m-font-size-16" m-font-size-set="true">Helps to reduce your appetite and cravings or hunger</span></p>
                                                                                </div>
                                                                                <div class="dmNewParagraph u_1390637544 sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1390637544" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-18" style="line-height: 1.8;"><span class="m-font-size-16 font-size-18" style="color: rgb(14, 102, 200); display: unset; font-family: CalendarSymbolWizard-Regular; font-weight: 400;"><span style="color: rgb(14, 102, 200); display: unset; font-family: CalendarSymbolWizard-Regular; font-weight: 400;" class="m-font-size-16 font-size-18" m-font-size-set="true">~</span>
                                                                                        </span><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-18" m-font-size-set="true">This formula aids in losing weight and boost the energy levels of your body</span></p>
                                                                                </div>
                                                                                <div class="dmNewParagraph u_1036909083 sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1036909083" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-18" style="line-height: 1.8;"><span class="m-font-size-16 font-size-18" style="color: rgb(14, 102, 200); display: unset; font-family: CalendarSymbolWizard-Regular; font-weight: 400;"><span style="color: rgb(14, 102, 200); display: unset; font-family: CalendarSymbolWizard-Regular; font-weight: 400;" class="m-font-size-16 font-size-18" m-font-size-set="true">~</span>
                                                                                        </span><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-18" m-font-size-set="true">​Ikaria Lean Belly Juice helps to keep your digestive system in good shape along with your intestinal health</span></p>
                                                                                </div>
                                                                                <div class="dmNewParagraph u_1904622090 sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1904622090" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-18" style="line-height: 1.8;"><span class="m-font-size-16 font-size-18" style="display: unset; font-family: CalendarSymbolWizard-Regular; font-weight: 400; color: rgb(14, 102, 200);"><span style="display: unset; font-family: CalendarSymbolWizard-Regular; font-weight: 400; color: rgb(14, 102, 200);" class="m-font-size-16 font-size-18" m-font-size-set="true">~</span>
                                                                                        </span><span style="display: unset; font-family: Poppins; font-weight: 400;" class="m-font-size-16 font-size-18" m-font-size-set="true">This weight-loss item helps to improve your blood pressure levels</span></p>
                                                                                </div>
                                                                                <div class="dmNewParagraph u_1235258185 sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1235258185" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-16 size-18" style="line-height: 1.8;"><span class="font-size-18 m-font-size-16" style="font-weight: 400; font-family: CalendarSymbolWizard-Regular; display: unset; color: rgb(14, 102, 200);"><span style="font-weight: 400; font-family: CalendarSymbolWizard-Regular; display: unset; color: rgb(14, 102, 200);" class="font-size-18 m-font-size-16" m-font-size-set="true">~</span>
                                                                                        </span><span style="font-weight: 400; font-family: Poppins; display: unset;" class="font-size-18 m-font-size-16" m-font-size-set="true">The supplement is full of antioxidants recognized to eliminate waste and remove excess uric acids from your body</span></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="u_1621592968 dmRespCol small-12 large-5 medium-5" id="1621592968">
                                                                                <div class="u_1063805787 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1063805787"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/smilingCouple-13a93478-462w.png" alt="Benefits" id="1000354285" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/smilingCouple-13a93478.png"
                                                                                        width="761" height="752" onerror="handleImageLoadError(this)" /></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1849681387 dmRespRow" id="1849681387">
                                                            <div class="dmRespColsWrapper" id="1659321081">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1153245372">
                                                                    <div class="u_1996180950 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1996180950" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <p style="letter-spacing: 0.02em; line-height: 1.2;" class="text-align-center m-size-35 size-50"><span style="font-family: GiorgioSans-Bold; display: unset; color: rgb(255, 214, 0); font-style: normal;" class="font-size-50 m-font-size-35" m-font-size-set="true">ACT NOW:</span>
                                                                            <span
                                                                                single-space="true" class="font-size-50 m-font-size-35" style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); font-style: normal;"> <span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); font-style: normal;" class="font-size-50 m-font-size-35"></span>
                                                                                </span><span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); font-style: normal;" class="font-size-50 m-font-size-35" m-font-size-set="true">Due To High Demand And Stock Running Low These Discount Prices Are</span>
                                                                                <span
                                                                                    single-space="true" class="font-size-50 m-font-size-35" style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); font-style: normal;"> <span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); font-style: normal;" class="font-size-50 m-font-size-35"></span>
                                                                                    </span><span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); font-style: normal;" class="font-size-50 m-font-size-35" m-font-size-set="true">For A</span>
                                                                                    <span
                                                                                        single-space="true" class="font-size-50 m-font-size-35" style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); font-style: normal;"> <span style="font-family: GiorgioSans-Bold; display: unset; color: var(--color_3); font-style: normal;" class="font-size-50 m-font-size-35"></span>
                                                                                        </span><span style="font-family: GiorgioSans-Bold; display: unset; color: rgb(255, 214, 0); font-style: normal;" class="font-size-50 m-font-size-35" m-font-size-set="true">Limited Time ONLY!</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1791367752 dmRespRow" id="1791367752">
                                                            <div class="dmRespColsWrapper" id="1116222820">
                                                                <div class="dmRespCol small-12 large-4 medium-4" id="1245868371">
                                                                    <div class="u_1036418329 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1036418329"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1161280477" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/6-bottles-0b2b31d1-c6f07e4a-1920w.png" alt="6 Bottles" id="1426927634" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/6-bottles-0b2b31d1-c6f07e4a.png" width="395" height="825" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                    <div class="u_1372137229 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1372137229"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1125506906" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/3-bottles-e3a13598-f9622add-1920w.png" alt="3 Bottles" id="1696369536" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/3-bottles-e3a13598-f9622add.png" width="399" height="827" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                    <div class="u_1228282364 imageWidget align-center hide-for-medium hide-for-large" data-element-type="image" data-widget-type="image" id="1228282364"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1612863089" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/1-bottle-9ed61256-07a2e64d-1920w.png" alt="1 Bottle" id="1810336737" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/1-bottle-9ed61256-07a2e64d.png" width="400" height="870" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                    <div class="u_1620005326 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1620005326"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1561932722" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/1+bottle-9ed61256-366w.png" alt="1 bottle" id="1207031563" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/1+bottle-9ed61256.png" width="400" height="937" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                </div>
                                                                <div class="dmRespCol small-12 large-4 medium-4" id="1318726380">
                                                                    <div class="u_1746173949 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1746173949"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1250901055" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/6+bottles-0b2b31d1-366w.png" alt="6 bottles" id="1275139166" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/6+bottles-0b2b31d1.png" width="395" height="935" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                </div>
                                                                <div class="dmRespCol large-4 medium-4 small-12" id="1198066467">
                                                                    <div class="u_1837491235 imageWidget align-center hide-for-small" data-element-type="image" data-widget-type="image" id="1837491235"> <a href="https://bestofferhere.link/ikarialeanbelly" id="1055038048" class="" file="false"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/3+bottles-e3a13598-366w.png" alt="3 bottles" id="1755408943" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/3+bottles-e3a13598.png" width="399" height="939" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"/></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1712974360 dmRespRow hide-for-small" id="1712974360">
                                                            <div class="dmRespColsWrapper" id="1772104512">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1779719597">
                                                                    <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1070627951" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center size-20 m-size-16"><span style="display: unset;" class="font-size-20 m-font-size-16">Our customers say</span><span style="display: initial;"><br/></span></p>
                                                                    </div>
                                                                    <div class="u_1983552961 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1983552961"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/5star-285w.jpg" alt="Rating" id="1297149546" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/5star.jpg"
                                                                            width="1230" height="229" onerror="handleImageLoadError(this)" /></div>
                                                                    <div class="u_1559456126 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1559456126" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center m-size-16 size-20"><span class="font-size-20 m-font-size-16" style="display: unset;"><span class="font-size-20 m-font-size-16" style="display: unset;">based on</span>
                                                                            </span><span class="font-size-20 m-font-size-16" style="display: unset; font-family: Poppins; font-weight: 600;">215,000 reviews!</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1112161298 dmRespRow hide-for-medium hide-for-large" id="1112161298">
                                                            <div class="dmRespColsWrapper" id="1687953502">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1496264229">
                                                                    <div class="u_1819394880 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1819394880" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center size-20 m-size-16"><span style="display: unset;" class="font-size-20 m-font-size-16">Our customers say</span><span style="display: initial;"><br/></span></p>
                                                                    </div>
                                                                    <div class="u_1810531468 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1810531468"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/5star-1920w.jpg" alt="Rating" id="1985805370" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/5star.jpg"
                                                                            width="1230" height="229" onerror="handleImageLoadError(this)" /></div>
                                                                    <div class="u_1187763792 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1187763792" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="m-size-16 text-align-center size-20"><span class="m-font-size-16 font-size-20" style="display: unset;"><span class="m-font-size-16 font-size-20" style="display: unset;">based on</span>
                                                                            </span><span class="m-font-size-16 font-size-20" style="display: unset; font-weight: 600; font-family: Poppins;">215,000 reviews!</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1177050323 dmRespRow" id="1177050323" data-anchor="Guarantee">
                                                            <div class="dmRespColsWrapper" id="1067899679">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1741405856">
                                                                    <div class="dmRespRow" id="1450838553">
                                                                        <div class="dmRespColsWrapper" id="1164166198">
                                                                            <div class="dmRespCol large-12 medium-12 small-12" id="1891072570">
                                                                                <div class="u_1083816391 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1083816391" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p style="letter-spacing: 0.02em; line-height: 1.1;" class="m-size-40 text-align-center size-55"><span style="text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px; text-transform: uppercase; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;" class="m-font-size-40 font-size-55"
                                                                                            m-font-size-set="true">100</span><span style="text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px; text-transform: uppercase; color: var(--color_3); display: unset; font-family: \'Bebas Neue Pro Bold\';"
                                                                                            class="m-font-size-40 font-size-55" m-font-size-set="true">%</span><span class="m-font-size-40 font-size-55" style="text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px; text-transform: uppercase; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;"> <span style="text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px; text-transform: uppercase; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;" class="m-font-size-40 font-size-55" m-font-size-set="true">Satisfaction</span></span>
                                                                                    </p>
                                                                                    <p style="letter-spacing: 0.02em; line-height: 1.1;" class="m-size-40 text-align-center size-55"><span style="text-shadow: rgba(0, 0, 0, 0.4) 0px 3px 15px; text-transform: uppercase; color: var(--color_3); display: unset; font-family: GiorgioSans-Bold;" class="m-font-size-40 font-size-55"
                                                                                            m-font-size-set="true">180-Day Money Back Guarantee</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1885333492 dmRespRow" id="1885333492">
                                                                        <div class="dmRespColsWrapper" id="1342390420">
                                                                            <div class="u_1582628481 dmRespCol small-12 large-3 medium-3" id="1582628481">
                                                                                <div class="u_1325781076 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1325781076"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/guarantee-74c1ab69-265w.png" alt="Ikaria Lean Belly Juice Money Back Guarantee" id="1888060775" class=""
                                                                                        data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/guarantee-74c1ab69.png" width="250" height="250" data-hover-effect="zoomout" onerror="handleImageLoadError(this)"
                                                                                    /></div>
                                                                            </div>
                                                                            <div class="u_1377356209 dmRespCol small-12 large-9 medium-9" id="1377356209">
                                                                                <div class="u_1285763623 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1285763623" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                                    <p class="m-size-18 m-text-align-center text-align-left size-23" style="line-height: 1.8;"><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="m-font-size-18 font-size-23" m-font-size-set="true">We are so confident you&rsquo;ll</span>
                                                                                        <span
                                                                                            single-space="true" class="m-font-size-18 font-size-23" style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);"> <span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="m-font-size-18 font-size-23"></span>
                                                                                            </span><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: rgb(237, 187, 2); font-weight: 600; font-family: Poppins;" class="m-font-size-18 font-size-23"
                                                                                                m-font-size-set="true">enjoy life-changing</span><span single-space="true" class="m-font-size-18 font-size-23" style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3); font-weight: 600; font-family: Poppins;"> <span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3); font-weight: 600; font-family: Poppins;" class="m-font-size-18 font-size-23"></span>
                                                                                            </span><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3); font-weight: 600; font-family: Poppins;" class="m-font-size-18 font-size-23"
                                                                                                m-font-size-set="true">results</span><span single-space="true" class="m-font-size-18 font-size-23" style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);"> <span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="m-font-size-18 font-size-23"></span>
                                                                                            </span><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="m-font-size-18 font-size-23" m-font-size-set="true">that we&rsquo;re prepared to back up the Ikaria Lean Belly Juice with a 100% satisfaction guarantee for the next 180 days.</span></p>
                                                                                    <p
                                                                                        class="m-text-align-center text-align-left" style="line-height: 1.8;"><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);"><br/></span></p>
                                                                                        <p class="m-text-align-center text-align-left size-18 m-size-16"
                                                                                            style="line-height: 1.8;"><span style="text-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px; display: initial; color: var(--color_3);" class="font-size-18 m-font-size-16" m-font-size-set="true">If you are not absolutely astounded by how quickly your excess fat melt from your frame, and how much younger and healthier you feel day after day&hellip;</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="u_1942518717 dmRespRow" id="1942518717">
                                                                        <div class="dmRespColsWrapper" id="1065690334">
                                                                            <div class="dmRespCol small-12 medium-12 large-12" id="1651704194">
                                                                                <div class="dmNewParagraph" data-element-type="paragraph" data-version="5" id="1366401966" style="transition: opacity 1s ease-in-out 0s;">
                                                                                    <p style="line-height: 1.8;" class="m-text-align-center"><span style="text-shadow: rgba(0, 0, 0, 0.2) 0px 3px 3px; color: var(--color_3); display: unset;">Then we will only be too happy to refund you every cent. No questions asked. It&rsquo;s time to get in the driver&rsquo;s seat and be in control of your health again.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1417150016 dmRespRow" id="1417150016">
                                                            <div class="dmRespColsWrapper" id="1947312769">
                                                                <div class="u_1889056065 dmRespCol small-12 large-3 medium-3" id="1889056065">
                                                                    <div class="u_1992206395 imageWidget align-center" data-element-type="image" data-widget-type="image" id="1992206395"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/shipping-70445dd5-228w.png" alt="Free Shipping" id="1257556283" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/shipping-70445dd5.png"
                                                                            width="300" height="164" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                                <div class="u_1513716998 dmRespCol small-12 large-9 medium-9" id="1513716998">
                                                                    <div class="u_1118082893 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1118082893" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <h3 style="letter-spacing: 0.02em; line-height: 1;" class="text-align-center m-size-35 size-55"><span style="font-family: GiorgioSans-Bold; display: unset; font-weight: normal;" class="font-size-55 m-font-size-35" m-font-size-set="true">Every</span><span single-space="true"
                                                                                class="font-size-55 m-font-size-35" style="font-family: GiorgioSans-Bold; display: unset; font-weight: normal;"> <span style="font-family: GiorgioSans-Bold; display: unset; font-weight: normal;" class="font-size-55 m-font-size-35"></span>
                                                                            </span><span style="font-family: GiorgioSans-Bold; display: unset; font-weight: normal; color: rgb(255, 214, 0);" class="font-size-55 m-font-size-35" m-font-size-set="true">3 and 6 Bottle</span>
                                                                            <span
                                                                                single-space="true" class="font-size-55 m-font-size-35" style="font-family: GiorgioSans-Bold; display: unset; font-weight: normal;"> <span style="font-family: GiorgioSans-Bold; display: unset; font-weight: normal;" class="font-size-55 m-font-size-35"></span>
                                                                                </span><span style="font-family: GiorgioSans-Bold; display: unset; font-weight: normal;" class="font-size-55 m-font-size-35" m-font-size-set="true">Order Get With FREE Shipping Too!</span></h3>
                                                                    </div>
                                                                    <div class="u_1482485564 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1482485564" style="transition: none 0s ease 0s; text-align: left; display: block;">
                                                                        <p class="m-size-15 size-20 text-align-center" style="line-height: 1.2;"><span style="display: unset; font-weight: 400; color: var(--color_3); font-family: Poppins;" class="font-size-20 m-font-size-15" m-font-size-set="true">*96% Of Customers Order 6 Bottles</span>
                                                                            <span
                                                                                single-space="true" class="font-size-20 m-font-size-15" style="display: unset; font-weight: 400; color: var(--color_3); font-family: Poppins;"> <span style="display: unset; font-weight: 400; color: var(--color_3); font-family: Poppins;" class="font-size-20 m-font-size-15"></span>
                                                                                </span><span style="display: unset; font-weight: 700; color: var(--color_3); font-family: Poppins;" class="font-size-20 m-font-size-15" m-font-size-set="true">(Our Recommended Option)</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1305786552 dmRespRow" id="1305786552" data-anchor="FAQ">
                                                            <div class="dmRespColsWrapper" id="1138939541">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1360955297">
                                                                    <div class="u_1508335290 dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1508335290" style="transition: opacity 1s ease-in-out 0s;">
                                                                        <p class="text-align-center m-size-35 size-55" style="line-height: 1.2; letter-spacing: 0.02em;"><span style="text-shadow: rgb(240, 240, 240) 0px 3px 5px; color: rgb(0, 0, 0); display: unset; font-family: GiorgioSans-Bold; font-weight: normal;" class="font-size-55 m-font-size-35"
                                                                                m-font-size-set="true">Frequently Asked Questions</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1843773211 dmRespRow dmSectionNoParallax" style="text-align: center;" id="1843773211">
                                                            <div class="dmRespColsWrapper" id="1784239813">
                                                                <div class="dmRespCol small-12 medium-12 large-12 u_1741537248" id="1741537248">
                                                                    <div class="u_1757261417 widget-832a29 dmCustomWidget" data-lazy-load="" data-title="" id="1757261417" dmle_extension="custom_extension" data-element-type="custom_extension" icon="false"
                                                                        surround="false" data-widget-id="832a29738c2b44fdb4e63369b1bf458a" data-widget-version="78" data-widget-config="eyJpdGVtcyI6W3sidGl0bGUiOiJJcyB0aGUgSWthcmlhIExlYW4gQmVsbHkgSnVpY2UgZm9yIHJlYWw/IiwiaGVhZGluZ1R5cGUiOiJoMyIsImRlc2NyaXB0aW9uIjoiPGJyPjxwIGNsYXNzPVwicnRlQmxvY2tcIj5UaGUgSWthcmlhIExlYW4gQmVsbHkgSnVpY2UgaXMgYW4gYWxsLW5hdHVyYWwgZm9ybXVsYSB0aGF0IGNvbnRhaW5zIG9ubHkgaW5ncmVkaWVudHMgdGhhdCBhcmUgdGVzdGVkIGFuZCBwcm9kdWNlZCBpbiBhIGNvbnRyb2xsZWQgZmFjaWxpdHkuPC9wPjxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+SXQgaXMgbWFudWZhY3R1cmVkIGhlcmUgaW4gdGhlIFVTQSBpbiBhbiBGREEtcmVnaXN0ZXJlZCBmYWNpbGl0eSB0aGF0IGZvbGxvd3MgdGhlIEdNUCAoZ29vZCBtYW51ZmFjdHVyaW5nIHByYWN0aWNlcykgZ3VpZGVsaW5lcy48L3A+PGJyPjxwIGNsYXNzPVwicnRlQmxvY2tcIj5UaGUgaW5ncmVkaWVudHMgd2UgdXNlIGFyZSBvZiB0aGUgaGlnaGVzdCBwb3NzaWJsZSBzdGFuZGFyZCBhbmQgdGVzdGVkIGZvciB0aGUgaGlnaGVzdCBwdXJpdHkgYW5kIHBvdGVuY3kuPC9wPjxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+QXMgd2l0aCBhbnkgZGlldGFyeSBzdXBwbGVtZW50LCBpdCBpcyByZWNvbW1lbmRlZCB0aGF0IHlvdSBjb25zdWx0IHdpdGggeW91ciBwaHlzaWNpYW4gYmVmb3JlIHRha2luZyBJa2FyaWEgTGVhbiBCZWxseSBKdWljZS48L3A+PGJyPiIsImljb24iOiI8c3ZnIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmdcIiB2aWV3Qm94PVwiMCAwIDcwIDcwXCI+IDxwb2x5Z29uIHBvaW50cz1cIjM1LDQ1LjcgMTUuMSwyNi43IDE3LjQsMjQuMyAzNSw0MS4yIDUyLjYsMjQuMyA1NC45LDI2LjcgXCIvPiA8L3N2Zz4ifSx7InRpdGxlIjoiQ2FuIEkgdGFrZSB0aGUgSWthcmlhIExlYW4gQmVsbHkgSnVpY2Ugd2l0aCBvdGhlciBzdXBwbGVtZW50cz8iLCJoZWFkaW5nVHlwZSI6ImgzIiwiZGVzY3JpcHRpb24iOiI8YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPlRoZSBJa2FyaWEgTGVhbiBCZWxseSBKdWljZSBzaG91bGQgYmUgY29tcGF0aWJsZSB3aXRoIG90aGVyIHN1cHBsZW1lbnRzIHdpdGhvdXQgYW55IHByb2JsZW1zIG9yIGFkdmVyc2UgZWZmZWN0cy48L3A+PGJyPjxwIGNsYXNzPVwicnRlQmxvY2tcIj5Ib3dldmVyLCB3ZSBkbyBub3QgcmVjb21tZW5kIHlvdSB0YWtlIExlYW4gQmVsbHkgSnVpY2UgdG9nZXRoZXIgd2l0aCBzdXBwbGVtZW50cyBjb250YWluaW5nIHNpbWlsYXIgaW5ncmVkaWVudHMuPC9wPjxicj4iLCJpY29uIjoiPHN2ZyB4bWxucz1cImh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnXCIgdmlld0JveD1cIjAgMCA3MCA3MFwiPiA8cG9seWdvbiBwb2ludHM9XCIzNSw0NS43IDE1LjEsMjYuNyAxNy40LDI0LjMgMzUsNDEuMiA1Mi42LDI0LjMgNTQuOSwyNi43IFwiLz4gPC9zdmc+In0seyJ0aXRsZSI6IldpbGwgdGhlIElrYXJpYSBMZWFuIEJlbGx5IEp1aWNlIHJlYWxseSB3b3JrIGZvciBtZT8iLCJoZWFkaW5nVHlwZSI6ImgzIiwiZGVzY3JpcHRpb24iOiI8YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPlRoZSBJa2FyaWEgTGVhbiBCZWxseSBKdWljZSBpcyBwcm92ZW4gdG8gc3VwcG9ydCBoZWFsdGh5IHdlaWdodCBsb3NzLCBtYWludGFpbiBoZWFsdGh5IGRpZ2VzdGlvbiBhbmQgZW5lcmd5IGxldmVscy48L3A+PGJyPjxwIGNsYXNzPVwicnRlQmxvY2tcIj5JdOKAmXMgYSBwb3dlcmZ1bCBhbmQgdW5pcXVlIGJsZW5kIHRoYXQgaXMgaGVscGluZyB0aG91c2FuZHMgb2YgbWVuIGFuZCB3b21lbiBpbiBtYW55IGRpZmZlcmVudCBjb3VudHJpZXMuPC9wPjxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+SXQgbWFrZXMgbm8gZGlmZmVyZW5jZSBpZiB5b3XigJlyZSBhIG1hbiBvciBhIHdvbWFuLCBpZiB5b3XigJlyZSA2MCBvciAzMCB5ZWFycyBvZiBhZ2UuIFlvdSBjYW4gZ2V0IGltcHJlc3NpdmUgcmVzdWx0cyBieSB0YWtpbmcgdGhlIElrYXJpYSBMZWFuIEJlbGx5IEp1aWNlIGRhaWx5LCBpZGVhbGx5IGZvciAzIHRvIDYgbW9udGhzLjwvcD48YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPllvdSBjb3VsZCBub3RpY2UgdGhlIGRpZmZlcmVuY2UgaW4gYSBmZXcgc2hvcnQgZGF5cyBvciBpbiBhIHdlZWsuPC9wPjxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+TWF5YmUgaXTigJlsbCB0YWtlIGEgbW9udGggb3IgdHdvIHRvIG5vdGljZSB0aGUgaW1wcmVzc2l2ZSByZXN1bHRzIHlvdSBkcmVhbSBvZiBieSB0YWtpbmcgdGhlIElrYXJpYSBMZWFuIEJlbGx5IEp1aWNlIGVhY2ggZGF5LjwvcD48YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPkVpdGhlciB3YXksIHdlIGJlbGlldmUgeW914oCZbGwgZXhwZXJpZW5jZSBncmVhdCByZXN1bHRzIGZyb20gdGhlIGZvcm11bGEsIHRoYW5rcyB0byBpdHMgdW5pcXVlIGNvbWJpbmF0aW9uIG9mIHBvd2VyZnVsIG51dHJpZW50cy48L3A+PGJyPiIsImljb24iOiI8c3ZnIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmdcIiB2aWV3Qm94PVwiMCAwIDcwIDcwXCI+IDxwb2x5Z29uIHBvaW50cz1cIjM1LDQ1LjcgMTUuMSwyNi43IDE3LjQsMjQuMyAzNSw0MS4yIDUyLjYsMjQuMyA1NC45LDI2LjcgXCIvPiA8L3N2Zz4ifSx7InRpdGxlIjoiV2hhdCBpZiBJa2FyaWEgTGVhbiBCZWxseSBKdWljZSBkb2Vzbid0IHdvcmsgZm9yIG1lPyIsImhlYWRpbmdUeXBlIjoiaDMiLCJkZXNjcmlwdGlvbiI6Ijxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+V2XigJlyZSB2ZXJ5IGNvbmZpZGVudCB0aGF0IHlvdeKAmWxsIGJlbmVmaXQgZnJvbSB0aGUgSWthcmlhIExlYW4gQmVsbHkgSnVpY2UuPC9wPjxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+SG93ZXZlciwgaWYgdGhlIElrYXJpYSBMZWFuIEJlbGx5IEp1aWNlIGlzIGxlc3MgdGhhbiBzYXRpc2Z5aW5nIGZvciB5b3UsIGZlZWwgZnJlZSB0byBjb250YWN0IHVzIGRpcmVjdGx5IHRvIHJlcXVlc3QgYSBwcm9tcHQgcmVmdW5kIG9mIHlvdXIgcHVyY2hhc2UuPC9wPjxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+UmVzdWx0cyB2YXJ5IGZvciBldmVyeSBtYW4gb3Igd29tYW4uIEl0IG1heSB0YWtlIHlvdSBsb25nZXIgdG8gbm90aWNlIHRoZSBwb3NpdGl2ZSBlZmZlY3RzLiBPciBpdCBtYXkgYmUgcXVpY2suPC9wPjxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+RXZlbiBpZiB0aGUgSWthcmlhIExlYW4gQmVsbHkgSnVpY2UgZ2V0cyBhbWF6aW5nIHJlc3VsdHMgZm9yIG1hbnkgcGVvcGxlLCB3ZSBrbm93IHRoYXQgbm8gc3VwcGxlbWVudCBvciBtZWRpY2F0aW9uIGhhcyBhIDEwMCUgc3VjY2VzcyByYXRlLjwvcD48YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPlRoYXTigJlzIHdoeSB5b3XigJlyZSBjb3ZlcmVkIGJ5IG91ciAxODAtZGF5IG1vbmV5LWJhY2sgc2F0aXNmYWN0aW9uIGd1YXJhbnRlZS48L3A+PGJyPiIsImljb24iOiI8c3ZnIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmdcIiB2aWV3Qm94PVwiMCAwIDcwIDcwXCI+IDxwb2x5Z29uIHBvaW50cz1cIjM1LDQ1LjcgMTUuMSwyNi43IDE3LjQsMjQuMyAzNSw0MS4yIDUyLjYsMjQuMyA1NC45LDI2LjcgXCIvPiA8L3N2Zz4ifSx7InRpdGxlIjoiSG93IG1hbnkgYm90dGxlcyBvZiB0aGUgSWthcmlhIExlYW4gQmVsbHkgSnVpY2Ugc2hvdWxkIEkgb3JkZXI/IiwiaGVhZGluZ1R5cGUiOiJoMyIsImRlc2NyaXB0aW9uIjoiPGJyPjxwIGNsYXNzPVwicnRlQmxvY2tcIj5UaGUgSWthcmlhIExlYW4gQmVsbHkgSnVpY2XigJlzIGluZ3JlZGllbnRzIGFyZSBzY2llbnRpZmljYWxseSBwcm92ZW4gdG8gaGF2ZSB0aGVpciBncmVhdGVzdCBlZmZlY3QgYWZ0ZXIgOTAgZGF5cyBvciBtb3JlLjwvcD48YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPlRoaXMgaXMgd2h5IGl0IG1ha2VzIGEgbG90IG9mIHNlbnNlIGZvciB5b3UgdG8gZ2V0IHN0YXJ0ZWQgd2l0aCB0aGUgMyBvciA2LW1vbnRoIHBhY2thZ2VzLjwvcD48YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPlN1cmUsIHlvdSBjYW4gb3JkZXIgYSAzMC1kYXkgc3VwcGx5IHRvZGF5IC0gYW5kIHlvdeKAmWxsIGJlIHNvIGNvbnZpbmNlZCBieSBob3cgZ3JlYXQgeW91IGZlZWwgaW4gYSB3ZWVrIG9yIHR3byB0aGF0IHlvdeKAmWxsIGJlIGxpa2VseSB0byBvcmRlciBtb3JlLjwvcD48YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPlRoYXQmI3gyNztzIHdoeSB0YWtpbmcgYWR2YW50YWdlIG9mIG91ciAzIG9yIDYtYm90dGxlIGRlYWxzIGJlbG93IGlzIHRoZSBiZXN0IGNob2ljZSBmb3IgeW91LjwvcD48YnI+IiwiaWNvbiI6IjxzdmcgeG1sbnM9XCJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Z1wiIHZpZXdCb3g9XCIwIDAgNzAgNzBcIj4gPHBvbHlnb24gcG9pbnRzPVwiMzUsNDUuNyAxNS4xLDI2LjcgMTcuNCwyNC4zIDM1LDQxLjIgNTIuNiwyNC4zIDU0LjksMjYuNyBcIi8+IDwvc3ZnPiJ9LHsidGl0bGUiOiJIb3cgZmFzdCB3aWxsIEkgcmVjZWl2ZSBteSBvcmRlcj8iLCJoZWFkaW5nVHlwZSI6ImgzIiwiZGVzY3JpcHRpb24iOiI8YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPk9yZGVycyBhcmUgcHJvY2Vzc2VkIGFuZCBzaGlwcGVkIHdpdGhpbiAyLTMgZGF5cyBhbmQgc2hvdWxkIGFycml2ZSBpbiA1LTcgZGF5cyBpZiB5b3XigJlyZSBpbiB0aGUgVVMgb3IgMTAtMTIgZGF5cyBpZiB5b3XigJlyZSBvdXRzaWRlIHRoZSBVUywgZGVwZW5kaW5nIG9uIGN1c3RvbXMuPC9wPjxicj4iLCJpY29uIjoiPHN2ZyB4bWxucz1cImh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnXCIgd2lkdGg9XCIxMDAlXCIgaGVpZ2h0PVwiMTAwJVwiIHZpZXdCb3g9XCIwIDAgMTc5MiAxNzkyXCI+PHBhdGggZmlsbD1cImluaGVyaXRcIiBkPVwiTTE2NzEgNTY2cTAgNDAtMjggNjhsLTcyNCA3MjQtMTM2IDEzNnEtMjggMjgtNjggMjh0LTY4LTI4bC0xMzYtMTM2LTM2Mi0zNjJxLTI4LTI4LTI4LTY4dDI4LTY4bDEzNi0xMzZxMjgtMjggNjgtMjh0NjggMjhsMjk0IDI5NSA2NTYtNjU3cTI4LTI4IDY4LTI4dDY4IDI4bDEzNiAxMzZxMjggMjggMjggNjh6XCIgLz48L3N2Zz4ifSx7InRpdGxlIjoiV2hhdCBkbyBJIGRvIG5vdz8iLCJoZWFkaW5nVHlwZSI6ImgzIiwiZGVzY3JpcHRpb24iOiI8YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPldlIHRoaW5rIHlvdeKAmXJlIHJlYWR5IHRvIGdldCBzdGFydGVkIHdpdGggdGhlIElrYXJpYSBMZWFuIEJlbGx5IEp1aWNlLjwvcD48YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPlN0YXJ0IHlvdXIgb3JkZXIgYnkgY2xpY2tpbmcgb24geW91ciBiZXN0IG9wdGlvbiBiZWxvdy48L3A+PGJyPjxwIGNsYXNzPVwicnRlQmxvY2tcIj5FbnRlciB5b3VyIGRldGFpbHMgb24gdGhlIG5leHQgcGFnZSB0byBjb21wbGV0ZSB5b3VyIG9yZGVyLjwvcD48YnI+PHAgY2xhc3M9XCJydGVCbG9ja1wiPlRoZW4geW91IGNhbiByZWxheCBhcyBvdXIgZnJpZW5kbHkgdGVhbSBwcm9jZXNzZXMgeW91ciBvcmRlciwgcGFja3MgaXQgdXAgYW5kIHNlbmRzIGl0IHRvIHlvdXIgZG9vcnN0ZXAgaW4gYSBmZXcgc2hvcnQgZGF5cy48L3A+PGJyPiIsImljb24iOiI8c3ZnIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmdcIiB3aWR0aD1cIjEwMCVcIiBoZWlnaHQ9XCIxMDAlXCIgdmlld0JveD1cIjAgMCAxNzkyIDE3OTJcIj48cGF0aCBmaWxsPVwiaW5oZXJpdFwiIGQ9XCJNMTY3MSA1NjZxMCA0MC0yOCA2OGwtNzI0IDcyNC0xMzYgMTM2cS0yOCAyOC02OCAyOHQtNjgtMjhsLTEzNi0xMzYtMzYyLTM2MnEtMjgtMjgtMjgtNjh0MjgtNjhsMTM2LTEzNnEyOC0yOCA2OC0yOHQ2OCAyOGwyOTQgMjk1IDY1Ni02NTdxMjgtMjggNjgtMjh0NjggMjhsMTM2IDEzNnEyOCAyOCAyOCA2OHpcIiAvPjwvc3ZnPiJ9LHsidGl0bGUiOiJJcyB0aGUgSWthcmlhIExlYW4gQmVsbHkgSnVpY2UgYSBzY2FtIG9yIGxlZ2l0PyIsImhlYWRpbmdUeXBlIjoiaDMiLCJkZXNjcmlwdGlvbiI6Ijxicj48cCBjbGFzcz1cInJ0ZUJsb2NrXCI+VG8gYmUgc2hvcnQgYW5kIHByZWNpc2UsIElrYXJpYSBMZWFuIEJlbGx5IEp1aWNlIGlzIG5vdCBhIHNjYW0uIERlc3BpdGUgYmVpbmcgcmVsYXRpdmVseSBuZXdjb21lciBpbiB0aGUgd2VpZ2h0IGxvc3Mgc3VwcGxlbWVudCBtYXJrZXQsIElrYXJpYSBoYXMgZHJhc3RpY2FsbHkgaW1wYWN0ZWQgdGhlIG1hcmtldC4gV2hpbGUgc29tZSBoYXZlIGRvdWJ0cyByZWdhcmRpbmcgdGhlIGxlZ2l0aW1hY3kgb2YgdGhpcyBwcm9kdWN0LCBtb3N0IHBlb3BsZSBhcmUgaGFwcHkgd2l0aCB0aGUgZWZmZWN0cyBpdCBoYWQgb24gdGhlaXIgYXR0ZW1wdHMgdG8gbG9zZSB3ZWlnaHQuPC9wPjxicj4iLCJpY29uIjoiPHN2ZyB4bWxucz1cImh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnXCIgd2lkdGg9XCIxMDAlXCIgaGVpZ2h0PVwiMTAwJVwiIHZpZXdCb3g9XCIwIDAgMTc5MiAxNzkyXCI+PHBhdGggZmlsbD1cImluaGVyaXRcIiBkPVwiTTE2NzEgNTY2cTAgNDAtMjggNjhsLTcyNCA3MjQtMTM2IDEzNnEtMjggMjgtNjggMjh0LTY4LTI4bC0xMzYtMTM2LTM2Mi0zNjJxLTI4LTI4LTI4LTY4dDI4LTY4bDEzNi0xMzZxMjgtMjggNjgtMjh0NjggMjhsMjk0IDI5NSA2NTYtNjU3cTI4LTI4IDY4LTI4dDY4IDI4bDEzNiAxMzZxMjggMjggMjggNjh6XCIgLz48L3N2Zz4ifV0sImV4cGFuZEZpcnN0SXRlbSI6dHJ1ZSwiY29sbGFwc2VPdGhlcnMiOnRydWUsImxheW91dCI6ImNsZWFuTGF5b3V0Iiwic2NoZW1hIjp0cnVlfQ==">
                                                                        <!-- FAQ Schema json-ld -->
                                                                        <script type="application/ld+json">
                                                                            {
                                                                                "@context": "https://schema.org",
                                                                                "@type": "FAQPage",
                                                                                "mainEntity": [

                                                                                    {
                                                                                        "@type": "Question",
                                                                                        "name": "Is the Ikaria Lean Belly Juice for real?",
                                                                                        "acceptedAnswer": {
                                                                                            "@type": "Answer",
                                                                                            "text": "<br><p class=\"rteBlock\">The Ikaria Lean Belly Juice is an all-natural formula that contains only ingredients that are tested and produced in a controlled facility.</p><br><p class=\"rteBlock\">It is manufactured here in the USA in an FDA-registered facility that follows the GMP (good manufacturing practices) guidelines.</p><br><p class=\"rteBlock\">The ingredients we use are of the highest possible standard and tested for the highest purity and potency.</p><br><p class=\"rteBlock\">As with any dietary supplement, it is recommended that you consult with your physician before taking Ikaria Lean Belly Juice.</p><br>"
                                                                                        }
                                                                                    },

                                                                                    {
                                                                                        "@type": "Question",
                                                                                        "name": "Can I take the Ikaria Lean Belly Juice with other supplements?",
                                                                                        "acceptedAnswer": {
                                                                                            "@type": "Answer",
                                                                                            "text": "<br><p class=\"rteBlock\">The Ikaria Lean Belly Juice should be compatible with other supplements without any problems or adverse effects.</p><br><p class=\"rteBlock\">However, we do not recommend you take Lean Belly Juice together with supplements containing similar ingredients.</p><br>"
                                                                                        }
                                                                                    },

                                                                                    {
                                                                                        "@type": "Question",
                                                                                        "name": "Will the Ikaria Lean Belly Juice really work for me?",
                                                                                        "acceptedAnswer": {
                                                                                            "@type": "Answer",
                                                                                            "text": "<br><p class=\"rteBlock\">The Ikaria Lean Belly Juice is proven to support healthy weight loss, maintain healthy digestion and energy levels.</p><br><p class=\"rteBlock\">It’s a powerful and unique blend that is helping thousands of men and women in many different countries.</p><br><p class=\"rteBlock\">It makes no difference if you’re a man or a woman, if you’re 60 or 30 years of age. You can get impressive results by taking the Ikaria Lean Belly Juice daily, ideally for 3 to 6 months.</p><br><p class=\"rteBlock\">You could notice the difference in a few short days or in a week.</p><br><p class=\"rteBlock\">Maybe it’ll take a month or two to notice the impressive results you dream of by taking the Ikaria Lean Belly Juice each day.</p><br><p class=\"rteBlock\">Either way, we believe you’ll experience great results from the formula, thanks to its unique combination of powerful nutrients.</p><br>"
                                                                                        }
                                                                                    },

                                                                                    {
                                                                                        "@type": "Question",
                                                                                        "name": "What if Ikaria Lean Belly Juice doesn&#x27;t work for me?",
                                                                                        "acceptedAnswer": {
                                                                                            "@type": "Answer",
                                                                                            "text": "<br><p class=\"rteBlock\">We’re very confident that you’ll benefit from the Ikaria Lean Belly Juice.</p><br><p class=\"rteBlock\">However, if the Ikaria Lean Belly Juice is less than satisfying for you, feel free to contact us directly to request a prompt refund of your purchase.</p><br><p class=\"rteBlock\">Results vary for every man or woman. It may take you longer to notice the positive effects. Or it may be quick.</p><br><p class=\"rteBlock\">Even if the Ikaria Lean Belly Juice gets amazing results for many people, we know that no supplement or medication has a 100% success rate.</p><br><p class=\"rteBlock\">That’s why you’re covered by our 180-day money-back satisfaction guarantee.</p><br>"
                                                                                        }
                                                                                    },

                                                                                    {
                                                                                        "@type": "Question",
                                                                                        "name": "How many bottles of the Ikaria Lean Belly Juice should I order?",
                                                                                        "acceptedAnswer": {
                                                                                            "@type": "Answer",
                                                                                            "text": "<br><p class=\"rteBlock\">The Ikaria Lean Belly Juice’s ingredients are scientifically proven to have their greatest effect after 90 days or more.</p><br><p class=\"rteBlock\">This is why it makes a lot of sense for you to get started with the 3 or 6-month packages.</p><br><p class=\"rteBlock\">Sure, you can order a 30-day supply today - and you’ll be so convinced by how great you feel in a week or two that you’ll be likely to order more.</p><br><p class=\"rteBlock\">That&#x27;s why taking advantage of our 3 or 6-bottle deals below is the best choice for you.</p><br>"
                                                                                        }
                                                                                    },

                                                                                    {
                                                                                        "@type": "Question",
                                                                                        "name": "How fast will I receive my order?",
                                                                                        "acceptedAnswer": {
                                                                                            "@type": "Answer",
                                                                                            "text": "<br><p class=\"rteBlock\">Orders are processed and shipped within 2-3 days and should arrive in 5-7 days if you’re in the US or 10-12 days if you’re outside the US, depending on customs.</p><br>"
                                                                                        }
                                                                                    },

                                                                                    {
                                                                                        "@type": "Question",
                                                                                        "name": "What do I do now?",
                                                                                        "acceptedAnswer": {
                                                                                            "@type": "Answer",
                                                                                            "text": "<br><p class=\"rteBlock\">We think you’re ready to get started with the Ikaria Lean Belly Juice.</p><br><p class=\"rteBlock\">Start your order by clicking on your best option below.</p><br><p class=\"rteBlock\">Enter your details on the next page to complete your order.</p><br><p class=\"rteBlock\">Then you can relax as our friendly team processes your order, packs it up and sends it to your doorstep in a few short days.</p><br>"
                                                                                        }
                                                                                    },

                                                                                    {
                                                                                        "@type": "Question",
                                                                                        "name": "Is the Ikaria Lean Belly Juice a scam or legit?",
                                                                                        "acceptedAnswer": {
                                                                                            "@type": "Answer",
                                                                                            "text": "<br><p class=\"rteBlock\">To be short and precise, Ikaria Lean Belly Juice is not a scam. Despite being relatively newcomer in the weight loss supplement market, Ikaria has drastically impacted the market. While some have doubts regarding the legitimacy of this product, most people are happy with the effects it had on their attempts to lose weight.</p><br>"
                                                                                        }
                                                                                    }


                                                                                ]
                                                                            }
                                                                        </script>
                                                                        <!-- End of FAQ Schema json -ld -->
                                                                        <ul class="accordion-wrapper cleanLayout  " data-first-expanded="true">
                                                                            <li class="accordion-item">
                                                                                <div class="accordion-title">
                                                                                    <div class="title-text">
                                                                                        <h3>Is the Ikaria Lean Belly Juice for real?</h3>
                                                                                    </div>
                                                                                    <div class="arrow-wrapper">
                                                                                        <div class="arrow"> <svg class="close" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path> 
</svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion-description">
                                                                                    <div class="section">
                                                                                        <div class="section-inner"><br/>
                                                                                            <p class="rteBlock">The Ikaria Lean Belly Juice is an all-natural formula that contains only ingredients that are tested and produced in a controlled facility.</p><br/>
                                                                                            <p class="rteBlock">It is manufactured here in the USA in an FDA-registered facility that follows the GMP (good manufacturing practices) guidelines.</p><br/>
                                                                                            <p class="rteBlock">The ingredients we use are of the highest possible standard and tested for the highest purity and potency.</p><br/>
                                                                                            <p class="rteBlock">As with any dietary supplement, it is recommended that you consult with your physician before taking Ikaria Lean Belly Juice.</p><br/></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="accordion-item">
                                                                                <div class="accordion-title">
                                                                                    <div class="title-text">
                                                                                        <h3>Can I take the Ikaria Lean Belly Juice with other supplements?</h3>
                                                                                    </div>
                                                                                    <div class="arrow-wrapper">
                                                                                        <div class="arrow"> <svg class="close" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path> 
</svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion-description">
                                                                                    <div class="section">
                                                                                        <div class="section-inner"><br/>
                                                                                            <p class="rteBlock">The Ikaria Lean Belly Juice should be compatible with other supplements without any problems or adverse effects.</p><br/>
                                                                                            <p class="rteBlock">However, we do not recommend you take Lean Belly Juice together with supplements containing similar ingredients.</p><br/></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="accordion-item">
                                                                                <div class="accordion-title">
                                                                                    <div class="title-text">
                                                                                        <h3>Will the Ikaria Lean Belly Juice really work for me?</h3>
                                                                                    </div>
                                                                                    <div class="arrow-wrapper">
                                                                                        <div class="arrow"> <svg class="close" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path> 
</svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion-description">
                                                                                    <div class="section">
                                                                                        <div class="section-inner"><br/>
                                                                                            <p class="rteBlock">The Ikaria Lean Belly Juice is proven to support healthy weight loss, maintain healthy digestion and energy levels.</p><br/>
                                                                                            <p class="rteBlock">It&rsquo;s a powerful and unique blend that is helping thousands of men and women in many different countries.</p><br/>
                                                                                            <p class="rteBlock">It makes no difference if you&rsquo;re a man or a woman, if you&rsquo;re 60 or 30 years of age. You can get impressive results by taking the Ikaria Lean Belly
                                                                                                Juice daily, ideally for 3 to 6 months.</p><br/>
                                                                                            <p class="rteBlock">You could notice the difference in a few short days or in a week.</p><br/>
                                                                                            <p class="rteBlock">Maybe it&rsquo;ll take a month or two to notice the impressive results you dream of by taking the Ikaria Lean Belly Juice each day.</p><br/>
                                                                                            <p class="rteBlock">Either way, we believe you&rsquo;ll experience great results from the formula, thanks to its unique combination of powerful nutrients.</p><br/></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="accordion-item">
                                                                                <div class="accordion-title">
                                                                                    <div class="title-text">
                                                                                        <h3>What if Ikaria Lean Belly Juice doesn\'t work for me?</h3>
                                                                                    </div>
                                                                                    <div class="arrow-wrapper">
                                                                                        <div class="arrow"> <svg class="close" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path> 
</svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion-description">
                                                                                    <div class="section">
                                                                                        <div class="section-inner"><br/>
                                                                                            <p class="rteBlock">We&rsquo;re very confident that you&rsquo;ll benefit from the Ikaria Lean Belly Juice.</p><br/>
                                                                                            <p class="rteBlock">However, if the Ikaria Lean Belly Juice is less than satisfying for you, feel free to contact us directly to request a prompt refund of your purchase.</p><br/>
                                                                                            <p
                                                                                                class="rteBlock">Results vary for every man or woman. It may take you longer to notice the positive effects. Or it may be quick.</p><br/>
                                                                                                <p class="rteBlock">Even if the Ikaria Lean Belly Juice gets amazing results for many people, we know that no supplement or medication has a 100% success rate.</p><br/>
                                                                                                <p class="rteBlock">That&rsquo;s why you&rsquo;re covered by our 180-day money-back satisfaction guarantee.</p><br/></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="accordion-item">
                                                                                <div class="accordion-title">
                                                                                    <div class="title-text">
                                                                                        <h3>How many bottles of the Ikaria Lean Belly Juice should I order?</h3>
                                                                                    </div>
                                                                                    <div class="arrow-wrapper">
                                                                                        <div class="arrow"> <svg class="close" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path> 
</svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion-description">
                                                                                    <div class="section">
                                                                                        <div class="section-inner"><br/>
                                                                                            <p class="rteBlock">The Ikaria Lean Belly Juice&rsquo;s ingredients are scientifically proven to have their greatest effect after 90 days or more.</p><br/>
                                                                                            <p class="rteBlock">This is why it makes a lot of sense for you to get started with the 3 or 6-month packages.</p><br/>
                                                                                            <p class="rteBlock">Sure, you can order a 30-day supply today - and you&rsquo;ll be so convinced by how great you feel in a week or two that you&rsquo;ll be likely to order more.</p><br/>
                                                                                            <p
                                                                                                class="rteBlock">That\'s why taking advantage of our 3 or 6-bottle deals below is the best choice for you.</p><br/></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="accordion-item">
                                                                                <div class="accordion-title">
                                                                                    <div class="title-text">
                                                                                        <h3>How fast will I receive my order?</h3>
                                                                                    </div>
                                                                                    <div class="arrow-wrapper">
                                                                                        <div class="arrow"> <svg class="close" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path> 
</svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion-description">
                                                                                    <div class="section">
                                                                                        <div class="section-inner"><br/>
                                                                                            <p class="rteBlock">Orders are processed and shipped within 2-3 days and should arrive in 5-7 days if you&rsquo;re in the US or 10-12 days if you&rsquo;re outside the US, depending
                                                                                                on customs.</p><br/></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="accordion-item">
                                                                                <div class="accordion-title">
                                                                                    <div class="title-text">
                                                                                        <h3>What do I do now?</h3>
                                                                                    </div>
                                                                                    <div class="arrow-wrapper">
                                                                                        <div class="arrow"> <svg class="close" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path> 
</svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion-description">
                                                                                    <div class="section">
                                                                                        <div class="section-inner"><br/>
                                                                                            <p class="rteBlock">We think you&rsquo;re ready to get started with the Ikaria Lean Belly Juice.</p><br/>
                                                                                            <p class="rteBlock">Start your order by clicking on your best option below.</p><br/>
                                                                                            <p class="rteBlock">Enter your details on the next page to complete your order.</p><br/>
                                                                                            <p class="rteBlock">Then you can relax as our friendly team processes your order, packs it up and sends it to your doorstep in a few short days.</p><br/></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="accordion-item">
                                                                                <div class="accordion-title">
                                                                                    <div class="title-text">
                                                                                        <h3>Is the Ikaria Lean Belly Juice a scam or legit?</h3>
                                                                                    </div>
                                                                                    <div class="arrow-wrapper">
                                                                                        <div class="arrow"> <svg class="close" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path> 
</svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion-description">
                                                                                    <div class="section">
                                                                                        <div class="section-inner"><br/>
                                                                                            <p class="rteBlock">To be short and precise, Ikaria Lean Belly Juice is not a scam. Despite being relatively newcomer in the weight loss supplement market, Ikaria has drastically
                                                                                                impacted the market. While some have doubts regarding the legitimacy of this product, most people are happy with the effects it had on their attempts to lose
                                                                                                weight.</p><br/></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="u_1851057439 default dmShare dmNoMark dmShareDesktop clearfix" id="1851057439" dmle_extension="shareextension" data-element-type="shareextension" google_plus="true" wr="true" data-display-type="block" icon="true" surround="true" icon-name="icon-share"
                                                                        facebook="true" twitter="true" email="true" like="true" use_new_design="true" use_popup="true" linked_in="true" data-title="U2hhcmU=" data-display-title="false" data-layout="layout-2"
                                                                        data-share-hover-effect="zoomout" text="I wanted to share this great website with you" design="large" share_button_text="Share" share_popup_title="Share by:">
                                                                        <div class="share-icons">
                                                                            <div data-target="facebook" class="shareLink fbShare clickTarget" data-href="http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.ikarialeanbellyjuice.sale" data-hover-effect="zoomout">
                                                                            <span class="share-icon dm-social-icons-facebook"></span>
                                                                            </div>
                                                                            <div data-target="twitter" class="shareLink twitterShare clickTarget" data-href="http://twitter.com/intent/tweet?text=I wanted to share this great website with you&url=https%3A%2F%2Fwww.ikarialeanbellyjuice.sale" data-hover-effect="zoomout"> <span class="share-icon dm-social-icons-twitter"></span>
                                                                            </div>
                                                                            <div data-target="linkedin" class="shareLink linkedinShare clickTarget" data-href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.ikarialeanbellyjuice.sale&title=I wanted to share this great website with you" data-hover-effect="zoomout">
                                                                            <span class="share-icon dm-social-icons-linkedin"></span>
                                                                            </div>
                                                                            <a data-target="whatsapp" class="shareLink whatsappShare clickTarget" target="_blank" href="https://api.whatsapp.com/send?text=I wanted to share this great website with you https%3A%2F%2Fwww.ikarialeanbellyjuice.sale" data-hover-effect="zoomout"> <span class="share-icon dm-social-icons-whatsapp"></span> 
</a>
                                                                            <a data-target="email" class="shareLink emailShare clickTarget" href="mailto:?subject=I wanted to share this great website with you&body=https%3A%2F%2Fwww.ikarialeanbellyjuice.sale" data-hover-effect="zoomout"> <span class="share-icon dm-social-icons-email"></span> 
</a>
                                                                        </div>
                                                                    </div>
                                                                    <div data-element-type="spacer" class="u_1854730358 dmSpacer" id="1854730358"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1631183507 dmRespRow hide-for-small hide-for-medium hide-for-large" id="1631183507">
                                                            <div class="dmRespColsWrapper" id="1420663297">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1657027528">
                                                                    <div data-element-type="spacer" class="dmSpacer u_1529169554" id="1529169554"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1643891832 dmRespRow hide-for-large hide-for-medium hide-for-small" id="1643891832">
                                                            <div class="dmRespColsWrapper" id="1995838580">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1251150997">
                                                                    <div data-element-type="spacer" class="dmSpacer u_1775730817" id="1775730817"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1283825948 dmRespRow fullBleedChanged fullBleedMode hide-for-small" style="text-align: center;" id="1283825948">
                                                            <div class="dmRespColsWrapper" id="1261007625">
                                                                <div class="u_1189926563 dmRespCol small-12 medium-12 large-12 hide-for-large hide-for-medium" id="1189926563"> <span id="1312752337"></span>
                                                                    <div class="u_1134608113 dmRespRow fullBleedChanged fullBleedMode hide-for-small" id="1134608113">
                                                                        <div class="dmRespColsWrapper" id="1066379292">
                                                                            <div class="dmRespCol empty-column small-12 medium-12 large-12" id="1715151610"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1372957185 dmRespRow hide-for-large hide-for-medium" id="1372957185">
                                                            <div class="dmRespColsWrapper" id="1660633102">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1461421787">
                                                                    <div class="u_1655782199 imageWidget align-center hide-for-large hide-for-medium hide-for-small" data-element-type="image" data-widget-type="image" id="1655782199"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/6-bottles-1920w.png" alt="" id="1314377188" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/6-bottles.png"
                                                                            width="700" height="466" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1870624914 dmRespRow hide-for-large hide-for-medium hide-for-small" id="1870624914">
                                                            <div class="dmRespColsWrapper" id="1545724794">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1445872325">
                                                                    <div class="u_1527640081 imageWidget align-center hide-for-large hide-for-medium hide-for-small" data-element-type="image" data-widget-type="image" id="1527640081"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/3-bottles-1920w.png" alt="" id="1967338496" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/3-bottles.png"
                                                                            width="700" height="418" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="u_1307912984 dmRespRow hide-for-large hide-for-medium" id="1307912984">
                                                            <div class="dmRespColsWrapper" id="1830266739">
                                                                <div class="dmRespCol large-12 medium-12 small-12" id="1066072886">
                                                                    <div class="u_1876280566 imageWidget align-center hide-for-large hide-for-medium hide-for-small" data-element-type="image" data-widget-type="image" id="1876280566"><img src="https://lirp.cdn-website.com/9a89cede/dms3rep/multi/opt/1-bottle-1920w.png" alt="" id="1895116423" class="" data-dm-image-path="https://irp.cdn-website.com/9a89cede/dms3rep/multi/1-bottle.png"
                                                                            width="700" height="402" onerror="handleImageLoadError(this)" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sticky-widgets-container-global" id="1922881045"> <a data-display-type="block" class="u_1018980443 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient sticky-mobile-position-bottom sticky-desktop-position-bottom" file="false" href="https://www.alpilean.news/seohomepage"
                                                data-element-type="dButtonLinkId" id="1018980443" target="_blank" data-anim-extended="eyJkZXNrdG9wIjp7InRyaWdnZXIiOiJlbnRyYW5jZSIsImFuaW1hdGlvbiI6ImZhZGVJbkNvbWJvIiwiZHVyYXRpb24iOjAuNSwiZGVsYXkiOjEwLCJpbnRlbnNpdHkiOjEsImRpciI6ImluLXBsYWNlIn0sIm1vYmlsZSI6eyJ0cmlnZ2VyIjoiZW50cmFuY2UiLCJhbmltYXRpb24iOiJmYWRlSW5Db21ibyIsImR1cmF0aW9uIjowLjUsImRlbGF5IjoxMCwiaW50ZW5zaXR5IjoxLCJkaXIiOiJpbi1wbGFjZSJ9fQ=="
                                                data-anim-desktop="fadeInCombo" data-anim-mobile="fadeInCombo" data-show-on-page-only="old-home"> <span class="iconBg" aria-hidden="true" id="1006228133"> <span class="icon hasFontIcon icon-star" id="1092548372"></span> 
</span> 
 <span class="text" id="1203684780">✓ Yes! I\'m Ready To Try Alpilean</span> 
</a>
                                            <a data-display-type="block" class="u_1370129344 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient sticky-desktop-position-bottom sticky-mobile-position-bottom hide-for-small" file="false" href="https://www.alpilean.news/seolegitpage"
                                                data-element-type="dButtonLinkId" id="1370129344" target="_blank" data-anim-mobile="fadeInCombo" data-show-on-page-only="alpilean-scam" data-anim-extended="eyJkZXNrdG9wIjp7InRyaWdnZXIiOiJlbnRyYW5jZSIsImFuaW1hdGlvbiI6ImZhZGVJbkNvbWJvIiwiZHVyYXRpb24iOjAuNSwiZGVsYXkiOjEwLCJpbnRlbnNpdHkiOjEsImRpciI6ImluLXBsYWNlIn19"
                                                data-anim-desktop="fadeInCombo"> <span class="iconBg" aria-hidden="true" id="1059943987"> <span class="icon hasFontIcon icon-star" id="1958330793"></span> 
</span> 
 <span class="text" id="1591739988">✓ Take Me To The Official Website</span> 
</a>
                                            <a data-display-type="block" class="u_1590115101 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient hide-for-medium hide-for-large sticky-desktop-position-bottom-right sticky-mobile-position-bottom" file="false" href="https://www.alpilean.news/seolegitpage"
                                                data-element-type="dButtonLinkId" id="1590115101" target="_blank" data-anim-mobile="fadeInCombo" data-show-on-page-only="alpilean-scam" data-anim-extended="eyJtb2JpbGUiOnsidHJpZ2dlciI6ImVudHJhbmNlIiwiYW5pbWF0aW9uIjoiZmFkZUluQ29tYm8iLCJkdXJhdGlvbiI6MC41LCJkZWxheSI6MTAsImludGVuc2l0eSI6MSwiZGlyIjoiaW4tcGxhY2UifX0="> <span class="iconBg" aria-hidden="true" id="1046533334"> <span class="icon hasFontIcon icon-star" id="1560162380"></span> 
</span> 
 <span class="text" id="1135683727">✓ Take Me To The Official Website</span> 
</a>
                                            <a data-display-type="block" class="u_1326948130 align-center dmButtonLink dmWidget dmWwr default dmOnlyButton dmDefaultGradient hide-for-large sticky-desktop-position-bottom-right sticky-mobile-position-bottom hide-for-medium" file="false" href="https://www.alpilean.news/seohomepage"
                                                data-element-type="dButtonLinkId" id="1326948130" data-buttonstyle="ROUND_SIDES" target="_blank" data-show-on-page-only="home-old" data-anim-mobile="fadeInCombo" data-anim-extended="eyJtb2JpbGUiOnsidHJpZ2dlciI6ImVudHJhbmNlIiwiYW5pbWF0aW9uIjoiZmFkZUluQ29tYm8iLCJkdXJhdGlvbiI6MC41LCJkZWxheSI6MTAsImludGVuc2l0eSI6MSwiZGlyIjoiaW4tcGxhY2UifX0="> <span class="iconBg" aria-hidden="true" id="1008360292"> <span class="icon hasFontIcon icon-star" id="1905815481"></span> 
</span> 
 <span class="text" id="1878537934">Take Me To The Discount Page &rarr;</span> 
</a>
                                        </div>
                                        <div class="dmFooterContainer">
                                            <div id="fcontainer" class="u_fcontainer f_hcontainer dmFooter p_hfcontainer">
                                                <div dm:templateorder="250" class="dmFooterResp generalFooter" id="1943048428">
                                                    <div class="u_1344955519 dmRespRow dmDefaultListContentRow" style="text-align:center" id="1344955519">
                                                        <div class="dmRespColsWrapper" id="1673088871">
                                                            <div class="u_1751347194 dmRespCol small-12 medium-12 large-12" id="1751347194">
                                                                <div class="u_1650770991 dmNewParagraph" data-element-type="paragraph" data-version="5" id="1650770991" style="transition: opacity 1s ease-in-out 0s;">
                                                                    <p class="size-12 m-size-10" style="line-height: 1.6;"><span class="font-size-12 m-font-size-10" style="display: unset; color: rgb(242, 242, 242);">Statements found on this website have not been evaluated by the Food and Drug Administration. Products on this website are not intended to diagnose, treat, cure, or prevent any disease. If you are pregnant, nursing, taking medication, or have a medical condition, consult your physician before using our products. ClickBank is the retailer of products on this site. CLICKBANK&reg; is a registered trademark of Click Sales, Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank\'s role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</span></p>
                                                                </div>
                                                                <div class="dmNewParagraph sweezy-custom-cursor-hover" data-element-type="paragraph" data-version="5" id="1485574807" style="transition: opacity 1s ease-in-out 0s;">
                                                                    <p class="m-size-10 text-align-center size-12"><span style="color: var(--color_3); display: unset;" class="m-font-size-10 font-size-12" m-font-size-set="true">&copy; Copyright 2023 Ikarialeanbelly. All Rights Reserved.</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="1236746004" dmle_extension="powered_by" data-element-type="powered_by" icon="true" surround="false"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="showOnMedium layout-drawer-hamburger hamburger-on-header" id="layout-drawer-hamburger" role="button" aria-label="menu opener" tabindex="0"> <span class="hamburger__slice"></span>
                                        <span class="hamburger__slice"></span>
                                        <span class="hamburger__slice"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  Add full CSS and Javascript before the close tag of the body if needed -->




















    <!-- Google Fonts Include -->














    <!-- loadCSS function -->
    <script>
        (function() {
            let cssLinks = {};

            function loadCssLink(link) {
                link.onload = null;
                link.rel = "stylesheet";
                link.type = "text/css";
            }

            function checkCss() {
                if (cssLinks && cssLinks.runtime && cssLinks.global) {
                    loadCssLink(cssLinks.runtime);
                    loadCssLink(cssLinks.global);
                    cssLinks = null;
                }
            }

            function loadCSS(link) {
                try {
                    var urlParams = new URLSearchParams(window.location.search);
                    var noCSS = !!urlParams.get("nocss");
                    var cssTimeout = urlParams.get("cssTimeout") || 0;

                    if (noCSS) {
                        return;
                    }
                    if (link.href.includes("d-css-runtime")) {
                        cssLinks.runtime = link;
                        checkCss();
                    } else if (link.id === "siteGlobalCss") {
                        cssLinks.global = link;
                        checkCss();
                    } else {
                        requestIdleCallback(function() {
                            window.setTimeout(function() {
                                loadCssLink(link);
                            }, parseInt(cssTimeout, 10));
                        });
                    }
                } catch (e) {
                    /* Never fail - this is just a tool for measurements */
                }
            }
            window.loadCSS = window.loadCSS || loadCSS;
        })();
    </script>

    <link rel="preload" href="https://irp.cdn-website.com/fonts/css?family=Raleway:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic|Work+Sans:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic|Roboto:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic|Poppins:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic|Montserrat:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic&amp;subset=latin-ext&amp;display=swap"
        as="style" fetchpriority="low" onload="loadCSS(this)" />

    <style>
        @font-face {
            font-family: "GiorgioSans-Medium";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/GiorgioSans-Medium-fb28_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "GiorgioSans-Bold";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/GiorgioSans-Bold-b463_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "GiorgioSans-Thinl";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/GiorgioSans-Thinl-a595_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "GiorgioSans-Regular";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/GiorgioSans-Regular-e06b_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "Bebas Neue Pro Book";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/Bebas+Neue+Pro+Book-d6dc_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "GiorgioSans-Black";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/GiorgioSans-Black-78e_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "Poppins-SemiBold";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/Poppins-SemiBold-fee1_400.ttf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "Bebas Neue Pro Light";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/Bebas+Neue+Pro+Light-b61d_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "CalendarSymbolWizard-Regular";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/CalendarSymbolWizard-Regular-1bd6_400.ttf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "Bebas Neue Pro Regular";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/Bebas+Neue+Pro+Regular-87c0_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "Bebas Neue Pro Bold";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/Bebas+Neue+Pro+Bold-1841_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "ElegantIcons";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/ElegantIcons-b6cc_400.ttf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "Bebas Neue Pro Thin";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/Bebas+Neue+Pro+Thin-1403_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "GiorgioSans-Extralight";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/GiorgioSans-Extralight-e0d4_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "GiorgioSans-Light";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/GiorgioSans-Light-8ad3_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "GiorgioSans-Heavy";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/GiorgioSans-Heavy-fa95_400.otf");
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <style>
        @font-face {
            font-family: "Poppins-Medium";
            src: url("https://irp.cdn-website.com/9a89cede/fonts/Poppins-Medium-4ebc_400.ttf");
            font-weight: 400;
            font-style: normal;
        }
    </style>






    <!-- RT CSS Include d-css-runtime-desktop-one-package-structured-global-->
    <link rel="preload" as="style" fetchpriority="low" onload="loadCSS(this)" href="https://static.cdn-website.com/mnlt/production/3472/_dm/s/rt/dist/css/d-css-runtime-desktop-one-package-structured-global.min.css" />

    <!-- End of RT CSS Include -->


    <link rel="preload" href="https://irp.cdn-website.com/WIDGET_CSS/production_3472/89bea996f721eb90147fc5610a41f4a0.css" id="widgetCSS" as="style" fetchpriority="low" onload="loadCSS(this)" />


    <!-- Support `img` size attributes -->
    <style>
        img[width][height] {
            height: auto;
        }
    </style>

    <!-- Support showing sticky element on page only -->
    <style>
        body[data-page-alias="home"] #dm [data-show-on-page-only="home"] {
            display: block !important;
        }
    </style>

    <!-- This is populated in Ajax navigation -->
    <style id="pageAdditionalWidgetsCss" type="text/css">
    </style>




    <!-- Site CSS -->
    <link rel="preload" href="https://irp.cdn-website.com/9a89cede/files/9a89cede_withFlex_1.min.css?v=786" id="siteGlobalCss" as="style" fetchpriority="low" onload="loadCSS(this)" />



    <style id="customWidgetStyle" type="text/css">
        .widget-832a29 .accordion-wrapper {
            list-style-type: none;
            text-align: left;
            overflow: hidden;
            margin: 0;
        }

        .widget-832a29 .accordion-title {
            display: flex;
            align-items: center;
        }

        .widget-832a29 .title-text {
            display: flex;
            align-items: center;
        }

        .widget-832a29 .title-text>* {
            margin: 0;
        }

        .widget-832a29 .title-icon {
            width: 30px;
            fill: currentColor;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #dm .widget-832a29 .accordion-title .title-text {
            font-size: 16px;
            font-weight: 600;
            flex-grow: 1;
        }

        .widget-832a29 .section {
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            height: auto;
            max-height: 0;
            font-size: 16px;
        }

        .widget-832a29 .expanded .section,
        [data-first-expanded=\'true\'] .accordion-item:first-of-type .section {
            max-height: 30000px;
        }

        .widget-832a29 .section-inner {
            padding: 18px 20px;
            margin: 0;
        }

        .widget-832a29 .section-inner ul {
            padding-left: 40px;
            list-style-type: disc;
            list-style-position: outside;
        }

        .widget-832a29 .arrow {
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            position: relative;
            flex-shrink: 0;
            cursor: pointer;
        }

        .widget-832a29 .arrow .close {
            width: 100%;
            height: 100%;
        }

        /* plus and minus signs animation*/

        .widget-832a29 .vertical {
            transition: all 0.5s ease-in-out;
            transform: rotate(-90deg);
            position: absolute;
            background-color: #000;
            background-color: currentColor;
            width: 10%;
            height: 100%;
            left: 50%;
            margin-left: -5%;
            top: 50%;
            margin-top: -50%;
        }

        .widget-832a29 .horizontal {
            transition: all 0.5s ease-in-out;
            transform: rotate(-90deg);
            background-color: #000;
            background-color: currentColor;
            position: absolute;
            width: 100%;
            height: 10%;
            left: 50%;
            margin-left: -50%;
            top: 50%;
            margin-top: -5%;
            opacity: 1;
        }

        .widget-832a29 .expanded .vertical,
        [data-first-expanded=\'true\'] .accordion-item:first-of-type .vertical {
            transform: rotate(90deg);
        }

        .widget-832a29 .expanded .horizontal,
        [data-first-expanded=\'true\'] .accordion-item:first-of-type .horizontal {
            transform: rotate(90deg);
            opacity: 0;
        }

        /* Layout 1 */

        .widget-832a29 .plusMinus .accordion-title {
            padding: 10px 20px 20px 20px;
            justify-content: space-between;
            border-bottom: 1px solid #e3e3e3;
        }

        .widget-832a29 .plusMinus .accordion-title .title-text {
            margin: 0;
        }

        .widget-832a29 .plusMinus .arrow-wrapper {
            margin-left: 15px;
        }

        .widget-832a29 .plusMinus .arrow {
            position: relative;
            width: 15px;
            height: 15px;
        }

        .widget-832a29 .plusMinus .section-inner {
            border-bottom: solid 1px #e1e1e1;
        }

        .widget-832a29 .plusMinus .accordion-item:not(:last-child) {
            margin-bottom: 10px;
        }

        /* Layout 2 */

        .widget-832a29 .borderedPlus {
            border: solid 1px #e1e1e1;
            border-bottom: none;
        }

        .widget-832a29 .borderedPlus .accordion-title {
            padding: 18px 20px;
            border-bottom: solid 1px #e1e1e1;
            background: #f2f2f2;
            justify-content: space-between;
        }

        .widget-832a29 .borderedPlus .accordion-title .title-text {
            margin: 0;
        }

        .widget-832a29 .borderedPlus .section-inner {
            border-bottom: solid 1px #e1e1e1;
        }

        .widget-832a29 .borderedPlus .arrow-wrapper {
            margin-left: 15px;
        }

        .widget-832a29 .borderedPlus .arrow {
            position: relative;
            width: 15px;
            height: 15px;
        }

        /* Layout 3 */

        .widget-832a29 .fullBorder {
            border: solid 1px #e1e1e1;
            border-bottom: none;
        }

        .widget-832a29 .fullBorder .accordion-title {
            padding: 18px 20px;
            border-bottom: solid 1px #e1e1e1;
            justify-content: space-between;
        }

        .widget-832a29 .fullBorder .accordion-title .title-text {
            margin: 0;
        }

        .widget-832a29 .fullBorder .section-inner {
            border-bottom: solid 1px #e1e1e1;
            background: #f2f2f2;
        }

        .widget-832a29 .fullBorder .arrow {
            width: 22px;
            height: 22px;
        }

        .widget-832a29 .fullBorder .expanded .arrow,
        .fullBorder[data-first-expanded=\'true\'] .accordion-item:first-of-type .arrow {
            transform: rotate(180deg);
        }

        /* Layout 4 */

        .widget-832a29 .roundedIcon .accordion-title {
            justify-content: space-between;
            padding: 18px 20px;
            background: #f2f2f2;
        }

        .widget-832a29 .roundedIcon .accordion-title .title-text {
            margin: 0;
        }

        .widget-832a29 .roundedIcon .arrow-wrapper {
            margin-right: 8px;
        }

        .widget-832a29 .roundedIcon .arrow {
            width: 22px;
            height: 22px;
        }

        .widget-832a29 .roundedIcon .expanded .arrow,
        .roundedIcon[data-first-expanded=\'true\'] .accordion-item:first-of-type .arrow {
            transform: rotate(180deg);
        }

        .widget-832a29 .roundedIcon .accordion-item:not(:last-child) {
            margin-bottom: 10px;
        }

        .widget-832a29 .roundedIcon .arrow-wrapper {
            border-radius: 50%;
            padding: 8px;
            background-color: #000;
        }

        .widget-832a29 .roundedIcon .arrow-wrapper .arrow {
            width: 20px;
            height: 20px;
        }

        .widget-832a29 .roundedIcon .arrow-wrapper .close {
            fill: #e3e3e3;
        }

        /* Layout 5 */

        .widget-832a29 .leftIcons .accordion-title {
            justify-content: space-between;
            padding: 18px 20px;
            background: #f2f2f2;
        }

        .widget-832a29 .leftIcons .accordion-title .title-text {
            margin: 0;
        }

        .widget-832a29 .leftIcons .arrow-wrapper {
            margin-right: 8px;
        }

        .widget-832a29 .leftIcons .arrow {
            width: 22px;
            height: 22px;
        }

        .widget-832a29 .leftIcons .expanded .arrow,
        .leftIcons[data-first-expanded=\'true\'] .accordion-item:first-of-type .arrow {
            transform: rotate(180deg);
        }

        .widget-832a29 .leftIcons .accordion-item:not(:last-child) {
            margin-bottom: 10px;
        }

        .widget-832a29 .leftIcons .title-icon {
            width: 22px;
            margin-right: 10px;
        }

        .widget-832a29 .leftIcons .title-icon svg {
            width: 100% !important;
            height: auto !important;
        }

        /* Layout 6 */

        .widget-832a29 .cleanLayout .accordion-title {
            justify-content: flex-end;
        }

        .widget-832a29 .cleanLayout .accordion-title .title-text {
            order: 2;
            margin: 10px 0;
            padding-left: 16px;
        }

        .widget-832a29 .cleanLayout .arrow {
            order: 1;
            width: 22px;
            height: 22px;
        }

        .widget-832a29 .cleanLayout .expanded .arrow,
        .cleanLayout[data-first-expanded=\'true\'] .accordion-item:first-of-type .arrow {
            transform: rotate(90deg);
        }

        .widget-832a29 .cleanLayout .section-inner {
            padding: 0 20px 0 0;
        }
    </style>
    <style id="innerPagesStyle" type="text/css">
    </style>


    <style id="additionalGlobalCss" type="text/css">
    </style>

    <!-- Page CSS -->
    <link rel="preload" href="https://irp.cdn-website.com/9a89cede/files/9a89cede_home_withFlex_1.min.css?v=786" id="homeCssLink" as="style" fetchpriority="low" onload="loadCSS(this)" />

    <style id="pagestyle" type="text/css">
    </style>

    <style id="pagestyleDevice" type="text/css">
    </style>

    <!-- Flex Sections CSS -->





    <style id="globalFontSizeStyle" type="text/css">
        .font-size-14,
        .size-14,
        .size-14>font {
            font-size: 14px !important;
        }

        .font-size-14,
        .size-14,
        .size-14>font {
            font-size: 14px !important;
        }

        .font-size-14,
        .size-14,
        .size-14>font {
            font-size: 14px !important;
        }

        .font-size-14,
        .size-14,
        .size-14>font {
            font-size: 14px !important;
        }

        .font-size-14,
        .size-14,
        .size-14>font {
            font-size: 14px !important;
        }

        .font-size-70,
        .size-70,
        .size-70>font {
            font-size: 70px !important;
        }

        .font-size-70,
        .size-70,
        .size-70>font {
            font-size: 70px !important;
        }

        .font-size-60,
        .size-60,
        .size-60>font {
            font-size: 60px !important;
        }

        .font-size-60,
        .size-60,
        .size-60>font {
            font-size: 60px !important;
        }

        .font-size-60,
        .size-60,
        .size-60>font {
            font-size: 60px !important;
        }

        .font-size-60,
        .size-60,
        .size-60>font {
            font-size: 60px !important;
        }

        .font-size-60,
        .size-60,
        .size-60>font {
            font-size: 60px !important;
        }

        .font-size-60,
        .size-60,
        .size-60>font {
            font-size: 60px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-19,
        .size-19,
        .size-19>font {
            font-size: 19px !important;
        }

        .font-size-19,
        .size-19,
        .size-19>font {
            font-size: 19px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-21,
        .size-21,
        .size-21>font {
            font-size: 21px !important;
        }

        .font-size-21,
        .size-21,
        .size-21>font {
            font-size: 21px !important;
        }

        .font-size-21,
        .size-21,
        .size-21>font {
            font-size: 21px !important;
        }

        .font-size-30,
        .size-30,
        .size-30>font {
            font-size: 30px !important;
        }

        .font-size-21,
        .size-21,
        .size-21>font {
            font-size: 21px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-22,
        .size-22,
        .size-22>font {
            font-size: 22px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-24,
        .size-24,
        .size-24>font {
            font-size: 24px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-35,
        .size-35,
        .size-35>font {
            font-size: 35px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-40,
        .size-40,
        .size-40>font {
            font-size: 40px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-26,
        .size-26,
        .size-26>font {
            font-size: 26px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-16,
        .size-16,
        .size-16>font {
            font-size: 16px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-50,
        .size-50,
        .size-50>font {
            font-size: 50px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-23,
        .size-23,
        .size-23>font {
            font-size: 23px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-18,
        .size-18,
        .size-18>font {
            font-size: 18px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-20,
        .size-20,
        .size-20>font {
            font-size: 20px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-55,
        .size-55,
        .size-55>font {
            font-size: 55px !important;
        }

        .font-size-12,
        .size-12,
        .size-12>font {
            font-size: 12px !important;
        }

        .font-size-12,
        .size-12,
        .size-12>font {
            font-size: 12px !important;
        }

        .font-size-12,
        .size-12,
        .size-12>font {
            font-size: 12px !important;
        }

        .font-size-12,
        .size-12,
        .size-12>font {
            font-size: 12px !important;
        }
    </style>
    <style id="pageFontSizeStyle" type="text/css">
    </style>

    <!-- ========= JS Section ========= -->

    <script>
        var isWLR = true;

        window.customWidgetsFunctions = {};
        window.customWidgetsStrings = {};
        window.collections = {};
        window.currentLanguage = "ENGLISH"
        window.isSitePreview = false;
    </script>
    <script>
        window.customWidgetsFunctions["832a29738c2b44fdb4e63369b1bf458a~78"] = function(element, data, api) {


            $(element).find(\'[data-first-expanded="true"]\').attr(\'data-first-expanded\', \'false\').find(\'.accordion-item\').eq(0).addClass(\'expanded\');

            $(element).off(\'click.toggle\').on(\'click.toggle\', \'.accordion-title\', function() {
                if (data.config.collapseOthers) {
                    $(this).parents(\'.accordion-item\').siblings().removeClass(\'expanded\');
                    // $(element).find(\'.accordion-item\').not(this).removeClass(\'expanded\');
                }
                $(this).parents(\'.accordion-item\').toggleClass(\'expanded\');
            });


        };
    </script>
    <script type="text/javascript">
        var d_version = "22..42";
        var build = "2023-06-01T12_52_43";
        window[\'v\' + \'ersion\'] = d_version;

        function buildEditorParent() {
            window.isMultiScreen = true;
            window.editorParent = {};
            window.previewParent = {};
            window.assetsCacheQueryParam = "?version=2023-06-01T12_52_43";
            try {
                var _p = window.parent;
                if (_p && _p.document && _p.$ && _p.$.dmfw) {
                    window.editorParent = _p;
                } else if (_p.isSitePreview) {
                    window.previewParent = _p;
                }
            } catch (e) {

            }
        }

        buildEditorParent();
    </script>
    <!-- Load jQuery -->
    <script type="text/javascript" id=\'d-js-jquery\' src="https://static.cdn-website.com/libs/jquery/jquery-3.6.0.min.js"></script>
    <!-- End Load jQuery -->

    <!-- Injecting site-wide before scripts -->
    <!-- End Injecting site-wide to the head -->


    <script>
        var _jquery = window.$;

        var jqueryAliases = [\'$\', \'jquery\', \'jQuery\'];

        jqueryAliases.forEach((alias) => {
            Object.defineProperty(window, alias, {
                get() {
                    return _jquery;
                },
                set() {
                    console.warn("Trying to over-write the global jquery object!");
                }
            });
        });
    </script>
    <script>
        window.cookiesNotificationMarkupPreview = \'null\';
    </script>

    <!-- HEAD RT JS Include -->
    <script id=\'d-js-params\'>
        window.INSITE = window.INSITE || {};
        window.INSITE.device = "desktop";
        window.rtCommonProps = {};
        rtCommonProps["rt.ajax.ajaxScriptsFix"] = true;
        rtCommonProps["rt.pushnotifs.sslframe.encoded"] = \'aHR0cHM6Ly97c3ViZG9tYWlufS5wdXNoLW5vdGlmcy5jb20=\';
        rtCommonProps["runtimecollector.url"] = \'https://rtc.multiscreensite.com\';
        rtCommonProps["performance.tabletPreview.removeScroll"] = \'false\';
        rtCommonProps["inlineEditGrid.snap"] = true;
        rtCommonProps["popup.insite.cookie.ttl"] = \'0.5\';
        rtCommonProps["rt.pushnotifs.force.button"] = true;
        rtCommonProps["google.places.key"] = \'AIzaSyBAwUOqPUB1CU31yDztoZYaUE7sPv4ktEI\';
        rtCommonProps["common.mapbox.token"] = \'pk.eyJ1IjoiZGFubnliMTIzIiwiYSI6ImNqMGljZ256dzAwMDAycXBkdWxwbDgzeXYifQ.Ck5P-0NKPVKAZ6SH98gxxw\';
        rtCommonProps["common.mapbox.js.override"] = false;
        rtCommonProps["common.opencage.token"] = \'319e14f32bcce967ba55cd263478796d\';
        rtCommonProps["common.here.appId"] = \'iYvDjIQ2quyEu0rg0hLo\';
        rtCommonProps["common.here.appCode"] = \'1hcIxLJcbybmtBYTD9Z1UA\';
        rtCommonProps["isCoverage.test"] = false;
        rtCommonProps["ecommerce.ecwid.script"] = \'https://app.multiscreenstore.com/script.js\';
        rtCommonProps["feature.flag.mappy.kml"] = false;
        rtCommonProps["common.resources.dist.cdn"] = true;
        rtCommonProps["common.build.dist.folder"] = \'production/3472\';
        rtCommonProps["common.resources.cdn.host"] = \'https://static.cdn-website.com\';
        rtCommonProps["common.resources.folder"] = \'https://static.cdn-website.com/mnlt/production/3472\';
        rtCommonProps["feature.flag.runtime.backgroundSlider.preload.slowly"] = true;
        rtCommonProps["feature.flag.runtime.photoswipe.fix"] = true;
        rtCommonProps["feature.flag.runtime.newAnimation.enabled"] = true;
        rtCommonProps["feature.flag.runtime.newAnimation.respectCssAnimationProps.enabled"] = true;
        rtCommonProps["feature.flag.runtime.newAnimation.jitAnimation.enabled"] = true;
        rtCommonProps["feature.flag.sites.google.analytics.gtag"] = true;
        rtCommonProps["feature.flag.runOnReadyNewTask"] = true;
        rtCommonProps["feature.flag.addTargetBlankToExternalLinks"] = true;
        rtCommonProps["unsuspendEcwidStoreOnRuntime.enabled"] = true;
        rtCommonProps["keyboard.navigation.enabled"] = true;
        rtCommonProps["runtime.navigationWidget.menu.clipPath"] = true;
        rtCommonProps["scripts.widgetCount.enabled"] = true;
        rtCommonProps["maps.cookiebot.enabled"] = true;


        rtCommonProps[\'common.mapsProvider\'] = \'mapbox\';
        rtCommonProps[\'common.mapsProvider.version\'] = \'0.52.0\';
        rtCommonProps[\'common.geocodeProvider\'] = \'here\';
        rtCommonProps[\'common.map.defaults.radiusSize\'] = \'1500\';
        rtCommonProps[\'common.map.defaults.radiusBg\'] = \'rgba(255, 255, 255, 0.4)\';
        rtCommonProps[\'common.map.defaults.strokeColor\'] = \'rgba(255, 255, 255, 1)\';
        rtCommonProps[\'common.map.defaults.strokeSize\'] = \'2\';
        rtCommonProps[\'server.for.resources\'] = \'\';
        rtCommonProps[\'feature.flag.lazy.widgets\'] = true;
        rtCommonProps[\'feature.flag.single.wow\'] = false;
        rtCommonProps[\'feature.flag.disallowPopupsInEditor\'] = true;
        rtCommonProps[\'feature.flag.mark.anchors\'] = true;
        rtCommonProps[\'captcha.public.key\'] = \'6LffcBsUAAAAAMU-MYacU-6QHY4iDtUEYv_Ppwlz\';
        rtCommonProps[\'captcha.invisible.public.key\'] = \'6LeiWB8UAAAAAHYnVJM7_-7ap6bXCUNGiv7bBPME\';
        rtCommonProps["images.sizes.small"] = 160;
        rtCommonProps["images.sizes.mobile"] = 640;
        rtCommonProps["images.sizes.tablet"] = 1280;
        rtCommonProps["images.sizes.desktop"] = 1920;
        rtCommonProps["modules.resources.cdn"] = true;
        rtCommonProps["import.images.storage.imageCDN"] = \'https://lirp.cdn-website.com/\';
        rtCommonProps["ecom.ecwid.categoryPage.modifyLinks"] = true;
        rtCommonProps["ecom.ecwidNewUrlStructure.enabled"] = false;
        rtCommonProps["ecom.ecwid.fixFacebookLink"] = true;
        rtCommonProps["facebook.api.version"] = \'7.0\';
        rtCommonProps["runtime.save.restore.function.bind"] = true;
        rtCommonProps["feature.flag.photo.gallery.exact.size"] = false;
        rtCommonProps["new.store.fix.ecwid.back.bug"] = true;
        rtCommonProps["new.store.accountPage.ecwid.signIn.fix"] = true;
        rtCommonProps["fix.ecwid.sign.in.page.with.return.url"] = true;
        rtCommonProps["site.runtime.video.background.ssr"] = true;
        rtCommonProps["geocode.search.localize"] = false;
        rtCommonProps["facebook.runtime.widgets.upgrade"] = true;
        rtCommonProps["feature.flag.runtime.inp.threshold"] = 150;
        rtCommonProps["feature.flag.runtime.newAnimation.asyncInit.setTimeout.enabled"] = false;
        rtCommonProps["feature.flag.performance.logs"] = true;
        rtCommonProps["site.contact.form.fix.for.attribute"] = true;
        rtCommonProps["site.widget.form.captcha.type"] = \'g_recaptcha\';
        rtCommonProps["friendly.captcha.site.key"] = \'FCMGSQG9GVNMFS8K\';
        rtCommonProps["contact.form.date.format.enabled"] = true;
        rtCommonProps["platform.monolith.personalization.userVisitsCondition.inClient.enabled"] = true;
        rtCommonProps["ecom.widgets.menu.categories.toggles.enabled"] = true;
        rtCommonProps["filestack.uploadToTempBucket.enabled"] = false;
    </script>
    <script src="https://static.cdn-website.com/mnlt/production/3472/_dm/s/rt/dist/scripts/d-js-one-runtime-unified-desktop.min.js" id="d-js-core"></script>
    <!-- End of HEAD RT JS Include -->
    <script src="https://static.cdn-website.com/mnlt/production/3472/_dm/s/rt/dist/scripts/d-js-jquery-migrate.min.js"></script>
    <script>
        jQuery.DM.updateWidthAndHeight();
        $(window).resize(function() {

        });
        $(window).bind("orientationchange", function(e) {
            $.layoutManager.initLayout();

        });
        $(document).resize(function() {

        });
    </script>
    <script type="text/javascript" id="d_track_campaign">
        (function() {
            var campaign = (/utm_campaign=([^&]*)/).exec(window.location.search);

            if (campaign && campaign != null && campaign.length > 1) {
                campaign = campaign[1];
                document.cookie = "_dm_rt_campaign=" + campaign + ";expires=" + new Date().getTime() + 24 * 60 * 60 * 1000 + ";domain=" + window.location.hostname + ";path=/";
            }
        }());
    </script>
    <script type="text/javascript">
        var _dm_gaq = {};
        var _gaq = _gaq || [];
        var _dm_insite = [];
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HRPX60QHR5"></script>
    <script type="text/javascript" id="d_track_ga">
        _dm_gaq.siteAlias = \'9a89cede\';
        _dm_gaq.systemAggregatedGaqID = \'\';
        _dm_gaq.externalGaqID = \'G-HRPX60QHR5\';
        _dm_gaq.gaAggregatedEventAttributes = {
            \'site_alias\': _dm_gaq.siteAlias,
            \'product\': \'DM_DIRECT\',
            \'plan\': \'BUSINESS_PLUS\',
            \'dfooter\': \'false\',
            \'sitetype\': \'1\',
            \'pwaEnabled\': \'true\'
        }

        _dm_gaq.pushEvent = function(trackingId, event, category, label, value, additionalParams) {
            var initialProps = {
                send_to: trackingId,
                event_category: category,
                event_label: label,
                value: value
            }
            additionalParams = additionalParams || {};
            var eventProps = $.extend({}, initialProps, additionalParams, trackingId === _dm_gaq.systemAggregatedGaqID ? _dm_gaq.gaAggregatedEventAttributes : {});
            gtag(\'event\', event, eventProps);
        }

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag(\'js\', new Date());

        function pushInsiteImpressions(id) {
            $.each(_dm_insite, function(idx, rule) {
                _dm_gaq.pushEvent(id, \'insite_impression\', \'insite\', rule.ruleType + \'__\' + rule.ruleId);
            });
        }

        if (_dm_gaq.systemAggregatedGaqID) {
            // track aggregated account
            gtag(\'config\', \'\', {
                \'send_page_view\': false,
                \'anonymize_ip\': true,
                \'transport_type\': \'beacon\',
                \'custom_map\': {
                    \'dimension1\': \'site_alias\',
                    \'dimension2\': \'product\',
                    \'dimension3\': \'dFooter\',
                    \'dimension4\': \'sitetype\'
                }
            });
            gtag(\'set\', \'developer_id.dMDU5Nj\', true);

            _dm_gaq.pushEvent(\'\', \'page_view\');
            pushInsiteImpressions(_dm_gaq.systemAggregatedGaqID);
        }

        if (_dm_gaq.externalGaqID && _dm_gaq.externalGaqID != \'\') {
            gtag(\'config\', \'G-HRPX60QHR5\', {
                \'send_page_view\': false,
                \'anonymize_ip\': true,
                \'transport_type\': \'beacon\',
                \'linker\': {
                    \'domains\': [\'ikarialeanbellyjuice.sale\']
                }
            });
            _dm_gaq.pushEvent(\'G-HRPX60QHR5\', \'page_view\');
            pushInsiteImpressions(_dm_gaq.externalGaqID);
        }
    </script>
    <script type="text/javascript" id="d_track_sp">
        ;
        (function(p, l, o, w, i, n, g) {
            if (!p[i]) {
                p.GlobalSnowplowNamespace = p.GlobalSnowplowNamespace || [];
                p.GlobalSnowplowNamespace.push(i);
                p[i] = function() {
                    (p[i].q = p[i].q || []).push(arguments)
                };
                p[i].q = p[i].q || [];
                n = l.createElement(o);
                g = l.getElementsByTagName(o)[0];
                n.async = 1;
                n.src = w;
                g.parentNode.insertBefore(n, g)
            }
        }(window, document, "script", "//d32hwlnfiv2gyn.cloudfront.net/sp-2.0.0-dm-0.1.min.js", "snowplow"));
        window.dmsnowplow = window.snowplow;

        dmsnowplow(\'newTracker\', \'cf\', \'d32hwlnfiv2gyn.cloudfront.net\', { // Initialise a tracker
            appId: \'9a89cede\'
        });

        dmsnowplow(\'trackPageView\')
        $.each(_dm_insite, function(idx, rule) {
            //(\'trackStructEvent\', \'category\',\'action\',\'label\',\'property\',\'value\');
            // Specifically in popup only the client knows if it is shown or not so we don\'t always want to track its impression here
            // the tracking is in popup.js
            if (rule.actionName !== "popup") {
                dmsnowplow(\'trackStructEvent\', \'insite\', \'impression\', rule.ruleType, rule.ruleId);
            }
            $(document).ready(function() {
                $.DM.events.trigger(\'event-ruleTriggered\', {
                    value: rule
                })
            });
        });
    </script>
    <div style="display:none;" id="P6iryBW0Wu"></div>

    <!-- photoswipe markup -->









    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
         It\'s a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don\'t modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>
    <div id="fb-root" data-locale="en"></div>
    <!-- Alias: 9a89cede -->
    <div class="dmPopupMask" id="dmPopupMask"></div>
    <div id="dmPopup" class="dmPopup">
        <div class="dmPopupCloseWrapper">
            <div class="dmPopupClose dm-common-icons-close oneIcon" onclick="dmHidePopup(event);"></div>
        </div>
        <div class="dmPopupTitle"> <span></span> Share by:</div>
        <div class="data"></div>
    </div>
    <script id="d_track_personalization">
        // Collects client data and updates cookies used by smart sites
        var expireDays = 365,
            visitLength = 30 * 60000;
        $.setCookie("dm_timezone_offset", (new Date()).getTimezoneOffset(), expireDays);

        function setSmartSiteCookies() {
            setSmartSiteCookiesInternal("dm_this_page_view", "dm_last_page_view", "dm_total_visits", "dm_last_visit");
        }
        $.DM.events.on("afterAjax", setSmartSiteCookies);
        setSmartSiteCookies();
    </script>
    <script type="text/javascript">
        Parameters.NavigationAreaParams.MoreButtonText = \'MORE\';

        Parameters.NavigationAreaParams.LessButtonText = \'LESS\';
        Parameters.HomeLinkText = \'Home\';
    </script>
    <script>
        jQuery(window).on(\'load\', function() {
            try {
                jQuery.DM.updateIOSHeight();
            } catch (e) {}
        });
    </script>
    <script>
        dmAPI.loadScript(
            window.rtCommonProps[\'common.resources.cdn.host\'] + \'/libs/lozad/1.15.0/lozad.min.js\',
            function() {
                dmAPI.runOnReady(\'lozadInit\', function() {
                    window.document.querySelectorAll(\'img.lazy\').forEach(function(img) {
                        img.addEventListener(\'load\', function(event) {
                            var img = event.target;
                            img.style.filter = \'blur(0)\';
                            setTimeout(function() {
                                $(img).closest(\'.imageWidget\').addClass(\'lazyLoaded\');
                            }, 250)
                        });
                    });
                    lozad(\'.lazy\', {
                        threshold: 0.1,
                        loaded: function(element) {
                            if (element.getAttribute(\'data-background-image\')) {
                                element.style.setProperty(
                                    \'background-image\',
                                    "url(\'" + element.getAttribute(\'data-background-image\') + "\')",
                                    "important"
                                );
                            }
                        }
                    }).observe();
                });
            }
        );
    </script>
    <!--  End Script tags -->

    <!--  Begin Body End Markup -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5STRKFC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--  End Body End Markup -->

    <!--  Site Wide Html Markup -->
    <!--  Site Wide Html Markup -->
</body>

</html>
';
?>