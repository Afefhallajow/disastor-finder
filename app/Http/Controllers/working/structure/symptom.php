<?php


namespace App\Http\Controllers\working\structure;


use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Float_;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\String_;

class symptom
{
    public $temperature;
    public $headache;
    public $nausea;
    public $vomit;
    public $cough;
    public $difficulty_breathing;
    public $loss_tasty_or_smell;
    public $weakness;
    public $runny_nose;
    public $diarrhea;
    public $weight_loss;
    public $weight_gained;
    public $over_weight_before_ill;
    public $less_weight_before_ill;
    public $stomacheache;
    public $bleeding_place;
    public $faster_breathing;
    public $sleep_problems;
    public $dizzy;
    public $need_toilet_more_than_often;
    public $need_toilet_less_than_often;
    public $nervous;
    public $tense;
    public $low_pressure_blood;
    public $high_pressure_blood;
    public $high_cholesterol;
    public $diabetes;
    public $down_syndrome;
    public $malnourishment;

    public $joint_pain;
    public $red_skin;
    public $sneezing;
    public $ear_pain;
    public $heart_problem;

    //number of all symptoms ,uses in dijkstra ,must change when add or delete a symptom ;
    public $symptoms_number;

    public function __construct()
    {


         $this->temperature=new Float_();
         $this->headache=new Boolean();
         $this->nausea=new Boolean();
         $this->vomit=new Boolean();
         $this->cough=new Boolean();
         $this->difficulty_breathing=new Boolean();
         $this->loss_tasty_or_smell=new Boolean();
         $this->weakness=new Boolean();
         $this->runny_nose=new Boolean();
         $this->diarrhea=new Boolean();
         $this->weight_loss=new Boolean();
         $this->weight_gained=new Boolean();
         $this->over_weight_before_ill=new Boolean();
         $this->less_weight_before_ill=new Boolean();
         $this->stomacheache=new Boolean();
         $this->bleeding_place=new String_();

         $this->faster_breathing=new Boolean();
         $this->sleep_problems=new Boolean();
         $this->dizzy=new Boolean();
         $this->need_toilet_more_than_often=new Boolean();
         $this->need_toilet_less_than_often=new Boolean();
         $this->nervous=new Boolean();
         $this->tense=new Boolean();
         $this->low_pressure_blood=new Boolean();
         $this->high_pressure_blood=new Boolean();
         $this->high_cholesterol=new Boolean();
         $this->diabetes=new Boolean();
         $this->down_syndrome=new Boolean();
         $this->malnourishment=new Boolean();


        $this->joint_pain=new Boolean();
        $this->red_skin=new Boolean();
        $this->sneezing=new Boolean();
        $this->ear_pain=new Boolean();
        $this->heart_problem=new Boolean();




        $this->symptoms_number=29;
    }

    public function get_count(){
        return $this->symptoms_number;
    }
}
