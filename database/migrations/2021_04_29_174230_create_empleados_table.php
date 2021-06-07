<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('NIF');
            $table->string('Name');
            $table->string('Surnames');
            $table->string('Email')->unique();
            $table->string('Address');
            $table->date('DateBirth');
            $table->string('Ocupation');
            $table->string('GroupProyect');
            $table->string('Rol');
            $table->integer('Salary');
            $table->date('DateEmployee');
            $table->string('InfoAdd');
            $table->string('Photo');
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
        Schema::dropIfExists('empleados');
    }
}
