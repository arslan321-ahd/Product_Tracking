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
                {{-- Password Update Section --}}
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="card-title">Update Password</h4>
                    </div>

                    <div class="card-body">

                        @if (session('status') === 'password-updated')
                            <div class="alert alert-success">
                                Password updated successfully.
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                {{-- Current Password --}}
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" name="current_password" class="form-control">

                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- New Password --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" name="password" class="form-control">

                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Confirm Password --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>

                            </div>

                            <button class="btn btn-primary">
                                Update Password
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
