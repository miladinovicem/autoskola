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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
        $table->string('ime');
        $table->string('prezime');
        $table->string('email')->unique();
        $table->string('broj_telefona');
        $table->date('datum_rodjenja');
        $table->enum('status_obuke', ['nije_poceo', 'u_toku', 'zavrsen'])->default('nije_poceo');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
