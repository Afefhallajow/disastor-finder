<?php


namespace App\Http\Controllers\working\services\get_doctor_requests;


use App\Http\Controllers\working\services\service;
use App\Models\doctor_request;

class get_doctor_requests_service extends service
{

    public function execute()
    {
        $doctor_reqs=doctor_request::all();
        return $doctor_reqs;

    }


    }
