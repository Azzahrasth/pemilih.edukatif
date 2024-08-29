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
        Schema::table('kandidats', function (Blueprint $table) {
             // Menambahkan kolom paslon_id
            $table->unsignedBigInteger('paslon_id')->after('organisasi');

            // Menambahkan foreign key constraint
            $table->foreign('paslon_id')->references('id')->on('paslons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kandidats', function (Blueprint $table) {
            // Menghapus foreign key constraint
            $table->dropForeign(['paslon_id']);

            // Menghapus kolom paslon_id
            $table->dropColumn('paslon_id');
        });
    }
};
