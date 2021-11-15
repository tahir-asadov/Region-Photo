<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create super admin role and its user
        Role::create(['name' => 'super-admin']);
        $user = \App\Models\User::factory()->state([
            'email' => 'super-admin@example.com',
        ])->create();
        $user->assignRole('super-admin');

        // Create regular user role and its user
        Role::create(['name' => 'regular-user']);
        $user = \App\Models\User::factory()->state([
            'email' => 'regular-user@example.com',
        ])->create();
        $user->assignRole('regular-user');


        $users = \App\Models\User::factory(2)->create();


        $regions = \App\Models\Region::factory(3)->create();
        $cities = \App\Models\City::factory(4)->create();
        $villages = \App\Models\Village::factory(5)->create();

        foreach ($users as $key => $user) {
            $user->assignRole('regular-user');
            foreach ($regions as $key => $region) {
                foreach ($cities as $key => $city) {
                    foreach ($villages as $key => $village) {
                        $posts = \App\Models\Post::factory(2)->state([
                            'region_id' => $region->id,
                            'city_id' => $city->id,
                            'village_id' => $village->id,
                            'user_id' => $user->id,
                        ])->create();

                        foreach ($posts as $key => $post) {
                            \App\Models\Gallery::factory(3)->state([
                                'post_id' => $post->id
                            ])->create();
                        }

                    }
                }
            }
        }

        
        

        // \App\Models\User::factory(10)->create();
    }
}
