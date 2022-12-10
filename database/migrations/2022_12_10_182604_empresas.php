<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empresas', function(Blueprint $table){
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('cant_empleados');
            $table->bigInteger('empleado_id')->unsigned();
            $table->bigInteger('sucursal_id')->unsigned();
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade');

             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
