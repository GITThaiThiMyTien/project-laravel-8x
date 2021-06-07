<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_companies', function (Blueprint $table) {
//            $table->unsignedBigInteger('category_id');
//            $table->foreign('category_id')->references('category_id')->on('categories');
//            $table->unsignedBigInteger('company_id');
//            $table->foreign('company_id')->references('company_id')->on('companies');
//            $table->integer('status', 11)->unsigned();
            $table->integer('category_id');
            $table->integer('company_id');
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
        Schema::dropIfExists('categories_companies');
    }
}
