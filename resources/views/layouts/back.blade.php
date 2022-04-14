<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bundles/dropzonejs/dropzone.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

        <!-- Custom style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/img/logo01.png') }}' />
        <link rel="stylesheet" href="{{ asset('assets/bundles/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-social/bootstrap-social.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">

        @yield('Page Vendors Styles')
    </head>
    <body>
        <div class="loader"></div>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                @include('includes.navbar')
                @include('includes.sidebar')
                <div class="main-content">
                    <section class="section">
                        @yield('content')
                    </section>
                </div>
                @include('includes.footer')
            </div>
        </div>

        @include('sweetalert::alert')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- General JS Scripts -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/show_password.js') }}"></script>

        <!-- JS Libraies -->
        {{-- <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script> --}}
        <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/bundles/dropzonejs/min/dropzone.min.js')}}"></script>

        <!-- Page Specific JS File -->
        <script src="{{ asset('assets/js/page/index.js') }}"></script>
        <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
        <script src="{{ asset('assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script> 
        <script src="{{ asset('assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script> 
        <script src="{{ asset('assets/bundles/datatables/export-tables/jszip.min.js') }}"></script> 
        <script src="{{ asset('assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script> 
        <script src="{{ asset('assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script> 
        <script src="{{ asset('assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/js/page/multiple-upload.js')}}"></script>
        <script src="{{ asset('assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ asset('assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>

        <!-- Template JS File -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>

        <!-- Custom JS File -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>

        @yield('Page Scripts')
    </body>
</html>