<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">

    <head>
        <meta charset="utf-8" />
        <title>Login | Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet">
    </head>

    <body>

        <div class="container-xxl">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-4 mx-auto">

                                <div class="card">
                                    <div class="card-body pt-0">

                                        <!-- Session Status -->
                                        @if (session('status'))
                                            <div class="alert alert-success mt-3">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form class="my-4" method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group mb-3">
                                                <label class="form-label">Email</label>

                                                <input type="email" class="form-control" name="email"
                                                    value="{{ old('email') }}" placeholder="Enter email" required>

                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="form-label">Password</label>

                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Enter password" required>

                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>

                                            <div class="form-group row mt-3">
                                                <div class="col-sm-6">

                                                    <div class="form-check form-switch form-switch-success">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                            id="remember_me">

                                                        <label class="form-check-label">Remember me</label>

                                                    </div>

                                                </div>

                                                <div class="col-sm-6 text-end">
                                                    @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}"
                                                            class="text-muted font-13">
                                                            Forgot password?
                                                        </a>
                                                    @endif
                                                </div>

                                            </div>

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <div class="d-grid mt-3">

                                                        <button class="btn btn-primary" type="submit">
                                                            Log In <i class="fas fa-sign-in-alt ms-1"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </body>

</html>
