<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('typeofStudent');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dob');
            $table->string('icNo');
            $table->string('nationality');
            $table->string('passport_num');
            $table->string('gender');
            $table->string('mobilenum');
            $table->string('email_address');
            $table->string('address');
            $table->string('city/town');
            $table->string('postcode');
            $table->string('state');
            $table->string('country');
            $table->string('academicqualification');
            $table->string('entrylevel');
            $table->string('programmelevel');
            $table->string('faculty/school');
            $table->string('programmename');
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
        Schema::dropIfExists('courses');
    }
}
