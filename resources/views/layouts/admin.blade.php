<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  @yield('head')
</head>
<body>
  
  <div class="container">
    <nav>
      <div class="container">
        <div class="row" style="height: 50px;">
          <div class="col-md-3 h-100 d-flex align-items-center">
            <a href="/dashboard">
              <i class="bi bi-speedometer2 me-1"></i>
              Dashboard
            </a>  
          </div><!-- .col-md-3 -->
          <div class="col-md-9 d-flex justify-content-end">
            <ul class="nav">
              <li class="nav-item">
                <a href="/user/{{auth()->user()->id}}/edit" class="d-inline-flex align-items-center h-100 nav-link">
                  <i class="bi bi-person-circle me-1"></i>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="logout_button d-inline-flex align-items-center h-100 nav-link">
                  <i class="bi bi-box-arrow-right me-1"></i>
                  Log out
                </a>
                <form hidden action="/logout" id="logout_form" method="post">
                  @csrf
                </form>
              </li>
            </ul>
          </div><!-- .col-md-9 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </nav>
    <main class="mt-3 mb-2">
      <div class="container">
        <div class="row">
          <div class="col">
            @if (session('success'))
            <div class="alert alert-success mb-2" role="alert">
              <i class="bi bi-check-circle-fill me-1"></i>{{ session('success') }}
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger mb-2" role="alert">
              <i class="bi bi-exclamation-diamond-fill me-1"></i>Error occured!
            </div>
            @endif  
          </div><!-- .col -->  
        </div><!-- .row -->
      </div><!-- .container -->
      <div class="container">
        <div class="row">
          <div class="col-md-3">
              <x-sidebar></x-sidebar>
          </div><!-- .col-md-3 -->  
          <div class="col-md-9">
            <div class="content py-2">
              @yield('content')
            </div><!-- .content py-2 -->
          </div><!-- .col-md-9 -->  
        </div><!-- .row -->
      </div><!-- .container -->
    </main>
  </div><!-- .container -->

  
  <script src="{{asset('js/app.js')}}"></script>
  @yield('foot')
</body>
</html>