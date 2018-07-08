<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->primary('direction_id');
            $table->integer('direction_id')->unsigned();
            $table->foreign('direction_id')->references('id')->on('partners')->onDelete('cascade');
            $table->string('city');
            $table->string('complement');
            $table->string('neighborhood');
            $table->string('state');
            $table->string('street');
            $table->string('number');
            $table->string('type')->default('bussiness');
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
        Schema::dropIfExists('directions');
    }
}
