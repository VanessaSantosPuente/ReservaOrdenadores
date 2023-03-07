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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idJornada');
            $table->foreign("idJornada")->references("id")->on("jornadas")->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger('idUser')->nullable();
            $table->foreign("idUser")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger('idOrdenador');
            $table->foreign("idOrdenador")->references("id")->on("ordenadores")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
