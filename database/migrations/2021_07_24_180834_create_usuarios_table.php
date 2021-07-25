<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ufs_id')->unsigned()->nullable()->default(NULL);
            $table->unsignedBigInteger('escolaridades_id');
            $table->unsignedBigInteger('municipios_id')->unsigned()->nullable()->default(NULL);
            $table->char('brasileiro');
            $table->string('nome');
            $table->string('cpf')->nullable()->default(NULL);
            $table->date('data_nascimento');
            $table->timestamps();
            // ligacoes
            $table->foreign('ufs_id')->references('id')->on('ufs')->onDelete('CASCADE');
            $table->foreign('escolaridades_id')->references('id')->on('escolaridades')->onDelete('CASCADE');
            $table->foreign('municipios_id')->references('id')->on('municipios')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
