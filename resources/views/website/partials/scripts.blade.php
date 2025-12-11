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
{{-- All-in-one Package Tracking --}}
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
<script src="{{ asset('website/assets/js/665742fd.js') }}"></script>
