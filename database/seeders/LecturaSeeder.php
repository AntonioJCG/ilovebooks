<?php

namespace Database\Seeders;

use App\Models\Lectura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Lector 1
        $reserva1 = new Lectura();
        $reserva1->idLibro = 3;
        $reserva1->nombreLibro = "Marfil";
        $reserva1->autorLibro = "Mercedes Ron";
        $reserva1->generoLibro = "Accion";
        $reserva1->idUsuario = 1;
        $reserva1->save();

        $reserva2 = new Lectura();
        $reserva2->idLibro = 5;
        $reserva2->nombreLibro = "Viaje al centro de la tierra";
        $reserva2->autorLibro = "Julio Verne";
        $reserva2->generoLibro = "Accion";
        $reserva2->idUsuario = 1;
        $reserva2->save();

        $reserva3 = new Lectura();
        $reserva3->idLibro = 7;
        $reserva3->nombreLibro = "Ready Player One";
        $reserva3->autorLibro = "Ernest Cline";
        $reserva3->generoLibro = "Ciencia Ficcion";
        $reserva3->idUsuario = 1;
        $reserva3->save();

        //Lector 2
        $reserva4 = new Lectura();
        $reserva4->idLibro = 12;
        $reserva4->nombreLibro = "Bajo la misma estrella";
        $reserva4->autorLibro = "John Green";
        $reserva4->generoLibro = "Drama";
        $reserva4->idUsuario = 2;
        $reserva4->save();

        $reserva5 = new Lectura();
        $reserva5->idLibro = 14;
        $reserva5->nombreLibro = "Invisible";
        $reserva5->autorLibro = "Eloy Moreno";
        $reserva5->generoLibro = "Drama";
        $reserva5->idUsuario = 2;
        $reserva5->save();

        $reserva6 = new Lectura();
        $reserva6->idLibro = 16;
        $reserva6->nombreLibro = "De sangre y cenizas";
        $reserva6->autorLibro = "Jennifer L. Armentrout";
        $reserva6->generoLibro = "Fantasia";
        $reserva6->idUsuario = 2;
        $reserva6->save();

        $reserva7 = new Lectura();
        $reserva7->idLibro = 17;
        $reserva7->nombreLibro = "El nombre del viento";
        $reserva7->autorLibro = "Patrick Rothfuss";
        $reserva7->generoLibro = "Fantasia";
        $reserva7->idUsuario = 2;
        $reserva7->save();

        //Lector 3
        $reserva8 = new Lectura();
        $reserva8->idLibro = 8;
        $reserva8->nombreLibro = "Gideon la novena";
        $reserva8->autorLibro = "Tamsyn Muir";
        $reserva8->generoLibro = "Ciencia Ficcion";
        $reserva8->idUsuario = 3;
        $reserva8->save();

        $reserva9 = new Lectura();
        $reserva9->idLibro = 10;
        $reserva9->nombreLibro = "Soy leyenda";
        $reserva9->autorLibro = "Richard Matheson";
        $reserva9->generoLibro = "Accion";
        $reserva9->idUsuario = 3;
        $reserva9->save();

        $reserva10 = new Lectura();
        $reserva10->idLibro = 11;
        $reserva10->nombreLibro = "Al final mueren los dos";
        $reserva10->autorLibro = "Adam Silvera";
        $reserva10->generoLibro = "Drama";
        $reserva10->idUsuario = 3;
        $reserva10->save();

        //Lector 4
        $reserva11 = new Lectura();
        $reserva11->idLibro = 8;
        $reserva11->nombreLibro = "Gideon la novena";
        $reserva11->autorLibro = "Tamsyn Muir";
        $reserva11->generoLibro = "Ciencia Ficcion";
        $reserva11->idUsuario = 4;
        $reserva11->save();

        $reserva12 = new Lectura();
        $reserva12->idLibro = 10;
        $reserva12->nombreLibro = "Soy leyenda";
        $reserva12->autorLibro = "Richard Matheson";
        $reserva12->generoLibro = "Accion";
        $reserva12->idUsuario = 4;
        $reserva12->save();

        $reserva13 = new Lectura();
        $reserva13->idLibro = 11;
        $reserva13->nombreLibro = "Al final mueren los dos";
        $reserva13->autorLibro = "Adam Silvera";
        $reserva13->generoLibro = "Drama";
        $reserva13->idUsuario = 4;
        $reserva13->save();
    }
}
