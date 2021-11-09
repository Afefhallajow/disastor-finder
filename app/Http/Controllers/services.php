<?php
/**

namespace App\Http\Controllers;

use App\Http\Controllers\working\facade;
use App\Http\Controllers\working\structure\doctor_request_class;
use App\Http\Controllers\working\structure\illness;
use App\Http\Controllers\working\structure\symptom;

class services extends Controller
{
    private $facade;
    public function __construct()
    {
        $this->middleware('admin');
        $this->facade=new facade();
    }



    public function add_illness( $illness,  $symptom)
    {
**/   /*     $illness=new illness();
        $illness->name='b1';

        $symptom=new symptom();


        $symptom->temperature=40;
        $symptom->headache=true;
        $symptom->nausea=false;
        $symptom->vomit=true;
        $symptom->cough=true;
        $symptom->difficulty_breathing=false;
        $symptom->loss_tasty_or_smell=false;
        $symptom->weakness=true;
        $symptom->runny_nose=true;
        $symptom->diarrhea=false;
        $symptom->weight_loss=false;
        $symptom->weight_gained=false;
        $symptom->over_weight_before_ill=false;
        $symptom->less_weight_before_ill=false;
        $symptom->stomacheache=true;
        $symptom->bleeding_place='mouth';
        $symptom->faster_breathing=true;
        $symptom->sleep_problems=true;
        $symptom->dizzy=true;
        $symptom->need_toilet_more_than_often=false;
        $symptom->need_toilet_less_than_often=false;
        $symptom->nervous=true;
        $symptom->tense=true;
        $symptom->low_pressure_blood=false;
        $symptom->high_pressure_blood=false;
        $symptom->high_cholesterol=false;
        $symptom->diabetes=true;
        $symptom->down_syndrome=false;
        $symptom->malnourishment=false;
*/
   /**     return $this->facade->add_illness($illness,$symptom);

    }





    public function search_by_symp($symptom,$country)
    {



**/
/**
        $symptom->temperature=33;
        $symptom->temperature=40;
        $symptom->headache=true;
        $symptom->nausea=false;
        $symptom->vomit=true;
        $symptom->cough=true;
        $symptom->difficulty_breathing=false;
        $symptom->loss_tasty_or_smell=false;
        $symptom->weakness=true;
        $symptom->runny_nose=true;
        $symptom->diarrhea=false;
        $symptom->weight_loss=false;
        $symptom->weight_gained=false;
        $symptom->over_weight_before_ill=false;
        $symptom->less_weight_before_ill=false;
        $symptom->stomacheache=true;
        $symptom->bleeding_place='mouth';
        $symptom->faster_breathing=true;
        $symptom->sleep_problems=true;
        $symptom->dizzy=true;
        $symptom->need_toilet_more_than_often=false;
        $symptom->need_toilet_less_than_often=false;
        $symptom->nervous=true;
        $symptom->tense=true;
        $symptom->low_pressure_blood=false;
        $symptom->high_pressure_blood=false;
        $symptom->high_cholesterol=false;
        $symptom->diabetes=true;
        $symptom->down_syndrome=false;
        $symptom->malnourishment=false;



**/
   /**     return $this->facade->searching_by_symptom($symptom,$country);


    }


    public function search_illness_by_name($name,$country){

        return $this->facade->searching_illness_by_name($name,$country);

    }


    public function show_statistics($array){

       return $this->facade->show_statistics($array);
    }


    public function check_existed_illness($name)
    {
        return $this->facade->check_existed_illness($name);
    }

  **//*  public function get_symptom_from_illness_name($name){

        return $this->facade->get_symptom_from_illness_name($name);
    }

    public function get_illness_by_name_service($name){

    return $this->facade->get_illness_by_name_service($name);
    }
*//**
    public function get_symptom_by_id($id){

        return $this->facade->get_symptom_by_id($id);
    }

    public function edit_illness($illness_and_symptom){

        return $this->facade->edit_symptom_illness($illness_and_symptom);

    }



    public function delete_illness($name){

        return $this->facade->delete_illness_service($name);
    }



    ///
    ////doctors
    ///
    ///
    ///

    public function add_a_new_doctor_request(){

    $req=new doctor_request_class();

    ///
    ///fill with input data
    ///

    $req->name='bassel';
    $req->country='syria';
    $req->email='basselabomahmoud@gmail.com';
    $req->phone=9546;
    $req->experience_year=7;
    $req->study='eyes doctor';
    $req->university_name='damascus';
    $req->additional_data='kjklj aksdjklj asdsad qwewqe';

    return $this->facade->add_a_new_doctor_request($req);

}

    public function get_doctor_requests(){

        return $this->facade->get_doctor_requests();

    }


    public function add_refuse_doctor_req(){

        $array=array();

        ///fill with input data
        ///
        /// key = req id , value = true or false
        ///

        $array = [
            26 => true
        ];


        return $this->facade->add_refuse_doctor_req($array);

    }

}
**/
