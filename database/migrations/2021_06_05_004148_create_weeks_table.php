<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->increments('week_id',11);
            $table->string('week_weekdays', 55);
            $table->integer('status_check')->unsigned();
            $table->softDeletesTz($column = 'create_at', $precision = 0);
            $table->softDeletesTz($column = 'end_at', $precision = 0);
            $table->integer('diary_id');
//            $table->unsignedBigInteger('diary_id');
//            $table->foreign('diary_id')->references('diary_id')->on('diaries');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeks');
    }
}
