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
        Schema::create('kategorisasis', function (Blueprint $table) {
            $table->id();
            $table->text('visi_misi');
            $table->string('kategori_isu', 225);
            $table->unsignedBigInteger('paslon_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('paslon_id')->references('id')->on('paslons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorisasis');
    }
};
