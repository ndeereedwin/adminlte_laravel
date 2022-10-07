<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Navbar -->
            <x-nav-bar></x-nav-bar>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <x-main-aside></x-main-aside>

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        {{ $header }}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{ $breadcrumb }}
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <x-alert />
                    <x-auth-validation-errors class="mb-3" :errors="$errors" />

                    <div class="container-fluid">
                        {{ $slot }}
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>

             <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <div class="p-3">
                    <h6>{{ $bar_header }}</h6>
                    <p>{{ $bar_content }}</p>
                </div>
            </aside>

            <!-- Main Footer -->
            <x-footer></x-footer>
        </div>
        <!-- ./wrapper -->

    </body>
</html>
