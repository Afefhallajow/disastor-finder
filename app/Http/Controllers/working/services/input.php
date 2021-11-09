<?php


namespace App\Http\Controllers\working\services;


use App\Http\Controllers\working\structure\input\inputHashmap;
use App\Http\Controllers\working\structure\illness;
use App\Http\Controllers\working\structure\symptom;
use App\Http\Controllers\working\structure\doctor_request_class;

class input
{
    private $inputs;

    /**
     * input constructor.
     * @param $inputs
     */

    public function __construct()
    {
        $this->inputs = new inputHashmap();
    }

    public function add_new_input($value){


//echo 'aa';



        if(is_object($value) && (get_class($value)==illness::class || get_class($value)==\App\Models\illness::class)){

            $this->inputs->add_illness($value);
        }
        else if(is_object($value) && (get_class($value)==symptom::class )){

            $this->inputs->add_symptom($value);
        }

        else if(is_object($value) && (get_class($value)==doctor_request_class::class )){

            $this->inputs->add_doctor_req($value);
        }

        else if(is_array($value)){
            $this->inputs->add_array($value);
        }
        else if(is_numeric($value)){
            $this->inputs->add_id($value);
        }
        else{

            $this->inputs->add_String($value);
        }
    }

    public function get_input_by_name($name){
        return $this->inputs->get($name);
    }


}
