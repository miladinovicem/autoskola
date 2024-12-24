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
        Schema::create('cas_voznjes', function (Blueprint $table) {
            $table->id();
            $table->date('datum');
            $table->time('vreme');
            $table->unsignedBigInteger('kandidat_id');
            $table->unsignedBigInteger('instruktor_id');
            $table->timestamps();
    
            $table->foreign('kandidat_id')->references('id')->on('kandidats')->onDelete('cascade');
            $table->foreign('instruktor_id')->references('id')->on('instruktors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cas_voznjes');
    }
};
