<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tema;

class TemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Tema::create(["nombretema" => "HTML"]);
        Tema::create(["nombretema" => "Css"]);
        Tema::create(["nombretema" => "PHP"]);
        Tema::create(["nombretema" => "Javascript"]);
        Tema::create(["nombretema" => "Laravel"]);
    }
}
