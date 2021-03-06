<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Region;
use App\Models\Village;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index', [
            'posts' => Post::with('city')->with('region')->with('village')->with('user')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create', [
            'regions' => Region::latest()->get(),
            'cities' => City::latest()->get(),
            'villages' => Village::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'title' => 'required|min:1|max:255',
            'region' => 'required|numeric|min:1',
            'city' => 'required|numeric|min:1',
            'village' => 'required|numeric|min:1',
            'image.*' => 'required|mimes:jpg,bmp,png'
        ]);
        
        $post = Post::create([
            'title' => $data['title'],
            'region_id' => $data['region'],
            'city_id' => $data['city'],
            'village_id' => $data['village'],
            'user_id' => 1,
        ]);

        if($post){
            foreach ($request->file('image') as $key => $file) {
                $fileTitle = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = $file->store('public/galleries');
                Gallery::create([
                    'title'=> $fileTitle,
                    'path' => $filePath,
                    'post_id' => $post->id
                ]);
            }
    
        }
        return redirect()->route('post.index')->with('success', 'Post added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', [
            'regions' => Region::latest()->get(),
            'cities' => City::latest()->get(),
            'villages' => Village::latest()->get(),
            'post' => $post
        ]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $data = $request->validate([
            'title' => 'required|min:1|max:255',
            'region' => 'required|numeric|min:1',
            'city' => 'required|numeric|min:1',
            'village' => 'required|numeric|min:1',
            'image.*' => 'required|mimes:jpg,bmp,png'
        ]);
        
        $post->update([
            'title' => $data['title'],
            'region_id' => $data['region'],
            'city_id' => $data['city'],
            'village_id' => $data['village'],
            'user_id' => 1,
        ]);

        if($request->file('image')){
            foreach ($request->file('image') as $key => $file) {
                $fileTitle = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = $file->store('public/galleries');
                Gallery::create([
                    'title'=> $fileTitle,
                    'path' => $filePath,
                    'post_id' => $post->id
                ]);
            }
        }
        return redirect()->route('post.edit', ['post' => $post->id])->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
