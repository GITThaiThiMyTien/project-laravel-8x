<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_permissions', function (Blueprint $table) {
//            $table->unsignedBigInteger('permission_id');
//            $table->foreign('permission_id')->references('permission_id')->on('permissions');
//
//            $table->unsignedBigInteger('group_id');
//            $table->foreign('group_id')->references('group_id')->on('groups');

            $table->integer('permission_id');
            $table->integer('group_id');
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
        Schema::dropIfExists('groups_permissions');
    }
}
