<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->id();
			$table->string('user_name')->default('');
            $table->string('nombres')->default('');
            $table->string('apellidos')->default('');
            $table->string('email')->references('email')->on('users')->default('')->unique();
            $table->text('conocimientos')->default('');
            $table->unsignedBigInteger('roll')->default(1);
            $table->string('roll_name')->default('Estudiante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfils');
    }
}
