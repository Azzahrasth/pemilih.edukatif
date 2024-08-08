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
        Schema::create('paslons', function (Blueprint $table) {
            $table->id();
            $table->string('kategori', 225);
            $table->string('daerah', 225);
            $table->text('visi_misi');
            $table->text('program_kerja');
            $table->text('motivasi');
            $table->unsignedBigInteger('kandidat1_id');
            $table->unsignedBigInteger('kandidat2_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('kandidat1_id')->references('id')->on('kandidats');
            $table->foreign('kandidat2_id')->references('id')->on('kandidats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paslons');
    }
};
