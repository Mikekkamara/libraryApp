<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet" >
    <title>DowntownLibrary</title>
</head>
<body>
    <div class="container-fluid   min-vh-100">
        <div class="text-center text-capitalize fw-bolder h-75 ">
            <p class="lead display-1" >welcome</p>
            <p class="display-2">find book location here!</p>
        </div>

        <div class="container text-center">
            <i class="far fa-hand-point-down fa-6x mb-4"></i> <br>
            <form action="{{ route('findBook') }}" class="needs-validation" novalidate id="formSub" method="POST">
            @csrf
                <input class="form-control text-center" list="datalistOptions" id="exampleDataList" placeholder="Enter Book Title" autofocus name="input">
                <datalist id="datalistOptions">

                </datalist>
                <input type="submit" value="Find" class="form-control w-50 mx-auto mt-5 fs-4 fw-bold border border-success validationCustom01">
            </form>
        </div>

        <button type="button" class="btn btn-sm btn-success mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Librarian?
        </button>
    </div>




        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row mb-3" >
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="w-30">
                                        <button type="submit" class="btn btn-outline-primary form-control mx-auto">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div> --}}
            </div>
        </div>
        </div>

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://kit.fontawesome.com/9967e25fdf.js" crossorigin="anonymous"></script>
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
</body>
</html>
