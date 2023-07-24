<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javaScript',
        //     'company' => 'Itush Solutions',
        //     'location' => 'Nairobi, Ke',
        //     'email' => 'dev@itushdevelopers.com',
        //     'website' => 'itushdevelopers.com',
        //     'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make",
        // ]);


        // Listing::create([
        //     'title' => 'Laravel Juniour Developer',
        //     'tags' => 'laravel, javaScript',
        //     'company' => 'Itush Solutions',
        //     'location' => 'Nairobi, Ke',
        //     'email' => 'dev@itushdevelopers.com',
        //     'website' => 'itushdevelopers.com',
        //     'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make",
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}