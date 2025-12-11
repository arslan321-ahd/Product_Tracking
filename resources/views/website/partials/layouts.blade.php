<!doctype html>
<html lang="en">
    @include('website.partials.head')

    <body x-data="setupHeader()">
        @include('website.partials.header')
        <div class="modal fade" id="trackingFormModal" tabindex="-1" aria-labelledby="trackingFormModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="trackingFormModalLabel">Track and Trace</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
            @yield('content')
        </div>
        @include('website.partials.footer')
        <div x-cloak x-data="{}" x-show="$store.notifications.message"
            class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-sm-3">
            <div id="toast" class="toast bg-primary text-white d-flex align-items-center" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-body" x-text="$store.notifications.message"></div>
            </div>
        </div>
        @include('website.partials.scripts')
    </body>

</html>
