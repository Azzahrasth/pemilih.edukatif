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
        Schema::create('pengusungs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partai_id');
            $table->unsignedBigInteger('paslon_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('partai_id')->references('id')->on('partais')->onDelete('cascade');
            $table->foreign('paslon_id')->references('id')->on('paslons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengusungs');
    }
};
