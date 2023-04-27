<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class AlterCadastroDevsVarchar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cadastro_devs', function (Blueprint $table) {
            $table->string('senioridade', 6)->change();
            $table->string('techs1', 5)->change();
            $table->string('techs2', 3)->change();
            $table->string('techs3', 10)->change();
            $table->string('techs4', 3)->change();
            $table->string('techs5', 2)->change();
            $table->string('techs6', 6)->change();
            $table->string('techs7', 4)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cadastro_devs', function (Blueprint $table) {
            $table->integer('senioridade');
            $table->integer('techs1');
            $table->integer('techs2');
            $table->integer('techs3');
            $table->integer('techs4');
            $table->integer('techs5');
            $table->integer('techs6');
            $table->integer('techs7');
        });
    }
}
