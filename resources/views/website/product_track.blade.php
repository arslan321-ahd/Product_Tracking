@extends('website.partials.layouts')
@section('content')
    <div class="page-heading page-courier">
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
            <div class="courier-logo"><img src="https://mytrackcdn.com/images/couriers/mypoz.png.webp" width="400"
                    height="200"></div>
            <h2 class="text-center mb-4"> Track MyPoz Shipments
            </h2>
            <div class="d-flex flex-column flex-md-row justify-content-center mb-5">
                <div class="mx-3">
                    <i class="fas fa-fw fa-phone"></i>
                    <a href="tel:+6072882238" target="_blank">+6072882238</a>
                </div>

                <div class="mx-3">
                    <i class="fas fa-fw fa-envelope"></i>
                    <a href="mailto:sales@myboxpost.com" target="_blank">sales@myboxpost.com</a>
                </div>

                <div class="mx-3">
                    <i class="fas fa-fw fa-browser"></i>
                    <a href="http://www.mypoz.com" target="_blank" rel="noopener noreferrer">http://www.mypoz.com</a>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div x-data="courierSetup()" class="col" style="max-width: 550px;">
                    <form @submit.prevent="track" class="d-flex flex-row align-items-center mb-3">
                        <input type="tracking_number" x-model="tracking_number" class="form-control form-control-lg"
                            id="trackingInput" placeholder='Tracking number' required>
                        <button class="btn btn-primary btn-lg ms-3" type="submit"><i class="fas fa-search"></i>
                            Track</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function courierSetup() {
            return {
                tracking_number: '',
                track: function() {
                    this.tracking_number = this.tracking_number.toUpperCase()
                    this.tracking_number = this.tracking_number.replace(/[^0-9A-Z\-]/g, '')
                    location.href = '/mypoz/' + this.tracking_number
                }
            }
        }
    </script>

    <div class="bg-white py-5">
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
                            <select class="form-select" x-model="searchCountry" id="courierSelect" aria-label="Courier">
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
                        <a class="courier-item" :href="(locale != 'en' ? '/' + locale + '/' : '/') + courier.value">
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
        <a href="/link/mypoz/mypoz">link</a>
        <a href="/link/mypoz/mypoz-tracking">link</a>
        <a href="/link/mypoz/mypoz-express">link</a>
        <a href="/link/mypoz/mypoz-malaysia">link</a>
        <a href="/link/mypoz/mypoz-tracking-number">link</a>
        <a href="/link/mypoz/mypoz-track">link</a>
        <a href="/link/mypoz/mypoz-courier">link</a>
        <a href="/link/mypoz/track-and-trace">link</a>
    </div>
    </div>
@endsection
