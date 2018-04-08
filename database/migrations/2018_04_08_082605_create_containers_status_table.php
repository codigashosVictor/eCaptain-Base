<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainersStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers_status', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->double('actual_weight');

            $table->integer('container_id')->unsigned();
            $table->foreign('container_id')->references('id')->on('containers');

            $table->integer('dish_id')->unsigned();
            $table->foreign('dish_id')->references('id')->on('dishes');
            
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
        Schema::dropIfExists('containers_status');
    }
}
