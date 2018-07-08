<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('alert');
            $table->string('info');
            $table->string('arrivalOrder');
            $table->decimal('price',8,2);
            $table->string('moneda')->default('PEN');            
            $table->integer('procedure_id')->unsigned();
            $table->foreign('procedure_id')->references('id')->on('Procedures')->onDelete('cascade');        
            $table->integer('professional_id')->unsigned();
            $table->foreign('professional_id')->references('id')->on('Professionals')->onDelete('cascade');
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
        Schema::dropIfExists('schedules');
    }
}
