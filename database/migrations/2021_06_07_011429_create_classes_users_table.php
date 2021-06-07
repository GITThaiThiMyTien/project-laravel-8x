<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_users', function (Blueprint $table) {
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('user_id')->on('users');

//            $table->unsignedBigInteger('class_id');
//            $table->foreign('class_id')->references('class_id')->on('classes');
            $table->integer('user_id');
            $table->integer('class_id');
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
        Schema::dropIfExists('classes_users');
    }
}
