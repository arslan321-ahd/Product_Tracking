@extends('website.partials.layouts')
@section('content')
<div x-data="setupTracking()" class="page-tracking my-sm-5">
    <div class="container g-0 g-sm-4">
        <div class="row g-0 g-sm-4">
            <div class="col-lg-8">
                <div class="card h-100">
                    <div class="card-header d-flex flex-row align-items-center">
                        {{-- Courier Logo --}}
                        <img src="{{ $courier->company_logo ? asset('storage/'.$courier->company_logo) : 'https://via.placeholder.com/128x64' }}" width="128" height="64" class="courier-logo" alt="{{ $courier->company_name }} logo" />
                        
                        <div class="me-auto ms-md-2">
                            <div class="d-flex flex-row align-items-center">
                                <h6 class="courier-name me-2">{{ $courier->company_name }}</h6>
                                @if($courier->website_link)
                                <div class="dropdown courier-contact">
                                    <a href="#" id="dropdownMenuContact" data-bs-toggle="dropdown" aria-expanded="false">
                                        Contact
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-icon" aria-labelledby="dropdownMenuContact">
                                        <li>
                                            <a class="dropdown-item" href="{{ $courier->website_link }}" target="_blank" rel="noopener noreferrer">
                                                <i class="far fa-browser fa-fw"></i> {{ $courier->website_link }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="tracking-result">
                        {{-- If tracking data exists --}}
                        <template x-if="!courier.is_unavailable && !isLoading && tracking_result && !tracking_result.error">
                            <div>
                                {{-- Existing tracking result display --}}
                                <div class="card-body">
                                    <div class="tracking-status mt-4">
                                        <h2 class="me-md-auto">
                                            <span x-text="getStatusTitle(tracking_result.latest_status)"></span>
                                            <small x-show="tracking_result.estimated_delivery_date" x-text="· Estimated delivery: ${tracking_result.estimated_delivery_date}"></small>
                                            <small x-show="tracking_result.delivery_date" x-text="· Delivery date: ${tracking_result.delivery_date}"></small>
                                            <small x-show="tracking_result.delivery_days" x-text="· Transit in ${tracking_result.delivery_days} days"></small>
                                        </h2>
                                    </div>
                                    {{-- Courier Progress, checkpoints etc. --}}
                                    <div :class="courier-progress courier-progress-${tracking_result.latest_status.replace(/_/g, '')}">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"></div>
                                        </div>
                                        <div class="progress-icon">
                                            <div>
                                                <i :class="'fas fa-' + getIcon(tracking_result.latest_status, true)"></i>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Shipment progress list --}}
                                    <template x-if="tracking_result.result.length">
                                        <div>
                                            <div class="card-body-title"> Shipment progress </div>
                                            <div class="card-body p-0">
                                                <div class="tracking-list">
                                                    <template x-for="checkpoint in checkpoints">
                                                        <div class="tracking-item">
                                                            <div :class="tracking-icon status-${checkpoint.status.replace(/_/g, '')}">
                                                                <i :class="'fas fa-' + getIcon(checkpoint.status)"></i>
                                                            </div>
                                                            <template x-if="checkpoint.date">
                                                                <div class="tracking-date">
                                                                    <text x-text="checkpoint.date"></text>
                                                                    <span x-show="checkpoint.time" x-text="checkpoint.time"></span>
                                                                </div>
                                                            </template>
                                                            <template x-if="!['sponsored', 'hide'].includes(checkpoint.status)">
                                                                <div class="tracking-content">
                                                                    <text x-text="checkpoint.content"></text>
                                                                    <span x-show="checkpoint.location" x-text="checkpoint.location"></span>
                                                                </div>
                                                            </template>
                                                            <template x-if="checkpoint.status == 'sponsored'">
                                                                <div class="tracking-content">
                                                                    <a :href="checkpoint.link">
                                                                        <text x-text="checkpoint.content"></text>
                                                                        <span x-show="checkpoint.location" x-text="checkpoint.location"></span>
                                                                    </a>
                                                                </div>
                                                            </template>
                                                            <template x-if="checkpoint.status == 'hide'">
                                                                <text x-text="checkpoint.content" role='button' @click="isHide = false"></text>
                                                            </template>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </template>

                                    {{-- If no tracking result --}}
                                    <template x-if="!tracking_result || tracking_result.result.length === 0 || tracking_result.error">
                                        <div class="card-body border-top d-flex flex-column align-items-center">
                                            <h5 class="text-center mt-3">
                                                <i class="far fa-info-circle me-2"></i> Tracking Not Available
                                            </h5>
                                            <div class="no-result-reason mt-3 mb-5 text-center">
                                                {{-- Show courier description --}}
                                                <p>{{ $courier->company_description ?? 'No description available for this courier.' }}</p>
                                                @if($courier->website_link)
                                                <p>
                                                    <a href="{{ $courier->website_link }}" target="_blank" class="btn btn-primary btn-sm">
                                                        Visit Official Website
                                                    </a>
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </template>
                    </div>

                    {{-- Keep Copy / Link / Share buttons intact --}}
                    {{-- Your template already contains all those buttons, nothing removed --}}
                </div>
            </div>

            {{-- Sidebar Form --}}
            <div x-cloak :class="[isLoading ? 'col d-none d-lg-block' : 'col']">
                <div class="card mb-4 d-none d-lg-block">
                    <div class="card-body">
                        <form x-data="trackingFormSetup('')" @submit.prevent="track">
                            <div class="form-floating mb-3">
                                <input type="text" x-model="tracking_number" class="form-control text-uppercase" placeholder="Tracking number" @input.debounce.500ms="detectCourier" required>
                                <label>Tracking number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" x-model="courier_search" class="form-control" placeholder="Auto detected" @click="courier_search = ''; courier=null" required>
                                <label>Courier</label>
                            </div>
                            <div class="d-grid gap-2 d-md-block">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search pe-1"></i> Track</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
