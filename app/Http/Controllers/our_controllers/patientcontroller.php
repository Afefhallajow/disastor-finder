<?php

namespace App\Http\Controllers\our_controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\services;
use App\Http\Controllers\working\facade;
use App\Http\Controllers\working\structure\symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patientcontroller extends Controller
{
    private $facade;

    public function __construct()
    {
        ///////////////////////////
        /// MiddleWare
        //////////////////////////

        $this->middleware('patient');




        ///////////////////////////
        /// other
        /// //////////////////////

        $this->facade=new facade();



    }




    /////////////////////
    /// services
    /// ////////////////








    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function search_by_sym1()
    {

        return $this->facade->search_by_symptom_1();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////











    ////////////////////////////////////////////////////////////////////////////////////////////

    public function search_by_sym(Request $request)
    {

        $user=$request->user();

        $country=$user->country;

        $symptom = new symptom();


        if ($request->input('temperature') != null)
            $symptom->temperature = $request->input('temperature');
        else
            $symptom->temperature =37;

        if ($request->input('headache') != null)
            $symptom->headache = $request->input('headache');
        else
            $symptom->headache =0;


        if ($request->input('nausea') != null)
            $symptom->nausea = $request->input('nausea');
        else
            $symptom->nausea =0;

        //$symptom->nausea = $request->input('nausea');
        if ($request->input('vomit') != null)
            $symptom->vomit = $request->input('vomit');
        else
            $symptom->vomit =0;

        if ($request->input('cough') != null)
            $symptom->cough = $request->input('cough');
        else
            $symptom->cough =0;

        if ($request->input('difficulty_breathing') != null)
            $symptom->difficulty_breathing = $request->input('difficulty_breathing');
        else
            $symptom->difficulty_breathing =0;

        if ($request->input('loss_tasty_or_smell') != null)
            $symptom->loss_tasty_or_smell = $request->input('loss_tasty_or_smell');
        else
            $symptom->loss_tasty_or_smell =0;

        if ($request->input('weakness') != null)
            $symptom->weakness = $request->input('weakness');
        else
            $symptom->weakness =0;

        if ($request->input('runny_nose') != null)
            $symptom->runny_nose = $request->input('runny_nose');
        else
            $symptom->runny_nose =0;

        if ($request->input('diarrhea') != null)
            $symptom->diarrhea = $request->input('diarrhea');
        else
            $symptom->diarrhea =0;

        if ($request->input('weight_loss') != null)
            $symptom->weight_loss = $request->input('weight_loss');
        else
            $symptom->weight_loss =0;

        if ($request->input('weight_gained') != null)
            $symptom->weight_gained = $request->input('weight_gained');
        else
            $symptom->weight_gained =0;

        if ($request->input('over_weight_before_ill') != null)
            $symptom->over_weight_before_ill = $request->input('over_weight_before_ill');
        else
            $symptom->over_weight_before_ill =0;

        if ($request->input('less_weight_before_ill') != null)
            $symptom->less_weight_before_ill = $request->input('less_weight_before_ill');
        else
            $symptom->less_weight_before_ill =0;

        if ($request->input('stomacheache') != null)
            $symptom->stomacheache = $request->input('stomacheache');
        else
            $symptom->stomacheache =0;

        if ($request->input('bleeding_place')!= null)
            $symptom->bleeding_place = $request->input('bleeding_place');
        else
            $symptom->bleeding_place ='non';



        if ($request->input('faster_breathing') != null)
            $symptom->faster_breathing = $request->input('faster_breathing');

        else
            $symptom->faster_breathing =0;

        if ($request->input('sleep_problems') != null)
            $symptom->sleep_problems = $request->input('sleep_problems');
        else
            $symptom->sleep_problems =0;

        if ($request->input('dizzy') != null)
            $symptom->dizzy = $request->input('dizzy');
        else
            $symptom->dizzy =0;

        if ($request->input('need_toilet_more_than_often') != null)
            $symptom->need_toilet_more_than_often = $request->input('need_toilet_more_than_often');
        else
            $symptom->need_toilet_more_than_often =0;

        if ($request->input('need_toilet_less_than_often') != null)
            $symptom->need_toilet_less_than_often = $request->input('need_toilet_less_than_often');
        else
            $symptom->need_toilet_less_than_often =0;

        if ($request->input('nervous') != null)
            $symptom->nervous = $request->input('nervous');
        else
            $symptom->nervous =0;

        if ($request->input('tense') != null)
            $symptom->tense = $request->input('tense');
        else
            $symptom->tense =0;

        if ($request->input('low_pressure_blood') != null)
            $symptom->low_pressure_blood = $request->input('low_pressure_blood');
        else
            $symptom->low_pressure_blood =0;

        if ($request->input('high_pressure_blood') != null)
            $symptom->high_pressure_blood = $request->input('high_pressure_blood');
        else
            $symptom->high_pressure_blood = 0;

        if ($request->input('high_cholesterol') != null)
            $symptom->high_cholesterol = $request->input('high_cholesterol');
        else
            $symptom->high_cholesterol = 0;
        if ($request->input('diabetes') != null)
            $symptom->diabetes = $request->input('diabetes');
        else
            $symptom->diabetes = 0;

        if ($request->input('down_syndrome') != null)
            $symptom->down_syndrome = $request->input('down_syndrome');
        else
            $symptom->down_syndrome = 0;

        if ($request->input('malnourishment') != null)
            $symptom->malnourishment = $request->input('malnourishment');
        else
            $symptom->malnourishment = 0;


        if ($request->input('joint_pain') != null)
            $symptom->joint_pain = $request->input('joint_pain');
        else
            $symptom->joint_pain = 0;


        if ($request->input('red_skin') != null)
            $symptom->red_skin = $request->input('red_skin');
        else
            $symptom->red_skin = 0;


        if ($request->input('sneezing') != null)
            $symptom->sneezing = $request->input('sneezing');
        else
            $symptom->sneezing = 0;

        if ($request->input('ear_pain') != null)
            $symptom->ear_pain = $request->input('ear_pain');
        else
            $symptom->ear_pain = 0;


        if ($request->input('heart_problem') != null)
            $symptom->heart_problem = $request->input('heart_problem');

        else
            $symptom->heart_problem = 0;


        //test , must remove later
        return DB::transaction(function () use ($request, $symptom, $country) {



            $illness_symptom = $this->facade->searching_by_symptom($symptom,$country);

            if(!$illness_symptom){

                /// not found
                ///

               // echo 'there is no illness !! try another enters';
                return view('myviews.Notfound');
            }else {

                ///view result

//                echo $illness_symptom->illness->id;
  //              echo '   ||   ' . $illness_symptom->symptom;

                return view('myviews.Search_Result')->with("ills", $illness_symptom->illness)->with('symptom',$illness_symptom->symptom);
            } });

    }

    //////////////////////////////////////////////////////////////////////////////////////////////







}
