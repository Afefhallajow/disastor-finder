<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptoms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->float('temperature')->default(37.00);
            $table->boolean('headache')->default(0);
            $table->boolean('nausea')->default(0);
            $table->boolean('vomit')->default(0);
            $table->boolean('cough')->default(0);
            $table->boolean('difficulty_breathing')->default(0);
            $table->boolean('loss_tasty_or_smell')->default(0);
            $table->boolean('weakness')->default(0);
            $table->boolean('runny_nose')->default(0);
            $table->boolean('diarrhea')->default(0);
            $table->boolean('weight_loss')->default(0);
            $table->boolean('weight_gained')->default(0);
            $table->boolean('over_weight_before_ill')->default(0);
            $table->boolean('less_weight_before_ill')->default(0);
            $table->boolean('stomacheache')->default(0);
            $table->String('bleeding_place')->default('non');
            $table->boolean('faster_breathing')->default(0);
            $table->boolean('sleep_problems')->default(0);
            $table->boolean('dizzy')->default(0);
            $table->boolean('need_toilet_more_than_often')->default(0);
            $table->boolean('need_toilet_less_than_often')->default(0);
            $table->boolean('nervous')->default(0);
            $table->boolean('tense')->default(0);
            $table->boolean('low_pressure_blood')->default(0);
            $table->boolean('high_pressure_blood')->default(0);
            $table->boolean('high_cholesterol')->default(0);
            $table->boolean('diabetes')->default(0);
            $table->boolean('down_syndrome')->default(0);
            $table->boolean('malnourishment')->default(0);


            $table->boolean('joint_pain')->default(0);
            $table->boolean('red_skin')->default(0);
            $table->boolean('sneezing')->default(0);
            $table->boolean('ear_pain')->default(0);
            $table->boolean('heart_problem')->default(0);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symptoms');
    }
}
