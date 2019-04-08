<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('ac')->default(true);
            $table->integer('luggage');
            $table->boolean('booked')->default(false);
            $table->integer('doors');
            $table->string('fuel');
            $table->double('price');
            $table->integer('seats');
            $table->string('transmission');
            $table->string('car_name');
            $table->string('type');
            $table->string('car_photo')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
