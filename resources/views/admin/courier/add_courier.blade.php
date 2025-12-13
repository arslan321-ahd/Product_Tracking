@extends('admin.partials.layouts')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Validation</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Approx</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Forms</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Validation</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Company Information Form</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input class="form-control" type="text" name="company_name" id="company_name"
                                        placeholder="Enter company name">
                                    <small>Error Message</small>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="company_logo" class="form-label">Company Logo</label>
                                    <input class="form-control" type="file" name="company_logo" id="company_logo">
                                    <small>Error Message</small>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="website_link" class="form-label">Website Link</label>
                                    <input class="form-control" type="url" name="website_link" id="website_link"
                                        placeholder="https://example.com">
                                    <small>Error Message</small>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="company@email.com">
                                    <small>Error Message</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contact_number" class="form-label">Contact Number</label>
                                    <input class="form-control" type="tel" name="contact_number" id="contact_number"
                                        placeholder="+92 300 1234567">
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
