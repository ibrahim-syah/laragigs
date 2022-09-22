<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        //Listing::create([
            //'title' => 'Laravel Senior Developer',
            //'tags' => 'laravel, javascript',
            //'company' => 'Acme Corp',
            //'location' => 'Boston, MA',
            //'email' => 'email1@email.com',
            //'website' => 'https://www.acme.com',
            //'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non possimus sequi magni illo repellendus odio deserunt fugit soluta. Odit est laborum dolorum consectetur fuga iste numquam aperiam. Ex, obcaecati eum!'
        //]);

        //Listing::create([
            //'title' => 'Full-Stack Engineer',
            //'tags' => 'laravel, backend, api',
            //'company' => 'Stark Industries',
            //'location' => 'New York, NY',
            //'email' => 'email2@email.com',
            //'website' => 'https://www.starkindustries.com',
            //'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non possimus sequi magni illo repellendus odio deserunt fugit soluta. Odit est laborum dolorum consectetur fuga iste numquam aperiam. Ex, obcaecati eum!'
        //]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
