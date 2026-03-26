@extends('admin.partials.layouts')

@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-8 mx-auto">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile</h4>
                    </div>

                    <div class="card-body">

                        {{-- Success message --}}
                        @if (session('status') === 'profile-updated')
                            <div class="alert alert-success">
                                Profile updated successfully.
                            </div>
                        @endif

                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PATCH')

                            <div class="row">

                                {{-- Name --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', auth()->user()->name) }}" required>

                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', auth()->user()->email) }}" required>

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
