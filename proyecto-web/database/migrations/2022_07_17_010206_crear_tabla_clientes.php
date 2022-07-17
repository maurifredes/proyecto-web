<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Modelo Orientado a Objetos:
        //Base de datos relacional + Porgramacion orientada a objetos
        //MySQL + Eloquent (ORM del modelo de laravel) Object Relational Mapping
        //En simples palabras yo tengo que crear clases para que se cree sola la tabla
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); //Este es un campo autoincrementable, en Oracle se conoce como Secuencia
            //Los autoincrementales son claves unicas generadas automaticamente por el motor
            $table->string("nombre",200)->nullable();
            $table->string("apellido",200)->nullable();
            $table->integer("rut")->nullable();
            $table->integer("telefono")->nullable();
            $table->string("region",40)->nullable();
            $table->string("direccion",200)->nullable();
            $table->string("correo",200)->nullable();
            $table->timestamps(); //dos campos que son el create_at y el updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
