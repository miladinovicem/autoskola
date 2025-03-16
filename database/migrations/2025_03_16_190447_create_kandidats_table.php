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
    Schema::create('kandidats', function (Blueprint $table) {
        $table->id();
        $table->string('ime');
        $table->string('prezime');
        $table->string('email')->unique();
        $table->string('brojTelefona');
        $table->date('datumRodjenja');
        $table->string('statusObuke');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kandidats');
    }
};
