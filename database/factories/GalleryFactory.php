<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $posts            = Post::all();

        $source_path      = resource_path('images/demo_images/*.jpg');
        $destination_path = storage_path('app/public/galleries');
        $images           = glob($source_path);

        // Create gallery folder in storage folder
        if(!is_dir($destination_path) && !is_file($destination_path)) {
            mkdir($destination_path);
        }

        $image_source = $images[array_rand($images)];
        $new_filename = uniqid() . '.jpg';
        $new_filepath = $destination_path . '/' . $new_filename;
        copy($image_source, $new_filepath);

        $title = 'Demo image';
        $path  = 'public/galleries/' . $new_filename;

        return [
            'title' => $title,
            'path' => $path,
        ];
        
    }
}
