<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Seller Ecommunity",
            'email' => "seller@example1.com",
            'password' => "password10",
            'image' => "user 1.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "EcoTrade",
            'email' => "seller@expample2.com",
            'password' => "password10",
            'image' => "user 2.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "BioMarket",
            'email' => "seller@example3.com",
            'password' => "password10",
            'image' => "user 3.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "GreenWave",
            'email' => "seller@exapmle4.com",
            'password' => "password10",
            'image' => "user 4.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "EcoConnect",
            'email' => "seller@example5.com",
            'password' => "password10",
            'image' => "user 5.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "BioBazar",
            'email' => "seller@example6.com",
            'password' => "password10",
            'image' => "user 6.png",
            'is_seller' => false,
        ]);






        $this->call([
           CategoriesSeeder::class,
           StoresSeeder::class,
        ]);

      /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
