<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id',11);
            $table->string('user_name')->nullable();
            $table->string('user_email',100)->unique();
            $table->string('user_password',200);
            $table->integer('user_type_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('faculty_id')->nullable();
            $table->rememberToken()->nullable();
            $table->softDeletesTz($column = 'deleted_at', $precision = 0)->nullable();
            $table->integer('status')->nullable(true);
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
        Schema::dropIfExists('users');
    }
}
