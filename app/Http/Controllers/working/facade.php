<?php


namespace App\Http\Controllers\working;


use App\Http\Controllers\Controller;
use App\Http\Controllers\working\services\add_illness\addillness_service;
use App\Http\Controllers\working\services\add_symptom;
use App\Http\Controllers\working\services\add_users\add_users_service;
use App\Http\Controllers\working\services\check_if_is_a_doctor\check_if_is_a_doctor_service;
use App\Http\Controllers\working\services\chick_if_illness_is_existed\chick_if_illness_is_existed_service;
//use App\Http\Controllers\working\services\get_illness_id_from_name\get_illness_id_from_name_service;
use App\Http\Controllers\working\services\delete_illness\delete_illness_service;
use App\Http\Controllers\working\services\edit_symptom\edit_symptom_service;
use App\Http\Controllers\working\services\edite_illness\edite_illness_service;
use App\Http\Controllers\working\services\get_illness_by_id\get_illness_by_id_service;
use App\Http\Controllers\working\services\get_illness_by_name\get_illness_by_name_service;
use App\Http\Controllers\working\services\get_symptom_by_id\get_symptom_by_id_service;
use App\Http\Controllers\working\services\get_symptom_from_illness_name\get_symtom_from_illness_name;
use App\Http\Controllers\working\services\input;
use App\Http\Controllers\working\services\save_searching_result\save_searching_result_service;
use App\Http\Controllers\working\services\search_by_symptom\searching_symptoms_service;
use App\Http\Controllers\working\services\service;
use App\Http\Controllers\working\services\show_statistics\show_statistics_service;
use App\Http\Controllers\working\structure\facade\facadeHashmap;
use App\Http\Controllers\working\structure\illness;
use App\Http\Controllers\working\structure\illness_and_symptom;


use App\Http\Controllers\working\services\add_new_doctor_request\add_new_doctor_request_service;
use App\Http\Controllers\working\services\get_doctor_requests\get_doctor_requests_service;
use App\Http\Controllers\working\services\req_add_doctor\add_doctor_req;
use App\Http\Controllers\working\services\req_refuse_doctor\refuse_doctor_req;
use App\Http\Controllers\working\structure\statistics_class;
use App\Http\Controllers\working\structure\user_class;

class facade extends Controller
{
    private $list;



