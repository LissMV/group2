<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;

class ReviewsSeeder extends Seeder
{
    public function reviews()
    {
        return once(
            function () {
                return Review::pluck('id');
            }
        );
    }

    public function users()
    {
        return once(function () {
            return User::where('is_seller', false)->pluck('id');
        });
    }


    public function run(): void
    {
        $reviews = [
            [
                'comment' => "Me encanto esta crema facial, por su olor, sus efectos y también por su bajo precio,
        recomendada para el que guste comprarla.",
                'user_id' => $this->users()->random(),
                'product_id' => 1,
            ],
            [
                'comment' => "Excelente crema. Recomiendo toda la línea de productos.",
                'user_id' => $this->users()->random(),
                'product_id' => 1,
            ],
            [
                'comment' => "Cumple con su función de hidratación, todo perfecto, además quiero resaltar que deja un efecto
        aclarante y también deja la piel muy lisa.",
                'user_id' => $this->users()->random(),
                'product_id' => 2,
            ],

            [
                'comment' => "Buen producto, ¡me gusto!",
                'user_id' => $this->users()->random(),
                'product_id' => 3,
            ],
            [
                'comment' => "Buen producto, ¡me gusto!",
                'user_id' => $this->users()->random(),
                'product_id' => 4,
            ],

            [
                'comment' => "Considero que es un buen precio por su calidad y la cantidad de productos que trae, lo recomiendo",
                'user_id' => $this->users()->random(),
                'product_id' => 4,
            ],

            [
                'comment' => "Considero que es un buen precio por su calidad y la cantidad de productos que trae, lo recomiendo",
                'user_id' => $this->users()->random(),
                'product_id' => 6,
            ],

            [
                'comment' => "Este suero es increíble, cumple con su funcionalidad y para tener ingredientes naturales y ser cruelty-free
        es super bueno, mi piel agradece que aplique este suero todas las noches!",
                'user_id' => $this->users()->random(),
                'product_id' => 5,
            ],

            [
                'comment' => "Es la mejor crema facial de coco que he usado, no se compara con los productos químicos y me siento segura
        de decir que lo compren.",
                'user_id' => $this->users()->random(),
                'product_id' => 6,
            ],

            [
                'comment' => "Desde que empece a utilizarlo me ha mejorado mi problema del acné, es bastante bueno, ¡muchas gracias!",
                'user_id' => $this->users()->random(),
                'product_id' => 7,
            ],
            [
                'comment' => "Desde que empece a utilizarlo me ha mejorado mi problema del acné, es bastante bueno, ¡muchas gracias!",
                'user_id' => $this->users()->random(),
                'product_id' => 1,
            ],

            [
                'comment' => "Muy buena oferta, me encanta este exfoliante, además de huele muy rico!",
                'user_id' => $this->users()->random(),
                'product_id' => 8,
            ],

            [
                'comment' => "Excelente producto me encanto, cumple con la descripción",
                'user_id' => $this->users()->random(),
                'product_id' => 9,
            ],

            [
                'comment' => "Muy bueno el descuento, además que cubre del sol muy bien y deja una buena consistencia,
        no es grasoso",
                'user_id' => $this->users()->random(),
                'product_id' => 10,
            ],

            [
                'comment' => "El peine de bambú se diferencia de los de plástico, porque es una experiencia más comfortable
         con el pelo y al ser hecho de un material natural es más amigable con los distintos tipos de piel",
                'user_id' => $this->users()->random(),
                'product_id' => 11,
            ],
            [
                'comment' => "Es un buen cepillo porque tiene propiedades anti-bacteriales y dura más que uno normal",
                'user_id' => $this->users()->random(),
                'product_id' => 12,
            ],

            [
                'comment' => "Este jabón huele muy rico!, me gusta como deja la consistencia de la piel porque a diferencia de otros
         jabones quimicos, sentia que mi piel quedaba reseca y no hidratada.",
                'user_id' => $this->users()->random(),
                'product_id' => 13,
            ],

            [
                'comment' => "Tanto el jabón como el champú son de buena calidad, limpia muy bien los cuerpos de mis niños",
                'user_id' => $this->users()->random(),
                'product_id' => 14,
            ],

            [
                'comment' => "Me gusto mucho el desodorante, pero si deja un poco manchada la ropa, en especial las de color blanco pero si proteje como debe ser",
                'user_id' => $this->users()->random(),
                'product_id' => 15,
            ],

            [
                'comment' => "Siento que desde que empece a utilizar estos productos, mi cabello se volvio mas sedoso y brillante, muchas gracias por el producto",
                'user_id' => $this->users()->random(),
                'product_id' => 16,
            ],

            [
                'comment' => "Le doy 5 estrellas, buen producto, solo en un mes me ha crecido 5 cm, es incrible!",
                'user_id' => $this->users()->random(),
                'product_id' => 17,
            ],

            [
                'comment' => "Son muy suaves y absorben bien la suciedad y me gusta que sean biodegradables :)",
                'user_id' => $this->users()->random(),
                'product_id' => 18,
            ],

            [
                'comment' => "Son suaves y se pueden utilizar mas de 10 veces (comprobado). Me parece muy conveniente comprarlas aquí por el precio y la calidad.",
                'user_id' => $this->users()->random(),
                'product_id' => 19,
            ],

            [
                'comment' => "Para ser hecho de materiales degradables, siento que no lastima mucho y es una buena manera de cuidar
                nuestro medio ambiente",
                'user_id' => $this->users()->random(),
                'product_id' => 20,
            ],

            [
                'comment' => "A comparación de mascones tradicionales, dura un poco menos pero gaantizo su utilidad, no deja malos oleres
                 y se puede lavar muy fácil, además que no desprende fibras como los mascones de plásticos que desprenden microplasticos",
                 'user_id' => $this->users()->random(),
                 'product_id' => 21,
            ],

            [
                'comment' => "Excelente jabón de platos, limpia bien la superficie de los cacerolas y ollas",
                'user_id' => $this->users()->random(),
                'product_id' => 22,
            ],

            [
                'comment' => "Todo el producto 10/10, me gusta porque se siente el olor a fresco, a limón y no es como otros productos quimicos que me dañan la
                garganta con solo oler, es super bueno",
                'user_id' => $this->users()->random(),
                'product_id' => 23,
            ],

            [
                'comment' => " Limpian la ropa mejor que los que contienen productos químicos. Descomponen la suciedad, la grasa y la mugre.",
                'user_id' => $this->users()->random(),
                'product_id' => 24,
            ],
        ];

        Review::factory(count($reviews))->sequence(fn ($sqn) => $reviews[$sqn->index])->create();
    }
}

