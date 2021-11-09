<?php


namespace App\Http\Controllers\working\services\add_users;


use App\Http\Controllers\working\services\service;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class add_users_service extends service
{

    public function execute()
    {

        $array = $this->inputs->get_input_by_name("array");



        for ($i = 0; $i < count($array); $i++) {

            $user_data=$array[$i];

            $user=User::where('email','=',$user_data->email)->first();

            if($user==null) {
                $user = new User();

                $user->email=$user_data->email;

            }

            $user->name=$user_data->name;
            $user->password=Hash::make($user_data->password);
            $user->country=$user_data->country;
            $user->isadmin=$user_data->isadmin;
            $user->isdoctor=$user_data->isdoctor;
            $user->ispatent=$user_data->ispatent;


            $user->save();
        }




    }
}
