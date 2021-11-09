<?php


namespace App\Http\Controllers\working\structure\facade;


use App\Http\Controllers\working\services\service;

class facadeHashmap
{
    ///////string
    private $key=array();

    ///////service
    private $value=array();

    /**
     * facadeHashmap constructor.
     */




    public function add(String $key,service $value){
        array_push($this->key,$key);
        array_push($this->value,$value);
    }

    public function change(String $key,service $value){
        for ($i=0;$i<count($this->key);$i++){

            if($this->key[$i]==$key){
                $this->value[$i]=$value;
                break;
            }
        }

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
