<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdresaToInstruktorsTable extends Migration
{
    public function up()
    {
        Schema::table('instruktors', function (Blueprint $table) {
            $table->string('adresa')->nullable()->after('email'); // Dodaje novu kolonu posle `email`
        });
    }

    public function down()
    {
        Schema::table('instruktors', function (Blueprint $table) {
            $table->dropColumn('adresa');
        });
    }
}
