<?php


namespace App\Http\Controllers\working\services\get_symptom_by_id;


use App\Http\Controllers\working\services\service;
use App\Models\illness;
use App\Models\symptom;

class get_symptom_by_id_service extends service
{

    public function execute()
    {


        $id = $this->inputs->get_input_by_name("id");



        $symtom=symptom::all()->where('id','=',$id)->first;



        return $symtom;

    }

}
