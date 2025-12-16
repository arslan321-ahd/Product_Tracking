@extends('admin.partials.layouts')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (session('alert_type'))
        <script>
            Swal.fire({
                icon: "{{ session('alert_type') }}",
                title: "{{ session('alert_title') }}",
                text: "{{ session('alert_message') }}",
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonText: 'Fix Errors'
            });
        </script>
    @endif
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
                                        <th>ID</th>
                                        <th>Company Name</th>
                                        <th>Logo</th>
                                        <th>Website</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editCourierModal" tabindex="-1" aria-labelledby="editCourierModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCourierModalLabel">Edit Courier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editCourierForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <input type="hidden" id="edit_courier_id" name="id">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_company_name" class="form-label">Company Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="edit_company_name" name="company_name"
                                        required>
                                    <div class="invalid-feedback" id="edit_company_name_error"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="edit_email" name="email" required>
                                    <div class="invalid-feedback" id="edit_email_error"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_contact_number" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" id="edit_contact_number"
                                        name="contact_number">
                                    <div class="invalid-feedback" id="edit_contact_number_error"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_website_link" class="form-label">Website Link</label>
                                    <input type="url" class="form-control" id="edit_website_link" name="website_link">
                                    <div class="invalid-feedback" id="edit_website_link_error"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_company_logo" class="form-label">Company Logo</label>
                                    <input type="file" class="form-control" id="edit_company_logo" name="company_logo"
                                        accept="image/*">
                                    <div class="invalid-feedback" id="edit_company_logo_error"></div>
                                    <small class="text-muted">Leave empty to keep current logo</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Current Logo</label>
                                    <div id="current_logo_preview" class="mt-2">
                                        <!-- Current logo will be displayed here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="updateCourierBtn">Update Courier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script>
        $(function() {
            $('#couriersTable').DataTable({
                processing: true,
                serverSide: true,
                deferRender: true,
                pageLength: 10,
                ajax: "{{ route('companies.data') }}",
                columns: [{
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
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
                    {
                        data: 'id',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return `
        <a href="javascript:void(0)" 
           class="text-primary me-2 editCourier" 
           data-id="${row.id}" 
           title="Edit">
            <i class="iconoir-edit"></i>
        </a>

        <a href="javascript:void(0)" 
           class="text-danger deleteCourier" 
           data-id="${row.id}" 
           title="Delete">
            <i class="iconoir-trash"></i>
        </a>
    `;
                        }

                    }
                ]
            });
        });
    </script>
    @if (session('alert_type'))
        <script>
            Swal.fire({
                icon: "{{ session('alert_type') }}",
                title: "{{ session('alert_title') }}",
                text: "{{ session('alert_message') }}",
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <script>
        $(document).on('click', '.editCourier', function() {
            let id = $(this).data('id');
            let url = "{{ route('courier.edit', ':id') }}".replace(':id', id);

            // Reset form & errors
            $('#editCourierForm')[0].reset();
            $('.invalid-feedback').text('');
            $('.form-control').removeClass('is-invalid');

            $.get(url, function(response) {
                $('#edit_courier_id').val(response.id);
                $('#edit_company_name').val(response.company_name);
                $('#edit_email').val(response.email);
                $('#edit_contact_number').val(response.contact_number);
                $('#edit_website_link').val(response.website_link);

                if (response.company_logo) {
                    $('#current_logo_preview').html(
                        `<img src="${response.company_logo}" class="img-fluid rounded" width="120">`
                    );
                } else {
                    $('#current_logo_preview').html('<span class="text-muted">No logo</span>');
                }

                $('#editCourierModal').modal('show');
            }).fail(function() {
                Swal.fire('Error', 'Failed to load courier data', 'error');
            });
        });
    </script>
    <script>
        $('#editCourierForm').on('submit', function(e) {
            e.preventDefault();

            let id = $('#edit_courier_id').val();
            let url = "{{ route('courier.update', ':id') }}".replace(':id', id);
            let formData = new FormData(this);

            $('#updateCourierBtn').prop('disabled', true).text('Updating...');

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire('Updated!', 'Courier updated successfully', 'success');

                    $('#editCourierModal').modal('hide');
                    $('#couriersTable').DataTable().ajax.reload(null, false);
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;

                    $('.invalid-feedback').text('');
                    $('.form-control').removeClass('is-invalid');

                    $.each(errors, function(key, value) {
                        $('#edit_' + key).addClass('is-invalid');
                        $('#edit_' + key + '_error').text(value[0]);
                    });
                },
                complete: function() {
                    $('#updateCourierBtn').prop('disabled', false).text('Update Courier');
                }
            });
        });
    </script>

    <script>
        $(document).on('click', '.deleteCourier', function(e) {
            e.preventDefault(); // Prevent default anchor behavior

            let id = $(this).data('id');
            let deleteUrl = "{{ route('courier.destroy', ':id') }}".replace(':id', id);

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Make AJAX call
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Courier has been deleted.",
                                    icon: "success"
                                });

                                // Reload DataTable
                                $('#couriersTable').DataTable().ajax.reload(null, false);
                            } else {
                                Swal.fire('Error!', 'Failed to delete courier.', 'error');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            Swal.fire('Error!', 'Something went wrong.', 'error');
                        }
                    });
                }
            });
        });
    </script>
@endsection
