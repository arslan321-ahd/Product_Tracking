@extends('website.partials.layouts')
@section('content')
    <div x-data="setupTracking()" class="page-tracking my-sm-5">
        <div class="container g-0 g-sm-4">
            <div class="row g-0 g-sm-4">
                <div class="col-lg-8">
                    <div class="card h-100">
                        <div class="card-header d-flex flex-row align-items-center">
                            <img src="https://mytrackcdn.com/images/couriers/dpe.png.webp" width="128" height="64"
                                class="courier-logo" alt="Dpe Express logo" />
                            <div class="me-auto ms-md-2">
                                <div class="d-flex flex-row align-items-center">
                                    <h6 class="courier-name me-2">
                                        Dpe Express
                                    </h6>
                                    <div class="dropdown courier-contact">
                                        <a href="#" id="dropdownMenuContact" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Contact
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-icon" aria-labelledby="dropdownMenuContact">



                                            <li>
                                                <a class="dropdown-item" href="http://www.dpe.net.cn"
                                                    rel="noopener noreferrer" target="_blank">
                                                    <i class="far fa-browser fa-fw"></i>
                                                    http://www.dpe.net.cn
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                #<span class="mx-1">DWFEFWAEF</span>

                                <a href="#" id="dropdownMenuShareMobile" aria-label="Share" data-bs-toggle="dropdown"
                                    aria-expanded="false" class="ms-2 d-md-none">
                                    <i class="far fa-share-square"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-icon" aria-labelledby="dropdownMenuShareMobile">
                                    <li>
                                        <a href="#" @click.prevent="copyLink" class="dropdown-item">
                                            <i class="fas fa-link fa-fw"></i>
                                            Copy link
                                        </a>
                                    </li>
                                    <li x-show="tracking_result">
                                        <a href="#" @click.prevent="copyResult" class="dropdown-item">
                                            <i class="fas fa-copy fa-fw"></i>
                                            Copy result
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" @click.prevent="share('whatsapp')" class="dropdown-item">
                                            <i class="fab fa-whatsapp fa-fw"></i>
                                            WhatsApp
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" @click.prevent="share('telegram')" class="dropdown-item">
                                            <i class="fab fa-telegram fa-fw"></i>
                                            Telegram
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" @click.prevent="share('line')" class="dropdown-item">
                                            <i class="fab fa-line fa-fw"></i>
                                            Line
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tracking-buttons d-none d-md-flex flex-row align-items-center">
                                <div x-show="tracking_result">
                                    <a href="#" @click.prevent="copyResult">
                                        <i class="fas fa-copy"></i>
                                        <p>Copy result</p>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" @click.prevent="copyLink">
                                        <i class="fas fa-link"></i>
                                        <p>Copy link</p>
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a href="#" id="dropdownMenuShare" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-share"></i>
                                        <p>Share</p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-icon"
                                        aria-labelledby="dropdownMenuShare">
                                        <li>
                                            <a href="#" @click.prevent="share('whatsapp')" class="dropdown-item">
                                                <i class="fab fa-square-whatsapp fa-fw color-whatsapp"></i>
                                                WhatsApp
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" @click.prevent="share('telegram')" class="dropdown-item">
                                                <i class="fab fa-telegram fa-fw color-telegram"></i>
                                                Telegram
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" @click.prevent="share('messenger')" class="dropdown-item">
                                                <i class="fab fa-facebook-messenger fa-fw color-facebook-messenger"></i>
                                                Facebook Messenger
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" @click.prevent="share('line')" class="dropdown-item">
                                                <i class="fab fa-line fa-fw color-line"></i>
                                                Line
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tracking-result">
                            <template x-if="courier.is_unavailable || tracking_result?.error == 'unavailable'">
                                <div class="card-body border-top d-flex flex-column align-items-center">
                                    <h5 class="text-center mt-5">
                                        <i class="far fa-exclamation-circle me-2"></i>
                                        Tracking Not Available
                                    </h5>
                                    <div class="no-result-reason mt-3 mb-5">
                                        <div class="d-flex flex-row align-items-center">
                                            <p>
                                                We’re unable to retrieve the tracking details for this number at the moment.
                                            </p>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <p>
                                                Please proceed to the Dpe Express official website to check the status.
                                            </p>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <p>
                                                <a :href="courier.unavailable" rel="noopener noreferrer"
                                                    class="btn btn-primary btn-sm" target="_blank">
                                                    Track Here
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <template x-if="!courier.is_unavailable && isLoading">
                                <div class="card-body text-center">
                                    <i class="fas fa-spinner fa-spin"></i>
                                    Please wait while we are tracking for you.
                                </div>
                            </template>
                            <template x-if="!courier.is_unavailable && !isLoading && tracking_result.error">
                                <div>
                                    <template
                                        x-if="tracking_result.error == 'invalid' || tracking_result.error == 'expired'">
                                        <div class="card-body border-top d-flex flex-column align-items-center">
                                            <h5 class="text-center mt-5">
                                                <i class="fas fa-exclamation-square me-2"></i>
                                                That&#039;s an error
                                            </h5>
                                            <div class="no-result-reason mt-3 mb-5">
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-times"></i>
                                                    <p>
                                                        Your client has issued a malformed or illegal request.
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-sync-alt"></i>
                                                    <p>
                                                        You may try to refresh this page to keep track your shipment.
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-spider-black-widow"></i>
                                                    <p>
                                                        It&#039;s more likely that your browser, a browser extension, or
                                                        some other program on your device caused this to happen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    <template x-if="tracking_result.error == 'too_many_requests'">
                                        <div class="card-body border-top d-flex flex-column align-items-center">
                                            <h5 class="text-center mt-5">
                                                <i class="fas fa-coffee me-2"></i>
                                                Let&#039;s take a break for a treat
                                            </h5>
                                            <div class="no-result-reason mt-3 mb-5">
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-window-restore"></i>
                                                    <p>
                                                        You just made a lot of requests. You should let us cool off a
                                                        minute.
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-robot"></i>
                                                    <p>
                                                        It&#039;s near impossible for a human to make this many requests.
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-spider-black-widow"></i>
                                                    <p>
                                                        It&#039;s more likely that your browser, a browser extension, or
                                                        some other program on your device caused this to happen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    <template x-if="tracking_result.error == 'serverdown'">
                                        <div class="card-body border-top d-flex flex-column align-items-center">
                                            <h5 class="text-center mt-5">
                                                <i class="fas fa-exclamation-square me-2"></i>
                                                Sorry, tracking failed
                                            </h5>
                                            <div class="no-result-reason mt-3 mb-5">
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-times"></i>
                                                    <p>
                                                        The courier company&#039;s server is currently inaccessible.
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-sync-alt"></i>
                                                    <p>
                                                        Please refresh this page to try tracking your shipment again.
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-browser"></i>
                                                    <p>
                                                        We are working to resolve this issue as quickly as possible. In the
                                                        meantime, you can check the courier company&#039;s official website
                                                        for updates.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>
                            <template
                                x-if="!courier.is_unavailable && !isLoading && tracking_result && !tracking_result.error">
                                <div>
                                    <div class="card-body">
                                        <div class="tracking-status mt-4">
                                            <h2 class="me-md-auto">
                                                <span x-text="getStatusTitle(tracking_result.latest_status)"></span>
                                                <small x-show="tracking_result.estimated_delivery_date"
                                                    x-text="`· Estimated delivery: ${tracking_result.estimated_delivery_date}`"></small>
                                                <small x-show="tracking_result.delivery_date"
                                                    x-text="`· Delivery date: ${tracking_result.delivery_date}`"></small>
                                                <small x-show="tracking_result.delivery_days"
                                                    x-text="`· Transit in ${tracking_result.delivery_days} days`"></small>
                                            </h2>

                                        </div>
                                        <div
                                            :class="`courier-progress courier-progress-${tracking_result.latest_status.replace(/_/g, '')}`">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"></div>
                                            </div>
                                            <div class="progress-icon">
                                                <div>
                                                    <i
                                                        :class="`fas fa-${getIcon(tracking_result.latest_status, true)}`"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <template x-if="tracking_result.result.length">
                                        <div>
                                            <div class="card-body-title">
                                                Shipment progress
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="tracking-list">
                                                    <template x-for="checkpoint in checkpoints">
                                                        <div class="tracking-item">
                                                            <div
                                                                :class="`tracking-icon status-${checkpoint.status.replace(/_/g, '')}`">
                                                                <i :class="'fas fa-' + getIcon(checkpoint.status)"></i>
                                                            </div>

                                                            <template x-if="checkpoint.date">
                                                                <div class="tracking-date">
                                                                    <text x-text="checkpoint.date"></text>
                                                                    <span x-show="checkpoint.time"
                                                                        x-text="checkpoint.time"></span>
                                                                </div>
                                                            </template>

                                                            <template
                                                                x-if="!['sponsored', 'hide'].includes(checkpoint.status)">
                                                                <div class="tracking-content">
                                                                    <text x-text="checkpoint.content"></text>
                                                                    <span x-show="checkpoint.location"
                                                                        x-text="checkpoint.location"></span>
                                                                </div>
                                                            </template>

                                                            <template x-if="checkpoint.status == 'sponsored'">
                                                                <div class="tracking-content">
                                                                    <a :href="checkpoint.link">
                                                                        <text x-text="checkpoint.content"></text>
                                                                        <span x-show="checkpoint.location"
                                                                            x-text="checkpoint.location"></span>
                                                                    </a>
                                                                </div>
                                                            </template>

                                                            <template x-if="checkpoint.status == 'hide'">
                                                                <text x-text="checkpoint.content" role='button'
                                                                    @click="isHide = false"></text>
                                                            </template>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                    <template x-if="!tracking_result.result.length">
                                        <div class="card-body border-top d-flex flex-column align-items-center">
                                            <h5 class="text-center mt-5">
                                                <i class="fas fa-search me-2"></i>
                                                No result found
                                            </h5>
                                            <div class="no-result-reason mt-3 mb-5">
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-times"></i>
                                                    <p>
                                                        Incorrect tracking number or courier company
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-moon"></i>
                                                    <p>
                                                        If today sent the parcel just try in the evening or tomorrow
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <i class="fas fa-store-alt"></i>
                                                    <p>
                                                        Check with the shipper to confirm that tracking number
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div x-cloak :class="[isLoading ? 'col d-none d-lg-block' : 'col']">
                    <div class="card mb-4 d-none d-lg-block">
                        <div class="card-body">
                            <form x-data="trackingFormSetup('')" @submit.prevent="track">
                                <div class="form-floating mb-3">
                                    <input type="text" x-model="tracking_number" class="form-control text-uppercase"
                                        id="formTrackingInputSidebar" placeholder="Tracking number"
                                        @input.debounce.500ms="detectCourier" required>
                                    <label for="formTrackingInputSidebar">Tracking number</label>
                                </div>
                                <div class="form-floating mb-3" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <input type="text" x-model="courier_search" class="form-control"
                                        id="formCourierInputSidebar" placeholder="Auto detected"
                                        @click="courier_search = ''; courier=null" required>
                                    <label for="formCourierInputSidebar">Courier</label>
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
                    {{-- <div class="card mt-3 app-download">
                        <div class="card-body">
                            <div class="app-logo" @click="funnyAppLogo">
                                <img data-src="https://mytrackcdn.com/images/app-logo.png.webp" class="lazyload"
                                    width="80" height="80" alt="App Logo" />
                                <div x-show="appLogoCounter" x-text="appLogoCounter" class="counter"></div>
                            </div>
                            <h5 class="card-title mb-4">
                                Get real-time delivery updates with the free Tracking.my app
                            </h5>




                            <div class="row">
                                <div class="col-lg-6 app-store pt-lg-4">
                                    <a href="https://apps.apple.com/us/app/tracking-my-package-tracker/id1476021559"
                                        target="_blank">
                                        <img class="lazyload"
                                            data-src="https://mytrackcdn.com/images/mobile-app-ios.png.webp"
                                            width="144" height="43" alt="Download on the App Store" />
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=my.com.tracking.app&referrer=utm_source%3Dtracking.my"
                                        target="_blank">
                                        <img class="lazyload"
                                            data-src="https://mytrackcdn.com/images/mobile-app-google-play.png.webp"
                                            width="144" height="43" alt="Get it on Google Play" />
                                    </a>
                                    <a href="https://appgallery.cloud.huawei.com/ag/n/app/C104004275?channelId=web&detailType=0"
                                        target="_blank">
                                        <img class="lazyload"
                                            data-src="https://mytrackcdn.com/images/mobile-app-huawei.png.webp"
                                            width="144" height="43" alt="Explode it on AppGallery" />
                                    </a>
                                </div>
                                <div class="col-lg-6 app-qrcode d-none d-lg-block">
                                    <h6>Scan to download</h6>
                                    <img class="lazyload"
                                        data-src="https://mytrackcdn.com/images/qrcode-download.png.webp" width="180"
                                        height="180" alt="QRCode for download app" />
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function setupTracking() {
            return {
                appLogoCounter: 1,
                tracking_number: "DWFEFWAEF",
                courier: {
                    name: "Dpe Express",
                    handle: "dpe",
                    unavailable: "",
                    is_unavailable: false,
                },
                isLoading: true,
                tracking_result: null,
                isHide: true,

                init() {
                    setInterval(() => {
                        if (this.appLogoCounter < 99) {
                            this.appLogoCounter++
                        }
                    }, 10000)

                    if (this.courier.is_unavailable) {
                        return
                    }

                    var socket = new WebSocket(
                        "wss://www.tracking.my/websocket",
                    )

                    socket.onopen = function() {
                        socket.send(
                            "{&quot;action&quot;:&quot;tracking&quot;,&quot;courier&quot;:&quot;dpe&quot;,&quot;tracking_number&quot;:&quot;DWFEFWAEF&quot;,&quot;timestamp&quot;:1765458043,&quot;verify&quot;:&quot;392a37e268b594e75a122f631d6ca6d3&quot;}"
                        )
                    }

                    socket.onmessage = (event) => {
                        this.tracking_result = JSON.parse(event.data)
                        if (this.tracking_result.result?.length > 2) {

                            var sponsoredList = [{
                                    status: 'sponsored',
                                    link: '/send-parcel?utm_source=tracking.my&utm_medium=text&utm_campaign=TKR001',
                                    content: 'Send your parcel from as low as RM 5.00 up to 5kg',
                                    location: 'Choose from our trusted partners to deliver your packages safely',
                                },
                                {
                                    status: 'sponsored',
                                    link: '/careers',
                                    content: 'Full time / Internship Web Developer',
                                    location: 'Grow your career with Tracking.my',
                                },
                                // {
                                // 	status: 'sponsored',
                                // 	link: '/careers',
                                // 	content: 'Full time / Internship Sales & Marketing Executive',
                                // 	location: 'Grow your career with Tracking.my',
                                // },
                            ]

                            this.tracking_result.result.splice(1, 0, sponsoredList[Math.floor(Math.random() *
                                sponsoredList.length)])

                        }
                        this.isLoading = false
                        socket.close()
                        gtag('event', 'tracking', {
                            courier: "dpe",
                        })
                    }
                },
                checkpoints() {
                    if (!this.isHide || this.tracking_result.result.length <= 5) return this.tracking_result.result

                    return [
                        ...this.tracking_result.result.slice(0, 3),
                        {
                            status: 'hide',
                            content: `Show all updates (${this.tracking_result.result.length - 5})`,
                        },
                        ...this.tracking_result.result.slice(-1),
                    ]
                },
                getStatusTitle: function(status) {
                    let track = {
                        delivered: "Delivered",
                        outfordelivery: "Out for delivery",
                        deliveryoffice: "Delivery office",
                        availableforpickup: "Available for pickup",
                        attemptfail: "Attempt fail",
                        exception: "Exception",
                        intransit: "In transit",
                        inforeceived: "Info received",
                        pending: "Pending",
                    }
                    var s = status.replace(/_/g, '')
                    return track[s]
                },
                getIcon: function(status, isProgressBar = false) {
                    if (status == 'hide') return 'circle'

                    let faicon = {
                        sponsored: 'heart',
                        delivered: 'check',
                        outfordelivery: 'shipping-fast',
                        deliveryoffice: 'warehouse',
                        availableforpickup: 'box-open',
                        attemptfail: 'bolt',
                        exception: 'exclamation',
                        intransit: 'truck',
                        inforeceived: 'clipboard-list',
                        pending: 'clock',
                    }

                    let key = status.replace(/_/g, '')
                    if (key == 'intransit' && !isProgressBar) return 'circle'
                    return faicon[key]
                },
                copyLink: function() {
                    this.$clipboard(`${location.origin}/${this.courier.handle}/${this.tracking_number}`)
                    this.$store.notifications.notify(
                        "Link copied",
                    )
                },
                copyResult: function() {
                    var copy_result =
                        "Tracking Number" +
                        ': ' +
                        this.tracking_number +
                        "\nCourier Company" +
                        ': ' +
                        this.courier.name +
                        '\n==================================\n'

                    if (this.tracking_result) {
                        for (var value of this.tracking_result.result) {
                            if (value.status == 'sponsored') continue
                            let time = value.time ? ' ' + value.time : ''
                            let location = value.location ? ' (' + value.location + ')' : ''
                            copy_result += `${value.date}${time} - ${value.content}${location}\n`
                        }
                    }

                    copy_result +=
                        '==================================\nPowered by https://www.tracking.my'

                    this.$clipboard(copy_result)
                    this.$store.notifications.notify(
                        "Result copied",
                    )
                },
                share: function(social) {
                    var link = `${location.origin}/${this.courier.handle}/${this.tracking_number}`
                    var content =
                        `Check the  ${this.tracking_number} (${this.courier.name})  package status here`
                    switch (social) {
                        case 'whatsapp':
                            window.open(
                                'https://api.whatsapp.com/send?phone&text=' +
                                encodeURI(content + ': ' + link),
                            )
                            break
                        case 'telegram':
                            window.open(`https://t.me/share/url?url=${encodeURI(link)}&text=${encodeURI(content)}`)
                            break
                        case 'messenger':
                            window.open(
                                `http://www.facebook.com/dialog/send?app_id=586674418196797&link=${encodeURI(link)}&redirect_uri=https://www.tracking.my/`,
                            )
                            break
                        case 'line':
                            window.open(
                                `https://line.me/R/msg/text/?${encodeURI(content + ': ' + link)}`,
                            )
                            break
                    }
                },
                funnyAppLogo: function() {
                    if (!this.appLogoCounter) {
                        this.$store.notifications.notify(
                            "There are no more notifications!",
                        )
                        return
                    }
                    this.$store.notifications.notify(
                        'Oops! ' +
                        this.appLogoCounter +
                        " notifications readed!",
                    )
                    this.appLogoCounter = 0
                },
                whatsapp: function() {
                    this.$store.notifications.notify(
                        "Sent, please check your Whatsapp.",
                    )
                },
            }
        }
    </script>
    </div>
@endsection
