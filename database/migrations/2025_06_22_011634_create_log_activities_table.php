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
        Schema::create('log_activities', function (Blueprint $table) {
            $table->id();

            // Contexto de ejecución
            $table->string('context')->nullable()->comment('Contexto de ejecución: web, console, job, etc.');
            $table->string('origin_class')->nullable()->comment('Clase que ejecutó la acción');
            $table->string('origin_function')->nullable()->comment('Método o función ejecutada');
            $table->text('errors')->nullable()->comment('Error del log');

            // Información del usuario
            $table->unsignedBigInteger('user_id')->nullable()->comment('ID del usuario asociado a la actividad');

            // Información de la petición HTTP
            $table->ipAddress('ip_address')->nullable()->comment('Dirección IP de la solicitud');
            $table->text('user_agent')->nullable()->comment('Agente de la solicitud');
            $table->text('url')->nullable()->comment('Ruta de la URL');
            $table->string('url_method')->nullable()->comment('Método HTTP de la solicitud');

            // Datos de actividad
            $table->enum('status', ['success', 'error'])->comment('Estado de la actividad');
            $table->text('data_request')->nullable()->comment('Datos de la solicitud');
            $table->text('data_response')->nullable()->comment('Datos de la respuesta');

            // Índices y timestamps
            $table->index('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_activities');
    }
};
