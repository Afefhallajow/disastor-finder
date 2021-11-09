<?php


namespace App\Http\Controllers\our_controllers;

use App\Http\Controllers\Controller;
//use App\Http\Controllers\services;
use App\Http\Controllers\working\facade;
use App\Http\Controllers\working\structure\illness;
use App\Http\Controllers\working\structure\illness_and_symptom;
use App\Http\Controllers\working\structure\statistics_class;
use App\Http\Controllers\working\structure\symptom;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class doctorcontroller extends Controller
{
    private $facade;

    public function __construct()
    {

        ///////////////////////////
        /// MiddleWare
        //////////////////////////

        $this->middleware('doctor');




        ///////////////////////////
        /// other
        /// //////////////////////

        $this->facade=new facade();


    }








    /////////////////////
    /// services
    /// ////////////////




    ////////////////////////////////////////////////////////////////////////////////////////////

    public function add_illness1()
    {
        return $this->facade->add_illness_1();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////










    ////////////////////////////////////////////////////////////////////////////////////////////

    /// check if the name is already exist
    public function add_illness2($name)
    {


        return DB::transaction(function () use ( $name) {

            if ($this->facade->check_existed_illness($name)) {
                // error / found it
            } else {
                // ok
                // show symptoms page
            }
        });
    }
    /////////////////////////////////////////////////////////////////////////////////////////////









    ////////////////////////////////////////////////////////////////////////////////////////////


    public function add_illness(Request $request)
    {
        $illness=new illness();
        $symptom=new symptom();

        $illness->name = $request->input('name');


        if ($this->facade->check_existed_illness($illness->name)) {
            // error / found it
            return view('myviews.found');
        } else {

            if ($request->input('temperature') != null)
                $symptom->temperature = $request->input('temperature');
            else
                $symptom->temperature = 37;

            if ($request->input('headache') != null)
                $symptom->headache = $request->input('headache');
            else
                $symptom->headache = 0;


            if ($request->input('nausea') != null)
                $symptom->nausea = $request->input('nausea');
            else
                $symptom->nausea = 0;

            //$symptom->nausea = $request->input('nausea');
            if ($request->input('vomit') != null)
                $symptom->vomit = $request->input('vomit');
            else
                $symptom->vomit = 0;

            if ($request->input('cough') != null)
                $symptom->cough = $request->input('cough');
            else
                $symptom->cough = 0;

            if ($request->input('difficulty_breathing') != null)
                $symptom->difficulty_breathing = $request->input('difficulty_breathing');
            else
                $symptom->difficulty_breathing = 0;

            if ($request->input('loss_tasty_or_smell') != null)
                $symptom->loss_tasty_or_smell = $request->input('loss_tasty_or_smell');
            else
                $symptom->loss_tasty_or_smell = 0;

            if ($request->input('weakness') != null)
                $symptom->weakness = $request->input('weakness');
            else
                $symptom->weakness = 0;

            if ($request->input('runny_nose') != null)
                $symptom->runny_nose = $request->input('runny_nose');
            else
                $symptom->runny_nose = 0;

            if ($request->input('diarrhea') != null)
                $symptom->diarrhea = $request->input('diarrhea');
            else
                $symptom->diarrhea = 0;

            if ($request->input('weight_loss') != null)
                $symptom->weight_loss = $request->input('weight_loss');
            else
                $symptom->weight_loss = 0;

            if ($request->input('weight_gained') != null)
                $symptom->weight_gained = $request->input('weight_gained');
            else
                $symptom->weight_gained = 0;

            if ($request->input('over_weight_before_ill') != null)
                $symptom->over_weight_before_ill = $request->input('over_weight_before_ill');
            else
                $symptom->over_weight_before_ill = 0;

            if ($request->input('less_weight_before_ill') != null)
                $symptom->less_weight_before_ill = $request->input('less_weight_before_ill');
            else
                $symptom->less_weight_before_ill = 0;

            if ($request->input('stomacheache') != null)
                $symptom->stomacheache = $request->input('stomacheache');
            else
                $symptom->stomacheache = 0;

            if ($request->input('bleeding_place') != null)
                $symptom->bleeding_place = $request->input('bleeding_place');
            else
                $symptom->bleeding_place = 'non';


            if ($request->input('faster_breathing') != null)
                $symptom->faster_breathing = $request->input('faster_breathing');

            else
                $symptom->faster_breathing = 0;

            if ($request->input('sleep_problems') != null)
                $symptom->sleep_problems = $request->input('sleep_problems');
            else
                $symptom->sleep_problems = 0;

            if ($request->input('dizzy') != null)
                $symptom->dizzy = $request->input('dizzy');
            else
                $symptom->dizzy = 0;

            if ($request->input('need_toilet_more_than_often') != null)
                $symptom->need_toilet_more_than_often = $request->input('need_toilet_more_than_often');
            else
                $symptom->need_toilet_more_than_often = 0;

            if ($request->input('need_toilet_less_than_often') != null)
                $symptom->need_toilet_less_than_often = $request->input('need_toilet_less_than_often');
            else
                $symptom->need_toilet_less_than_often = 0;

            if ($request->input('nervous') != null)
                $symptom->nervous = $request->input('nervous');
            else
                $symptom->nervous = 0;

            if ($request->input('tense') != null)
                $symptom->tense = $request->input('tense');
            else
                $symptom->tense = 0;

            if ($request->input('low_pressure_blood') != null)
                $symptom->low_pressure_blood = $request->input('low_pressure_blood');
            else
                $symptom->low_pressure_blood = 0;

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


            return DB::transaction(function () use ($request, $illness, $symptom) {
//$request[0]->save();


                $this->facade->add_illness($illness, $symptom);
                return view('myviews.Done');
            });
        }





    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////










    ////////////////////////////////////////////////////////////////////////////////////////////

    public function ShowStact1()
    {
        return $this->facade->show_statistic();

    }

    ///////////////////////////////////////////////////////////////////////////////////////////












    ////////////////////////////////////////////////////////////////////////////////////////////

    public function ShowStact(Request $request)
    {


        if($request->input('year') ==null
            &&$request->input('month')==null
            &&$request->input('day')==null
            &&$request->input('hour')==null
            &&$request->input('country')==null
            && $request->input('illness_name')==null){
            echo 'wrong';
                  }


            $array=array();

        if($request->input('year') !=null){
            $array['year']=$request->input('year');
        }

        if($request->input('month')!=null){
            $array['month']=$request->input('month');
        }
        if($request->input('day')!=null){
            $array['day']=$request->input('day');
        }
        if($request->input('hour')!=null){
            $array['hour']=$request->input('hour');
        }
        if($request->input('country')!=null){
            $array['country']=$request->input('country');
        }
        if($request->input('illness_name')!=null){
            $array['illness_name']=$request->input('illness_name');
        }


        return DB::transaction(function () use ($request, $array) {


            $result= $this->facade->show_statistics($array);
            //$array1=array();
            //$array1=$result->illness_country;
            $num =0;
            foreach ($result as $one ) {

                $keys[$num] = array_keys($one->illness_country);
                $num++;

            }
             return view('myviews.ShowStactisResult')->with('results',$result)->with('keys',$keys);

        });



    }

    /////////////////////////////////////////////////////////////////////////////////////////////










    ////////////////////////////////////////////////////////////////////////////////////////////

    public function edit1()
    {
        return $this->facade->edit_1();
    }

    /////////////////////////////////////////////////////////////////////////////////////////////










    /////////////////////////////////////////////////////////////////////////////////////////////
    public function edit2(Request $request)
    {

//        $illness = \App\Models\illness::find($request->id);

        $name= $request->name; /// get it from request



        return DB::transaction(function () use ($request, $name) {

            if($this->facade->check_existed_illness($name)) {

                $symptom = $this->facade->get_symptom_from_illness_name($name);
                $illness = $this->facade->get_illness_by_name_service($name);

                return view('myviews.edit')->with('illness', $illness)->with('symptom', $symptom);

        }

        else{


            return view('myviews.Notfound');
//not found
        }

        });

    }

    ////////////////////////////////////////////////////////////////////////////////////////////












    ////////////////////////////////////////////////////////////////////////////////////////////

    public function edit(Request $request)
    {






        $illness=new illness();
        $symptom=new symptom();


        $illness->id=$request->id;
        $illness->name=$request->input('name');


        if ($request->input('temperature') != null)
            $symptom->temperature = $request->input('temperature');
        else
            $symptom->temperature =null;

        if ($request->input('headache') != null)
            $symptom->headache = $request->input('headache');
        else
            $symptom->headache =null;


        if ($request->input('nausea') != null)
            $symptom->nausea = $request->input('nausea');
        else
            $symptom->nausea =null;

        //$symptom->nausea = $request->input('nausea');
        if ($request->input('vomit') != null)
            $symptom->vomit = $request->input('vomit');
        else
            $symptom->vomit =null;

        if ($request->input('cough') != null)
            $symptom->cough = $request->input('cough');
        else
            $symptom->cough =null;

        if ($request->input('difficulty_breathing') != null)
            $symptom->difficulty_breathing = $request->input('difficulty_breathing');
        else
            $symptom->difficulty_breathing =null;

        if ($request->input('loss_tasty_or_smell') != null)
            $symptom->loss_tasty_or_smell = $request->input('loss_tasty_or_smell');
        else
            $symptom->loss_tasty_or_smell =null;

        if ($request->input('weakness') != null)
            $symptom->weakness = $request->input('weakness');
        else
            $symptom->weakness =null;

        if ($request->input('runny_nose') != null)
            $symptom->runny_nose = $request->input('runny_nose');
        else
            $symptom->runny_nose =null;

        if ($request->input('diarrhea') != null)
            $symptom->diarrhea = $request->input('diarrhea');
        else
            $symptom->diarrhea =null;

        if ($request->input('weight_loss') != null)
            $symptom->weight_loss = $request->input('weight_loss');
        else
            $symptom->weight_loss =null;

        if ($request->input('weight_gained') != null)
            $symptom->weight_gained = $request->input('weight_gained');
        else
            $symptom->weight_gained =null;

        if ($request->input('over_weight_before_ill') != null)
            $symptom->over_weight_before_ill = $request->input('over_weight_before_ill');
        else
            $symptom->over_weight_before_ill =null;

        if ($request->input('less_weight_before_ill') != null)
            $symptom->less_weight_before_ill = $request->input('less_weight_before_ill');
        else
            $symptom->less_weight_before_ill =null;

        if ($request->input('stomacheache') != null)
            $symptom->stomacheache = $request->input('stomacheache');
        else
            $symptom->stomacheache =null;

        if ($request->input('bleeding_place')!= null)
            $symptom->bleeding_place = $request->input('bleeding_place');
        else
            $symptom->bleeding_place =null;



        if ($request->input('faster_breathing') != null)
            $symptom->faster_breathing = $request->input('faster_breathing');

        else
            $symptom->faster_breathing =null;

        if ($request->input('sleep_problems') != null)
            $symptom->sleep_problems = $request->input('sleep_problems');
        else
            $symptom->sleep_problems =null;

        if ($request->input('dizzy') != null)
            $symptom->dizzy = $request->input('dizzy');
        else
            $symptom->dizzy =null;

        if ($request->input('need_toilet_more_than_often') != null)
            $symptom->need_toilet_more_than_often = $request->input('need_toilet_more_than_often');
        else
            $symptom->need_toilet_more_than_often =null;

        if ($request->input('need_toilet_less_than_often') != null)
            $symptom->need_toilet_less_than_often = $request->input('need_toilet_less_than_often');
        else
            $symptom->need_toilet_less_than_often =null;

        if ($request->input('nervous') != null)
            $symptom->nervous = $request->input('nervous');
        else
            $symptom->nervous =null;

        if ($request->input('tense') != null)
            $symptom->tense = $request->input('tense');
        else
            $symptom->tense =null;

        if ($request->input('low_pressure_blood') != null)
            $symptom->low_pressure_blood = $request->input('low_pressure_blood');
        else
            $symptom->low_pressure_blood =null;

        if ($request->input('high_pressure_blood') != null)
            $symptom->high_pressure_blood = $request->input('high_pressure_blood');
        else
            $symptom->high_pressure_blood = null;

        if ($request->input('high_cholesterol') != null)
            $symptom->high_cholesterol = $request->input('high_cholesterol');
        else
            $symptom->high_cholesterol = null;

        if ($request->input('diabetes') != null)
            $symptom->diabetes = $request->input('diabetes');
        else
            $symptom->diabetes = null;

        if ($request->input('down_syndrome') != null)
            $symptom->down_syndrome = $request->input('down_syndrome');
        else
            $symptom->down_syndrome = null;

        if ($request->input('malnourishment') != null)
            $symptom->malnourishment = $request->input('malnourishment');
        else
            $symptom->malnourishment = null;


        if ($request->input('joint_pain') != null)
            $symptom->joint_pain = $request->input('joint_pain');
        else
            $symptom->joint_pain = null;


        if ($request->input('red_skin') != null)
            $symptom->red_skin = $request->input('red_skin');
        else
            $symptom->red_skin = null;


        if ($request->input('sneezing') != null)
            $symptom->sneezing = $request->input('sneezing');
        else
            $symptom->sneezing = null;

        if ($request->input('ear_pain') != null)
            $symptom->ear_pain = $request->input('ear_pain');
        else
            $symptom->ear_pain = null;


        if ($request->input('heart_problem') != null)
            $symptom->heart_problem = $request->input('heart_problem');

        else
            $symptom->heart_problem = null;






        $illness_and_symptom=new illness_and_symptom();

        $illness_and_symptom->illness=$illness;
        $illness_and_symptom->symptom=$symptom;




        return DB::transaction(function () use ($request, $illness_and_symptom) {

            $result= $this->facade->edit_symptom_illness($illness_and_symptom);
            if($result){
                ////view ok
                return view(' myviews.Done');    }
            else {
                ////view error
                echo 'nothing to change ';
            }
        });



    }

    //////////////////////////////////////////////////////////////////////////////////////////////













    ////////////////////////////////////////////////////////////////////////////////////////////

    public function delete1()
    {
        return $this->facade->delete_1();
    }

    //////////////////////////////////////////////////////////////////////////////////////////















    ////////////////////////////////////////////////////////////////////////////////////////////

    public function delete(Request $request)
    {



        $name= $request->name; /// get it from request



        return DB::transaction(function () use ($request, $name) {


            if ($this->facade->check_existed_illness($name)) {

                $this->facade->delete_illness_service($name);

                //ok view
                return view('myviews.Done');

            } else {

                //not found
                return  view('myviews.Notfound');
            }

        });
    }

    ////////////////////////////////////////////////////////////////////////////////////////////







}
