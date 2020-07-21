<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('layout_id')->unsigned();
            $table->foreign('layout_id')->references('id')->on('layouts');
            $table->bigInteger('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->bigInteger('table_id')->unsigned();
            $table->foreign('table_id')->references('id')->on('tables');
            $table->integer('x');
            $table->integer('y');
            $table->integer('width');
            $table->integer('height');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layout_table');
    }
}
