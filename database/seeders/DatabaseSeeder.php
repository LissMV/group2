<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Rodolfo Gustavito",
            'email' => "seller@example.com",
            'password' => "password10",
            'image' => "img/users/user1.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "EcoTrade",
            'email' => "seller@expample2.com",
            'password' => "password10",
            'image' => "img/users/user2.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "BioMarket",
            'email' => "seller@example3.com",
            'password' => "password10",
            'image' => "img/users/user3.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "GreenWave",
            'email' => "seller@exapmle4.com",
            'password' => "password10",
            'image' => "img/usersuser4.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "EcoConnect",
            'email' => "seller@example5.com",
            'password' => "password10",
            'image' => "img/users/user5.png",
            'is_seller' => true,
        ]);

        User::factory()->create([
            'name' => "Juan Juancito",
            'email' => "user@example.com",
            'password' => "password10",
            'image' => "img/users/user6.png",
            'is_seller' => false,
        ]);

        User::factory()->create([
            'name' => "Ann Cristina",
            'email' => "user1@example.com",
            'password' => "password10",
            'image' => "img/users/user_1.png",
            'is_seller' => false,
        ]);

        User::factory()->create([
            'name' => "Marco Salazar",
            'email' => "user2@example.com",
            'password' => "password10",
            'image' => "img/users/user_2.png",
            'is_seller' => false,
        ]);

        User::factory()->create([
            'name' => "Amelia Carolina",
            'email' => "user3@example.com",
            'password' => "password10",
            'image' => "img/users/user_3.png",
            'is_seller' => false,
        ]);

        User::factory()->create([
            'name' => "Steve Sanchez",
            'email' => "user4@example.com",
            'password' => "password10",
            'image' => "img/users/user_4.png",
            'is_seller' => false,
        ]);

        User::factory()->create([
            'name' => "Sarai Castillo",
            'email' => "user5@example.com",
            'password' => "password10",
            'image' => "img/users/user_5.png",
            'is_seller' => false,
        ]);

        $this->call([
           CategoriesSeeder::class,
           StoresSeeder::class,
           ProductsSeeder::class,
           //EventsSeeder::class,
            ReviewsSeeder::class,
        ]);

        Event::factory()->create([
            'image' => "img/events/event1.png",
            'date' => Carbon::parse('2023-08-21'),
            'address' => "Plaza futura: Calle el Mirador, Colonia Escalón, San Salvador",
            'modalidad' => "Presencial",
            'title' => "Mini mercado de productos sostenibles",
            'subtitle' => "Más de 30 micro empresarios, encuentra toda clase de productos.",
            "store_id" => 1
        ]);

        Event::factory()->create([
            'image' => "img/events/event2.png",
            'date' => Carbon::parse('2024-08-16'),
            'address' => "Paseo del Carmen, Santa Tecla ",
            'modalidad' => "Presencial",
            'title' => "Apertura de nuevos emprendedores sostenibles",
            'subtitle' => "Conoce las nuevas 5 tiendas con nuevos productos cosmeticos",
            "store_id" => 2
        ]);

        Event::factory()->create([
            'image' => "img/events/event3.png",
            'date' => Carbon::parse('2024-08-21'),
            'address' => "Plaza el Cafetalón, Santa Tecla",
            'modalidad' => "Presencial",
            'title' => "Carrera de nuevos Consumidores",
            'subtitle' => "Inscribete y concursa para ganar muchos regalos, conoce nuestros productos y disfruta de un regrigerio gratis",
            "store_id" => 3
        ]);

        Event::factory()->create([
            'image' => "img/events/event4.png",
            'date' => Carbon::parse('2024-09-10'),
            'address' => "Centro comercial Plaza merliot, Santa Tecla",
            'modalidad' => "Presencial",
            'title' => "50% de descuento a las primeras 80 presonas que compren",
            'subtitle' => "Para nuestro primer cliente le daremos un jabón de avena completamente gratis",
            "store_id" => 4
        ]);
      /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
