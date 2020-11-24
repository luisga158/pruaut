<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables(['users']);
        $this->truncateTables(['perfils']);
        $this->call(UsersTableSeeder::class);
        $this->truncateTables(['temas']);
        $this->call(TemasTableSeeder::class);
        $this->truncateTables(['rolls']);
        $this->call(RollsTableSeeder::class);
        $this->truncateTables(['posts']);
        Post::factory()->times(50)->create();
    }
    public function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