    public function __construct()
    {

        ///////////////////////////////////////////////////////////////////////
        //////////// MiddleWare
        /// ///////////////////////////////////////////////////////////////////
/**
        $this->middleware('auth')->except(['welcome','search_by_name_1',
                                                     'add_a_new_doctor_request','permision',
                                                      'searching_illness_by_name','check_existed_illness',
                                                      'add_a_new_doctor_request']);


        $this->middleware('doctor');->only(['add_illness_1','show_statistic',
                                                     'delete_1','edit_1',
                                                     'add_illness','add_symptom',
                                                      'edit_symptom_illness','get_symptom_by_id',
                                                      'show_statistics','isexist_country',
                                                      'search_in_statistics_array', 'check_existed_illness',
                                                      'delete_illness_service','permision']);



        $this->middleware('admin');
        ->only(['add_users','get_doctor_requests',
                                                    'add_refuse_doctor_req','permision']);


        $this->middleware('patient')->only(['search_by_symptom_1','searching_by_symptom',
                                                       'check_existed_illness','permision'
                                                        ]);
**/














        ////////////////////////////////////////////////////////////////////////////////////////

        /////انشاء لليست /////
        $this->list=new facadeHashmap();


        /////انشاء خدمة/////

        $addillness_service= new addillness_service();

        $add_symptom_service=new services\add_symptom\addsymptom();

        $searching_by_symptom=new searching_symptoms_service();

        //$get_sick_by_id=new get_sick_by_id_service();

        $chick_if_illness_exist_service=new chick_if_illness_is_existed_service();

        $save_search=new save_searching_result_service();

        $show_statistics=new show_statistics_service();

        $get_symptom_from_illness_name=new get_symtom_from_illness_name();


        $get_illness_by_name_service=new get_illness_by_name_service();

        $get_symptom_by_id_service=new get_symptom_by_id_service();

        $delete_illness_service=new delete_illness_service();

        $edit_symptom_service=new edit_symptom_service();
        $edit_illness_service=new edite_illness_service();

        $get_illness_by_id_service=new get_illness_by_id_service();

        $get_illness_by_id_service=new get_illness_by_id_service();


        $add_new_users=new add_users_service();


        //doctor req

        $add_new_doctor_request_service=new add_new_doctor_request_service();

        $get_doctor_requests_service=new get_doctor_requests_service();

        $add_doctor_req=new add_doctor_req();

        $refuse_doctor_req=new refuse_doctor_req();

      //  $check_if_is_a_doctor_service=new check_if_is_a_doctor_service();

        ///////////
        //////اضافتها/////////
        ///
        $this->add_service('add_illness',$addillness_service);
        $this->add_service('add_symptom',$add_symptom_service);
        $this->add_service('search_by_symptom',$searching_by_symptom);
        //$this->add_service('get_sick_by_id',$get_sick_by_id);
        $this->add_service('chick_if_illness_exist_service',$chick_if_illness_exist_service);
        $this->add_service('save_search_result',$save_search);
        $this->add_service('show_statistics',$show_statistics);

        $this->add_service('get_symptom_from_illness_name',$get_symptom_from_illness_name);
        $this->add_service('get_illness_by_name_service',$get_illness_by_name_service);

        $this->add_service('get_symptom_by_id_service',$get_symptom_by_id_service);
        $this->add_service('delete_illness_service',$delete_illness_service);

        $this->add_service('edit_symptom_service',$edit_symptom_service);
        $this->add_service('edit_illness_service',$edit_illness_service);

        $this->add_service('get_illness_by_id_service',$get_illness_by_id_service);

        $this->add_service('add_new_users',$add_new_users);



        //doctor req
        $this->add_service('add_new_doctor_request_service',$add_new_doctor_request_service);
        $this->add_service('get_doctor_requests_service',$get_doctor_requests_service);
        $this->add_service('add_doctor_req',$add_doctor_req);
        $this->add_service('refuse_doctor_req',$refuse_doctor_req);

        //$this->add_service('check_if_is_a_doctor',$check_if_is_a_doctor_service);


    }

    private function add_service(String $name,service $service){
        $this->list->add($name,$service);
    }


    private function get_service(String $name){
        return $this->list->get($name);
    }



    private function add_input_to_service(String $service_name,$input){
        $service=$this->get_service($service_name);

          $service->add_input($input);
          $this->list->change($service_name,$service);

    }

    private function rest_input_in_service(String $name){
        $service2=$this->get_service($name);

        $service2->rest_input();

        $this->list->change($name,$service2);

    }




    private function execute(String $name){




        $service=$this->get_service($name);

        $result= $service->execute();

        $this->rest_input_in_service($name);

        return $result;

    }




    ///////////////////////////////////////////////////////////////////////////////////
    ////////////// services
    ///////////////////////////////////////////////////////////////////////////////////









    ///////////////
    //////////views
    ///////////////









    ////////////////////////// ** guest ** ///////////////////////////////////////////////////


    public function welcome(){
        return view('doctor');
        // return view('welcome');
    }

    public function permision()
    {
        return view('myviews.permision');

    }










    ////////////////////////// ** doctor ** ///////////////////////////////////////////////////


    public function add_illness_1(){
        return view('myviews.save');
    }

    public function show_statistic()
    {
        return view('myviews.ShowStact');
    }

    public function edit_1()
    {
        return(view('myviews.edite'));
    }

    public function delete_1()
    {
        return view("myviews.delete");
    }









    ////////////////////////// ** patient ** ///////////////////////////////////////////////////


    public function search_by_symptom_1()
    {
        return view('myviews.search');
    }









    ////////////////////////// ** admin ** ///////////////////////////////////////////////////















    ////////////////////////////////////////////////////////////////////////////////////////////////////////////






