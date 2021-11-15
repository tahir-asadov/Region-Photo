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


        $image_source = $images[array_rand($images)];
        $new_filename = uniqid() . '.jpg';
        $new_filepath = $destination_path . '/' . $new_filename;
        copy($image_source, $new_filepath);

        $title = 'Demo image';
        $path = 'public/galleries/' . $new_filename;

        return [
            'title' => $title,
            'path' => $path,
        ];
        // foreach ($posts as $key => $post) {
        //     # code...
        // }

        // dd( $image_source );
        // dump($source_path);
        // dump($images[0]);
        // dump($destination_path);
        // dd( $images[0] );
        // $file = Storage::copy(resource_path('images/demo_images/36155480993_6dc152bc6b_o.resized.jpg'), 'app/public/galleries/.jpg' );
        // dd( $file );
        // foreach ($posts as $key => $post) {
        //     dump($post->id);
        // }
        // dd();
        // $path = Storage::putFile('photos', new File('/path/to/photo'));
        // $files = Storage::disk('public')->allFiles();
        // $file = new File($images[0]);
        // 
        // dd( $file_content );
        // dd( $file );
        // dd( $images );
        // dd( $file);
        // $path = Storage::putFile('photos', $file);
        // dd( $path );
        // dd(glob( $path_to_images ));

// $files = Storage::files(resource_path('images/demo_images'));
        // dd( $files );
    }
}
