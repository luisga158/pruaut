<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roll;

class RollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roll::create(["roll_id" => 1, "roll_name" => "Estudiante"]);
        Roll::create(["roll_id" => 2, "roll_name" => "Editor"]);
        Roll::create(["roll_id" => 3, "roll_name" => "Administrador de Roles"]);
        Roll::create(["roll_id" => 4, "roll_name" => "Administrador de proyectos"]);
        Roll::create(["roll_id" => 5, "roll_name" => "Superusuario"]);
    }
}
