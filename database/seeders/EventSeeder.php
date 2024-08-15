<?php

namespace Database\Seeders;

use App;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'image' => "",
                'date' => "12/09/2024",
                'address' => "Plaza futura: Calle el Mirador, Colonia Escalón, San Salvador",
                'modalidad' => "Presencial",
                'title' => "Mini mercado de productos sotenibles",
                'subtitle' => "Más de 30 micro empresarios, encuentra toda clase de productos.",
            ],
            [
                'image' => "",
                'date' => "15/09/2024",
                'address' => "Plaseo del Carmen, Santa Tecla ",
                'modalidad' => "Presencial",
                'title' => "Apertura de nuevos emprendedores sostenibles",
                'subtitle' => "Conoce las nuevas 5 tiendas con nuevos productos cosmeticos",
            ],
            [
                'image' => "",
                'date' => "22/09/2024",
                'address' => "Plaza el Cafetalón, Santa Tecla",
                'modalidad' => "Presencial",
                'title' => "Carrera de nuevos Consumidores",
                'subtitle' => "Inscribete y concursa para ganar muchos regalos, conoce nuestros productos y disfruta de un regrigerio gratis",
            ],
            [
                'image' => "",
                'date' => "09/10/2024",
                'address' => "Centro comercial Plaza merliot, Santa Tecla",
                'modalidad' => "Presencial",
                'title' => "Tendremos el 50% de descuento en las primeras 80 personas que vengan a comprar",
                'subtitle' => "Para nuestro primer cliente le daremos un jabón de avena completamente gratis",
            ],
            [
                'image' => "",
                'date' => "",
                'address' => "",
                'modalidad' => "",
                'title' => "Apertura de la segunda sucursal",
                'subtitle' => "",
            ],
        ];
    }
}
