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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 11);
            $table->string('nama', 30);
            $table->enum('jk', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 30);
            $table->string('asal_sma', 30);
            $table->foreignId('prodi_id')->constrained('prodi')->onDelete('restrict')->onUpdate('restrict');
            $table->string('foto', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
