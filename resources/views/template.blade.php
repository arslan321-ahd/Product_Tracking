<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://mytrackcdn.com">
        <link href="{{ asset('website/assets/7b7d162a.css') }}" media="all" rel="stylesheet">
        <title>Track your parcel - Malaysia&#039;s Largest Shipment Tracking Platform - Tracking.my</title>
        <meta name="description"
            content="Malaysia&#039;s Largest Shipment Tracking Platform! Track all your shipments in one place. Send parcel service and tracking software with real-time updates and multiple channel notifications.">
        <meta name="keywords"
            content="tracking, tracking.my, Tracking.my, Shipment tracking, Parcel tracking, Tracking software, Real-time updates, Multiple channel notifications, Shipment management, Logistics tracking, Package tracking, Courier tracking, Tracking platform" />

        <style>
            body {
                min-height: 100vh;
            }

            .header {
                padding: 1rem !important;
                position: sticky;
                top: 0;
                width: 100%;
                z-index: 999;
            }

            .content-body {
                min-height: calc(100vh - 150px);
            }
        </style>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-H2JKTLS0K9"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-H2JKTLS0K9');
        </script>

    </head>

    <body x-data="setupHeader()">
        <header class="header p-2 px-md-4 bg-white border-bottom shadow-sm">
            <div class="container px-0 px-sm-3 d-flex flex-row flex-wrap justify-content-center align-items-center">
                <div class="h5 my-0 me-auto">
                    <a href="/" aria-label="Homepage">
                        <img src="https://mytrackcdn.com/images/logos/christmas-2.png.webp" width="159"
                            height="45" class="logo" alt="Tracking.my Logo">
                    </a>
                </div>
                <a class="btn btn-primary me-2 d-none d-lg-block" href="/send-parcel">
                    <i class="fas fa-box pe-1"></i> Send Parcel
                </a>


                <button class="btn btn-white d-static d-lg-none" type="button" id="dropdownMenuProduct"
                    data-bs-toggle="dropdown" aria-expanded="false" aria-label="Products">
                    <i class="fas fa-phone-laptop"></i>
                </button>
                <button class="btn btn-light me-2 dropdown-toggle d-none d-lg-block" type="button"
                    id="dropdownMenuProductPc" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Products">
                    <i class="fas fa-phone-laptop"></i> Products
                </button>
                <div class="dropdown-product dropdown-menu dropdown-menu-end p-3"
                    aria-labelledby="dropdownMenuProduct dropdownMenuProductPc">
                    <h6>Products</h6>
                    <div class="row g-2">
                        <div class="col-4">
                            <a href="/" data-bs-toggle="modal" data-bs-target="#trackingFormModal">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/track-parcel.png.webp">
                                Track Parcel
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/mobile-app">
                                <img class="lazyload" data-src="https://mytrackcdn.com/images/navs/mobile-app.png.webp">
                                Mobile App
                            </a>
                        </div>

                        <div class="col-4">
                            <a href="/seller-platform">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/seller-platform.png.webp">
                                Seller Platform
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/tracking-page">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/tracking-page.png.webp">
                                Tracking Page
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/send-parcel">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/send-parcel.png.webp">
                                Send Parcel
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/insurance-protection">
                                <img class="lazyload" style="width: 90px;"
                                    data-src="https://mytrackcdn.com/images/navs/insurance-protection.png.webp">
                                insurance
                            </a>
                        </div>
                    </div>

                    <h6>Developer tools</h6>
                    <div class="row g-2">
                        <div class="col-4">
                            <a href="/track-button">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/track-button.png.webp">
                                Track Button
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/tracking-api">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/tracking-api.png.webp">
                                Tracking API
                            </a>
                        </div>
                    </div>
                    <h6>Integrations</h6>
                    <div class="row g-1 no-hover">
                        <div class="col">
                            <a href="/integration/woocommerce" data-bs-toggle="tooltip" title="WooCommerce">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/woocommerce.png.webp">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/integration/easystore" data-bs-toggle="tooltip" title="EasyStore">
                                <img class="lazyload" data-src="https://mytrackcdn.com/images/navs/easystore.png.webp">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/integration/newpages" data-bs-toggle="tooltip" title="NewPages">
                                <img class="lazyload" data-src="https://mytrackcdn.com/images/navs/newpages.png.webp">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/integration/sitegiant" data-bs-toggle="tooltip" title="SiteGiant">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/sitegiant.png.webp">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/integration/new" data-bs-toggle="tooltip" title="Welcome Request">
                                <img class="lazyload"
                                    data-src="https://mytrackcdn.com/images/navs/new-integration.png.webp">
                            </a>
                        </div>
                    </div>
                </div>


                <button class="btn btn-white d-static d-lg-none" type="button" id="dropdownMenuLocale"
                    data-bs-toggle="dropdown" aria-expanded="false" aria-label="Change language">
                    <i class="fas fa-globe"></i>
                </button>
                <button style="margin-right:12px !important" class="btn btn-light dropdown-toggle d-none d-lg-block"
                    type="button" id="dropdownMenuLocalePc" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-globe pe-1"></i> <span x-text="locales[locale]">Loading</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLocale dropdownMenuLocalePc">
                    <template x-for="(v, i) in menuLocates">
                        <li><a class="dropdown-item" @click.prevent="changeLocate(i)" href="#"
                                x-text="v"></a>
                        </li>
                    </template>
                </ul>
            </div>
        </header>

        <div class="modal fade" id="trackingFormModal" tabindex="-1" aria-labelledby="trackingFormModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="trackingFormModalLabel">Track and Trace</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form x-data="trackingFormSetup('')" @submit.prevent="track">
                            <div class="form-floating mb-3">
                                <input type="text" x-model="tracking_number" class="form-control text-uppercase"
                                    id="formTrackingInputModal" placeholder="Tracking number"
                                    @input.debounce.500ms="detectCourier" required>
                                <label for="formTrackingInputModal">Tracking number</label>
                            </div>
                            <div class="form-floating mb-3" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <input type="text" x-model="courier_search" class="form-control"
                                    id="formCourierInputModal" placeholder="Auto detected"
                                    @click="courier_search = ''; courier=null" required>
                                <label for="formCourierInputModal">Courier</label>
                                <template x-if="courier">
                                    <img class="form-floating-img lazyload"
                                        :data-src="'https://mytrackcdn.com/images/couriers/' + courier + '.png.webp'">
                                </template>
                            </div>

                            <ul class="dropdown-menu dropdown-courier">
                                <template x-for="c in filtedCouriers" :key="c.value">
                                    <li>
                                        <a class="dropdown-item" href="#" @click="selectCourier(c)">
                                            <img class="lazyload"
                                                :data-src="'https://mytrackcdn.com/images/couriers/' + c.value + '.png.webp'">
                                            <span x-text="c.label"></span>
                                        </a>
                                    </li>
                                </template>
                                <template x-if="isEmpty">
                                    <li class="dropdown-item disabled">Courier not found</li>
                                </template>
                            </ul>

                            <div class="d-grid gap-2 d-md-block">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search pe-1"></i>
                                    Track</button>
                            </div>
                        </form>

                        <style>
                            .dropdown-courier {
                                overflow: auto;
                                height: 400px;
                                max-height: 50vh;
                            }

                            .dropdown-courier li img {
                                height: 3rem;
                                padding-right: .6rem;
                            }
                        </style>

                        <script>
                            function trackingFormSetup(auto_tracking_number) {
                                return {
                                    tracking_number: auto_tracking_number,
                                    courier: null,
                                    courier_search: '',
                                    isEmpty: false,
                                    couriers: [{
                                        "label": "Comone Express",
                                        "value": "comone"
                                    }, {
                                        "label": "Dex-i Express",
                                        "value": "dex-i"
                                    }, {
                                        "label": "Leopards Express",
                                        "value": "leopards"
                                    }, {
                                        "label": "Dpe Express",
                                        "value": "dpe"
                                    }, {
                                        "label": "Dpex Express",
                                        "value": "dpex"
                                    }, {
                                        "label": "Toll Express",
                                        "value": "toll"
                                    }, {
                                        "label": "Skynet Express",
                                        "value": "skynet"
                                    }, {
                                        "label": "Pos Malaysia",
                                        "value": "pos"
                                    }, {
                                        "label": "Airpak Express",
                                        "value": "airpak"
                                    }, {
                                        "label": "Citylink Express",
                                        "value": "citylink"
                                    }, {
                                        "label": "Abx Express",
                                        "value": "abx"
                                    }, {
                                        "label": "GD Express",
                                        "value": "gdex"
                                    }, {
                                        "label": "MyPoz",
                                        "value": "mypoz"
                                    }, {
                                        "label": "Matdespatch Express",
                                        "value": "matdespatch"
                                    }, {
                                        "label": "LineClear Express",
                                        "value": "lineclear"
                                    }, {
                                        "label": "KTMD Malaysia",
                                        "value": "ktmd"
                                    }, {
                                        "label": "FMX",
                                        "value": "fmx"
                                    }, {
                                        "label": "WePost",
                                        "value": "wepost"
                                    }, {
                                        "label": "TNT Express",
                                        "value": "tnt"
                                    }, {
                                        "label": "UPS Express",
                                        "value": "ups"
                                    }, {
                                        "label": "ZeptoExpress",
                                        "value": "zepto"
                                    }, {
                                        "label": "Pgeon Delivery",
                                        "value": "pgeon"
                                    }, {
                                        "label": "Roadbull",
                                        "value": "roadbull"
                                    }, {
                                        "label": "LWE",
                                        "value": "lwe"
                                    }, {
                                        "label": "SPC",
                                        "value": "spc"
                                    }, {
                                        "label": "DHL Ecommerce",
                                        "value": "dhl-ecommerce"
                                    }, {
                                        "label": "DD Express",
                                        "value": "dd"
                                    }, {
                                        "label": "Asiaxpress",
                                        "value": "asiaxpress"
                                    }, {
                                        "label": "Quantium Solutions",
                                        "value": "quantium"
                                    }, {
                                        "label": "M Xpress",
                                        "value": "mxpress"
                                    }, {
                                        "label": "Collectco",
                                        "value": "collectco"
                                    }, {
                                        "label": "Postco",
                                        "value": "postco"
                                    }, {
                                        "label": "DropIt",
                                        "value": "dropit"
                                    }, {
                                        "label": "Zoom",
                                        "value": "zoom"
                                    }, {
                                        "label": "Motorex",
                                        "value": "motorex"
                                    }, {
                                        "label": "EasiPass",
                                        "value": "easipass"
                                    }, {
                                        "label": "Pickupp",
                                        "value": "pickupp"
                                    }, {
                                        "label": "Qxpress",
                                        "value": "qxpress"
                                    }, {
                                        "label": "UrbanFox",
                                        "value": "urbanfox"
                                    }, {
                                        "label": "J&T Express",
                                        "value": "jt"
                                    }, {
                                        "label": "Near U",
                                        "value": "near-u"
                                    }, {
                                        "label": "May Express",
                                        "value": "mayexpress"
                                    }, {
                                        "label": "Amber Courier",
                                        "value": "amber"
                                    }, {
                                        "label": "Ping U",
                                        "value": "ping-u"
                                    }, {
                                        "label": "Janio",
                                        "value": "janio"
                                    }, {
                                        "label": "Shopee Express",
                                        "value": "shopee"
                                    }, {
                                        "label": "Best Express",
                                        "value": "best"
                                    }, {
                                        "label": "SeeBuu Logistics",
                                        "value": "seebuu"
                                    }, {
                                        "label": "Yunda Express",
                                        "value": "yunda"
                                    }, {
                                        "label": "XendNow",
                                        "value": "xendnow"
                                    }, {
                                        "label": "TheLorry",
                                        "value": "thelorry"
                                    }, {
                                        "label": "Parcel To Post",
                                        "value": "parceltopost"
                                    }, {
                                        "label": "ZTO Express",
                                        "value": "zto"
                                    }, {
                                        "label": "Posstore",
                                        "value": "posstore"
                                    }, {
                                        "label": "Flickpost",
                                        "value": "flickpost"
                                    }, {
                                        "label": "Mantap Express",
                                        "value": "mantap"
                                    }, {
                                        "label": "YM Global",
                                        "value": "ym"
                                    }, {
                                        "label": "BabyXpress",
                                        "value": "babyxpress"
                                    }, {
                                        "label": "ENF Express",
                                        "value": "enfexpress"
                                    }, {
                                        "label": "ML Express",
                                        "value": "mlexpress"
                                    }, {
                                        "label": "TMT Express",
                                        "value": "tmtexpress"
                                    }, {
                                        "label": "Macrolink Express",
                                        "value": "macrolink"
                                    }, {
                                        "label": "Flash Express",
                                        "value": "flash"
                                    }, {
                                        "label": "Radian",
                                        "value": "radian"
                                    }, {
                                        "label": "Sendy Express",
                                        "value": "sendy"
                                    }, {
                                        "label": "iSend Logistics",
                                        "value": "isend"
                                    }, {
                                        "label": "Parcelhub",
                                        "value": "parcelhub"
                                    }, {
                                        "label": "Post2u",
                                        "value": "post2u"
                                    }, {
                                        "label": "JS Empire Express",
                                        "value": "js-empire"
                                    }, {
                                        "label": "Arriival",
                                        "value": "arriival"
                                    }, {
                                        "label": "BumiX",
                                        "value": "bumix"
                                    }, {
                                        "label": "Yuanda Express",
                                        "value": "yuanda"
                                    }, {
                                        "label": "BrightStar",
                                        "value": "brightstar"
                                    }, {
                                        "label": "uParcel",
                                        "value": "uparcel"
                                    }, {
                                        "label": "Jomkirim",
                                        "value": "jomkirim"
                                    }, {
                                        "label": "Teleport",
                                        "value": "teleport"
                                    }, {
                                        "label": "J&T Cargo",
                                        "value": "jtcargo"
                                    }, {
                                        "label": "Whallo",
                                        "value": "whallo"
                                    }, {
                                        "label": "KEX Express",
                                        "value": "kex"
                                    }, {
                                        "label": "MyEasy86",
                                        "value": "myeasy86"
                                    }, {
                                        "label": "CJ1ICargo",
                                        "value": "cj1icargo"
                                    }, {
                                        "label": "LEX",
                                        "value": "lex"
                                    }],
                                    init() {
                                        if (this.tracking_number) {
                                            console.log('detecting')
                                            this.detectCourier()
                                        }
                                    },
                                    detectCourier() {
                                        if (!this.tracking_number) {
                                            return
                                        }

                                        this.tracking_number = this.tracking_number.toUpperCase()
                                        this.tracking_number = this.tracking_number.replace(/[^0-9A-Z\-]/g, '');

                                        var socket = new WebSocket("wss://www.tracking.my/websocket")

                                        socket.onopen = () => {
                                            socket.send(JSON.stringify({
                                                action: "detect",
                                                tracking_number: this.tracking_number
                                            }))
                                        }

                                        socket.onmessage = (event) => {
                                            this.courier_search = ''
                                            if (this.courier = JSON.parse(event.data).courier) {
                                                this.courier_search = this.couriers.find((c) => c.value == this.courier).label
                                            }
                                            socket.close()
                                        }
                                    },
                                    filtedCouriers() {
                                        let couriers = this.couriers;
                                        if (this.courier_search) {
                                            couriers = couriers.filter(c => {
                                                return this.courier_search.toLowerCase().split(' ').every(v => c.label.toLowerCase()
                                                    .includes(v));
                                            });
                                        }
                                        this.isEmpty = !couriers.length
                                        return couriers
                                    },
                                    selectCourier(courier) {
                                        this.$nextTick(() => {
                                            this.courier = courier.value
                                            this.courier_search = courier.label
                                        })

                                    },
                                    track() {
                                        if (!this.tracking_number) {
                                            this.$store.notifications.notify('Please enter tracking number')
                                            return
                                        }

                                        if (!this.courier) {
                                            this.$store.notifications.notify('Please select courier')
                                            return
                                        }

                                        this.tracking_number = this.tracking_number.toUpperCase()
                                        this.tracking_number = this.tracking_number.replace(/[^0-9A-Z\-]/g, '')

                                        var link = '/' + this.courier + '/' + this.tracking_number
                                        for (locale of ['cn', 'tw', 'ms']) {
                                            if (location.pathname.indexOf('/' + locale + '/') === 0) {
                                                link = '/' + locale + link
                                                break
                                            }
                                        }

                                        location.href = link
                                    }
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body d-flex flex-column flex-grow-1">

            <div class="page-heading">
                <ul class="square-animation">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="container py-5">
                    <h2 class="text-center">All-in-one Package Tracking</h2>
                    <h4 class="text-center">Automatically detect courier based on the tracking number format</h4>
                    <div class="row justify-content-center mt-4">
                        <div class="col" style="max-width: 550px;">
                            <form x-data="trackingFormSetup('')" @submit.prevent="track">
                                <div class="form-floating mb-3">
                                    <input type="text" x-model="tracking_number"
                                        class="form-control text-uppercase" id="formTrackingInputHome"
                                        placeholder="Tracking number" @input.debounce.500ms="detectCourier" required>
                                    <label for="formTrackingInputHome">Tracking number</label>
                                </div>
                                <div class="form-floating mb-3" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <input type="text" x-model="courier_search" class="form-control"
                                        id="formCourierInputHome" placeholder="Auto detected"
                                        @click="courier_search = ''; courier=null" required>
                                    <label for="formCourierInputHome">Courier</label>
                                    <template x-if="courier">
                                        <img class="form-floating-img lazyload"
                                            :data-src="'https://mytrackcdn.com/images/couriers/' + courier + '.png.webp'">
                                    </template>
                                </div>

                                <ul class="dropdown-menu dropdown-courier">
                                    <template x-for="c in filtedCouriers" :key="c.value">
                                        <li>
                                            <a class="dropdown-item" href="#" @click="selectCourier(c)">
                                                <img class="lazyload"
                                                    :data-src="'https://mytrackcdn.com/images/couriers/' + c.value + '.png.webp'">
                                                <span x-text="c.label"></span>
                                            </a>
                                        </li>
                                    </template>
                                    <template x-if="isEmpty">
                                        <li class="dropdown-item disabled">Courier not found</li>
                                    </template>
                                </ul>

                                <div class="d-grid gap-2 d-md-block">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search pe-1"></i>
                                        Track</button>
                                </div>
                            </form>

                            <style>
                                .dropdown-courier {
                                    overflow: auto;
                                    height: 400px;
                                    max-height: 50vh;
                                }

                                .dropdown-courier li img {
                                    height: 3rem;
                                    padding-right: .6rem;
                                }
                            </style>

                            <script>
                                function trackingFormSetup(auto_tracking_number) {
                                    return {
                                        tracking_number: auto_tracking_number,
                                        courier: null,
                                        courier_search: '',
                                        isEmpty: false,
                                        couriers: [{
                                            "label": "Comone Express",
                                            "value": "comone"
                                        }, {
                                            "label": "Dex-i Express",
                                            "value": "dex-i"
                                        }, {
                                            "label": "Leopards Express",
                                            "value": "leopards"
                                        }, {
                                            "label": "Dpe Express",
                                            "value": "dpe"
                                        }, {
                                            "label": "Dpex Express",
                                            "value": "dpex"
                                        }, {
                                            "label": "Toll Express",
                                            "value": "toll"
                                        }, {
                                            "label": "Skynet Express",
                                            "value": "skynet"
                                        }, {
                                            "label": "Pos Malaysia",
                                            "value": "pos"
                                        }, {
                                            "label": "Airpak Express",
                                            "value": "airpak"
                                        }, {
                                            "label": "Citylink Express",
                                            "value": "citylink"
                                        }, {
                                            "label": "Abx Express",
                                            "value": "abx"
                                        }, {
                                            "label": "GD Express",
                                            "value": "gdex"
                                        }, {
                                            "label": "MyPoz",
                                            "value": "mypoz"
                                        }, {
                                            "label": "Matdespatch Express",
                                            "value": "matdespatch"
                                        }, {
                                            "label": "LineClear Express",
                                            "value": "lineclear"
                                        }, {
                                            "label": "KTMD Malaysia",
                                            "value": "ktmd"
                                        }, {
                                            "label": "FMX",
                                            "value": "fmx"
                                        }, {
                                            "label": "WePost",
                                            "value": "wepost"
                                        }, {
                                            "label": "TNT Express",
                                            "value": "tnt"
                                        }, {
                                            "label": "UPS Express",
                                            "value": "ups"
                                        }, {
                                            "label": "ZeptoExpress",
                                            "value": "zepto"
                                        }, {
                                            "label": "Pgeon Delivery",
                                            "value": "pgeon"
                                        }, {
                                            "label": "Roadbull",
                                            "value": "roadbull"
                                        }, {
                                            "label": "LWE",
                                            "value": "lwe"
                                        }, {
                                            "label": "SPC",
                                            "value": "spc"
                                        }, {
                                            "label": "DHL Ecommerce",
                                            "value": "dhl-ecommerce"
                                        }, {
                                            "label": "DD Express",
                                            "value": "dd"
                                        }, {
                                            "label": "Asiaxpress",
                                            "value": "asiaxpress"
                                        }, {
                                            "label": "Quantium Solutions",
                                            "value": "quantium"
                                        }, {
                                            "label": "M Xpress",
                                            "value": "mxpress"
                                        }, {
                                            "label": "Collectco",
                                            "value": "collectco"
                                        }, {
                                            "label": "Postco",
                                            "value": "postco"
                                        }, {
                                            "label": "DropIt",
                                            "value": "dropit"
                                        }, {
                                            "label": "Zoom",
                                            "value": "zoom"
                                        }, {
                                            "label": "Motorex",
                                            "value": "motorex"
                                        }, {
                                            "label": "EasiPass",
                                            "value": "easipass"
                                        }, {
                                            "label": "Pickupp",
                                            "value": "pickupp"
                                        }, {
                                            "label": "Qxpress",
                                            "value": "qxpress"
                                        }, {
                                            "label": "UrbanFox",
                                            "value": "urbanfox"
                                        }, {
                                            "label": "J&T Express",
                                            "value": "jt"
                                        }, {
                                            "label": "Near U",
                                            "value": "near-u"
                                        }, {
                                            "label": "May Express",
                                            "value": "mayexpress"
                                        }, {
                                            "label": "Amber Courier",
                                            "value": "amber"
                                        }, {
                                            "label": "Ping U",
                                            "value": "ping-u"
                                        }, {
                                            "label": "Janio",
                                            "value": "janio"
                                        }, {
                                            "label": "Shopee Express",
                                            "value": "shopee"
                                        }, {
                                            "label": "Best Express",
                                            "value": "best"
                                        }, {
                                            "label": "SeeBuu Logistics",
                                            "value": "seebuu"
                                        }, {
                                            "label": "Yunda Express",
                                            "value": "yunda"
                                        }, {
                                            "label": "XendNow",
                                            "value": "xendnow"
                                        }, {
                                            "label": "TheLorry",
                                            "value": "thelorry"
                                        }, {
                                            "label": "Parcel To Post",
                                            "value": "parceltopost"
                                        }, {
                                            "label": "ZTO Express",
                                            "value": "zto"
                                        }, {
                                            "label": "Posstore",
                                            "value": "posstore"
                                        }, {
                                            "label": "Flickpost",
                                            "value": "flickpost"
                                        }, {
                                            "label": "Mantap Express",
                                            "value": "mantap"
                                        }, {
                                            "label": "YM Global",
                                            "value": "ym"
                                        }, {
                                            "label": "BabyXpress",
                                            "value": "babyxpress"
                                        }, {
                                            "label": "ENF Express",
                                            "value": "enfexpress"
                                        }, {
                                            "label": "ML Express",
                                            "value": "mlexpress"
                                        }, {
                                            "label": "TMT Express",
                                            "value": "tmtexpress"
                                        }, {
                                            "label": "Macrolink Express",
                                            "value": "macrolink"
                                        }, {
                                            "label": "Flash Express",
                                            "value": "flash"
                                        }, {
                                            "label": "Radian",
                                            "value": "radian"
                                        }, {
                                            "label": "Sendy Express",
                                            "value": "sendy"
                                        }, {
                                            "label": "iSend Logistics",
                                            "value": "isend"
                                        }, {
                                            "label": "Parcelhub",
                                            "value": "parcelhub"
                                        }, {
                                            "label": "Post2u",
                                            "value": "post2u"
                                        }, {
                                            "label": "JS Empire Express",
                                            "value": "js-empire"
                                        }, {
                                            "label": "Arriival",
                                            "value": "arriival"
                                        }, {
                                            "label": "BumiX",
                                            "value": "bumix"
                                        }, {
                                            "label": "Yuanda Express",
                                            "value": "yuanda"
                                        }, {
                                            "label": "BrightStar",
                                            "value": "brightstar"
                                        }, {
                                            "label": "uParcel",
                                            "value": "uparcel"
                                        }, {
                                            "label": "Jomkirim",
                                            "value": "jomkirim"
                                        }, {
                                            "label": "Teleport",
                                            "value": "teleport"
                                        }, {
                                            "label": "J&T Cargo",
                                            "value": "jtcargo"
                                        }, {
                                            "label": "Whallo",
                                            "value": "whallo"
                                        }, {
                                            "label": "KEX Express",
                                            "value": "kex"
                                        }, {
                                            "label": "MyEasy86",
                                            "value": "myeasy86"
                                        }, {
                                            "label": "CJ1ICargo",
                                            "value": "cj1icargo"
                                        }, {
                                            "label": "LEX",
                                            "value": "lex"
                                        }],
                                        init() {
                                            if (this.tracking_number) {
                                                console.log('detecting')
                                                this.detectCourier()
                                            }
                                        },
                                        detectCourier() {
                                            if (!this.tracking_number) {
                                                return
                                            }

                                            this.tracking_number = this.tracking_number.toUpperCase()
                                            this.tracking_number = this.tracking_number.replace(/[^0-9A-Z\-]/g, '');

                                            var socket = new WebSocket("wss://www.tracking.my/websocket")

                                            socket.onopen = () => {
                                                socket.send(JSON.stringify({
                                                    action: "detect",
                                                    tracking_number: this.tracking_number
                                                }))
                                            }

                                            socket.onmessage = (event) => {
                                                this.courier_search = ''
                                                if (this.courier = JSON.parse(event.data).courier) {
                                                    this.courier_search = this.couriers.find((c) => c.value == this.courier).label
                                                }
                                                socket.close()
                                            }
                                        },
                                        filtedCouriers() {
                                            let couriers = this.couriers;
                                            if (this.courier_search) {
                                                couriers = couriers.filter(c => {
                                                    return this.courier_search.toLowerCase().split(' ').every(v => c.label.toLowerCase()
                                                        .includes(v));
                                                });
                                            }
                                            this.isEmpty = !couriers.length
                                            return couriers
                                        },
                                        selectCourier(courier) {
                                            this.$nextTick(() => {
                                                this.courier = courier.value
                                                this.courier_search = courier.label
                                            })

                                        },
                                        track() {
                                            if (!this.tracking_number) {
                                                this.$store.notifications.notify('Please enter tracking number')
                                                return
                                            }

                                            if (!this.courier) {
                                                this.$store.notifications.notify('Please select courier')
                                                return
                                            }

                                            this.tracking_number = this.tracking_number.toUpperCase()
                                            this.tracking_number = this.tracking_number.replace(/[^0-9A-Z\-]/g, '')

                                            var link = '/' + this.courier + '/' + this.tracking_number
                                            for (locale of ['cn', 'tw', 'ms']) {
                                                if (location.pathname.indexOf('/' + locale + '/') === 0) {
                                                    link = '/' + locale + link
                                                    break
                                                }
                                            }

                                            location.href = link
                                        }
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>


            <section class="bg-white py-5">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-7 col-lg-6 order-md-2 align-self-center text-center">
                            <h1 class="mb-3">Get Notified<br>For <span style="color:#f9a318">Every </span>Movement
                            </h1>
                            <p class="mb-5">Tracking.my is the largest one-stop courier tracking platform in
                                Malaysia. Up to millions of buyer and seller are using Tracking.my to track their
                                shipment. Download to keep track of parcels and receive the latest tracking status on
                                your phone.</p>
                            <p class="download-icon mb-5">
                                <a href="https://apps.apple.com/us/app/tracking-my-package-tracker/id1476021559"
                                    aria-label="Download on the App Store" target="_blank">
                                    <img src="https://mytrackcdn.com/images/mobile-app-ios.png.webp"
                                        class="image-icon" alt="App Store">
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=my.com.tracking.app&referrer=utm_source%3Dtracking.my"
                                    aria-label="Download on the Google Play Store" target="_blank">
                                    <img src="https://mytrackcdn.com/images/mobile-app-google-play.png.webp"
                                        class="image-icon" alt="Google Play Store">
                                </a>
                                <a href="https://appgallery.cloud.huawei.com/ag/n/app/C104004275?channelId=web&detailType=0"
                                    aria-label="Download on the Huawei App Gallery" target="_blank">
                                    <img src="https://mytrackcdn.com/images/mobile-app-huawei.png.webp"
                                        class="image-icon" alt="Huawei App Gallery">
                                </a>
                            </p>
                        </div>
                        <div class="col-md-5 col-lg-6 app-preview align-self-center">
                            <img src="https://mytrackcdn.com/images/mobile_app.png.webp" class="img-fluid"
                                alt="Mobile app interface">
                        </div>
                    </div>
                </div>
            </section>


            <section class="bg-grey py-4 py-md-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-12 col-md-7">
                            <h1 class="mb-4">Make Post-Purchase the <span style="color:#f9a318">Best Part</span>
                                of the Customer Experience </h1>
                            <p class="mb-4">Delight your customers with automated tracking to increase brand loyalty
                                and drive higher business results</p>
                            <a href="/seller-platform" class="btn btn-lg btn-outline-dark">Learn More</a>
                        </div>
                        <div class="col col-12 col-md-5">
                            <img data-src="https://mytrackcdn.com/images/seller-platform/seller_1.png.webp"
                                class="img-fluid py-4 lazyload" alt="Seller platform interface">
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-5 bg-white">
                <div x-data="home_sendparcel_setup()">
                    <div class="container mt-md-5">
                        <h1 class="mb-5 text-center"> Get the <span style="color:#f9a318">best courier rates</span>
                            with our shipping calculator!
                        </h1>
                        <div class="card p-2 rounded-4 mb-md-5 border-0" style="background-color: #f7f7f7;">
                            <div class="card-body">
                                <form @submit.prevent="submit">
                                    <div class="row g-3">
                                        <div class="col col-12 col-md-3">
                                            <label class="form-label" for="input_from_postcode">From Postcode</label>
                                            <input id="input_from_postcode" x-model="form.from_postcode"
                                                type="text" class="form-control" maxlength="5">
                                        </div>
                                        <div class="col col-12 col-md-3">
                                            <label class="form-label" for="input_to_postcode">To Postcode</label>
                                            <input id="input_to_postcode" x-model="form.to_postcode" type="text"
                                                class="form-control" maxlength="5">
                                        </div>
                                        <div class="col col-12 col-md-3">
                                            <label class="form-label" for="input_weight">Weight</label>
                                            <div class="input-group">
                                                <input id="input_weight" type="text" class="form-control"
                                                    x-model="form.weight" aria-describedby="weight-kg">
                                                <span class="input-group-text" id="weight-kg">KG</span>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-3 d-grid">
                                            <label class="form-label d-none d-md-block">　</label>
                                            <button type="submit" class="btn btn-primary">Quote &amp; Book</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
            </section>


            <div id="section-top-courier" class="lazyload" data-bg="/images/bg-ecommerce.jpg.webp"
                data-bg-fallback="/images/bg-ecommerce.jpg">
                <div class="container py-5">
                    <h4 class="text-center">TOP E-COMMERCE COURIERS</h4>
                    <h6 class="text-center">A high-quality carrier helps to complete your tracking information and
                        enhance the shopping experience of your customers.</h6>


                    <div class="row mt-5 mb-2">
                        <div class="col-6 col-md-6 col-lg-4">
                            <a class="courier-item" href="/pos">
                                <img data-src="https://mytrackcdn.com/images/couriers/pos.png.webp" class="lazyload"
                                    alt="Pos Malaysia Logo">
                                <span>Pos Malaysia</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4">
                            <a class="courier-item" href="/jt">
                                <img data-src="https://mytrackcdn.com/images/couriers/jt.png.webp" class="lazyload"
                                    alt="J&amp;T Express Logo">
                                <span>J&amp;T Express</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a class="courier-item" href="/shopee">
                                <img data-src="https://mytrackcdn.com/images/couriers/shopee.png.webp"
                                    class="lazyload" alt="Shopee Express Logo">
                                <span>Shopee Express</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a class="courier-item" href="/dhl-ecommerce">
                                <img data-src="https://mytrackcdn.com/images/couriers/dhl-ecommerce.png.webp"
                                    class="lazyload" alt="DHL Ecommerce Logo">
                                <span>DHL Ecommerce</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a class="courier-item" href="/best">
                                <img data-src="https://mytrackcdn.com/images/couriers/best.png.webp" class="lazyload"
                                    alt="Best Express Logo">
                                <span>Best Express</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 d-md-none d-lg-block">
                            <a class="courier-item" href="/flash">
                                <img data-src="https://mytrackcdn.com/images/couriers/flash.png.webp" class="lazyload"
                                    alt="Flash Express Logo">
                                <span>Flash Express</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 d-none d-lg-block">
                            <a class="courier-item" href="/posstore">
                                <img data-src="https://mytrackcdn.com/images/couriers/posstore.png.webp"
                                    class="lazyload" alt="Posstore Logo">
                                <span>Posstore</span>
                            </a>
                        </div>
                    </div>

                    <p class="text-center m-0">
                        <a href="/couriers">View All Supported Couriers</a>
                    </p>
                </div>
            </div>


            <div id="section-statictis" class="lazyload" data-bg="/images/bg-section-statictis.png.webp"
                data-bg-fallback="/images/bg-section-statictis.png">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <h4 class="title pt-4">Malaysia&#039;s leading courier information service provider</h4>
                            <div class="row detail mt-lg-5">
                                <div class="col-6 col-md-3">
                                    <h5>1.7 <small>M</small></h5>
                                    <span>Personal user</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <h5>3.8 <small>K</small></h5>
                                    <span>Commercial seller</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <h5>500 <small>K</small></h5>
                                    <span>Daily tracking</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <h5>200 <small>M</small></h5>
                                    <span>Total parcel tracked</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <img data-src="https://mytrackcdn.com/images/section-statictis-malaysia.png.webp"
                                class="img-fluid lazyload" alt="Malaysia Map">
                        </div>
                    </div>
                </div>

                <div class="container courier-list" x-data="setup()">
                    <div class="d-md-flex flex-row align-items-center mb-3">
                        <h4 class="text-center text-xs-left mb-3 mb-md-0">Select a courier</h4>
                        <div class="ms-auto">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input class="form-control form-control" x-model="search" type="text"
                                            placeholder="Search">

                                    </div>
                                </div>
                                <div class="col">
                                    <select class="form-select" x-model="searchCountry" id="courierSelect"
                                        aria-label="Courier">
                                        <option value="" selected>All countries</option>
                                        <template x-for="c in countries">
                                            <option :value="c.value" x-text="c.label"></option>
                                        </template>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <template x-for="courier in filtedCouriers" :key="courier.value">
                            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                <a class="courier-item"
                                    :href="(locale != 'en' ? '/' + locale + '/' : '/') + courier.value">
                                    <img class="lazyload"
                                        :data-src="'https://mytrackcdn.com/images/couriers/' + courier.value + '.png.webp'"
                                        :alt="courier.label + ' Logo'" width="400" height="200">
                                    <span x-text="courier.label"></span>
                                </a>
                            </div>
                        </template>
                    </div>
                </div>

                <script>
                    function setup() {
                        return {
                            countries: [{
                                    label: "Malaysia",
                                    value: 'MY'
                                },
                                {
                                    label: "Singapore",
                                    value: 'SG'
                                }
                            ],
                            search: '',
                            searchCountry: '',
                            couriers: [{
                                "label": "Abx Express",
                                "value": "abx",
                                "country": "MY"
                            }, {
                                "label": "Airpak Express",
                                "value": "airpak",
                                "country": "SG"
                            }, {
                                "label": "Amber Courier",
                                "value": "amber",
                                "country": "MY"
                            }, {
                                "label": "Arriival",
                                "value": "arriival",
                                "country": "MY"
                            }, {
                                "label": "Asiaxpress",
                                "value": "asiaxpress",
                                "country": "MY"
                            }, {
                                "label": "BabyXpress",
                                "value": "babyxpress",
                                "country": "MY"
                            }, {
                                "label": "Best Express",
                                "value": "best",
                                "country": "MY"
                            }, {
                                "label": "BrightStar",
                                "value": "brightstar",
                                "country": "MY"
                            }, {
                                "label": "BumiX",
                                "value": "bumix",
                                "country": "MY"
                            }, {
                                "label": "CJ1ICargo",
                                "value": "cj1icargo",
                                "country": "MY,SG"
                            }, {
                                "label": "Citylink Express",
                                "value": "citylink",
                                "country": "MY"
                            }, {
                                "label": "Collectco",
                                "value": "collectco",
                                "country": "MY"
                            }, {
                                "label": "Comone Express",
                                "value": "comone",
                                "country": "MY,SG"
                            }, {
                                "label": "DD Express",
                                "value": "dd",
                                "country": "MY"
                            }, {
                                "label": "DHL Ecommerce",
                                "value": "dhl-ecommerce",
                                "country": null
                            }, {
                                "label": "Dex-i Express",
                                "value": "dex-i",
                                "country": "MY,SG"
                            }, {
                                "label": "Dpe Express",
                                "value": "dpe",
                                "country": "MY,SG"
                            }, {
                                "label": "Dpex Express",
                                "value": "dpex",
                                "country": null
                            }, {
                                "label": "DropIt",
                                "value": "dropit",
                                "country": "MY"
                            }, {
                                "label": "ENF Express",
                                "value": "enfexpress",
                                "country": "MY"
                            }, {
                                "label": "EasiPass",
                                "value": "easipass",
                                "country": "MY,SG"
                            }, {
                                "label": "FMX",
                                "value": "fmx",
                                "country": "MY"
                            }, {
                                "label": "Flash Express",
                                "value": "flash",
                                "country": "MY"
                            }, {
                                "label": "Flickpost",
                                "value": "flickpost",
                                "country": "MY"
                            }, {
                                "label": "GD Express",
                                "value": "gdex",
                                "country": "MY"
                            }, {
                                "label": "J&T Cargo",
                                "value": "jtcargo",
                                "country": "MY"
                            }, {
                                "label": "J&T Express",
                                "value": "jt",
                                "country": "MY"
                            }, {
                                "label": "JS Empire Express",
                                "value": "js-empire",
                                "country": "MY,SG"
                            }, {
                                "label": "Janio",
                                "value": "janio",
                                "country": null
                            }, {
                                "label": "Jomkirim",
                                "value": "jomkirim",
                                "country": "MY"
                            }, {
                                "label": "KEX Express",
                                "value": "kex",
                                "country": "MY"
                            }, {
                                "label": "KTMD Malaysia",
                                "value": "ktmd",
                                "country": "MY"
                            }, {
                                "label": "LEX",
                                "value": "lex",
                                "country": "MY,SG"
                            }, {
                                "label": "LWE",
                                "value": "lwe",
                                "country": "MY"
                            }, {
                                "label": "Leopards Express",
                                "value": "leopards",
                                "country": "MY"
                            }, {
                                "label": "LineClear Express",
                                "value": "lineclear",
                                "country": "MY"
                            }, {
                                "label": "M Xpress",
                                "value": "mxpress",
                                "country": "MY"
                            }, {
                                "label": "ML Express",
                                "value": "mlexpress",
                                "country": "MY"
                            }, {
                                "label": "Macrolink Express",
                                "value": "macrolink",
                                "country": "MY"
                            }, {
                                "label": "Mantap Express",
                                "value": "mantap",
                                "country": "MY"
                            }, {
                                "label": "Matdespatch Express",
                                "value": "matdespatch",
                                "country": "MY"
                            }, {
                                "label": "May Express",
                                "value": "mayexpress",
                                "country": "MY"
                            }, {
                                "label": "Motorex",
                                "value": "motorex",
                                "country": "MY"
                            }, {
                                "label": "MyEasy86",
                                "value": "myeasy86",
                                "country": "MY,SG"
                            }, {
                                "label": "MyPoz",
                                "value": "mypoz",
                                "country": "MY"
                            }, {
                                "label": "Near U",
                                "value": "near-u",
                                "country": "MY"
                            }, {
                                "label": "Parcel To Post",
                                "value": "parceltopost",
                                "country": "MY"
                            }, {
                                "label": "Parcelhub",
                                "value": "parcelhub",
                                "country": "MY"
                            }, {
                                "label": "Pgeon Delivery",
                                "value": "pgeon",
                                "country": "MY"
                            }, {
                                "label": "Pickupp",
                                "value": "pickupp",
                                "country": "MY,SG"
                            }, {
                                "label": "Ping U",
                                "value": "ping-u",
                                "country": "MY"
                            }, {
                                "label": "Pos Malaysia",
                                "value": "pos",
                                "country": "MY"
                            }, {
                                "label": "Posstore",
                                "value": "posstore",
                                "country": "MY"
                            }, {
                                "label": "Post2u",
                                "value": "post2u",
                                "country": "MY"
                            }, {
                                "label": "Postco",
                                "value": "postco",
                                "country": "MY"
                            }, {
                                "label": "Quantium Solutions",
                                "value": "quantium",
                                "country": "SG"
                            }, {
                                "label": "Qxpress",
                                "value": "qxpress",
                                "country": null
                            }, {
                                "label": "Radian",
                                "value": "radian",
                                "country": "MY"
                            }, {
                                "label": "Roadbull",
                                "value": "roadbull",
                                "country": "SG"
                            }, {
                                "label": "SPC",
                                "value": "spc",
                                "country": "MY"
                            }, {
                                "label": "SeeBuu Logistics",
                                "value": "seebuu",
                                "country": "MY"
                            }, {
                                "label": "Sendy Express",
                                "value": "sendy",
                                "country": "MY"
                            }, {
                                "label": "Shopee Express",
                                "value": "shopee",
                                "country": null
                            }, {
                                "label": "Skynet Express",
                                "value": "skynet",
                                "country": "MY"
                            }, {
                                "label": "TMT Express",
                                "value": "tmtexpress",
                                "country": "MY"
                            }, {
                                "label": "TNT Express",
                                "value": "tnt",
                                "country": null
                            }, {
                                "label": "Teleport",
                                "value": "teleport",
                                "country": "MY"
                            }, {
                                "label": "TheLorry",
                                "value": "thelorry",
                                "country": "MY,SG,TH,IN"
                            }, {
                                "label": "Toll Express",
                                "value": "toll",
                                "country": null
                            }, {
                                "label": "UPS Express",
                                "value": "ups",
                                "country": null
                            }, {
                                "label": "UrbanFox",
                                "value": "urbanfox",
                                "country": "SG"
                            }, {
                                "label": "WePost",
                                "value": "wepost",
                                "country": "MY,SG"
                            }, {
                                "label": "Whallo",
                                "value": "whallo",
                                "country": "MY"
                            }, {
                                "label": "XendNow",
                                "value": "xendnow",
                                "country": "MY"
                            }, {
                                "label": "YM Global",
                                "value": "ym",
                                "country": "MY"
                            }, {
                                "label": "Yuanda Express",
                                "value": "yuanda",
                                "country": "MY"
                            }, {
                                "label": "Yunda Express",
                                "value": "yunda",
                                "country": null
                            }, {
                                "label": "ZTO Express",
                                "value": "zto",
                                "country": null
                            }, {
                                "label": "ZeptoExpress",
                                "value": "zepto",
                                "country": "MY"
                            }, {
                                "label": "Zoom",
                                "value": "zoom",
                                "country": "MY"
                            }, {
                                "label": "iSend Logistics",
                                "value": "isend",
                                "country": "MY"
                            }, {
                                "label": "uParcel",
                                "value": "uparcel",
                                "country": "MY,SG"
                            }],
                            locale: "en",
                            filtedCouriers() {
                                let couriers = this.couriers

                                if (this.search) {
                                    couriers = couriers.filter(c => {
                                        return this.search.toLowerCase().split(' ').every(v => c.label.toLowerCase().includes(
                                            v))
                                    })
                                }

                                if (this.searchCountry) {
                                    couriers = couriers.filter(c => {
                                        return !c.country || c.country.includes(this.searchCountry)
                                    })
                                }

                                return couriers
                            }
                        }
                    }
                </script>
            </div>

            <div style="display: none">
                <a href="/comone">Comone Express</a>
                <a href="/cn/comone">Comone Express CN</a>
                <a href="/ms/comone">Comone Express MS</a>
                <a href="/cuckoo">Cuckoo Express</a>
                <a href="/cn/cuckoo">Cuckoo Express CN</a>
                <a href="/ms/cuckoo">Cuckoo Express MS</a>
                <a href="/dex-i">Dex-i Express</a>
                <a href="/cn/dex-i">Dex-i Express CN</a>
                <a href="/ms/dex-i">Dex-i Express MS</a>
                <a href="/leopards">Leopards Express</a>
                <a href="/cn/leopards">Leopards Express CN</a>
                <a href="/ms/leopards">Leopards Express MS</a>
                <a href="/dpe">Dpe Express</a>
                <a href="/cn/dpe">Dpe Express CN</a>
                <a href="/ms/dpe">Dpe Express MS</a>
                <a href="/ie-post">ie-Post Express</a>
                <a href="/cn/ie-post">ie-Post Express CN</a>
                <a href="/ms/ie-post">ie-Post Express MS</a>
                <a href="/fedex">FedEx Express</a>
                <a href="/cn/fedex">FedEx Express CN</a>
                <a href="/ms/fedex">FedEx Express MS</a>
                <a href="/dpex">Dpex Express</a>
                <a href="/cn/dpex">Dpex Express CN</a>
                <a href="/ms/dpex">Dpex Express MS</a>
                <a href="/toll">Toll Express</a>
                <a href="/cn/toll">Toll Express CN</a>
                <a href="/ms/toll">Toll Express MS</a>
                <a href="/skynet">Skynet Express</a>
                <a href="/cn/skynet">Skynet Express CN</a>
                <a href="/ms/skynet">Skynet Express MS</a>
                <a href="/pos">Pos Malaysia</a>
                <a href="/cn/pos">Pos Malaysia CN</a>
                <a href="/ms/pos">Pos Malaysia MS</a>
                <a href="/airpak">Airpak Express</a>
                <a href="/cn/airpak">Airpak Express CN</a>
                <a href="/ms/airpak">Airpak Express MS</a>
                <a href="/citylink">Citylink Express</a>
                <a href="/cn/citylink">Citylink Express CN</a>
                <a href="/ms/citylink">Citylink Express MS</a>
                <a href="/abx">Abx Express</a>
                <a href="/cn/abx">Abx Express CN</a>
                <a href="/ms/abx">Abx Express MS</a>
                <a href="/gdex">GD Express</a>
                <a href="/cn/gdex">GD Express CN</a>
                <a href="/ms/gdex">GD Express MS</a>
                <a href="/nationwide">Nationwide Express</a>
                <a href="/cn/nationwide">Nationwide Express CN</a>
                <a href="/ms/nationwide">Nationwide Express MS</a>
                <a href="/taqbin">TaqBin Malaysia</a>
                <a href="/cn/taqbin">TaqBin Malaysia CN</a>
                <a href="/ms/taqbin">TaqBin Malaysia MS</a>
                <a href="/ninja-van">NinjaVan Malaysia</a>
                <a href="/cn/ninja-van">NinjaVan Malaysia CN</a>
                <a href="/ms/ninja-van">NinjaVan Malaysia MS</a>
                <a href="/kangaroo">Kangaroo Express</a>
                <a href="/cn/kangaroo">Kangaroo Express CN</a>
                <a href="/ms/kangaroo">Kangaroo Express MS</a>
                <a href="/mypoz">MyPoz</a>
                <a href="/cn/mypoz">MyPoz CN</a>
                <a href="/ms/mypoz">MyPoz MS</a>
                <a href="/matdespatch">Matdespatch Express</a>
                <a href="/cn/matdespatch">Matdespatch Express CN</a>
                <a href="/ms/matdespatch">Matdespatch Express MS</a>
                <a href="/prouter">PRouter Express</a>
                <a href="/cn/prouter">PRouter Express CN</a>
                <a href="/ms/prouter">PRouter Express MS</a>
                <a href="/lineclear">LineClear Express</a>
                <a href="/cn/lineclear">LineClear Express CN</a>
                <a href="/ms/lineclear">LineClear Express MS</a>
                <a href="/ecargo">Ecargo Express</a>
                <a href="/cn/ecargo">Ecargo Express CN</a>
                <a href="/ms/ecargo">Ecargo Express MS</a>
                <a href="/ktmd">KTMD Malaysia</a>
                <a href="/cn/ktmd">KTMD Malaysia CN</a>
                <a href="/ms/ktmd">KTMD Malaysia MS</a>
                <a href="/redboxasia">Redbox Asia Malaysia</a>
                <a href="/cn/redboxasia">Redbox Asia Malaysia CN</a>
                <a href="/ms/redboxasia">Redbox Asia Malaysia MS</a>
                <a href="/lel">Lazada eLogistics (LEL)</a>
                <a href="/cn/lel">Lazada eLogistics (LEL) CN</a>
                <a href="/ms/lel">Lazada eLogistics (LEL) MS</a>
                <a href="/fmx">FMX</a>
                <a href="/cn/fmx">FMX CN</a>
                <a href="/ms/fmx">FMX MS</a>
                <a href="/yg">YG Express</a>
                <a href="/cn/yg">YG Express CN</a>
                <a href="/ms/yg">YG Express MS</a>
                <a href="/wepost">WePost</a>
                <a href="/cn/wepost">WePost CN</a>
                <a href="/ms/wepost">WePost MS</a>
                <a href="/tnt">TNT Express</a>
                <a href="/cn/tnt">TNT Express CN</a>
                <a href="/ms/tnt">TNT Express MS</a>
                <a href="/ups">UPS Express</a>
                <a href="/cn/ups">UPS Express CN</a>
                <a href="/ms/ups">UPS Express MS</a>
                <a href="/aramex">Aramex</a>
                <a href="/cn/aramex">Aramex CN</a>
                <a href="/ms/aramex">Aramex MS</a>
                <a href="/dhl">DHL Express</a>
                <a href="/cn/dhl">DHL Express CN</a>
                <a href="/ms/dhl">DHL Express MS</a>
                <a href="/zepto">ZeptoExpress</a>
                <a href="/cn/zepto">ZeptoExpress CN</a>
                <a href="/ms/zepto">ZeptoExpress MS</a>
                <a href="/instant">Instant</a>
                <a href="/cn/instant">Instant CN</a>
                <a href="/ms/instant">Instant MS</a>
                <a href="/sf">SF Express</a>
                <a href="/cn/sf">SF Express CN</a>
                <a href="/ms/sf">SF Express MS</a>
                <a href="/pgeon">Pgeon Delivery</a>
                <a href="/cn/pgeon">Pgeon Delivery CN</a>
                <a href="/ms/pgeon">Pgeon Delivery MS</a>
                <a href="/deliverlah">DeliverLah</a>
                <a href="/cn/deliverlah">DeliverLah CN</a>
                <a href="/ms/deliverlah">DeliverLah MS</a>
                <a href="/singpost">Singapore Post</a>
                <a href="/cn/singpost">Singapore Post CN</a>
                <a href="/ms/singpost">Singapore Post MS</a>
                <a href="/roadbull">Roadbull</a>
                <a href="/cn/roadbull">Roadbull CN</a>
                <a href="/ms/roadbull">Roadbull MS</a>
                <a href="/jet-ship">Jet Ship</a>
                <a href="/cn/jet-ship">Jet Ship CN</a>
                <a href="/ms/jet-ship">Jet Ship MS</a>
                <a href="/lwe">LWE</a>
                <a href="/cn/lwe">LWE CN</a>
                <a href="/ms/lwe">LWE MS</a>
                <a href="/spc">SPC</a>
                <a href="/cn/spc">SPC CN</a>
                <a href="/ms/spc">SPC MS</a>
                <a href="/dhl-ecommerce">DHL Ecommerce</a>
                <a href="/cn/dhl-ecommerce">DHL Ecommerce CN</a>
                <a href="/ms/dhl-ecommerce">DHL Ecommerce MS</a>
                <a href="/dd">DD Express</a>
                <a href="/cn/dd">DD Express CN</a>
                <a href="/ms/dd">DD Express MS</a>
                <a href="/asiaxpress">Asiaxpress</a>
                <a href="/cn/asiaxpress">Asiaxpress CN</a>
                <a href="/ms/asiaxpress">Asiaxpress MS</a>
                <a href="/quantium">Quantium Solutions</a>
                <a href="/cn/quantium">Quantium Solutions CN</a>
                <a href="/ms/quantium">Quantium Solutions MS</a>
                <a href="/jocom">Jocom</a>
                <a href="/cn/jocom">Jocom CN</a>
                <a href="/ms/jocom">Jocom MS</a>
                <a href="/cj">CJ Century</a>
                <a href="/cn/cj">CJ Century CN</a>
                <a href="/ms/cj">CJ Century MS</a>
                <a href="/mxpress">M Xpress</a>
                <a href="/cn/mxpress">M Xpress CN</a>
                <a href="/ms/mxpress">M Xpress MS</a>
                <a href="/jinsung">Jinsung Trading</a>
                <a href="/cn/jinsung">Jinsung Trading CN</a>
                <a href="/ms/jinsung">Jinsung Trading MS</a>
                <a href="/goget">GoGet</a>
                <a href="/cn/goget">GoGet CN</a>
                <a href="/ms/goget">GoGet MS</a>
                <a href="/collectco">Collectco</a>
                <a href="/cn/collectco">Collectco CN</a>
                <a href="/ms/collectco">Collectco MS</a>
                <a href="/postco">Postco</a>
                <a href="/cn/postco">Postco CN</a>
                <a href="/ms/postco">Postco MS</a>
                <a href="/dropit">DropIt</a>
                <a href="/cn/dropit">DropIt CN</a>
                <a href="/ms/dropit">DropIt MS</a>
                <a href="/zoom">Zoom</a>
                <a href="/cn/zoom">Zoom CN</a>
                <a href="/ms/zoom">Zoom MS</a>
                <a href="/motorex">Motorex</a>
                <a href="/cn/motorex">Motorex CN</a>
                <a href="/ms/motorex">Motorex MS</a>
                <a href="/easipass">EasiPass</a>
                <a href="/cn/easipass">EasiPass CN</a>
                <a href="/ms/easipass">EasiPass MS</a>
                <a href="/pickupp">Pickupp</a>
                <a href="/cn/pickupp">Pickupp CN</a>
                <a href="/ms/pickupp">Pickupp MS</a>
                <a href="/speedpost">SpeedPost</a>
                <a href="/cn/speedpost">SpeedPost CN</a>
                <a href="/ms/speedpost">SpeedPost MS</a>
                <a href="/simplypost">SimplyPost</a>
                <a href="/cn/simplypost">SimplyPost CN</a>
                <a href="/ms/simplypost">SimplyPost MS</a>
                <a href="/nhans">Nhans Solutions</a>
                <a href="/cn/nhans">Nhans Solutions CN</a>
                <a href="/ms/nhans">Nhans Solutions MS</a>
                <a href="/kgmhub">KGM Hub</a>
                <a href="/cn/kgmhub">KGM Hub CN</a>
                <a href="/ms/kgmhub">KGM Hub MS</a>
                <a href="/qxpress">Qxpress</a>
                <a href="/cn/qxpress">Qxpress CN</a>
                <a href="/ms/qxpress">Qxpress MS</a>
                <a href="/rzy">RZY Express</a>
                <a href="/cn/rzy">RZY Express CN</a>
                <a href="/ms/rzy">RZY Express MS</a>
                <a href="/jayon">Jayon Express</a>
                <a href="/cn/jayon">Jayon Express CN</a>
                <a href="/ms/jayon">Jayon Express MS</a>
                <a href="/urbanfox">UrbanFox</a>
                <a href="/cn/urbanfox">UrbanFox CN</a>
                <a href="/ms/urbanfox">UrbanFox MS</a>
                <a href="/jt">J&amp;T Express</a>
                <a href="/cn/jt">J&amp;T Express CN</a>
                <a href="/ms/jt">J&amp;T Express MS</a>
                <a href="/karhoo">Karhoo Courier</a>
                <a href="/cn/karhoo">Karhoo Courier CN</a>
                <a href="/ms/karhoo">Karhoo Courier MS</a>
                <a href="/after5">After 5</a>
                <a href="/cn/after5">After 5 CN</a>
                <a href="/ms/after5">After 5 MS</a>
                <a href="/near-u">Near U</a>
                <a href="/cn/near-u">Near U CN</a>
                <a href="/ms/near-u">Near U MS</a>
                <a href="/mayexpress">May Express</a>
                <a href="/cn/mayexpress">May Express CN</a>
                <a href="/ms/mayexpress">May Express MS</a>
                <a href="/bbb">BBB Express</a>
                <a href="/cn/bbb">BBB Express CN</a>
                <a href="/ms/bbb">BBB Express MS</a>
                <a href="/amber">Amber Courier</a>
                <a href="/cn/amber">Amber Courier CN</a>
                <a href="/ms/amber">Amber Courier MS</a>
                <a href="/ping-u">Ping U</a>
                <a href="/cn/ping-u">Ping U CN</a>
                <a href="/ms/ping-u">Ping U MS</a>
                <a href="/janio">Janio</a>
                <a href="/cn/janio">Janio CN</a>
                <a href="/ms/janio">Janio MS</a>
                <a href="/shopee">Shopee Express</a>
                <a href="/cn/shopee">Shopee Express CN</a>
                <a href="/ms/shopee">Shopee Express MS</a>
                <a href="/best">Best Express</a>
                <a href="/cn/best">Best Express CN</a>
                <a href="/ms/best">Best Express MS</a>
                <a href="/seebuu">SeeBuu Logistics</a>
                <a href="/cn/seebuu">SeeBuu Logistics CN</a>
                <a href="/ms/seebuu">SeeBuu Logistics MS</a>
                <a href="/yunda">Yunda Express</a>
                <a href="/cn/yunda">Yunda Express CN</a>
                <a href="/ms/yunda">Yunda Express MS</a>
                <a href="/xendnow">XendNow</a>
                <a href="/cn/xendnow">XendNow CN</a>
                <a href="/ms/xendnow">XendNow MS</a>
                <a href="/thelorry">TheLorry</a>
                <a href="/cn/thelorry">TheLorry CN</a>
                <a href="/ms/thelorry">TheLorry MS</a>
                <a href="/parceltopost">Parcel To Post</a>
                <a href="/cn/parceltopost">Parcel To Post CN</a>
                <a href="/ms/parceltopost">Parcel To Post MS</a>
                <a href="/zto">ZTO Express</a>
                <a href="/cn/zto">ZTO Express CN</a>
                <a href="/ms/zto">ZTO Express MS</a>
                <a href="/posstore">Posstore</a>
                <a href="/cn/posstore">Posstore CN</a>
                <a href="/ms/posstore">Posstore MS</a>
                <a href="/flickpost">Flickpost</a>
                <a href="/cn/flickpost">Flickpost CN</a>
                <a href="/ms/flickpost">Flickpost MS</a>
                <a href="/mantap">Mantap Express</a>
                <a href="/cn/mantap">Mantap Express CN</a>
                <a href="/ms/mantap">Mantap Express MS</a>
                <a href="/cili">Cili Express</a>
                <a href="/cn/cili">Cili Express CN</a>
                <a href="/ms/cili">Cili Express MS</a>
                <a href="/ym">YM Global</a>
                <a href="/cn/ym">YM Global CN</a>
                <a href="/ms/ym">YM Global MS</a>
                <a href="/babyxpress">BabyXpress</a>
                <a href="/cn/babyxpress">BabyXpress CN</a>
                <a href="/ms/babyxpress">BabyXpress MS</a>
                <a href="/enfexpress">ENF Express</a>
                <a href="/cn/enfexpress">ENF Express CN</a>
                <a href="/ms/enfexpress">ENF Express MS</a>
                <a href="/mlexpress">ML Express</a>
                <a href="/cn/mlexpress">ML Express CN</a>
                <a href="/ms/mlexpress">ML Express MS</a>
                <a href="/tmtexpress">TMT Express</a>
                <a href="/cn/tmtexpress">TMT Express CN</a>
                <a href="/ms/tmtexpress">TMT Express MS</a>
                <a href="/dinoexpress">Dino Express</a>
                <a href="/cn/dinoexpress">Dino Express CN</a>
                <a href="/ms/dinoexpress">Dino Express MS</a>
                <a href="/megexpress">MEG Express</a>
                <a href="/cn/megexpress">MEG Express CN</a>
                <a href="/ms/megexpress">MEG Express MS</a>
                <a href="/macrolink">Macrolink Express</a>
                <a href="/cn/macrolink">Macrolink Express CN</a>
                <a href="/ms/macrolink">Macrolink Express MS</a>
                <a href="/flash">Flash Express</a>
                <a href="/cn/flash">Flash Express CN</a>
                <a href="/ms/flash">Flash Express MS</a>
                <a href="/ezypost">EzyPost</a>
                <a href="/cn/ezypost">EzyPost CN</a>
                <a href="/ms/ezypost">EzyPost MS</a>
                <a href="/radian">Radian</a>
                <a href="/cn/radian">Radian CN</a>
                <a href="/ms/radian">Radian MS</a>
                <a href="/setelexpress">Setel Express</a>
                <a href="/cn/setelexpress">Setel Express CN</a>
                <a href="/ms/setelexpress">Setel Express MS</a>
                <a href="/sendy">Sendy Express</a>
                <a href="/cn/sendy">Sendy Express CN</a>
                <a href="/ms/sendy">Sendy Express MS</a>
                <a href="/isend">iSend Logistics</a>
                <a href="/cn/isend">iSend Logistics CN</a>
                <a href="/ms/isend">iSend Logistics MS</a>
                <a href="/parcelhub">Parcelhub</a>
                <a href="/cn/parcelhub">Parcelhub CN</a>
                <a href="/ms/parcelhub">Parcelhub MS</a>
                <a href="/post2u">Post2u</a>
                <a href="/cn/post2u">Post2u CN</a>
                <a href="/ms/post2u">Post2u MS</a>
                <a href="/js-empire">JS Empire Express</a>
                <a href="/cn/js-empire">JS Empire Express CN</a>
                <a href="/ms/js-empire">JS Empire Express MS</a>
                <a href="/arriival">Arriival</a>
                <a href="/cn/arriival">Arriival CN</a>
                <a href="/ms/arriival">Arriival MS</a>
                <a href="/bumix">BumiX</a>
                <a href="/cn/bumix">BumiX CN</a>
                <a href="/ms/bumix">BumiX MS</a>
                <a href="/yuanda">Yuanda Express</a>
                <a href="/cn/yuanda">Yuanda Express CN</a>
                <a href="/ms/yuanda">Yuanda Express MS</a>
                <a href="/brightstar">BrightStar</a>
                <a href="/cn/brightstar">BrightStar CN</a>
                <a href="/ms/brightstar">BrightStar MS</a>
                <a href="/uparcel">uParcel</a>
                <a href="/cn/uparcel">uParcel CN</a>
                <a href="/ms/uparcel">uParcel MS</a>
                <a href="/jomkirim">Jomkirim</a>
                <a href="/cn/jomkirim">Jomkirim CN</a>
                <a href="/ms/jomkirim">Jomkirim MS</a>
                <a href="/teleport">Teleport</a>
                <a href="/cn/teleport">Teleport CN</a>
                <a href="/ms/teleport">Teleport MS</a>
                <a href="/jtcargo">J&amp;T Cargo</a>
                <a href="/cn/jtcargo">J&amp;T Cargo CN</a>
                <a href="/ms/jtcargo">J&amp;T Cargo MS</a>
                <a href="/whallo">Whallo</a>
                <a href="/cn/whallo">Whallo CN</a>
                <a href="/ms/whallo">Whallo MS</a>
                <a href="/kex">KEX Express</a>
                <a href="/cn/kex">KEX Express CN</a>
                <a href="/ms/kex">KEX Express MS</a>
                <a href="/myeasy86">MyEasy86</a>
                <a href="/cn/myeasy86">MyEasy86 CN</a>
                <a href="/ms/myeasy86">MyEasy86 MS</a>
                <a href="/cj1icargo">CJ1ICargo</a>
                <a href="/cn/cj1icargo">CJ1ICargo CN</a>
                <a href="/ms/cj1icargo">CJ1ICargo MS</a>
                <a href="/lex">LEX</a>
                <a href="/cn/lex">LEX CN</a>
                <a href="/ms/lex">LEX MS</a>
            </div>
        </div>


        <footer class="py-4 px-md-4">
            <div class="container d-flex flex-column flex-md-row flex-wrap align-items-center" style="gap: 2rem">
                <div class="social-icons h5 my-0 me-md-auto d-flex justify-content-center flex-wrap"
                    style="gap: 1rem">
                    <a href="https://www.facebook.com/tracking.my" aria-label="Facebook page" target="_blank"
                        class="color-facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/tracking.my/" aria-label="Instagram" target="_blank"
                        class="color-instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="http://m.me/tracking.my" target="_blank" aria-label="Facebook Messenger"
                        class="color-facebook-messenger">
                        <i class="fab fa-facebook-messenger"></i>
                    </a>

                    <a href="https://web.telegram.org/k/#@TrackingMyBot" aria-label="Telegram" target="_blank"
                        class="color-telegram">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=my.com.tracking.app&referrer=utm_source%3Dtracking.my"
                        aria-label="Google Play" target="_blank" class="color-android">
                        <i class="fab fa-android"></i>
                    </a>
                    <a href="https://apps.apple.com/us/app/tracking-my-package-tracker/id1476021559"
                        aria-label="Apple App Store" target="_blank" class="color-apple">
                        <i class="fab fa-apple"></i>
                    </a>
                    <a href="https://appgallery.huawei.com/app/C104004275" aria-label="HuaWei App Gallery"
                        target="_blank" class="color-huawei">
                        <i class="fab fa-huawei"></i>
                    </a>
                </div>

                <nav class="my-2 my-md-0 me-md-3 d-flex justify-content-center flex-wrap" style="gap: 1rem">
                    <a class="text-dark" href="/articles">Articles</a>
                    <a class="text-dark" href="/contact-us">Contact Us</a>
                    <a class="text-dark" href="/careers">Careers</a>
                    <a class="text-dark" href="/terms">Terms</a>
                    <a class="text-dark" href="/privacy">Privacy</a>
                </nav>
            </div>
        </footer>

        <div x-cloak x-data="{}" x-show="$store.notifications.message"
            class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-sm-3">
            <div id="toast" class="toast bg-primary text-white d-flex align-items-center" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-body" x-text="$store.notifications.message"></div>
            </div>
        </div>



        <script type="text/javascript">
            function setupHeader() {
                return {
                    locale: 'en',
                    locales: {
                        'en': 'English',
                        'ms': 'Malay',
                        'cn': '简体中文',
                        // 'tw': '繁体中文',
                    },
                    changeLocate(locale) {
                        var url = location.pathname
                        if (this.locale != 'en' && location.pathname.indexOf('/' + this.locale + '/') === 0) {
                            url = url.substr(3)
                        }
                        if (locale != 'en') {
                            url = '/' + locale + url
                        }
                        location.href = url
                    },
                    menuLocates() {
                        var locales = Object.assign({}, this.locales)
                        delete locales[this.locale]
                        return locales
                    }
                }
            }
        </script>

        <script>
            function home_sendparcel_setup() {
                return {
                    form: {
                        from_postcode: '',
                        to_postcode: '',
                        weight: '',
                    },
                    submit() {
                        window.location.href = '/send-parcel?' + (new URLSearchParams(this.form).toString())
                    },
                }
            }
        </script>
        <script async src="https://mytrackcdn.com/app.665742fd.js"></script>
    </body>

</html>
