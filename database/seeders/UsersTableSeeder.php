<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Perfil;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(["name" => "LuisN", "email" => "email@email.com", "password" => '$2y$10$z8am7QpsiOP7Fd1rNHdgLOryA6JYshcppMtiFOxZ96WvVNgDNtV2q']);        
        User::create(["name" => "LuisN2", "email" => "email2@email.com", "password" => '$2y$10$z8am7QpsiOP7Fd1rNHdgLOryA6JYshcppMtiFOxZ96WvVNgDNtV2q']);
        Perfil::create(['id' => 1, 'user_name' => 'LuisN', 'nombres' => 'LuisN', 'apellidos' => 'LuisN', 'email' => "email@email.com", 'conocimientos' => "html, css, php, mysql, javascript, visual",  'roll' => 1,  'roll_name' => 'Estudiante']);
        Perfil::create(['id' => 2, 'user_name' => 'LuisN2', 'nombres' => 'LuisN2', 'apellidos' => 'LuisN2', 'email' => "email2@email.com", 'conocimientos' => "html, css, php, mysql, javascript, visual",  'roll' => 3,  'roll_name' => 'Administrador de Roles']);
    }
}
