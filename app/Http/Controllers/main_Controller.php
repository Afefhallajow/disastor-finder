<?php
/**
namespace App\Http\Controllers;

use App\Http\Controllers\working\facade;
use App\Http\Controllers\working\structure\illness;
use App\Http\Controllers\working\structure\illness_and_symptom;
use App\Http\Controllers\working\structure\symptom;


use App\Mail\sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Array_;

class main_Controller extends Controller
{
    private $facade;

    public function __construct()
    {

        $this->facade=new facade();
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('admin')->only('edit1');
        $this->middleware('admin')->only('ShowStact1');

        $this->middleware('admin')->only('delete1');
        $this->middleware('patient')->only('search_by_sym1');

    }

    public function index()
    {
        return $this->facade->welcome();
    }

    public function add_illness1()
    {
        return $this->facade->add_illness_1();
    }




    /// check if the name is already exist
    public function add_illness2($name)
    {

        $s1 = new services();


        if($s1->check_existed_illness($name)) {
        // error / found it
        }
        else{
            // ok
            // show symptoms page
        }

    }


    public function add_illness(Request $request)
    {

        $illness = new illness();
        $illness->name = $request->input('name');

        $symptom = new symptom();


        $symptom->temperature = $request->input('temperature');
        $symptom->headache = $request->input('headache');
        $symptom->nausea = $request->input('nausea');
        $symptom->vomit = $request->input('vomit');
        $symptom->weakness = $request->input('weakness');
        $symptom->cough = $request->input('cough');
        $symptom->difficulty_breathing = $request->input('difficulty_breathing');
        $symptom->loss_tasty_or_smell = $request->input('loss_tasty_or_smell');
        $symptom->runny_nose = $request->input('runny_nose');
        $symptom->diarrhea = $request->input('diarrhea');
        $symptom->weight_loss = $request->input('weight_loss');
        $symptom->weight_gained = $request->input('weight_gained');
        $symptom->over_weight_before_ill = $request->input('over_weight_before_ill');
        $symptom->less_weight_before_ill = $request->input('less_weight_before_ill');
        $symptom->stomacheache = $request->input('stomacheache');
        $symptom->bleeding_place = $request->input('bleeding_place');
        $symptom->faster_breathing = $request->input('faster_breathing');
        $symptom->sleep_problems = $request->input('sleep_problems');
        $symptom->dizzy = $request->input('dizzy');
        $symptom->need_toilet_more_than_often = $request->input('need_toilet_more_than_often');
        $symptom->need_toilet_less_than_often = $request->input('need_toilet_less_than_often');
        $symptom->nervous = $request->input('nervous');
        $symptom->tense = $request->input('tense');
        $symptom->low_pressure_blood = $request->input('low_pressure_blood');
        $symptom->high_pressure_blood = $request->input('high_pressure_blood');
        $symptom->high_cholesterol = $request->input('high_cholesterol');
        $symptom->diabetes = $request->input('diabetes');
        $symptom->down_syndrome = $request->input('down_syndrome');
        $symptom->malnourishment = $request->input('malnourishment');

        $s1 = new services();

        return DB::transaction(function () use ($request, $illness, $symptom, $s1) {

            return $s1->add_illness($illness, $symptom);
        });


    }








    public function search_ill_by_name1 ()
    {
       return $this->facade->search_by_name_1();

    }

    public function search_ill_by_name (Request $request)
    {

        $name='b1'; // get from request

        $country='america'; // get from request

        $s1 = new services();

        if($s1->check_existed_illness($name)) {

            $illness_and_symptom = $s1->search_illness_by_name($name,$country);

            $illness=$illness_and_symptom->illness;
            $symptom=$illness_and_symptom->symptom;



            ///show in view

            //for tset
            echo' illness id = '.$illness->id.' || symptom id = '.$symptom->id;

        }
        else{
            /// not found
        }


//
//        $illness = \App\Models\illness::where('name',$request->name)->get();
//   $ill1=$illness;
//    if ($illness != null)
//    {
//        $ad=$illness[0]->symptom_id;
//       $symptom = \App\Models\symptom::find($ad);
//        $ill=array(
//            $illness,
//            $symptom,
//
//        );
//        return $ill;  ;  //  view('myviews.search_result')->with('illness',$illness)->with('symptom',$symptom);
//        }
//    else
//        return "not found";
//

    }





    public function search_by_sym1()
    {

        return $this->facade->search_by_symptom_1();
    }

    public function search_by_sym(Request $request)
    {

        $user=$request->user();

        $country=$user->country;

        $symptom = new symptom();


        $symptom->temperature = $request->input('temperature');
        $symptom->headache = $request->input('headache');
        $symptom->nausea = $request->input('nausea');
        $symptom->vomit = $request->input('vomit');
        $symptom->weakness = $request->input('weakness');
        $symptom->cough = $request->input('cough');
        $symptom->difficulty_breathing = $request->input('difficulty_breathing');
        $symptom->loss_tasty_or_smell = $request->input('loss_tasty_or_smell');
        $symptom->runny_nose = $request->input('runny_nose');
        $symptom->diarrhea = $request->input('diarrhea');
        $symptom->weight_loss = $request->input('weight_loss');
        $symptom->weight_gained = $request->input('weight_gained');
        $symptom->over_weight_before_ill = $request->input('over_weight_before_ill');
        $symptom->less_weight_before_ill = $request->input('less_weight_before_ill');
        $symptom->stomacheache = $request->input('stomacheache');
        $symptom->bleeding_place = $request->input('bleeding_place');
        $symptom->faster_breathing = $request->input('faster_breathing');
        $symptom->sleep_problems = $request->input('sleep_problems');
        $symptom->dizzy = $request->input('dizzy');
        $symptom->need_toilet_more_than_often = $request->input('need_toilet_more_than_often');
        $symptom->need_toilet_less_than_often = $request->input('need_toilet_less_than_often');
        $symptom->nervous = $request->input('nervous');
        $symptom->tense = $request->input('tense');
        $symptom->low_pressure_blood = $request->input('low_pressure_blood');
        $symptom->high_pressure_blood = $request->input('high_pressure_blood');
        $symptom->high_cholesterol = $request->input('high_cholesterol');
        $symptom->diabetes = $request->input('diabetes');
        $symptom->down_syndrome = $request->input('down_syndrome');
        $symptom->malnourishment = $request->input('malnourishment');


        //test , must remove later
        $symptom->temperature=25;

        $s1 = new services();
        return DB::transaction(function () use ($request, $symptom, $s1,$country) {



            $illness_symptom = $s1->search_by_symp($symptom,$country);

            if(!$illness_symptom){

                /// not found
                ///

                echo 'there is no illness !! try another enters';
                return;
            }else {

                ///view result

                echo $illness_symptom->illness;
                echo '   ||   ' . $illness_symptom->symptom;
            }
            //return view('myviews.Search_Result')->with("ills",$ills);
        });

    }

    public function ShowStact1()
    {
        return $this->facade->show_statistic();

    }

    public function ShowStact(Request $request)
    {

        ///some of them will be empty
        $year = $request->input('year');
        $month = $request->input('month');
        $day = $request->input('day');
        $hour = $request->input('hour');
        $country = $request->input('country');
        $ill_name = $request->input('illness_name');

        $array=array(
            'year'=>$year,
            'month'=>$month,
            'day'=>$day,
            //'hour'=>$hour,
            //'illness_name'=>$ill_name,
            //'country'=>$country
        );
        $s1 = new services();
        return DB::transaction(function () use ($request, $array, $s1) {


            $result= $s1->show_statistics($array);

            if($result!=null){
                return $result;
            }
            else
            {
                //error / no result found
            }


        });



    }


public function edit1()
{
    return $this->facade->edit_1();
}

    public function edit2(Request $request)
    {

//        $illness = \App\Models\illness::find($request->id);

        $name= "b1"; /// get it from request

        $s1 = new services();


        if($s1->check_existed_illness($name)) {




            $symptom = $s1->get_symptom_from_illness_name($name);
            $illness= $s1->get_illness_by_name_service($name);

            return  view('myviews.edit')->with('illness', $illness)->with('symptom', $symptom);


        }

    else{
            //not found
        }
    }


    public function edit(Request $request)
    {





        $s1 = new services();



        $symptom=new symptom();
        $illness=new illness();


        //shoould be

        // $symptom->id=$request->symptom_id;
        // $illness->id=$request->illness_id;

        //for test
        $symptom->id=7;
        $illness->id=3;




        $illness->name=$request->input('name');

        $symptom->temperature = $request->input('temperature');
        $symptom->headache = $request->input('headache');
        $symptom->nausea = $request->input('nausea');
        $symptom->vomit = $request->input('vomit');
        $symptom->weakness = $request->input('weakness');
        $symptom->cough = $request->input('cough');
        $symptom->difficulty_breathing = $request->input('difficulty_breathing');
        $symptom->loss_tasty_or_smell = $request->input('loss_tasty_or_smell');
        $symptom->runny_nose = $request->input('runny_nose');
        $symptom->diarrhea = $request->input('diarrhea');
        $symptom->weight_loss = $request->input('weight_loss');
        $symptom->weight_gained = $request->input('weight_gained');
        $symptom->over_weight_before_ill = $request->input('over_weight_before_ill');
        $symptom->less_weight_before_ill = $request->input('less_weight_before_ill');
        $symptom->stomacheache = $request->input('stomacheache');
        $symptom->bleeding_place = $request->input('bleeding_place');
        $symptom->faster_breathing = $request->input('faster_breathing');
        $symptom->sleep_problems = $request->input('sleep_problems');
        $symptom->dizzy = $request->input('dizzy');
        $symptom->need_toilet_more_than_often = $request->input('need_toilet_more_than_often');
        $symptom->need_toilet_less_than_often = $request->input('need_toilet_less_than_often');
        $symptom->nervous = $request->input('nervous');
        $symptom->tense = $request->input('tense');
        $symptom->low_pressure_blood = $request->input('low_pressure_blood');
        $symptom->high_pressure_blood = $request->input('high_pressure_blood');
        $symptom->high_cholesterol = $request->input('high_cholesterol');
        $symptom->diabetes = $request->input('diabetes');
        $symptom->down_syndrome = $request->input('down_syndrome');
        $symptom->malnourishment = $request->input('malnourishment');





        $illness_and_symptom=new illness_and_symptom();

        $illness_and_symptom->illness=$illness;
        $illness_and_symptom->symptom=$symptom;



        return DB::transaction(function () use ($request, $illness_and_symptom, $s1) {

            $result= $s1->edit_illness($illness_and_symptom);
            if($result){
                echo 'done ';
            }
            else {
                echo 'nothing to change ';
            }
        });



    }

    public function delete1()
    {
       return $this->facade->delete_1();
    }


    public function delete(Request $request)
    {

        $s1 = new services();


        $name= "w1"; /// get it from request


        if($s1->check_existed_illness($name)) {


            $s1->delete_illness($name);

            //ok view
            echo 'ok';

        }
        else{

            //not found
            echo 'not found';
        }

//            $illness = \App\Models\illness::find($request->id);
//        if ($illness == null) {
//            return view("myviews.delete");
//        } else {
//            $symptom = \App\Models\symptom::find($illness->symptom_id);
//            if ($symptom == null) {
//                return view("myviews.delete");
//            } else {
//                $symptom->destroy($illness->symptom_id);
//                $illness->destroy($request->id);
//                return "welcom";
//            }
//        }
    }

    public function permision()
    {
        return $this->facade->permision();

    }



//
//    public function send(){
//        $details=[
//          'title'=>'Email from Disease Finder company',
//          'body'=>'We are sorry ,your doctor request have been refused. '
//        ];
//
//        Mail::to("mheealdeenalghazali@gmail.com")->send(new sendmail($details));
//
//        return 'done';
//    }


}

**/
