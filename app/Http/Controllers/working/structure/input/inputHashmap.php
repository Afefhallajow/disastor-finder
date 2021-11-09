<?php


namespace App\Http\Controllers\working\structure\input;


use App\Http\Controllers\working\structure\illness;
use App\Http\Controllers\working\structure\symptom;

class inputHashmap
{

    ///////string
    private $key=array();

    ///////obj
    private $value=array();




    public function add_illness( $value){
        array_push($this->key,'illness');
        array_push($this->value,$value);
    }


    public function add_String(String $value){
        array_push($this->key,'string');
        array_push($this->value,$value);
    }
    public function add_symptom(symptom $value){
        array_push($this->key,'symptom');
        array_push($this->value,$value);
    }

    public function add_array($value){
        array_push($this->key,'array');
        array_push($this->value,$value);
    }

    public function add_id($value){
        //echo $value;
        array_push($this->key,'id');
        array_push($this->value,$value);
    }


    public function add_doctor_req($value){

        array_push($this->key,'doctor_req');
        array_push($this->value,$value);
    }




    public function get(String $key)
    {

        for ($i=0;$i<count($this->key);$i++){


            if($this->key[$i]==$key){
                return $this->value[$i];}
        }
        return null;
    }


}
