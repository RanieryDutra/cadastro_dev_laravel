<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroDevsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_devs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 50);
            $table->string('sobreNome', 50);
            $table->string('email', 80);
            $table->string('tipoDev', 10);
            $table->integer('senioridade');
            $table->integer('techs1');
            $table->integer('techs2');
            $table->integer('techs3');
            $table->integer('techs4');
            $table->integer('techs5');
            $table->integer('techs6');
            $table->integer('techs7');
            $table->text('xp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro_devs');
    }
}
