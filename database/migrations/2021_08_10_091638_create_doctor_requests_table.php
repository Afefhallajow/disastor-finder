<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_requests', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->string('country');
            $table->integer('phone');
            $table->string('email');
            $table->string('study');
            $table->string('university_name');
            $table->integer('experience_year');
            $table->string('additional_data');

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
        Schema::dropIfExists('doctor_requests');
    }
}
