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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sistemas');
    }
};
