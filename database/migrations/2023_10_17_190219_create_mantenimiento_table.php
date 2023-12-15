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

        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('requiereMantenimiento', 20);
            $table->string('tipoMantenimiento', 20);
            $table->string('descripcionMantenimiento', 150);
            $table->string('periocidadMantenimiento', 100);
            $table->string('areaResponsable', 100);
            $table->string('nombreTecnicoResponsable', 100);
            $table->string('nombreCoordinador', 100);

            //Creación del campo que será la FK
            $table->unsignedBigInteger('idSistema');
            //Asignación de FK, se hace referencia a la llave primaria, se especifica la tabla
            $table->foreign('idSistema')->references('id')->on('sistemas');

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimiento');
    }
};