    //////////////////
    //////////// other
    //////////////////









    ////////////////////////// ** guest ** ///////////////////////////////////////////////////








    ///////////////////////////////////////////////////////////////////////////////////


    public function searching_illness_by_name($name,$country)
    {
        $illness=$this->get_illness_by_name_service($name);
        $symptom=$this->get_symptom_from_illness_name($name);

        $illness_and_symptom=new illness_and_symptom();

        $illness_and_symptom->illness=$illness;
        $illness_and_symptom->symptom=$symptom;



        $this->add_input_to_service('save_search_result',$illness);

        $this->add_input_to_service('save_search_result',$country);



        $this->execute('save_search_result');


        return $illness_and_symptom;


    }

    //////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    //searching_illness_by_name
    public function get_symptom_from_illness_name($name){
        $this->add_input_to_service('get_symptom_from_illness_name',$name);


        return $this->execute('get_symptom_from_illness_name');

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////









    ////////////////////////////////////////////////////////////////////////////////////////////////

    //searching_illness_by_name
    public function get_illness_by_name_service ($name)
    {
        $this->add_input_to_service('get_illness_by_name_service', $name);


        return $this->execute('get_illness_by_name_service');


    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function add_a_new_doctor_request($req)
    {
        $this->add_input_to_service('add_new_doctor_request_service',$req);
        return $this->execute('add_new_doctor_request_service');
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    ////////////////////////// ** doctor ** ///////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function add_illness($illness,$symptom){

        $this->add_input_to_service('chick_if_illness_exist_service',$illness->name);

        if($this->execute('chick_if_illness_exist_service')){
            return 'this illness entered before !!';
        }

        $s_id=$this->add_symptom($symptom);

        $illness->symptom_id=$s_id;

        $this->add_input_to_service('add_illness',$illness);

        return $this->execute('add_illness');
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function add_symptom($symptom){


        $this->add_input_to_service('add_symptom',$symptom);


        return $this->execute('add_symptom');
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////








    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function edit_symptom_illness($illness_and_symptom){


        $symptom=$illness_and_symptom->symptom;
        $illness=$illness_and_symptom->illness;


        $this->add_input_to_service('edit_illness_service',$illness);


        $result1=$this->execute('edit_illness_service');


        $oldsymptom=$this->get_symptom_from_illness_name($illness->name);

        $symptom->id=$oldsymptom->id;

        $this->add_input_to_service('edit_symptom_service',$symptom);
        $result2=$this->execute('edit_symptom_service');

        if($result1 || $result2 ){return true;}
        return false;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    ///you have to enter array
    public function show_statistics($values){

        $this->add_input_to_service('show_statistics',$values);

        //array has all results
        $results= $this->execute('show_statistics');


        $statistics=array();

        if($results==null){
        return $results;
        }

        foreach ($results as $result){

            $isexist=$this->search_in_statistics_array($statistics,$result->illness_name);

            if($isexist!=-1)
            {
                $statistics[$isexist]->illness_numbers++;

                if($this->isexist_country($statistics[$isexist]->illness_country,$result->country)){
                    $statistics[$isexist]->illness_country[$result->country]++;
                }else{
                    $statistics[$isexist]->illness_country[$result->country]=1;
                }

            } else{
                $statistic=new statistics_class();

                $statistic->illness_name=$result->illness_name;

                $statistic->illness_country[$result->country] = 1;

                $statistic->illness_numbers=1;

                array_push($statistics,$statistic);
            }
        }
        $statistics2=array();

        foreach ($statistics as $statistic){

            $keys=array_keys($statistic->illness_country);




            $array =array();
            for ($i=0;$i<count($keys) ;$i++){

                $value=$statistic->illness_country[$keys[$i]];
                $string=$keys[$i].' '.$value;

                array_push($array,$string);


            }

            $statistic->illness_country = $array;
            array_push($statistics2,$statistic);

        }

        return $statistics2;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    private function search_in_statistics_array($array,$value){

        if(empty($array)){
            return -1;
        }

        $num=0;
        foreach ($array as $one) {
            if($one->illness_name==$value){
                return $num;
            }
            $num++;
        }

        return -1;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    private function isexist_country($country,$value){

        if(empty($country)){
            return false;
        }

        $array=array_keys($country);

        foreach ($array as $one) {
            if($one==$value){
                return true;
            }
        }

        return false;


    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function delete_illness_service($name){



        $this->add_input_to_service('delete_illness_service', $name);


        return $this->execute('delete_illness_service');

    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    ////////////////////////// ** patient ** ///////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function searching_by_symptom($symptom,$country){

        $this->add_input_to_service('search_by_symptom',$symptom);

        $goal_symptoms=$this->execute('search_by_symptom');

        if($goal_symptoms==false){return false;}


        $this->add_input_to_service('save_search_result',$goal_symptoms->illness);

        $this->add_input_to_service('save_search_result',$country);



        $this->execute('save_search_result');

        $illness=$goal_symptoms->illness;



        $illness_and_symptom=new illness_and_symptom();

        $illness_and_symptom->illness=$illness;
        $illness_and_symptom->symptom=$goal_symptoms;


        return $illness_and_symptom;

    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    ////////////////////////// ** admin ** ///////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function get_doctor_requests()
    {
        return $this->execute('get_doctor_requests_service');
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function add_refuse_doctor_req(array $array)
    {

        // array :
        // key = id
        // value =true or false

        if(empty($array)){
            return false;
        }

        $keys=array_keys($array);

        $refuse_array=array();
        $add_array=array();

        for($i=0;$i<count($array);$i++){
            if($array[$keys[$i]]==true){
                array_push($add_array,$keys[$i]);
            }
            else{array_push($refuse_array,$keys[$i]);}
        }



        if(count($add_array)>0){
            $this->add_input_to_service('add_doctor_req',$add_array);

            $new_users=$this->execute('add_doctor_req');

            $users=array();
            for($i=0;$i<count($new_users);$i++){

                $user=new user_class();
                $user->name=$new_users[$i]->name;
                $user->password=$new_users[$i]->password;
                $user->email=$new_users[$i]->email;
                $user->country=$new_users[$i]->country;
                $user->isadmin=0;
                $user->isdoctor=1;
                $user->ispatent=0;

                array_push($users,$user);
            }

            $this->add_users($users);
            return $new_users[0];
        }
        if(count($refuse_array)>0){
            $this->add_input_to_service('refuse_doctor_req',$refuse_array);

           $result= $this->execute('refuse_doctor_req');


           return $result;
        }


        return true;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function add_users(array $array){

        $this->add_input_to_service('add_new_users',$array);


        return $this->execute('add_new_users');


    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    ////////////////////////// ** for all ** ///////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function check_existed_illness($name){

        $this->add_input_to_service('chick_if_illness_exist_service',$name);


        if($this->execute('chick_if_illness_exist_service')){

            return true;

        }

        else return false;

    }

    /////////////////////////////////////////////////////////////////////////////////////////////////









    ////////////////////////// ** unknown ** ///////////////////////////////////////////////////









    /////////////////////////////////////////////////////////////////////////////////////////////////

    /*    public function get_symptom_by_id($id){


            $this->add_input_to_service('get_symptom_by_id_service',$id);


            return $this->execute('get_symptom_by_id_service');
        }
    */




    /*
    public function get_illness_by_id ($id)
    {
        $this->add_input_to_service('get_illness_by_id_service', $id);


        return $this->execute('get_illness_by_id_service');


    }
*/



//
//    public function check_if_is_a_doctor($email){
//
//        $this->add_input_to_service('check_if_is_a_doctor',$email);
//
//        return $this->execute('check_if_is_a_doctor');
//
//    }




//private function change_from_illness_model($ilness){
//
//        $newilness=new illness();
//
//        $newilness->id=$ilness->id;
//        $newilness->name=$ilness->name;
//        $newilness->symptom_id=$ilness->symptom_id;
//
//        return $newilness;
//}













    /////////////////////////////////////////////////////////////////////////////////////////////////

}
?>
