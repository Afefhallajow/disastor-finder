<?php


namespace App\Http\Controllers\working\services\add_new_doctor_request;


use App\Http\Controllers\working\services\service;
use App\Models\doctor_request;


class add_new_doctor_request_service extends service
{

    public function execute()
    {
        $req = $this->inputs->get_input_by_name("doctor_req");


        $newreq = new doctor_request();


        $newreq->name=$req->name;
        $newreq->country=$req->country;
        $newreq->phone=$req->phone;
        $newreq->email=$req->email;
        $newreq->study=$req->study;
        $newreq->university_name=$req->university_name;
        $newreq->experience_year=$req->experience_year;
        $newreq->additional_data=$req->additional_data;




        $newreq->save();
        return true;

    }

}
