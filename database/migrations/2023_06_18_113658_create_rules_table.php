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
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('profil');
            $table->string('jawaban_1');
            $table->foreign('jawaban_1')->references('kode_jawaban')->on('jawaban');
            $table->string('jawaban_2');
            $table->foreign('jawaban_2')->references('kode_jawaban')->on('jawaban');
            $table->string('jawaban_3');
            $table->foreign('jawaban_3')->references('kode_jawaban')->on('jawaban');
            $table->string('jawaban_4');
            $table->foreign('jawaban_4')->references('kode_jawaban')->on('jawaban');
            $table->unsignedBigInteger('jenis_reksadana')->nullable();
            $table->foreign('jenis_reksadana')->references('id')->on('reksadanas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};
