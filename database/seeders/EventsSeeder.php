<?php

namespace Database\Seeders;

use App;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Store;

class EventsSeeder extends Seeder
{
    public function stores() {
        return once(
            function () {
                return Store::pluck('id');
            }
        );
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'image' => "img/events/event1.png",
                'date' => "04/08/2024",
                'address' => "Plaza futura: Calle el Mirador, Colonia Escalón, San Salvador",
                'modalidad' => "Presencial",
                'title' => "Mini mercado de productos sotenibles",
                'subtitle' => "Más de 30 micro empresarios, encuentra toda clase de productos.",
                "store_id" => $this->stores()->random()
            ],
            [
                'image' => "img/events/event2.png",
                'date' => "16/08/2024",
                'address' => "Plaseo del Carmen, Santa Tecla ",
                'modalidad' => "Presencial",
                'title' => "Apertura de nuevos emprendedores sostenibles",
                'subtitle' => "Conoce las nuevas 5 tiendas con nuevos productos cosmeticos",
                "store_id" => $this->stores()->random()
            ],
            [
                'image' => "img/events/event3.png",
                'date' => "21/08/2024",
                'address' => "Plaza el Cafetalón, Santa Tecla",
                'modalidad' => "Presencial",
                'title' => "Carrera de nuevos Consumidores",
                'subtitle' => "Inscribete y concursa para ganar muchos regalos, conoce nuestros productos y disfruta de un regrigerio gratis",
                "store_id" => $this->stores()->random()
            ],
            [
                'image' => "img/events/event4.png",
                'date' => "09/10/2024",
                'address' => "Centro comercial Plaza merliot, Santa Tecla",
                'modalidad' => "Presencial",
                'title' => "50% de descuento a las primeras 80 presonas que compren",
                'subtitle' => "Para nuestro primer cliente le daremos un jabón de avena completamente gratis",
                "store_id" => $this->stores()->random()
            ],
            [
                'image' => "img/events/event5.png",
                'date' => "12/10/2024",
                'address' => "Poli deportivo, Zaragoza, La Libertad",
                'modalidad' => "Presencial",
                'title' => "Campaña de reciclaje",
                'subtitle' => "¡Todas las personas dispuestas a colaborar estan invitadas!, empezamos desde las 8 de la mañana",
                "store_id" => $this->stores()->random()
            ],
            [
                'image' => "img/events/event6.png",
                'date' => "22/10/2024",
                'address' => "Centro comercial Metro Centro, San Salvador",
                'modalidad' => "Presencial",
                'title' => "Apertura de la segunda sucursal",
                'subtitle' => "Durante todo ese día estaremos dando los productos al 50% de la categoria cuidado personal",
                'store_id' => 4
            ],
        ];

        Event::factory(count($events))->sequence(fn ($sqn) => $events[$sqn->index])->create();
    }

}
