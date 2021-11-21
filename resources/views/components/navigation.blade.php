    <!-- Navigation -->
    <section class="navigation_section">
        <div class="row">
            <div class="container">
                <div class="left">
                    <a href="/" class="logo"></a>
                </div><!-- .left -->
                <div class="right">
                    <ul>
                        @auth
                        <li>{{auth()->user()->name}}</li>
                        <li><a href="{{route('public.register')}}">Upload</a></li>
                        <li>
                            <a href="#" class="submit_form" target="logout_form">Logout</a>
                            <form id="logout_form" hidden action="{{route('public.logout')}}" method="post">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li><a href="{{route('public.login')}}">Login</a></li>
                        <li><a href="{{route('public.register')}}">Register</a></li>
                        @endauth
                    </ul>
                </div><!-- .right -->
            </div><!-- .container -->
        </div><!-- .row -->
    </section><!-- .navigation_section -->