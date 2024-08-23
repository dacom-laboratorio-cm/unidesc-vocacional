<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkEscolaCandidato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidatos', function (Blueprint $table) {
            // $table->unsignedInteger('escola_id')->nullable(); // Verifique se já existe

            $table->unsignedInteger('escola_id')->after('nome');

            $table->foreign('escola_id')
                ->references('id')->on('escolas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidatos', function (Blueprint $table) {
            //
        });
    }
}
