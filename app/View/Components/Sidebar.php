<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $currentClassName = 'list-group-item-warning';
        $links = [
            'post' => [
                'title' => 'Posts',
                'route' => route('post.index'),
                'class' => (Request::is('post') || Request::is('post/*') ? $currentClassName: ''),
            ],
            'region' => [
                'title' => 'Regions',
                'route' => route('region.index'),
                'class' => (Request::is('region') || Request::is('region/*') ? $currentClassName: ''),
            ],
            'city' => [
                'title' => 'Cities',
                'route' => route('city.index'),
                'class' => (Request::is('city') || Request::is('city/*') ? $currentClassName: ''),
            ],
            'village' => [
                'title' => 'Villages',
                'route' => route('village.index'),
                'class' => (Request::is('village') || Request::is('village/*') ? $currentClassName: ''),
            ],
            'gallery' => [
                'title' => 'Galleries',
                'route' => route('gallery.index'),
                'class' => (Request::is('gallery') || Request::is('gallery/*') ? $currentClassName: ''),
            ],
            'user' => [
                'title' => 'Users',
                'route' => route('user.index'),
                'class' => (Request::is('user') || Request::is('user/*') ? $currentClassName: ''),
            ]
        ];
        
        return view('components.admin.sidebar', compact('links'));
    }
}
