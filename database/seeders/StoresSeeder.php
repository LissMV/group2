<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;
use App\Models\Product;
use App\Models\User;

class StoresSeeder extends Seeder
{
    public function users() {
        return once( function ()
        {
            return User::where('is_seller', true)->pluck('id');
        });
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = [
            [
                'name' => "The Green Emporium",
                'image' => "img/storeProfile/store1.png",
                'phone' => "+503 7472-8384",
                'email' => "store@example1.com",
                'address' => "Santa Tecla local #300 segundo nivel ",
                'description' => "Desde 2017 empacando las mejores bolsas de El Salvador",
                'social_media' => "seller@greenemporium.sv",
                'is_verified' => true,
                "user_id" => $this->users()->random()
            ],
            [
                'name' => "EcoWise Essentials",
                'image' => "img/storeProfile/store2.png",
                'phone' => " +503 2245-6789",
                'email' => "store@example2.com",
                'address' => "Calle El Progreso #23, San Salvador",
                'description' => "Tienda especializada en productos biodegradables para el hogar y cuidado personal.",
                'social_media' => "seller@EcoVidaSV",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ],
            [
                'name' =>  "Sustainable Solutions Store",
                'image' => "img/storeProfile/store3.png",
                'phone' => "+503 2234-5678",
                'email' => "store@example3.com",
                'address' => " Avenida Central #45, Santa Tecla",
                'description' => "Ofrecemos una amplia gama de productos biodegradables y eco-friendly.",
                'social_media' => "store@SustenibleSolutions.SV",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ],
            [
                'name' =>  "GreenEco",
                'image' => "img/storeProfile/store4.png",
                'phone' => "+503 7056-7890",
                'email' => "store@example4.com",
                'address' => "Bulevar Los Héroes #100, San Salvador",
                'description' => "Productos biodegradables para una vida más verde y sostenible.",
                'social_media' => "seller@GreenEcoSV",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ],
            [
                'name' =>  "EcoWorld",
                'image' => "img/storeProfile/store5.png",
                'phone' => "+503 7672-3344",
                'email' => "store@example5.com",
                'address' => "Calle del Sol #10, Antiguo Cuscatlán",
                'description' => " Soluciones ecológicas y biodegradables para el hogar y la oficina.",
                'social_media' => "seller@EcoWorldSV",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ],
            [
                'name' =>  "GreenWay",
                'image' => "img/storeProfile/store6.png",
                'phone' => "+503 7267-8901",
                'email' => "store@example6.com",
                'address' => " Avenida Roosevelt #75, San Salvador",
                'description' => "Tienda de productos biodegradables para reducir tu huella ecológica.",
                'social_media' => "seller@GreenWaySV ",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ],
            [
                'name' =>  "BioNature",
                'image' => "img/storeProfile/store7.png",
                'phone' => "+503 6279-1122",
                'email' => "store@example7.com",
                'address' => "Calle La Mascota #32, San Salvador",
                'description' => " Productos naturales y biodegradables para un estilo de vida saludable.",
                'social_media' => "seller@BioNatureSV ",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ],
            [
                'name' =>  "EcoLine",
                'image' => "img/storeProfile/store8.png",
                'phone' => "+503 6233-6475",
                'email' => "store@example8.com",
                'address' => "Calle La Reforma #60, Santa Ana",
                'description' => "Especialistas en productos biodegradables y reciclables.",
                'social_media' => "seller@EcoLineElSalvador  ",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ],
            [
                'name' =>  "BioRoot",
                'image' => "img/storeProfile/store9.png",
                'phone' => "+503 7044-7568",
                'email' => "store@example9.com",
                'address' => "Avenida Escalón #20, San Salvador",
                'description' => "Ofrecemos productos biodegradables hechos a partir de materiales naturales.",
                'social_media' => "seller@BioRootSV",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ],
            [
                'name' =>  "GreenEarth",
                'image' => "img/storeProfile/store10.png",
                'phone' => "+503 7208-2234",
                'email' => "store@example10.com",
                'address' => "Avenida Las Flores #50, La Libertad",
                'description' => "Tu tienda de confianza en productos biodegradables y eco-friendly.",
                'social_media' => "@GreenEarthSV",
                'is_verified' => true,
                "user_id" => $this->users()->random(),
            ]
        ];

        Store::factory(count($stores))->sequence(fn ($sqn) => $stores[$sqn->index])->create();
    }
}
