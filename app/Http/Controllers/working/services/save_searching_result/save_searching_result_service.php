<?php


namespace App\Http\Controllers\working\services\save_searching_result;


use App\Http\Controllers\working\services\service;
use App\Models\illness;
use App\Models\search_result;
use DateTime;

class save_searching_result_service extends service
{

    public function execute()
    {

        $illness = $this->inputs->get_input_by_name("illness");

        $country = $this->inputs->get_input_by_name("string");


        $search_result= new search_result();





        $search_result->illness_name = $illness->name;
        $search_result->country=$country;

        $dt=new DateTime();

        $search_result->hour=$dt->format('h');
        $search_result->day=$dt->format('d');
        $search_result->month=$dt->format('m');
        $search_result->year=$dt->format('Y');




        $search_result->save();
        return view("welcome");

    }
}
