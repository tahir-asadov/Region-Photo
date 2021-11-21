<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesheets.css">
    <title>@yield('title', 'Region Photo - Azerbaijan')</title>
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
</head>
<body class="@yield('body_class')">

    <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <x-navigation></x-navigation>

    @if (Request::is('/'))
    <x-search></x-search>
    @endif

    <!-- Content -->
    <section class="content_section">
        <div class="row">
            <div class="container">
                @yield('content')
            </div><!-- .container -->
        </div><!-- .row -->
    </section><!-- .content_section -->


    <script src="{{asset('js/public.js')}}"></script>
</body>
</html>