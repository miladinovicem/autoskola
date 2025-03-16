<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
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
    
            // Postavljanje stranih ključeva
            $table->foreign('kandidat_id')->references('id')->on('kandidats')->onDelete('cascade');
            $table->foreign('instruktor_id')->references('id')->on('instruktors')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cas_voznjes');
    }
};
