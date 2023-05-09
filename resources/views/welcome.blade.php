<!DOCTYPE html>
<html lang="en">
<head>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="Investing in Development conference 2023" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="{{ asset('images/banner.png') }}" />
    <meta property="og:description" content="With support from USAID, Prosper Africa and Power Africa, Investing in Development conference convenes business leaders from various industries who are committed to accelerating Nigeria's development, with a particular focus on promoting private sector participation in infrastructure development.">

    <style>
        body {
            background-color:  #152238;
        }
    </style>
</head>
<body>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-8 mb-4">
            <div class="card shadown">
            <img src="{{ asset('images/banner.png') }}" class="card-img-top">

                <div class="card-body">
                    <h4 class="card-title d-none">Investing in Development conference 2023</h4>
                      <p class="text-muted mb-4">This conference convenes business leaders from various industries committed to accelerating Nigeria's development, focusing on promoting private sector participation in infrastructure development.</p>


                        @if (session()->has('message'))
                          <div class="alert alert-info">
                            {{session('message')}}
                          </div>
                        @endif

                      <form method="POST" action="{{route('register') }}">
                         @csrf

                            <div class="mb-4">
                                <label for="">Title</label>
                                <select class="bg-gray-200 form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" id="title" name="title">
                                    <option value="">Select Option</option>
                                    <option value="mr">Mr</option>
                                    <option value="mrs">Mrs</option>
                                    <option value="miss">Miss</option>
                                </select>

                                  @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('title') }}</strong>
                                    </span>
                                    <br/>
                                  @endif
                          </div>

                          <div class="row">
                              <div class="col-md-6 mb-4">
                                    <label for="">First Name</label>
                                    <input type="text" class="bg-gray-200 form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }} input-sm" value="{{ old('firstname') }}" id="firstname" name="firstname" placeholder=" ">
                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                              </div>

                               <div class="col-md-6 mb-4">
                                    <label for="">Last Name</label>
                                    <input type="text" class="bg-gray-200 form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }} input-sm" value="{{ old('lastname') }}" id="lastname" name="lastname" placeholder=" ">
                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $errors->first('lastname') }}</strong>
                                        </span>
                                  @endif
                              </div>
                          </div>




                          <div class="mb-4">
                            <label for="">Phone</label>
                              <input type="phone" class="bg-gray-200 form-control{{ $errors->has('phone') ? ' is-invalid' : '' }} input-sm" value="{{ old('phone') }}" id="phone" name="phone" placeholder="">
                              @if ($errors->has('phone'))
                              <span class="invalid-feedback" role="alert">
                                  <strong style="color:red">{{ $errors->first('phone') }}</strong>
                              </span>
                              <br/>
                              @endif
                          </div>

                          <div class="row">
                              <div class="col-md-6 mb-4">
                                <label for="">Email</label>
                                  <input type="email" class="bg-gray-200 form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-sm" value="{{ old('email') }}" id="email" name="email" placeholder="">
                                  @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong style="color:red">{{ $errors->first('email') }}</strong>
                                  </span>
                                  @endif
                              </div>
                              <div class="col-md-6 mb-4">
                                <label for="">Confirm Email</label>
                                  <input type="email" class="bg-gray-200 form-control{{ $errors->has('email_confirmation') ? ' is-invalid' : '' }} input-sm" value="{{ old('email_confirmation') }}" id="email_confirmation" name="email_confirmation" placeholder="">
                                  @if ($errors->has('email_confirmation'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong style="color:red">{{ $errors->first('email_confirmation') }}</strong>
                                  </span>
                                  @endif
                              </div>
                            </div>

                          <div class="mb-4">
                            <label for="">Company</label>
                              <input type="text" class="bg-gray-200 form-control{{ $errors->has('company') ? ' is-invalid' : '' }} input-sm" value="{{ old('company') }}" id="company" name="company" placeholder="">
                              @if ($errors->has('company'))
                              <span class="invalid-feedback" role="alert">
                                  <strong style="color:red">{{ $errors->first('company') }}</strong>
                              </span>
                              <br/>
                              @endif
                          </div>

                          <div class="mb-4">
                              <label for="">Designation</label>
                                <input type="text" class="bg-gray-200 form-control{{ $errors->has('designation') ? ' is-invalid' : '' }} input-sm" value="{{ old('designation') }}" id="designation" name="designation" placeholder="">
                                @if ($errors->has('designation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('designation') }}</strong>
                                </span>
                                <br/>
                                @endif
                          </div>

                        <div class="text-end">
                            <button class="btn btn-primary px-3">Register</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
            <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <strong>Disclaimer</strong>
                <p class="card-text">
                  This Conference is made possible by the support of the American people through the United States Agency for International Development (USAID). This event is the sole responsibility of Chapel Hill Denham and does not necessarily reflect the views of USAID or the United States Government.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>

</body>
</html>
