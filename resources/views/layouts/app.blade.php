{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">



        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        {!! SEO::generate() !!}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('/styles/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/styles/main.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/styles/fontiran.css') }}" />

        <style>

            body{
                font-family: IRANSans !important;
            }
            p{
                font-size: 1rem;
            }
            i{
                font-family: fontAwsome;
                margin-top: 15px;
            }

            .row2{
            text-align: right !important;
            direction: rtl !important;
            }
            .row3{
            text-align: left !important;

            }
            /* .down-content{
            text-align: right !important;
            direction: rtl !important;
            } */

            .dir{
            direction: rtl !important;
            }
            .row-footer{
            flex-direction: row-reverse;
            text-align: right;
            }
            .ma-footer {
            margin-left: 40px!important;
            margin-right: 0px !important;
            }
            .footer-mar{
            margin-right: 0px !important;
            }
            .menu_rtl{
            direction: rtl;
            }
            .menu_rtl-li{
            margin-left: 30px !important;
            }
            .blog-sidebar .categories ul li a span {
        float: left; !important
    }
    section.about-tips .section-heading {
      padding-right: 0px !important;
  }

  .displays{
    display: flex;
flex-direction: row-reverse;
justify-content: space-between;
  }
  .down-content{
    text-align: right !important;
            direction: rtl !important;
}


        </style>
        @livewireStyles


    </head>
<livewire:publics.layouts.header />

        <div>

            {{ $slot ?? "" }}

        </div>

<livewire:publics.layouts.footer />
