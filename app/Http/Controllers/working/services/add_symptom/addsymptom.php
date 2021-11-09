<?php


namespace App\Http\Controllers\working\services\add_symptom;


use App\Http\Controllers\working\services\service;

use App\Models\symptom;
class addsymptom extends service
{

    public function execute()
    {
        $symptom = $this->inputs->get_input_by_name("symptom");

            $newsymptom=new symptom();


        $newsymptom->temperature=$symptom->temperature;
        $newsymptom->headache=$symptom->headache;
        $newsymptom->nausea=$symptom->nausea;
        $newsymptom->vomit=$symptom->vomit;
        $newsymptom->cough=$symptom->cough;
        $newsymptom->difficulty_breathing=$symptom->difficulty_breathing;
        $newsymptom->loss_tasty_or_smell=$symptom->loss_tasty_or_smell;
        $newsymptom->weakness=$symptom->weakness;
        $newsymptom->runny_nose=$symptom->runny_nose;
        $newsymptom->diarrhea=$symptom->diarrhea;
        $newsymptom->weight_loss=$symptom->weight_loss;
        $newsymptom->weight_gained=$symptom->weight_gained;
        $newsymptom->over_weight_before_ill=$symptom->over_weight_before_ill;
        $newsymptom->less_weight_before_ill=$symptom->less_weight_before_ill;
        $newsymptom->stomacheache=$symptom->stomacheache;
        $newsymptom->bleeding_place=$symptom->bleeding_place;
        $newsymptom->faster_breathing=$symptom->faster_breathing;
        $newsymptom->sleep_problems=$symptom->sleep_problems;
        $newsymptom->dizzy=$symptom->dizzy;
        $newsymptom->need_toilet_more_than_often=$symptom->need_toilet_more_than_often;
        $newsymptom->need_toilet_less_than_often=$symptom->need_toilet_less_than_often;
        $newsymptom->nervous=$symptom->nervous;
        $newsymptom->tense=$symptom->tense;
        $newsymptom->low_pressure_blood=$symptom->low_pressure_blood;
        $newsymptom->high_pressure_blood=$symptom->high_pressure_blood;
        $newsymptom->high_cholesterol=$symptom->high_cholesterol;
        $newsymptom->diabetes=$symptom->diabetes;
        $newsymptom->down_syndrome=$symptom->down_syndrome;
        $newsymptom->malnourishment=$symptom->malnourishment;
        $newsymptom->joint_pain=$symptom->joint_pain;
        $newsymptom->red_skin=$symptom->red_skin;
        $newsymptom->sneezing=$symptom->sneezing;
        $newsymptom->ear_pain=$symptom->ear_pain;
        $newsymptom->heart_problem=$symptom->heart_problem;



        $newsymptom->save();

        return $newsymptom->id;

    }
}
