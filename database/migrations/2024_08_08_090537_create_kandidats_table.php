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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 225);
            $table->string('image', 225)->nullable();
            $table->date('tanggal_lahir');
            $table->string('domisili', 225);
            $table->string('daerah', 225);
            $table->text('latar_belakang');
            $table->text('pendidikan');
            $table->text('jejak_karir');
            $table->text('pestasi');
            $table->text('kontroversi');
            $table->text('organisasi');
            $table->unsignedBigInteger('partai_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('partai_id')->references('id')->on('partais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
