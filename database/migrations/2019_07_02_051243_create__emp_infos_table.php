<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Emp_info', function (Blueprint $table) {
            $table->bigIncrements('employee_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('department');
            $table->integer('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Emp_info');
    }
}
