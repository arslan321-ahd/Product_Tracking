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
                            </li>
                            <li class="breadcrumb-item"><a href="#">Forms</a>
                            </li>
                            <li class="breadcrumb-item active">Validation</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div>
        </div>
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

                                <!-- Company Name -->
                                <div class="col-md-6 mb-2">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" name="company_name" value="{{ old('company_name') }}"
                                        class="form-control @error('company_name') is-invalid @enderror">

                                    @error('company_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Company Logo -->
                                <div class="col-md-6 mb-2">
                                    <label class="form-label">Company Logo</label>
                                    <input type="file" name="company_logo"
                                        class="form-control @error('company_logo') is-invalid @enderror">

                                    @error('company_logo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Website -->
                                <div class="col-md-6 mb-2">
                                    <label class="form-label">Website Link</label>
                                    <input type="url" name="website_link" value="{{ old('website_link') }}"
                                        class="form-control @error('website_link') is-invalid @enderror">

                                    @error('website_link')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-2">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror">

                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Contact Number -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Contact Number</label>
                                    <input type="text" name="contact_number" value="{{ old('contact_number') }}"
                                        class="form-control @error('contact_number') is-invalid @enderror">

                                    @error('contact_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
