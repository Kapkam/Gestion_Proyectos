<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('proyects', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('employee_id');
          $table->string('name',100);
          $table->string('title');
          $table->date('startDate');
          $table->date('endDate');
          $table->integer('StimatedHours');
          $table->timestamps();

          //Foreing key
          $table->foreign('employee_id')->references('id')->on('employees');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // Schema::dropIfExists('proyectos');
    }
}
