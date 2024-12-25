<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//azuriranje postojece kolone bez brisanja cele tabele, migracije koje se mogu
//ponistiti (rollaback)
//pravi se nova migracija koja ima up- dodaje/menja kolone
// i down- vraca promene nazad (rollback)
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->string('email')->nullable(false)->change(); 
        });
    }
};
