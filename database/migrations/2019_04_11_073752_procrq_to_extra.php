<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProcrqToExtra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_procesingrq', function (Blueprint $table) {
            $table->bigInteger("procesingrq_id");
            $table->bigInteger("extra_id");

            $table->primary(["procesingrq_id","extra_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('extra_procesingrq');
    }
}
