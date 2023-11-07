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

        Schema::create('caracteristica', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('sistemaOperativo', 100);
            $table->string('controlVersiones', 50);
            $table->string('versionSistema', 50);
            $table->string('lenguajeProgramacion', 50);
            $table->string('otroLenguajeProgramacion', 150);
            $table->string('frameworks', 50);
            $table->string('despliegue', 50);
            $table->string('otroServidorWeb', 25);
            $table->string('manejadorBD', 50);
            $table->string('nombreBD', 150);
            $table->string('plataformaDesarrollo', 150);
            $table->string('usoAPI', 150);

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
        Schema::dropIfExists('caracteristica');
    }
};
