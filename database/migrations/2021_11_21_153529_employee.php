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
        Schema::create('table_employee', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code');
            $table->string('employee_fullname');
            $table->string('phone_number');
            $table->text('address');
            $table->enum('role');
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
        Schema::dropIfExists('table_employee');
    }
}
