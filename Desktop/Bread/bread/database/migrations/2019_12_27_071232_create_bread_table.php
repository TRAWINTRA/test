<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bread', function (Blueprint $table) {
            $table->bigIncrements('bread_id');
            $table->string('bread_name');
            $table->integer('bread_total');
            $table->float('bread_price');
            $table->string('bread_detail');
            $table->string('bread_img');
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
        Schema::dropIfExists('bread');
    }
}
