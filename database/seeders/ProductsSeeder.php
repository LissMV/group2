<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Store;

class ProductsSeeder extends Seeder
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
        $products = [
            [
                'image' => "img/products/ skin care/skinCare1.png",
                'is_available' => true,
                'price' => "$9.00",
                'discount' => "0",
                'name' => "Crema facial",
                'subtitle' => "con contenedor de vidrio",
                'description' => "Para todo tipo de piel, hecho con aceites naturales del coco y como ingrediente especial tenemos el arroz.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare2.png",
                'is_available' => true,
                'price' => "$15.00",
                'discount' => "10%",
                'name' => "Crema hidratante",
                'subtitle' => "Especial para la noche",
                'description' => "Con un efecto hidratante y fresco, con aceites naturales que te ayudaran a lucir una piel suave y sin imperfecciones.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare3.png",
                'is_available' => true,
                'price' => "$20.00",
                'discount' => "15%",
                'name' => "Suero facial",
                'subtitle' => "llevate 2!",
                'description' => "Para pieles secas, ayuda a la hidratación y a combatir con la irritación, en adición llevate el segundo ideal para reducir poros.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare4.png",
                'is_available' => true,
                'price' => "$67.00",
                'discount' => "0",
                'name' => "Kit especial",
                'subtitle' => "con todo incluido",
                'description' => "Llevate 8 productos a un super precio! Nuestra liena de productos no causa irritaciones, manten tu piel más joven que nunca,",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare5.png",
                'is_available' => true,
                'price' => "$12.00",
                'discount' => "0",
                'name' => "Suero facial",
                'subtitle' => "con aplicador incluido",
                'description' => "Llevate a un buen precio este increible suero que te ayudara a reducir las manchas en la piel, importante aplicar en la noche.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare10.png",
                'is_available' => true,
                'price' => "$13.99",
                'discount' => "0",
                'name' => "Mist facial",
                'subtitle' => "Hecho de coco",
                'description' => "Prepara bien tu piel antes de usar cosmeticos con el nuevo mist hecho de coco, nutre y refresca tu piel.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare6.png",
                'is_available' => true,
                'price' => "$22.00",
                'discount' => "",
                'name' => "Limpiador facial",
                'subtitle' => "Especial para piel grasa",
                'description' => "El mejor para una limpieza profunda, con efecto aclarante.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare7.png",
                'is_available' => true,
                'price' => "$20.99",
                'discount' => "5%",
                'name' => "Exfoliantes faciales",
                'subtitle' => "Cafe y arroz",
                'description' => "LLevate dos exfoliantes que te ayudaran a eliminar las celulas muertas, desincrustar poros y regenera la piel.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare8.png",
                'is_available' => true,
                'price' => "$16.89 c/u",
                'discount' => "0",
                'name' => "Protector solar",
                'subtitle' => "para piel grasa o no grasosa",
                'description' => "Con 50 fps de proteccion solar, aparte de protegerte de los rayos solares es muy bueno para hidratar, no deja efecto grasoso y puedes elegir el mejor para tu tipo de piel.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/skin care/skinCare9.png",
                'is_available' => true,
                'price' => "$18.79",
                'discount' => "15%",
                'name' => "Protector solar",
                'subtitle' => "En barra",
                'description' => "Tenemos para ti un buen protector solar en barra, especial para llevar y aplicar en cualquier momento, deja tu piel suave e hidratada.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/personal Care/personalCare1.png",
                'is_available' => true,
                'price' => "$8.00",
                'discount' => "5%",
                'name' => "Cepillo capilar",
                'subtitle' => "hecho de bambú",
                'description' => "Un cepillo que no maltrata tu cabello, con cerdas suaves y facil de limpiar, elije entre el blanco y el negro.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/personal Care/personalCare2.png",
                'is_available' => true,
                'price' => "$6.00 c/u",
                'discount' => "0",
                'name' => "Cepillo dental",
                'subtitle' => "Hecho de bambú",
                'description' => "Llevate un cepillo con un empaque degradable y dura lo mismo que un cepillo que compras en el super mercado, ademas tarda menos en degradarse!",
                'store_id' => $this->stores()->random(),
                'category_id' => 3
            ],
            [
                'image' => "img/products/personal Care/personalCare3.png",
                'is_available' => true,
                'price' => "$3.00 c/u",
                'discount' => "0",
                'name' => "Jabón de cuerpo",
                'subtitle' => "Jabones hechos de frutas",
                'description' => "Lleva un jabón libre de quimicos, 100% natural y perfecto para tu piel, no reseca y deja un agradable olor.",
                'store_id' => $this->stores()->random(),
                'category_id' => 3
            ],
            [
                'image' => "img/products/personal Care/personalCare4.png",
                'is_available' => true,
                'price' => "$11.99",
                'discount' => "0",
                'name' => "Jabón y Champú en barra",
                'subtitle' => "Especial para niños y bebés",
                'description' => "Te presentamos un jabón y champú en barra, 100% libre de quimicos y hecho de coco dejando un olor agradable, además trate una esponja incluida.",
                'store_id' => $this->stores()->random(),
                'category_id' => 3
            ],
            [
                'image' => "img/products/personal Care/personalCare5.png",
                'is_available' => true,
                'price' => "$6.99",
                'discount' => "0",
                'name' => "Desodorante",
                'subtitle' => "Hecho artesanalmente",
                'description' => "100% natural y es muy efectivo para evitar malos olores, además no deja manchas ni irritación y es facil de aplicar. ",
                'store_id' => $this->stores()->random(),
                'category_id' => 3
            ],
            [
                'image' => "img/products/personal Care/personalCare6.png",
                'is_available' => true,
                'price' => "$67.89",
                'discount' => "0",
                'name' => "Kit de ducha",
                'subtitle' => "Productos veganos",
                'description' => "Llevate 4 productos de ducha: shampoo, acondicionador, jabón y un exfoliante, todos hechos de sabíla y aceites naturales que ayudan a hidratar tu piel y reparar tu cabello. ",
                'store_id' => $this->stores()->random(),
                'category_id' => 3
            ],
            [
                'image' => "img/products/personal Care/personalCare7.png",
                'is_available' => true,
                'price' => "$11.99",
                'discount' => "0",
                'name' => "Tónico capilar",
                'subtitle' => "Especial para el crecimiento",
                'description' => "Esta especialmente hecho de romero y canela, una formulara que no falla para el crecimiento de tu cabello, sin quimicos y no deja el cabello graso, en un mes puedes ver los resulados.",
                'store_id' => $this->stores()->random(),
                'category_id' => 2
            ],
            [
                'image' => "img/products/personal Care/personalCare8.png",
                'is_available' => true,
                'price' => "$5.99",
                'discount' => "0",
                'name' => "Toallitas",
                'subtitle' => "Para todo uso",
                'description' => "Hechas de fibras naturales de bambú y algodón. Estos materiales de origen sostenible garantizan que las toallitas se descompongan claramente después de su uso, además que no pierden su suavidad.",
                'store_id' => $this->stores()->random(),
                'category_id' => 3
            ],
            [
                'image' => "img/products/personal Care/personalCare9.png",
                'is_available' => true,
                'price' => "$3.99 c/u",
                'discount' => "0",
                'name' => "Toallas femeninas",
                'subtitle' => "Hechas de tela de algodón",
                'description' => "Estas toallitas son lavables asi que se pueden usar más de una vez, estan hechas para tu comonidad y son muy absorventes.",
                'store_id' => $this->stores()->random(),
                'category_id' => 3
            ],
            [
                'image' => "img/products/personal Care/personalCare10.png",
                'is_available' => true,
                'price' => "$1.50 c/u",
                'discount' => "0",
                'name' => "Papel higienico",
                'subtitle' => "facil degradación",
                'description' => "Este papel está hecho de fibras de celulosa que provienen de otros materiales reciclados que al entrar en contacto con el agua se degrada facilmente, es suave y comodo de usar.",
                'store_id' => $this->stores()->random(),
                'category_id' => 3
            ],
            [
                'image' => "img/products/cleaning/cleaning1.png",
                'is_available' => true,
                'price' => "$4.00 c/u",
                'discount' => "0",
                'name' => "Mascón para trastes",
                'subtitle' => "hecho de bambú",
                'description' => "Este papel está hecho de fibras de celulosa que provienen de otros materiales reciclados que al entrar en contacto con el agua se degrada facilmente, es suave y comodo de usar.",
                'store_id' => $this->stores()->random(),
                'category_id' => 1
            ],
            [
                'image' => "img/products/cleaning/cleaning2.png",
                'is_available' => true,
                'price' => "$3.00 c/u",
                'discount' => "0",
                'name' => "Jabón de platos",
                'subtitle' => "hecho con zanahoria",
                'description' => "Jabón libre de quimicos, con Zanahoria y limón para una mejor limpieza y desengrasante, cuida de tus manos con nuestros jabones.",
                'store_id' => $this->stores()->random(),
                'category_id' => 1
            ],
            [
                'image' => "img/products/cleaning/cleaning3.png",
                'is_available' => true,
                'price' => "$7.59 c/u",
                'discount' => "10%",
                'name' => "Desinfectantes",
                'subtitle' => "Libre de quimicos",
                'description' => "Hecho de aceites naturales, romero y zumo de limon ya que es efectivo para la limpieza profunda, no genera reacciones alergicas ni irritación",
                'store_id' => $this->stores()->random(),
                'category_id' => 1
            ],
            [
                'image' => "img/products/cleaning/cleaning4.png",
                'is_available' => true,
                'price' => "$8.00",
                'discount' => "0",
                'name' => "Detergente vegetal ",
                'subtitle' => "Multiuso",
                'description' => "Compuesto con ingredientes basados de origen vegetal, es facil de usar y sobre todo es respetuoso con el medio ambiente y la vida acuatica porque es libre de sulfatos.",
                'store_id' => $this->stores()->random(),
                'category_id' => 1
            ],
        ];

        Product::factory(count($products))->sequence(fn ($sqn) => $products[$sqn->index])->create();
    }
}
