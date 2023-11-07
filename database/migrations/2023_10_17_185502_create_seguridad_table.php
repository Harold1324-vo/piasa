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

        Schema::create('seguridad', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('determinarRoles', 20);
            $table->string('procesoBorrado', 20);
            $table->string('controlAcceso', 20);
            $table->string('conocimientoPrincipios', 20);
            $table->string('protocoloSeguridad', 50);

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
        Schema::dropIfExists('seguridad');
    }
};