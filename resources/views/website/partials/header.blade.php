<header class="header p-2 px-md-4 bg-white border-bottom shadow-sm">
    <div class="container px-0 px-sm-3 d-flex flex-row flex-wrap justify-content-center align-items-center">
        <div class="h5 my-0 me-auto">
            <a href="/" aria-label="Homepage">
                <img src="https://mytrackcdn.com/images/logos/christmas-2.png.webp" width="159" height="45"
                    class="logo" alt="Tracking.my Logo">
            </a>
        </div>
        <a class="btn btn-primary me-2 d-none d-lg-block" href="/contact-us" aria-label="Contact Us">
            <i class="fas fa-phone-laptop pe-1"></i> Contact Us
        </a>


        <button class="btn btn-white d-static d-lg-none" type="button" id="dropdownMenuProduct"
            data-bs-toggle="dropdown" aria-expanded="false" aria-label="Products">
            <i class="fas fa-phone-laptop"></i>
        </button>
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
                <li><a class="dropdown-item" @click.prevent="changeLocate(i)" href="#" x-text="v"></a>
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
                    <div class="form-floating mb-3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            </div>
        </div>
    </div>
</div>
