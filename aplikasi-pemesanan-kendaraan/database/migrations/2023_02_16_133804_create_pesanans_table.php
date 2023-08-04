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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('driver');
            $table->string('telp');
            $table->string('plat_mobil');
            $table->boolean('izin')->default(0);
            $table->unsignedBigInteger('mobil_id');
            $table->unsignedBigInteger('atasan_id');

            $table->foreign('mobil_id')->references('id')->on('kendaraans');
            $table->foreign('atasan_id')->references('id')->on('atasans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
