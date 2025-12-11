@extends('website.partials.layouts')
@section('content')
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
                            <input type="text" x-model="tracking_number" class="form-control text-uppercase"
                                id="formTrackingInputHome" placeholder="Tracking number"
                                @input.debounce.500ms="detectCourier" required>
                            <label for="formTrackingInputHome">Tracking number</label>
                        </div>
                        <div class="form-floating mb-3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <input type="text" x-model="courier_search" class="form-control" id="formCourierInputHome"
                                placeholder="Auto detected" @click="courier_search = ''; courier=null" required>
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
                            <img src="https://mytrackcdn.com/images/mobile-app-ios.png.webp" class="image-icon"
                                alt="App Store">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=my.com.tracking.app&referrer=utm_source%3Dtracking.my"
                            aria-label="Download on the Google Play Store" target="_blank">
                            <img src="https://mytrackcdn.com/images/mobile-app-google-play.png.webp" class="image-icon"
                                alt="Google Play Store">
                        </a>
                        <a href="https://appgallery.cloud.huawei.com/ag/n/app/C104004275?channelId=web&detailType=0"
                            aria-label="Download on the Huawei App Gallery" target="_blank">
                            <img src="https://mytrackcdn.com/images/mobile-app-huawei.png.webp" class="image-icon"
                                alt="Huawei App Gallery">
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
                                    <input id="input_from_postcode" x-model="form.from_postcode" type="text"
                                        class="form-control" maxlength="5">
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
                        <img data-src="https://mytrackcdn.com/images/couriers/shopee.png.webp" class="lazyload"
                            alt="Shopee Express Logo">
                        <span>Shopee Express</span>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a class="courier-item" href="/dhl-ecommerce">
                        <img data-src="https://mytrackcdn.com/images/couriers/dhl-ecommerce.png.webp" class="lazyload"
                            alt="DHL Ecommerce Logo">
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
                        <img data-src="https://mytrackcdn.com/images/couriers/posstore.png.webp" class="lazyload"
                            alt="Posstore Logo">
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
    </div>
@endsection
