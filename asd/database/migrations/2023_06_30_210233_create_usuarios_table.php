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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_rs', 255);
            $table->string('dni', 20)->unique();
            $table->string('ruc', 20)->unique()->nullable();
            $table->string('correo', 255)->unique();
            $table->string('celular', 15)->nullable();
            $table->tinyInteger('rol');
            $table->string('user', 50)->unique();
            $table->string('password', 255);
            $table->string('archivo_cv', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
