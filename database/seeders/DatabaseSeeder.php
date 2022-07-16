<?php

namespace Database\Seeders;
use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        Listing::factory(7)->create();

        // Listing::create([
        //     'title' => 'LaraveL Senior Dev',
        //     'tags' => 'laravel, js',
        //     'company' => 'Acre Cop',
        //     'location' => 'Abuja, Naija',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'http://www.acme.com',
        //     'description' => 'Loremsnsyhsba'

        // ]);

        // Listing::create([
        //     'title' => 'LaraveL Junior Dev',
        //     'tags' => 'laravel, js',
        //     'company' => 'Acre Cop',
        //     'location' => 'Abuja, Naija',
        //     'email' => 'email3@gmail.com',
        //     'website' => 'http://www.acme.com',
        //     'description' => 'L.jdhsdsiwoioremsnsyhsba'

        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
