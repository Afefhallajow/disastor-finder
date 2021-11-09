<?php


namespace App\Http\Controllers\working\services\delete_illness;


use App\Http\Controllers\working\services\service;
use App\Models\illness;
use App\Models\symptom;

class delete_illness_service extends service
{

    public function execute()
    {
        $name = $this->inputs->get_input_by_name("string");


        //echo 'id='.$illness->id;
        $illness=illness::where('name','=',$name)->first();





      //  echo '88'.$illness;

        symptom::destroy($illness->symptom_id);
        illness::destroy($illness->id);


        //return true;
    }
}
