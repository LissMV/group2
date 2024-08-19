<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Productos de limpieza',
            'Maquillaje y cuidado de piel',
            'Cuidado personal'
        ];

        Category::factory(count($categories))->sequence(fn ($sqn) => [ 'name' => $categories[$sqn->index]])->create();
    }
}
