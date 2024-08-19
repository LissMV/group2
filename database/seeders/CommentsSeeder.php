<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CommentsSeeder extends Seeder
{
    public function users() {
        return once(
            function () {
                return User::pluck('id');
            }
        );
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'comment' => "Hola! Tengan todos un lindo día, les comento que hace unos días compre un protector de EcoEarth y lo recomiendo mucho, me ayudo bastante :)",
                'user_id' => $this->users()->random(),
            ],
            [
                'comment' => "Hola a todos, Para los que tengan duda de que el jabon natural tiene un php alto, dejame decirte que eso es por que no tiene quimicos que regulan su php
                ya que estos jabones son 100% hechos de ingredientes naturales y en su mayoria de citricos, pero lo bueno es que contienen aceites especiales para dejar tu piel con el php
                que esta tiene y necesita",
                'user_id' => $this->users()->random(),
            ],
            [
                'comment' => "Buenos días, espero que todos puedan leer este comentario y me gustaria recomendarles los exfoliantes faciales porque te dejan con una piel muy suave y linda
                además que no te la daña ni te irrita",
                'user_id' => $this->users()->random(),
            ],
            [
                'comment' => "Holaaa, Acabo de ir a comprar un desinfectante de la tienda sustinable solutions y dejenme decirles que funcionan de maravilla, además esta linea contiene un excelente
                desengrasante para la cocina, no es nada toxico y tiene un olor agradable",
                'user_id' => $this->users()->random(),
            ],
        ];
        Comment::factory(count($comments))->sequence(fn ($sqn) => $comments[$sqn->index])->create();
    }
}
