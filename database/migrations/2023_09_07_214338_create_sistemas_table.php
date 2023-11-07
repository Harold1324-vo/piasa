<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('sistemas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nombreSistema', 200);
            $table->string('descripcion', 500);
            $table->string('siglas', 50);
            $table->string('clasificacion', 50);
            $table->string('areaDesarrolladora', 50);
            $table->string('estadoActivo', 20);
            $table->string('url', 100);
            $table->string('consecutivo', 50);

            //Creación del campo que será la FK
            $table->unsignedBigInteger('idUsuario');
            //Asignación de FK, se hace referencia a la llave primaria, se especifica la tabla
            $table->foreign('idUsuario')->references('id')->on('users');


            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sistemas');
    }
};
