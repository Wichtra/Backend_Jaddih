<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('userId');
            $table->unsignedBigInteger('ticId');
            $table->integer('transQty');
            $table->enum('transStatus', ['Pending', 'Success', 'Failed']);
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('ticId')->references('id')->on('tikets')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
