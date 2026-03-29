@extends('admin.partials.layouts')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Approx</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <div class="row ">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Total Revenue</p>
                                        <h4 class="mt-1 mb-0 fw-medium">$8365.00</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-primary rounded mx-auto">
                                            <i class="iconoir-dollar-circle fs-22 align-self-center mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-6">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">New Order</p>
                                        <h4 class="mt-1 mb-0 fw-medium">722</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-info rounded mx-auto">
                                            <i class="iconoir-cart fs-22 align-self-center mb-0 text-info"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-6">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Sessions</p>
                                        <h4 class="mt-1 mb-0 fw-medium">181</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-warning rounded mx-auto">
                                            <i
                                                class="iconoir-percentage-circle fs-22 align-self-center mb-0 text-warning"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-6">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Avg. Order value</p>
                                        <h4 class="mt-1 mb-0 fw-medium">$1025.50</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-danger rounded mx-auto">
                                            <i class="iconoir-hexagon-dice fs-22 align-self-center mb-0 text-danger"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div><!--end col-->
                </div>
                <!--end row-->
            </div><!--end col-->

        </div><!--end row-->
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Transaction History</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icofont-calendar fs-5 me-1"></i> This Month<i
                                            class="las la-angle-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Transaction</th>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">AApprox</th>
                                        <th class="border-top-0">Status</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/logos/lang-logo/chatgpt.png" height="40"
                                                    class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Chat Gpt</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: A3652</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>20 july 2024</td>
                                        <td>$560</td>
                                        <td><span
                                                class="badge bg-success-subtle text-success fs-11 fw-medium px-2">Successful</span>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/logos/lang-logo/gitlab.png" height="40"
                                                    class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Gitlab</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: B5784</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>09 July 2024</td>
                                        <td>$2350</td>
                                        <td><span
                                                class="badge bg-warning-subtle text-warning fs-11 fw-medium px-2">Pending</span>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/logos/lang-logo/nextjs.png" height="40"
                                                    class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Nextjs</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: C9632</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>02 June 2024</td>
                                        <td>$2200</td>
                                        <td><span
                                                class="badge bg-success-subtle text-success fs-11 fw-medium px-2">Successful</span>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/logos/lang-logo/vue.png" height="40"
                                                    class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Vue</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: D8596</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>28 MAY 2024</td>
                                        <td>$1320</td>
                                        <td><span
                                                class="badge bg-danger-subtle text-danger fs-11 fw-medium px-2">Cancle</span>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/logos/lang-logo/symfony.png" height="40"
                                                    class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Symfony</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: E7778</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>15 May 2024</td>
                                        <td>$3650</td>
                                        <td><span
                                                class="badge bg-success-subtle text-success fs-11 fw-medium px-2">Successful</span>
                                        </td>
                                    </tr><!--end tr-->
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
        </div><!--end row-->
    </div><!-- container -->
@endsection
