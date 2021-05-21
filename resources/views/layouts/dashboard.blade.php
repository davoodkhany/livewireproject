<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/select2.css') }}">
    <link rel="stylesheet" href="/css/dropzone.css">
    <link rel="stylesheet" href="/css/uppy.min.css">
    <link rel="stylesheet" href="/css/jquery.steps.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="/css/app-dark.css" id="darkTheme" disabled>
    @yield('style')
    @livewireStyles
  </head>
  <body class="vertical light rtl ">
    <div class="wrapper">

    <livewire:admin.layouts.nav>

      <livewire:admin.layouts.aside />

            <main role="main" class="main-content">

                {{ $slot ?? "" }}
                 @yield('content')

            </main> <!-- main -->



@yield('script')
<livewire:admin.layouts.footer />


