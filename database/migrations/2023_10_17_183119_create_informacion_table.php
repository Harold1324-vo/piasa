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

        Schema::create('informacion', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('anoComienzoOperaciones', 10);
            $table->string('consultaInformacion', 20);
            $table->string('requiereActualizacion', 20);
            $table->date('fechaUltimaActualizacion');
            $table->string('datosAbiertos', 20);
            $table->string('tipoPublicacion', 20);
            $table->string('nivelInteraccion', 50);
            $table->string('etapaActual', 50);
            $table->string('subEtapaActual', 50);
            $table->string('faseActual', 50);
            $table->string('legado', 20);
            $table->string('modeloOperacion', 50);
            $table->string('interaccionDependencias', 50);
            $table->string('interaccionOtrasAreas', 50);
            $table->string('migrado', 50);

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
        Schema::dropIfExists('informacion');
    }
};
