<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariesContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries_contents', function (Blueprint $table) {
            $table->increments('diarycontent_id',11);
            $table->string('diarycontent_weekday', 11);
            $table->string('diarycontent_work',255);
            $table->string('diarycontent_content', 255);
            $table->string('diarycontent_note', 255);
            $table->string('diarycontent_teacher_comment', 255);
            $table->string('diarycontent_trainer_comment', 255);
            $table->unsignedBigInteger('week_id');
            $table->foreign('week_id')->references('week_id')->on('weeks');
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
        Schema::dropIfExists('diaries_contents');
    }
}
