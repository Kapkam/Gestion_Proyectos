<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('employees', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('department_id');
          $table->string('name',100);
          $table->string('surname');
          $table->string('email',100);
          $table->string('telephone');
          $table->timestamps();

          $table->foreign('department_id')->references('id')->on('departments');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
