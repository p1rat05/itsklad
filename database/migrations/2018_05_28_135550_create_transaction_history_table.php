<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login');
            $table->string('userFullName');
            $table->string('artGroup');
            $table->string('artTradeMark');
            $table->string('artModel');
            $table->dateTime('dateOut');
            $table->dateTime('dateIn');
            $table->text('articleData');
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
        Schema::dropIfExists('transaction_history');
    }
}
