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

        Schema::create('verificacion', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('area')->unique();
            $table->integer('numeroApartado');
            $table->integer('nivelSeguridad');
            $table->integer('cwe');
            $table->string('requerimientoValidacion');
            $table->string('referencia');
            $table->string('valido');
            $table->string('referenciaCodigoFuente');
            $table->string('evidencia');
            $table->string('comentarios');

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
        Schema::dropIfExists('verificacion');
    }
};
