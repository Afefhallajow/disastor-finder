<?php


namespace App\Http\Controllers\working\services\get_illness_by_id;


use App\Http\Controllers\working\services\service;
use App\Models\illness;

class get_illness_by_id_service extends service
{

    public function execute()
    {


        $id = $this->inputs->get_input_by_name("id");

        $illness=illness::find($id);

        return $illness;

    }
}
