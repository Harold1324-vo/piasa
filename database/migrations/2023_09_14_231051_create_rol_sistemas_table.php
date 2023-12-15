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

        Schema::create('rol_sistemas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nombreLiderProyecto', 100);
            $table->string('puestoLiderProyecto', 100);
            $table->string('nombreAdministradorProyecto', 100);
            $table->string('puestoAdministradorProyecto', 100);
            $table->string('nombreDesarrollador', 100);
            $table->string('puestoDesarrollador', 100);
            $table->string('areaUsuaria', 150);
            $table->string('puestoUsuario', 100);

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
        Schema::dropIfExists('rol_sistemas');
    }
};
