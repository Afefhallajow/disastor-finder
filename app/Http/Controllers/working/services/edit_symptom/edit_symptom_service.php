<?php


namespace App\Http\Controllers\working\services\edit_symptom;


use App\Http\Controllers\working\services\service;
use App\Models\symptom;

class edit_symptom_service extends service
{

    public function execute()
    {
        $symptom = $this->inputs->get_input_by_name("symptom");



        // echo 'id= '.$symptom->id.' ||';


        $newsymptom=symptom::findOrfail($symptom->id);




        $changed=false;


        if ($symptom->temperature != null &&   $newsymptom->temperature!=$symptom->temperature) {
               $newsymptom->temperature = $symptom->temperature;
               $changed=true;
             }

        if ($symptom->headache != null && $newsymptom->headache!=$symptom->headache)
        {           $newsymptom->headache = $symptom->headache;
                    $changed=true;
        }

        if ($symptom->nausea != null && $newsymptom->nausea!=$symptom->nausea)
        {           $newsymptom->nausea = $symptom->nausea;
                     $changed=true;
        }

        if ($symptom->vomit != null && $newsymptom->vomit!=$symptom->vomit)
        {           $newsymptom->vomit = $symptom->vomit;
                    $changed=true;
        }

        if ($symptom->cough != null && $newsymptom->cough!=$symptom->cough)
        {           $newsymptom->cough = $symptom->cough;
                    $changed=true;
        }

        if ($symptom->difficulty_breathing != null && $newsymptom->difficulty_breathing!=$symptom->difficulty_breathing)
        {           $newsymptom->difficulty_breathing = $symptom->difficulty_breathing;
                    $changed=true;
        }

        if ($symptom->loss_tasty_or_smell != null &&  $newsymptom->loss_tasty_or_smell!=$symptom->loss_tasty_or_smell)
        {           $newsymptom->loss_tasty_or_smell = $symptom->loss_tasty_or_smell;
                    $changed=true;
        }

        if ($symptom->weakness != null && $newsymptom->weakness!=$symptom->weakness)
        {           $newsymptom->weakness = $symptom->weakness;
                    $changed=true;
        }

        if ($symptom->runny_nose != null && $newsymptom->runny_nose!=$symptom->runny_nose)
        {           $newsymptom->runny_nose = $symptom->runny_nose;
                    $changed=true;
        }

        if ($symptom->diarrhea != null && $newsymptom->diarrhea!=$symptom->diarrhea)
        {           $newsymptom->diarrhea = $symptom->diarrhea;
                    $changed=true;
        }

        if ($symptom->weight_loss != null && $newsymptom->weight_loss!=$symptom->weight_loss)
        {           $newsymptom->weight_loss = $symptom->weight_loss;
                    $changed=true;
        }

        if ($symptom->weight_gained != null && $newsymptom->weight_gained!=$symptom->weight_gained)
        {           $newsymptom->weight_gained = $symptom->weight_gained;
                    $changed=true;
        }

        if ($symptom->over_weight_before_ill != null && $newsymptom->over_weight_before_ill!=$symptom->over_weight_before_ill)
        {           $newsymptom->over_weight_before_ill = $symptom->over_weight_before_ill;
                    $changed=true;
        }

        if ($symptom->less_weight_before_ill != null && $newsymptom->less_weight_before_ill!=$symptom->less_weight_before_ill)
        {           $newsymptom->less_weight_before_ill = $symptom->less_weight_before_ill;
                    $changed=true;
        }

        if ($symptom->stomacheache != null && $newsymptom->stomacheache!=$symptom->stomacheache)
        {           $newsymptom->stomacheache = $symptom->stomacheache;
                    $changed=true;
        }

        if ($symptom->bleeding_place!= null && $newsymptom->bleeding_place!=$symptom->bleeding_place)
        {           $newsymptom->bleeding_place = $symptom->bleeding_place;
                    $changed=true;
        }

        if ($symptom->faster_breathing != null && $newsymptom->faster_breathing!=$symptom->faster_breathing)
        {           $newsymptom->faster_breathing = $symptom->faster_breathing;
                    $changed=true;
        }

        if ($symptom->sleep_problems != null && $newsymptom->sleep_problems!=$symptom->sleep_problems)
        {           $newsymptom->sleep_problems = $symptom->sleep_problems;
                    $changed=true;
        }

        if ($symptom->dizzy != null && $newsymptom->dizzy!=$symptom->dizzy)
        {           $newsymptom->dizzy = $symptom->dizzy;
                    $changed=true;
        }

        if ($symptom->need_toilet_more_than_often != null && $newsymptom->need_toilet_more_than_often!=$symptom->need_toilet_more_than_often)
        {           $newsymptom->need_toilet_more_than_often = $symptom->need_toilet_more_than_often;
                    $changed=true;
        }

        if ($symptom->need_toilet_less_than_often != null && $newsymptom->need_toilet_less_than_often!=$symptom->need_toilet_less_than_often)
        {           $newsymptom->need_toilet_less_than_often = $symptom->need_toilet_less_than_often;
                    $changed=true;
        }

        if ($symptom->nervous!= null && $newsymptom->nervous!=$symptom->nervous)
        {           $newsymptom->nervous = $symptom->nervous;
                    $changed=true;
        }

        if ($symptom->tense != null && $newsymptom->tense!=$symptom->tense)
        {           $newsymptom->tense = $symptom->tense;
                    $changed=true;
        }

        if ($symptom->low_pressure_blood != null && $newsymptom->low_pressure_blood!=$symptom->low_pressure_blood)
        {           $newsymptom->low_pressure_blood = $symptom->low_pressure_blood;
                    $changed=true;
        }

        if ($symptom->high_pressure_blood != null && $newsymptom->high_pressure_blood!=$symptom->high_pressure_blood)
        {           $newsymptom->high_pressure_blood = $symptom->high_pressure_blood;
                    $changed=true;
        }

        if ($symptom->high_cholesterol != null && $newsymptom->high_cholesterol!=$symptom->high_cholesterol)
        {           $newsymptom->high_cholesterol = $symptom->high_cholesterol;
                    $changed=true;
        }

        if ($symptom->diabetes != null && $newsymptom->diabetes!=$symptom->diabetes)
        {           $newsymptom->diabetes = $symptom->diabetes;
                    $changed=true;
        }

        if ($symptom->down_syndrome != null && $newsymptom->down_syndrome!=$symptom->down_syndrome)
        {           $newsymptom->down_syndrome = $symptom->down_syndrome;
                    $changed=true;
        }

        if ($symptom->malnourishment != null && $newsymptom->malnourishment!=$symptom->malnourishment)
        {           $newsymptom->malnourishment = $symptom->malnourishment;
                    $changed=true;
        }

        if ($symptom->joint_pain != null && $newsymptom->joint_pain!=$symptom->joint_pain)
        {           $newsymptom->joint_pain=$symptom->joint_pain;
                    $changed=true;
        }

        if ($symptom->red_skin != null && $newsymptom->red_skin!=$symptom->red_skin)
        {           $newsymptom->red_skin=$symptom->red_skin;
                    $changed=true;
        }

        if ($symptom->sneezing != null && $newsymptom->sneezing!=$symptom->sneezing)
        {           $newsymptom->sneezing=$symptom->sneezing;
                    $changed=true;
        }

        if ($symptom->ear_pain != null && $newsymptom->ear_pain!=$symptom->ear_pain)
        {           $newsymptom->ear_pain=$symptom->ear_pain;
                    $changed=true;
        }

        if ($symptom->heart_problem != null && $newsymptom->heart_problem!=$symptom->heart_problem)
        {            $newsymptom->heart_problem=$symptom->heart_problem;
                     $changed=true;
        }







        if ($changed)
        {
            $newsymptom->save();
            return true;
        }
        else{return false;}
    }
}
