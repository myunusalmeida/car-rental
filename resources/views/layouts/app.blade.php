<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('components.header')
</head>

<body class="bg-soft-blue">

    <div class="container">
        <div class="row align-items-center justify-content-center py-5" style="min-height: 100vh">
            <div class="col-md-5">
                <div class="card border-0">
                    <div class="card-body p-5">
                        <a href="." class="logo justify-content-center mb-5">
                            <img src="assets/images/logo.png" alt="Logo">
                            <span>Car Rental</span>
                        </a>

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.script')
</body>

</html>
