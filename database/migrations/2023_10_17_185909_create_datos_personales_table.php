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

        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('manejoDatosPersonales', 20);
            $table->text('fundamentoLegal');
            $table->text('tipoDatosPersonales');
            $table->string('formaObtencion', 50);
            $table->string('portabilidadDatos', 20);
            $table->string('transferenciaDatos', 20);
            $table->string('tipoSoporte', 20);
            $table->string('avisoPrivacidad', 20);

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
        Schema::dropIfExists('datos_personales');
    }
};
