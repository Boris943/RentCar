<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessingRqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processing_rqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("pick_up_location");
            $table->date("pick_up_date");
            $table->time("pick_up_time");
            $table->string("drop_off_location");
            $table->date("drop_off_date");
            $table->time("drop_off_time");
            $table->bigInteger("car_id");
            $table->bigInteger('sum_price');
            $table->string("full_name");
            $table->bigInteger("age");
            $table->string("email");
            $table->string("phone_num");
            $table->string("country");
            $table->text("message")->nullable();
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
        Schema::dropIfExists('processing_rqs');
    }
}