function setupTracking() {
    return {
        appLogoCounter: 1,
        tracking_number: "DWFEFWAEF",
        courier: {
            name: "{{ $courier->company_name }}",
            handle: "{{ $courier->slug }}",
            unavailable: "",
            is_unavailable: false
        },
        isLoading: true,
        tracking_result: null,
        isHide: true,
        init() {
            this.isLoading = false;
        },
        getStatusTitle(status) {
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
            };
            var s = status.replace(/_/g, '');
            return track[s] || 'Unknown';
        },
        getIcon(status, isProgressBar = false) {
            if (status == 'hide') return 'circle';
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
            };
            let key = status.replace(/_/g, '');
            if (key == 'intransit' && !isProgressBar) return 'circle';
            return faicon[key];
        },
        copyLink() {
            this.$clipboard(`${location.origin}/${this.courier.handle}/${this.tracking_number}`);
            this.$store.notifications.notify("Link copied");
        },
        copyResult() {
            var copy_result = "Tracking Number" + ': ' + this.tracking_number + "\nCourier Company" + ': ' + this.courier.name + '\n==================================\n';
            if (this.tracking_result) {
                for (var value of this.tracking_result.result) {
                    if (value.status == 'sponsored') continue;
                    let time = value.time ? ' ' + value.time : '';
                    let location = value.location ? ' (' + value.location + ')' : '';
                    copy_result += `${value.date}${time} - ${value.content}${location}\n`;
                }
            }
            copy_result += '==================================\nPowered by https://www.tracking.my';
            this.$clipboard(copy_result);
            this.$store.notifications.notify("Result copied");
        },
        share(social) {
            var link = `${location.origin}/${this.courier.handle}/${this.tracking_number}`;
            var content = `Check the ${this.tracking_number} (${this.courier.name}) package status here`;
            switch (social) {
                case 'whatsapp': window.open('https://api.whatsapp.com/send?phone&text=' + encodeURI(content + ': ' + link)); break;
                case 'telegram': window.open(`https://t.me/share/url?url=${encodeURI(link)}&text=${encodeURI(content)}`); break;
                case 'messenger': window.open(`http://www.facebook.com/dialog/send?app_id=586674418196797&link=${encodeURI(link)}&redirect_uri=https://www.tracking.my/`); break;
                case 'line': window.open(`https://line.me/R/msg/text/?${encodeURI(content + ': ' + link)}`); break;
            }
        }
    }
}
</script>
@endsection