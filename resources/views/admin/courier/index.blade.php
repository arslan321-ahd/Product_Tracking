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
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Couriers Details</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table" id="couriersTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Logo</th>
                                        <th>Website</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('#couriersTable').DataTable({
                processing: true,
                serverSide: true,
                deferRender: true,
                pageLength: 10,
                ajax: "{{ route('companies.data') }}",
                columns: [{
                        data: 'company_name',
                        name: 'company_name'
                    },
                    {
                        data: 'company_logo',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'website_link',
                        name: 'website_link'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'contact_number',
                        name: 'contact_number'
                    },
                ]
            });
        });
    </script>
@endsection
