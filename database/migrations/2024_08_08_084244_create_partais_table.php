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
        Schema::create('partais', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 225);
            $table->string('image', 225)->nullable();
            $table->date('tanggal_dibentuk');
            $table->text('deskripsi');
            $table->string('presiden', 225);
            $table->string('alamat', 255);
            $table->text('sejarah');
            $table->text('kontroversi');
            $table->text('ideologi');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partais');
    }
};
