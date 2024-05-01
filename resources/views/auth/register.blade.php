

<style>
    /* Card styling */
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        overflow: hidden;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        position: relative;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .decoration-lines {
        width: 50px;
        height: auto;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
    }

    .decoration-lines.flipped {
        left: auto;
        right: 0;
        transform: translateY(-50%) rotate(180deg);
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none;
        margin-bottom: 20px;
    }

    .list-unstyled li {
        margin-bottom: 10px;
    }

    .price {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .price span {
        font-size: 16px;
    }

    .btn-solid-reg {
        display: block;
        width: 100%;
        max-width: 200px;
        margin: 0 auto;
        text-align: center;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-solid-reg:hover {
        background-color: #0056b3;
    }
</style>


@extends('layouts.app')
 <!-- Header -->
 <header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1 class="text-center">Register your restaurant</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->
@section('content')
<div class="container">

     
<div class="container">
    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <div class="text-box mt-5 mb-5">
                <p class="mb-4">Fill out the form below to sign up for the service. Already signed up? Then just <a class="blue" href="/login">{{__('topnav.login')}}</a></p>

                <!-- Sign Up Form -->
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Restaurant information</h6>
                    <div class="row mb-3">
                        <label for="restaurant_name" class="col-md-4 col-form-label text-md-end">{{ __('Restaurant Name') }}</label>

                        <div class="col-md-6">
                            <input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus>

                            @error('restaurant_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="desc" class="col-md-4 col-form-label text-md-end">Restaurant Description </label>

                        <div class="col-md-6">
                            <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}"  autocomplete="desc" autofocus required>

                            @error('desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="location" class="col-md-4 col-form-label text-md-end">Restaurant Location </label>

                        <div class="col-md-6">
                            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}"  autocomplete="location" autofocus required>

                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="logo" class="col-md-4 col-form-label text-md-end">Restaurant Logo </label>

                        <div class="col-md-6">
                            <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}"  autocomplete="logo" autofocus required>

                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">
                    <h6 class="heading-small text-muted mb-4">Owner information</h6>

                    <div class="row mb-3">
                        <label for="owner_name" class="col-md-4 col-form-label text-md-end">{{ __('Owner Name') }}</label>

                        <div class="col-md-6">
                            <input id="owner_name" type="text" class="form-control @error('owner_name') is-invalid @enderror" name="owner_name" value="{{ old('owner_name') }}" required autocomplete="owner_name" autofocus>

                            @error('owner_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="owner_phone" class="col-md-4 col-form-label text-md-end">{{ __('Owner Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="owner_phone" type="number" class="form-control @error('owner_phone') is-invalid @enderror" name="owner_phone" value="{{ old('owner_phone') }}" required autocomplete="owner_phone" autofocus>

                            @error('owner_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                   

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="form-control-submit-button">
                                {{__('topnav.register')}}
                            </button>
                        </div>
                    </div>
                </form>
                <!-- end of sign up form -->

            </div> <!-- end of text-box -->
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->



















@endsection