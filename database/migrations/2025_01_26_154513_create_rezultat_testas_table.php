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
        Schema::create('rezultat_testas', function (Blueprint $table) {
            $table->id();
            $table->integer('osvojeni_bodovi');
            $table->date('datum_polaganja');
            $table->foreignId('kandidat_id')->constrained('kandidats')->onDelete('cascade');
            $table->foreignId('test_id')->constrained('tests')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rezultat_testas');
    }
};
