<!DOCTYPE html>
<html lang="en">

<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:title" content="Investing in Development conference 2023" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:image" content="{{ asset('images/banner.png') }}" />
        <meta property="og:description"
            content="With support from USAID, Prosper Africa and Power Africa, Investing in Development conference convenes business leaders from various industries who are committed to accelerating Nigeria's development, with a particular focus on promoting private sector participation in infrastructure development.">
    </head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 col-lg-7 mb-4 mx-auto">
                <div class="card">
                    <img src="{{ asset('images/banner2.png') }}" class="card-img-top">

                    <div class="card-body">
                        <h4 class="card-title font-weigh-bold">Commercial Conference F'24</h4>
                        <p class="text-muted mb-4">
                            <i>Kindly revert on or before the 11th of June 2023</i>
                        </p>

                        @if (session()->has('message'))
                            <div class="alert alert-info">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="">Divition</label>
                                <select
                                    class="bg-gray-200 form-control {{ $errors->has('division') ? ' is-invalid' : '' }}"
                                    value="{{ old('division') }}" id="division" name="division">
                                    <option value="">Select Option</option>
                                    <option value="east">East</option>
                                    <option value="west">West</option>
                                    <option value="north">North</option>
                                    <option value="central">Central</option>
                                    <option value="lagos">Lagos</option>
                                    <option value="ips">IPS</option>
                                    <option value="hq">HQ</option>
                                </select>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="">First Name</label>
                                    <input type="text"
                                        class="bg-gray-200 form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }} input-sm"
                                        value="{{ old('firstname') }}" id="firstname" name="firstname" placeholder=" ">
                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="">Last Name</label>
                                    <input type="text"
                                        class="bg-gray-200 form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }} input-sm"
                                        value="{{ old('lastname') }}" id="lastname" name="lastname" placeholder=" ">
                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="">Email</label>
                                    <input type="email"
                                        class="bg-gray-200 form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-sm"
                                        value="{{ old('email') }}" id="email" name="email" placeholder="">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-4 d-none">
                                    <label for="">Confirm Email</label>
                                    <input type="email"
                                        class="bg-gray-200 form-control{{ $errors->has('email_confirmation') ? ' is-invalid' : '' }} input-sm"
                                        value="{{ old('email_confirmation') }}" id="email_confirmation"
                                        name="email_confirmation" placeholder="">
                                    @if ($errors->has('email_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong
                                                style="color:red">{{ $errors->first('email_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="">Location (State or City)</label>
                                <input type="text"
                                    class="bg-gray-200 form-control{{ $errors->has('location') ? ' is-invalid' : '' }} input-sm"
                                    value="{{ old('location') }}" id="location" name="location" placeholder="">
                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="mb-4">
                                <label for="" class="">Shirt Size</label>
                                <div class="d-flex mb-3 gap-3">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('shirt') ? ' is-invalid' : '' }}"
                                            type="radio" name="shirt" id="shirt-1" value="small">
                                        <label class="form-check-label">Small</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('shirt') ? ' is-invalid' : '' }}"
                                            type="radio" name="shirt" id="shirt-2" value="medium">
                                        <label class="form-check-label">Medium</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('shirt') ? ' is-invalid' : '' }}"
                                            type="radio" name="shirt" id="shirt-3" value="large">
                                        <label class="form-check-label">Large</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('shirt') ? ' is-invalid' : '' }}"
                                            type="radio" name="shirt" id="shirt-4" value="xlarge">
                                        <label class="form-check-label">XLarge</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('shirt') ? ' is-invalid' : '' }}"
                                            type="radio" name="shirt" id="shirt-5" value="xxlarge">
                                        <label class="form-check-label">XX Large</label>
                                    </div>
                                </div>

                                @if ($errors->has('shirt'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('shirt') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <hr>

                            <div class="mb-4">
                                <label for="" class="">Jersey Size</label>
                                <div class="d-flex mb-3 gap-3">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('jersey') ? ' is-invalid' : '' }}"
                                            type="radio" name="jersey" id="jersey-1" value="small">
                                        <label class="form-check-label">Small</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('jersey') ? ' is-invalid' : '' }}"
                                            type="radio" name="jersey" id="jersey-2" value="medium">
                                        <label class="form-check-label">Medium</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('jersey') ? ' is-invalid' : '' }}"
                                            type="radio" name="jersey" id="jersey-3" value="large">
                                        <label class="form-check-label">Large</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('jersey') ? ' is-invalid' : '' }}"
                                            type="radio" name="jersey" id="jerey-4" value="xlarge">
                                        <label class="form-check-label">XLarge</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('jersey') ? ' is-invalid' : '' }}"
                                            type="radio" name="jersey" id="jersey-5" value="xxlarge">
                                        <label class="form-check-label">XX Large</label>
                                    </div>
                                </div>

                                @if ($errors->has('jersey'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('jersey') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <hr>

                            <div class="mb-4">
                                <label for="" class="">Diet Preference</label>
                                <div class="d-flex mb-3 gap-3">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('diet') ? ' is-invalid' : '' }}"
                                            type="radio" name="diet" id="diet-1" value="vegan">
                                        <label class="form-check-label">Vegan</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('diet') ? ' is-invalid' : '' }}"
                                            type="radio" name="diet" id="diet-2" value="Dairy free OR Lactose free">
                                        <label class="form-check-label">Dairy free OR Lactose free</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('diet') ? ' is-invalid' : '' }}"
                                            type="radio" name="diet" id="diet-3" value="Gluten free and coeliac">
                                        <label class="form-check-label">Gluten free and coeliac</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('diet') ? ' is-invalid' : '' }}"
                                            type="radio" name="diet" id="diet-4" value="vegetarian">
                                        <label class="form-check-label">Vegetarian</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('diet') ? ' is-invalid' : '' }}"
                                            type="radio" name="diet" id="diet-5" value="paleo">
                                        <label class="form-check-label">Paleo</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('diet') ? ' is-invalid' : '' }}"
                                            type="radio" name="diet" id="diet-6" value="none">
                                        <label class="form-check-label">No preference</label>
                                    </div>
                                </div>

                                @if ($errors->has('diet'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('diet') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <hr>

                            <div class="mb-4">
                                <label for="" class="">Food Allegies</label>
                                <div class="d-flex mb-3 gap-3">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('allegy') ? ' is-invalid' : '' }}"
                                            type="radio" name="allegy" id="allegy-1" value="Tree nut and peanut allergies">
                                        <label class="form-check-label">Tree nut and peanut allergies</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('allegy') ? ' is-invalid' : '' }}"
                                            type="radio" name="allegy" id="allegy-2" value="Fish and shellfish allergies">
                                        <label class="form-check-label">Fish and shellfish allergies</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('allegy') ? ' is-invalid' : '' }}"
                                            type="radio" name="allegy" id="allegy-3" value="The ketogenic diet">
                                        <label class="form-check-label">The ketogenic diet</label>
                                    </div>

                                    <div class="form-check">
                                        <input
                                            class="form-check-input {{ $errors->has('allegy') ? ' is-invalid' : '' }}"
                                            type="radio" name="allegy" id="allegy-4" value="none">
                                        <label class="form-check-label">None (No allergies)</label>
                                    </div>
                                </div>

                                @if ($errors->has('allegy'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('allegy') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="text-end mt-3">
                                <button class="btn btn-danger px-5">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4 d-none">
                <div class="card">
                    <div class="card-body">
                        <strong>Disclaimer</strong>
                        <p class="card-text">
                            This Conference is made possible by the support of the American people through the United
                            States Agency for International Development (USAID). This event is the sole responsibility
                            of Chapel Hill Denham and does not necessarily reflect the views of USAID or the United
                            States Government.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
</body>

</html>
