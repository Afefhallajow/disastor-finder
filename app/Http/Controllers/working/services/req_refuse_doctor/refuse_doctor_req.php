<?php


namespace App\Http\Controllers\working\services\req_refuse_doctor;


use App\Http\Controllers\working\services\service;
use App\Mail\sendmail;
use App\Models\doctor_request;
use Illuminate\Support\Facades\Mail;

class refuse_doctor_req extends service
{

    public function execute()
    {
        $array = $this->inputs->get_input_by_name("array");

        //$doctor_reqs=array();

        for($i=0;$i<count($array);$i++) {
            $id = $array[$i];


            $doctor_req = doctor_request::find($id);


            doctor_request::destroy($id);

            $details = [
                'title' => 'Email from Disease Finder company',
                'body' => 'We are sorry ,your doctor request has been refused. '
            ];

            // "mheealdeenalghazali@gmail.com"
            Mail::to($doctor_req->email)->send(new sendmail($details));
        }
        return $doctor_req;

    }
}
