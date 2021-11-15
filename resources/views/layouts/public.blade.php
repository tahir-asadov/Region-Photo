<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesheets.css">
    <title>Region Photo - Azerbaijan</title>
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
</head>
<body>

    <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Navigation -->
    <section class="navigation_section">
        <div class="row">
            <div class="container">
                <div class="left">
                    <a href="/" class="logo"></a>
                </div><!-- .left -->
                <div class="right">
                    <ul>
                        <li><a href="#">Daxil ol</a></li>
                        <li><a href="#">Qeydiyyat</a></li>
                    </ul>
                </div><!-- .right -->
            </div><!-- .container -->
        </div><!-- .row -->
    </section><!-- .navigation_section -->

    <!-- Header -->
    <section class="header_section">
        <div class="row">
            <div class="container">
                <div>
                    <div class="search_form">
                        <form action="">
                            <input type="text" placeholder="Axtar">
                            <input type="submit" value="">
                        </form>
                    </div><!-- .search_form -->    
                    <div class="search_terms">
                        <a href="#">Bakı</a>
                        <a href="#">Quba</a>
                        <a href="#">Şəmkir</a>
                        <a href="#">Naxçıvan</a>
                        <a href="#">Lənkəran</a>
                        <a href="#">Masallı</a>
                        <a href="#">Şəki</a>
                    </div><!-- .search_terms -->
                </div>
            </div><!-- .container -->
        </div><!-- .row -->
    </section><!-- .header_section -->

    <!-- Content -->
    <section class="content_section">
        <div class="row">
            <div class="container">
                @yield('content')
            </div><!-- .container -->
        </div><!-- .row -->
    </section><!-- .content_section -->

    <!-- Footer -->
    <section class="footer_section">
        <div class="row">
            <div class="container">
                
            </div><!-- .container -->
        </div><!-- .row -->
    </section><!-- .footer_section -->

    <div class="mobile-menu-overlay"></div><!-- .mobile-menu-overlay -->
    <div class="mobile-menu">
        <div class="mobile-menu-content">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div><!-- .mobile-menu-content -->
    </div><!-- .mobile-menu -->

    {{-- <script src="js/public.js"></script> --}}

</body>
</html>