<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveBrojTelefonaFromKandidatsTable extends Migration
{
    public function up()
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->dropColumn('broj_telefona');
        });
    }

    public function down()
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->string('broj_telefona')->nullable();
        });
    }
}