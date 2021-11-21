<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\OrderShipped;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        Mail::to('tahir-asadov@outlook.com')->send(new OrderShipped([]));
        return view('public.home', [
            'posts' => Post::latest()->with('galleries', 'region', 'user')->paginate(12)
        ]);
    }

    public function login()
    {
        return view('public.login');
    }

    public function loginuser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if(Auth::validate($credentials)){
            $user = Auth::getProvider()->retrieveByCredentials($credentials);
            Auth::login($user);
            return redirect('/');
        }else {
            return back()->withErrors(['login' => 'Wrong credentials']);
        }
    }

    public function register()
    {
        return view('public.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function post($slug, Post $post)
    {
        return view('public.post', [
            'post' => $post
        ]);
    }
}
