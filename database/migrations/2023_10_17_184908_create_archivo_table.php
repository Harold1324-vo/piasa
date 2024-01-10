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

        Schema::create('archivos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->text('nombreArchivo');

            //Creación del campo que será la FK
            $table->unsignedBigInteger('idSistema');
            $table->foreign('idSistema')->references('id')->on('sistemas')->onDelete('cascade');
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
        Schema::dropIfExists('archivos');
    }
};
