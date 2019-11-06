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
            'nombres' => 'nombres',
            'apellidos' => 'apellidos',
            'documento' => 'documento',
            'tipo_documento' => 'tipo_documento',
            'fecha_nacimiento' => 'fecha_nacimiento',
            'genero' => 'genero',
            'telefono' => 'telefono',
        ]);
    }
}
