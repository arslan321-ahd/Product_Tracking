@extends('website.partials.layouts')

@section('content')
    <!-- AlpineJS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .dropdown-courier {
            width: 100%;
            max-height: 250px;
            overflow-y: auto;
        }
    </style>

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

                <div class="col" style="max-width:550px;">

                    <form method="GET" action="" onsubmit="this.action='/' + this.courier.value;">
                        <div class="form-floating mb-3">

                            <input type="text" x-model="tracking_number" class="form-control text-uppercase"
                                placeholder="Tracking number" required>

                            <label>Tracking number</label>

                        </div>
                        <div class="form-floating mb-3">

                            <select name="courier" class="form-select" required>

                                <option value="">Select Courier</option>

                                @foreach ($couriers as $courier)
                                    <option value="{{ $courier->slug }}">
                                        {{ $courier->company_name }}
                                    </option>
                                @endforeach

                            </select>

                            {{-- <label>Select Courier</label> --}}

                        </div>

                        <div class="d-grid">

                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search pe-1"></i> Track
                            </button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- MOBILE APP SECTION --}}

    <section class="bg-white py-5">

        <div class="container">

            <div class="row">

                <div class="col-md-7 col-lg-6 order-md-2 align-self-center text-center">

                    <h1 class="mb-3">Get Notified<br>For <span style="color:#f9a318">Every </span>Movement</h1>

                    <p class="mb-5">
                        Tracking platform for buyers and sellers. Track shipments and receive the latest tracking updates on
                        your phone.
                    </p>

                    <p class="download-icon mb-5">

                        <a href="#">
                            <img src="https://mytrackcdn.com/images/mobile-app-ios.png.webp" class="image-icon">
                        </a>

                        <a href="#">
                            <img src="https://mytrackcdn.com/images/mobile-app-google-play.png.webp" class="image-icon">
                        </a>

                    </p>

                </div>

                <div class="col-md-5 col-lg-6 align-self-center">

                    <img src="https://mytrackcdn.com/images/mobile_app.png.webp" class="img-fluid">

                </div>

            </div>

        </div>

    </section>



    {{-- SELLER PLATFORM SECTION --}}

    <section class="bg-grey py-4 py-md-2">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-7">

                    <h1 class="mb-4">
                        Make Post-Purchase the <span style="color:#f9a318">Best Part</span> of the Customer Experience
                    </h1>

                    <p class="mb-4">
                        Delight your customers with automated tracking and increase brand loyalty.
                    </p>

                    <a href="/seller-platform" class="btn btn-lg btn-outline-dark">Learn More</a>

                </div>

                <div class="col-md-5">

                    <img src="https://mytrackcdn.com/images/seller-platform/seller_1.png.webp" class="img-fluid">

                </div>

            </div>

        </div>

    </section>



    {{-- TOP COURIERS SECTION --}}

    <div id="section-top-courier">

        <div class="container py-5">

            <h4 class="text-center">TOP E-COMMERCE COURIERS</h4>

            <h6 class="text-center">
                High-quality carriers help improve shipment tracking experience.
            </h6>

            <div class="row mt-5 mb-2">

                @foreach ($couriers->take(8) as $courier)
                    <div class="col-6 col-md-4 col-lg-3">

                        <a class="courier-item" href="/{{ $courier->slug }}">

                            <img src="{{ asset('storage/' . $courier->company_logo) }}"
                                alt="{{ $courier->company_name }} Logo">

                            <span>{{ $courier->company_name }}</span>

                        </a>

                    </div>
                @endforeach

            </div>

            <p class="text-center m-0">
                <a href="/couriers">View All Supported Couriers</a>
            </p>

        </div>

    </div>



    {{-- STATISTICS SECTION --}}

    <div id="section-statictis">

        <div class="container py-5">

            <div class="row">

                <div class="col-lg-8">

                    <h4 class="title pt-4">Leading courier information service provider</h4>

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

                <div class="col-lg-4">

                    <img src="https://mytrackcdn.com/images/section-statictis-malaysia.png.webp" class="img-fluid">

                </div>

            </div>

        </div>



        {{-- ALL COURIERS LIST --}}

        <div class="container courier-list">

            <div class="d-md-flex align-items-center mb-3">
                <h4 class="mb-3 mb-md-0">Select a courier</h4>
            </div>

            <div class="row">

                @foreach ($couriers as $courier)
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">

                        <a class="courier-item" href="/{{ $courier->slug }}">

                            <img src="{{ asset('storage/' . $courier->company_logo) }}"
                                alt="{{ $courier->company_name }} Logo" width="400" height="200">

                            <span>{{ $courier->company_name }}</span>

                        </a>

                    </div>
                @endforeach

            </div>

        </div>

    </div>



    <script>
        function trackingFormSetup() {

            return {

                courier: null,
                courier_search: '',
                isEmpty: false,

                couriers: @json(
                    $couriers->map(function ($c) {
                        return [
                            'label' => $c->company_name,
                            'value' => $c->slug,
                        ];
                    })),

                filteredCouriers() {

                    let couriers = this.couriers

                    if (this.courier_search) {

                        couriers = couriers.filter(c => {
                            return c.label.toLowerCase()
                                .includes(this.courier_search.toLowerCase())
                        })

                    }

                    this.isEmpty = couriers.length === 0

                    return couriers

                },

                selectCourier(courier) {

                    this.courier = courier.value
                    this.courier_search = courier.label

                },

                track() {

                    if (!this.courier) {

                        alert('Please select courier')
                        return

                    }

                    location.href = '/' + this.courier

                }

            }

        }
    </script>
@endsection
