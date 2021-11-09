<?php


namespace App\Http\Controllers\our_controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\working\facade;
use App\Http\Controllers\working\structure\doctor_request_class;
use App\Models\doctor_request;
use App\Models\illness;
use App\Models\symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
    private $facade;

    public function __construct()
    {
        ///////////////////////////
        /// MiddleWare
        //////////////////////////

        $this->middleware('admin');


        ///////////////////////////
        /// other
        /// //////////////////////

        $this->facade = new facade();


    }








    /////////////////////
    /// services
    /// ////////////////


    //////////////////////////////////////////////////////////////////////////

    public function get_doctor_requests(Request $request)
    {


        return DB::transaction(function () use ($request) {

            $doctor_request = $this->facade->get_doctor_requests();


            return view('myviews.doctorRequest')->with('doctor_reqs', $doctor_request);
//return $doctor_request;
        });

    }

    ////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////////////////////////////////////////////////

    public function add_refuse_doctor_req(Request $request)
    {


        $array = array();

        ///fill with input data
        ///
        /// key = req id , value = true or false
        ///
        $key = $request->input('id');
        $value = $request->input('value');


        $array=[
          $key=>$value
        ];

       /* if ($value == 0) {
            $value = true;
        } else {
            $value = false;
        }
        $array = [
        ];
        $doctor_request = doctor_request::where('id', $key)->get();
        $name = $doctor_request[0]->name;
        return view('myviews.doctorRequestResult')->with('doctor_req', $doctor_request[0]);
*/
        DB::transaction(function () use ($request, $array,$key) {

            $doctor_request = doctor_request::where('id', $key)->get();

            $reslut=    $this->facade->add_refuse_doctor_req($array);


            return view('myviews.doctorRequestResult')->with('doctor_req', $doctor_request[0]);

        });
    }

    ///////////////////////////////////////////////////////////////////////////////

/////test

public function test()
{
$name='man';
    $illness=illness::where('name','=',$name)->get();

    $symtom=symptom::where('id','=',$illness[0]->symptom_id)->get();

    return $illness[0]->symptom_id;


}








}
