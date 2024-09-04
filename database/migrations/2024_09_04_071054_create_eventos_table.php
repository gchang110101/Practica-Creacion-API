<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Evento;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo'); 
            $table->text('descripcion')->nullable(); 
            $table->dateTime('fecha_hora_inicio'); 
            $table->dateTime('fecha_hora_fin')->nullable(); 
            $table->string('facultad')->nullable(); 
            $table->string('ubicacion'); 
            $table->string('deporte')->nullable();
            $table->string('organizador'); 
            $table->integer('capacidad')->nullable(); 
            $table->string('tipo_evento'); 
            $table->boolean('requiere_inscripcion')->default(false); 
            $table->string('estado')->default('pendiente'); 
            $table->string('etiquetas')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
