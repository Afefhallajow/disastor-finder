<?php


namespace App\Http\Controllers\working\services\req_add_doctor;


use App\Http\Controllers\working\services\service;
use App\Mail\sendmail;
use App\Models\doctor_request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class add_doctor_req extends service
{

    public function execute()
    {
        $array = $this->inputs->get_input_by_name("array");

        $doctor_reqs=array();

        $characters= '0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*+-*<>ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        for($i=0;$i<count($array);$i++) {

            $id = $array[$i];

            $doctor_req = doctor_request::find($id);

            if($doctor_req==null){echo 'no id !!';continue;}

            $password='';

            for($i=0;$i<8;$i++){
                $index=rand(0,strlen($characters)-1);
                $password .=$characters[$index];
            }


            $doctor_req->password=$password;

            $user=User::where('email','=',$doctor_req->email)->first();

            if($user!=null){

                $details = [
                    'title' => 'Email from Disease Finder company',
                    'body' => 'congratulations !! ,your doctor request has been approved.You are registered in our site as a patient,we changed your account .Now you can sign in as a doctor .Your new password is  '.$password
                ];
            }
            else{


                $details = [
                    'title' => 'Email from Disease Finder company',
                    'body' => 'congratulations !! ,your doctor request has been approved.Now you can sign in as a doctor.Your password is  '.$password
                ];

            }

            Mail::to($doctor_req->email)->send(new sendmail($details));


            doctor_request::destroy($id);

            array_push($doctor_reqs,$doctor_req);
        }

        return $doctor_reqs;

    }

}
