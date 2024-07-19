<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stores;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = [
            'The Green Emporium',
            'EcoWise Essentials',
            'Sustainable Solutions Store'
        ];

        Store::factory(count($stores))->sequence(fn ($sqn) => [ 'name' => $stores[$sqn->index]])->create();
    }
}
