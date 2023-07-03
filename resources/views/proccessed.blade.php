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
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />

</head>
<body class="bg-dark">
    <div class="vh-100 d-flex align-items-center">
        <div class="col-md-4 mx-auto rounded shadown bg-white p-3">

            @if (session()->has('error'))
                <h4>Sorry! Registration was not successful</h4>
                <p>
                    With support from USAID, Prosper Africa and Power Africa, Investing in Development conference convenes business leaders from various industries who are committed to accelerating Nigeria's development, with a particular focus on promoting private sector participation in infrastructure development.
                </p>
            @endif

            @if (session()->has('success'))
                <h4>Congratulations!</h4>
                <p>
                    An automated email confirming your registration has been sent to the email address provided.
                </p>
            @endif

            <div class="text-center">
                <a href="/" class="btn btn-dark px-3 text-white">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
