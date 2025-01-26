<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateImeColumnInKandidatsTable extends Migration
{
    public function up()
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->string('ime', 100)->change();
        });
    }

    public function down()
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->string('ime', 50)->change(); // Vraćanje na originalnu veličinu
        });
    }
}
