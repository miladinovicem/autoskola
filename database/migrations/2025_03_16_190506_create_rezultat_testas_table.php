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
        Schema::create('rezultat_testas', function (Blueprint $table) {
            $table->id();
            $table->integer('osvojeniBodovi');
            $table->date('datumPolaganja');
            $table->unsignedBigInteger('kandidat_id');
            $table->unsignedBigInteger('test_id');
            $table->timestamps();
    
           
            $table->foreign('kandidat_id')->references('id')->on('kandidats')->onDelete('cascade');
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezultat_testas');
    }
};
