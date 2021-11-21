@extends('layouts.credentials')

@section('body_class', 'credentials login')

@section('title', 'Region Photo - Login')

@section('content')

<div class="form_container">
  <div class="login_form">
    @error('login')
    <div class="error">
      {{$message}}
    </div><!-- .error -->
    @enderror('login')  
    <form action="{{route('public.loginuser')}}" method="post">
      @csrf
      <input type="email" name="email" value="{{old('email')}}" placeholder="Email"/>
      @error('email')
      <div class="error">
        {{$message}}
      </div><!-- .error -->
      @enderror
      <input type="password" name="password" placeholder="Password"/>
      @error('email')
      <div class="error">
        {{$message}}
      </div><!-- .error -->
      @enderror
      <label class="mt-10" for="remember">
        <input class="form-check-input" type="checkbox" name="remember" id="remember">
        Remember Me
      </label>
      <div class="flex-between flex-middle mt-10">
        <button type="submit">Login</button>
        <a class="forgot" href="//localhost:7000/password/reset">Forgot Your Password?</a>
      </div><!-- .flex-between flex-middle mt-10 -->
      
    </form>
  </div><!-- .login_form -->
</div><!-- .form_container -->
@endsection