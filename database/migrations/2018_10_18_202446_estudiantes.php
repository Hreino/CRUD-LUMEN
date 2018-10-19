<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
             $table->increments('id');
             $table->string('nombre', 100);
             $table->string('apellidos', 100);
             $table->integer('edad')->unsigned()->nullable()->default(12);
             $table->string('institucion', 100)->nullable()->default('text');
             $table->timestamps();
           
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            //
        });
    }
}
