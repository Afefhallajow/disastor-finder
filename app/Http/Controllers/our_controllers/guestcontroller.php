<?php


namespace App\Http\Controllers\our_controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\services;
use App\Http\Controllers\working\facade;
use App\Http\Controllers\working\structure\doctor_request_class;
use App\Models\doctor_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class guestcontroller extends Controller
{
    private $facade;

    public function __construct()
    {
        $this->facade=new facade();
    }







    /////////////////////
    /// services
    /// ////////////////








    /////////////////////////////////////////////////////////////////

    public function index()
    {
        return view('doctor');
    }

    /////////////////////////////////////////////////////////////////










    //////////////////////////////////////////////////////////////////

    public function search_ill_by_name1 ()
    {
        return view('myviews.search_ill');
    }


    //////////////////////////////////////////////////////////////////









    //////////////////////////////////////////////////////////////////

    public function search_ill_by_name (Request $request)
    {

        $name = $request->input('name'); // get from request

        $country = \Illuminate\Support\Facades\Auth::user()->country;
        // get from request



        return DB::transaction(function () use ($request, $name,$country) {

            if ($this->facade->check_existed_illness($name)) {

                $illness_and_symptom = $this->facade->searching_illness_by_name($name, $country);

                $illness = $illness_and_symptom->illness;
                $symptom = $illness_and_symptom->symptom;


                ///show in view

                //for tset
                return view('myviews.search_name_result')->with('ill',$illness)->with('symptom',$symptom );

            } else {
                /// not found
                return view('myviews.Notfound');

            }

        });
    }

    //////////////////////////////////////////////////////////////////








   //////////////////////////////////////////////////////////////////////

    public function permision()
    {
        return $this->facade->permision();

    }

    //////////////////////////////////////////////////////////////////











    //////////////////////////////////  doctor  ///////////////////////////////////

    public function add_a_new_doctor_request(Request $request ){

        $req=new doctor_request_class();

        ///
        ///fill with input data
        ///

        $req->name=$request->name;
        $req->country=$request->country;
        $req->email=$request->email;
        $req->phone=$request->phone;
        $req->experience_year=$request->experience_year;
        $req->study=$request->study;
        $req->university_name=$request->university_name;
        $req->additional_data=$request->additional_data;

        return DB::transaction(function () use ($request, $req) {

             $this->facade->add_a_new_doctor_request($req);
             $req1=doctor_request::where('name',  $req->name)->get();
            $req->id=$req1[0]->id;
        return  view('myviews.doctorRequestResult')->with('doctor_req',$req);
        });
    }

    ///////////////////////////////////////////////////////////////////////////////






}
