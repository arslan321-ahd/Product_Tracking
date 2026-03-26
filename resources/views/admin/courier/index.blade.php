@extends('admin.partials.layouts')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (session('alert_type'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: '{{ session('alert_type') }}',
                    title: '{{ session('alert_title') ?? 'Success' }}',
                    text: "{{ session('alert_message') }}",
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        </script>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Courier Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Courier</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Couriers Details</h4>
                        <a href="{{ route('companies.create') }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-plus-circle me-1"></i> Add New Courier
                        </a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="couriersTable">
                                <thead class="table-light">
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Company Name</th>
                                        <th>Logo</th>
                                        <th>Website</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Description</th>
                                        <th width="10%">Action</th>
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

                        <!-- New Description Field -->
                        <div class="mb-3">
                            <label for="edit_company_description" class="form-label">Company Description</label>
                            <textarea class="form-control" id="edit_company_description" name="company_description" rows="3"></textarea>
                            <div class="invalid-feedback" id="edit_company_description_error"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_company_logo" class="form-label">Company Logo</label>
                                    <input type="file" class="form-control" id="edit_company_logo"
                                        name="company_logo" accept="image/*">
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script>
        $(function() {
            var table = $('#couriersTable').DataTable({
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
                        name: 'website_link',
                    },
                    {
                        data: 'email',
                        name: 'email',
                        render: function(data) {
                            return '<a href="mailto:' + data + '">' + data + '</a>';
                        }
                    },
                    {
                        data: 'contact_number',
                        name: 'contact_number'
                    },
                    {
                        data: 'company_description',
                        name: 'company_description',
                        render: function(data) {
                            if (!data) return '<span class="text-muted">—</span>';
                            return '<span class="text-truncate d-inline-block" style="max-width: 200px;" title="' +
                                data + '">' + data + '</span>';
                        }
                    },
                    {
                        data: 'id',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return `
                                <div class="btn-group btn-group-sm">
                                    <a href="javascript:void(0)" 
                                       class="btn btn-outline-primary editCourier" 
                                       data-id="${row.id}" 
                                       title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" 
                                       class="btn btn-outline-danger deleteCourier" 
                                       data-id="${row.id}" 
                                       title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            `;
                        }
                    }
                ],
                order: [
                    [1, 'asc']
                ]
            });
        });
    </script>

    <script>
        // Edit Courier - Load Data into Modal
        $(document).on('click', '.editCourier', function() {
            let id = $(this).data('id');
            let url = "{{ route('courier.edit', ':id') }}".replace(':id', id);

            // Reset form & errors
            $('#editCourierForm')[0].reset();
            $('.invalid-feedback').text('');
            $('.form-control, textarea').removeClass('is-invalid');
            $('#current_logo_preview').html('<span class="text-muted">Loading...</span>');

            $.get(url, function(response) {
                $('#edit_courier_id').val(response.id);
                $('#edit_company_name').val(response.company_name);
                $('#edit_email').val(response.email);
                $('#edit_contact_number').val(response.contact_number);
                $('#edit_website_link').val(response.website_link);
                $('#edit_company_description').val(response.company_description || ''); // New field

                if (response.company_logo) {
                    $('#current_logo_preview').html(
                        `<img src="${response.company_logo}" class="img-fluid rounded border" width="100" height="100" style="object-fit: cover;">`
                    );
                } else {
                    $('#current_logo_preview').html('<span class="text-muted">No logo</span>');
                }

                $('#editCourierModal').modal('show');
            }).fail(function(xhr) {
                console.error(xhr);
                Swal.fire('Error', 'Failed to load courier data', 'error');
            });
        });
    </script>

    <script>
        // Update Courier - Form Submit
        $('#editCourierForm').on('submit', function(e) {
            e.preventDefault();

            let id = $('#edit_courier_id').val();
            let url = "{{ route('courier.update', ':id') }}".replace(':id', id);
            let formData = new FormData(this);

            $('#updateCourierBtn').prop('disabled', true).html(
                '<span class="spinner-border spinner-border-sm me-1"></span> Updating...');

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
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message || 'Courier updated successfully!',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    $('#editCourierModal').modal('hide');
                    $('#couriersTable').DataTable().ajax.reload(null, false);
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON?.errors;

                    $('.invalid-feedback').text('');
                    $('.form-control, textarea').removeClass('is-invalid');

                    if (errors) {
                        $.each(errors, function(key, value) {
                            let fieldId = '#edit_' + key;
                            let errorId = '#edit_' + key + '_error';

                            $(fieldId).addClass('is-invalid');
                            $(errorId).text(value[0]);
                        });
                    } else {
                        Swal.fire('Error', 'Something went wrong. Please try again.', 'error');
                    }
                },
                complete: function() {
                    $('#updateCourierBtn').prop('disabled', false).text('Update Courier');
                }
            });
        });
    </script>

    <script>
        // Delete Courier
        $(document).on('click', '.deleteCourier', function(e) {
            e.preventDefault();

            let id = $(this).data('id');
            let deleteUrl = "{{ route('courier.destroy', ':id') }}".replace(':id', id);
            let row = $(this).closest('tr');

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
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: response.message ||
                                        'Courier deleted successfully!',
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                                $('#couriersTable').DataTable().ajax.reload(null, false);
                            } else {
                                Swal.fire('Error!', response.message ||
                                    'Failed to delete courier.', 'error');
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                            Swal.fire('Error!', 'Something went wrong. Please try again.',
                                'error');
                        }
                    });
                }
            });
        });
    </script>
@endsection
