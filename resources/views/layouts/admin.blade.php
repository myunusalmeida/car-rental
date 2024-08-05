<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('components.header')
</head>

<body class="bg-soft-blue">
    <div class="container-fluid">
        <div class="row">
            @include('components.admin.sidebar')
            <div class="col-lg-10">
                <main class="py-5 px-3">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    @include('components.script')
</body>

</html>
