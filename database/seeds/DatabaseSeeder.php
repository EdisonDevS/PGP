<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'jhon.giraldo1@utp.edu.co',
            'password' => Hash::make('intelinside3942'),
            'nombres' => 'Jhon Edison',
            'apellidos' => 'Giraldo Mejía',
            'documento' => '1054926611',
            'tipo_documento' => 'C.C',
            'fecha_nacimiento' => '1999-11-20',
            'genero' => 'Masculino',
            'telefono' => '3207155626',
        ]);
    }
}
