<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumImageToPlacesTable extends Migration
{
    public function up()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->string('image')->after('plaName')->nullable();
        });
    }

    public function down()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
