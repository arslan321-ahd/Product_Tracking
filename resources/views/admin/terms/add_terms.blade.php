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
                        <form method="POST" action="{{ route('terms.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Section Title</label>
                                    <input type="text" name="question" value="{{ old('question') }}"
                                        class="form-control @error('question') is-invalid @enderror"
                                        placeholder="e.g. 1. Definitions">
                                    @error('question')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Section Content</label>

                                    <!-- Quill editor container -->
                                    <div id="editor" style="height: 300px;">
                                        {!! old('answer') !!}
                                    </div>

                                    <input type="hidden" name="answer" id="answer">

                                    @error('answer')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">
                                Save Terms Section
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Method 1: Update on every change
            $('#editor').on('input', function() {
                $('#answer').val($(this).html());
            });

            // Method 2: Double-check before submit
            $('form').on('submit', function(e) {
                e.preventDefault();

                // Final capture
                const editorContent = $('#editor').html();
                $('#answer').val(editorContent);

                // Validate that we have content
                if (!editorContent || editorContent.trim() === '') {
                    alert('Please enter some content');
                    return false;
                }

                // Submit the form
                this.submit();
            });
        });
    </script>
@endsection
