<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Leave Management')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('path/to/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('path/to/custom.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}
    <!-- ... other CSS links ... -->

    <!-- Add Bootstrap and other styles here -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials._navbar')

        <!-- Sidebar -->
        @include('partials._sidebar')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('partials._footer')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

<script src="{{ asset('path/to/adminlte.js') }}"></script>
<script src="{{ asset('path/to/custom.js') }}"></script>
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>

</html>
