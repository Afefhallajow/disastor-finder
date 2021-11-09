<?php


namespace App\Http\Controllers\working\services\show_statistics;


use App\Http\Controllers\working\services\service;
use App\Http\Controllers\working\services\show_statistics\get_from_data\basic_get_search_result_by;
use App\Http\Controllers\working\services\show_statistics\get_from_data\get_by\get_search_result_by_country;
use App\Http\Controllers\working\services\show_statistics\get_from_data\get_by\get_search_result_by_day;
use App\Http\Controllers\working\services\show_statistics\get_from_data\get_by\get_search_result_by_hour;
use App\Http\Controllers\working\services\show_statistics\get_from_data\get_by\get_search_result_by_illnessname;
use App\Http\Controllers\working\services\show_statistics\get_from_data\get_by\get_search_result_by_month;
use App\Http\Controllers\working\services\show_statistics\get_from_data\get_by\get_search_result_by_year;
use App\Http\Controllers\working\structure\illness;

class show_statistics_service extends service
{

    public function execute()
    {

        $array=array();

        $array = $this->inputs->get_input_by_name("array");

        $keys=array();
        $keys=array_keys($array);

        $hour=-1;
        $day=-1;
        $month=-1;
        $year=-1;

        $illness_name=' ';
        $country=' ';



        for($i=0;$i<count($keys);$i++){
        if($keys[$i]=='year'){$year=$array[$keys[$i]];}
        elseif($keys[$i]=='month'){$month=$array[$keys[$i]];}
        elseif($keys[$i]=='day'){$day=$array[$keys[$i]];}
        elseif($keys[$i]=='hour'){$hour=$array[$keys[$i]];}
        elseif($keys[$i]=='illness_name'){$illness_name=$array[$keys[$i]];}
        elseif($keys[$i]=='country'){$country=$array[$keys[$i]];}
        }

        $get_by=new basic_get_search_result_by();
        $get_by=$get_by->search();
        if($year!=-1){$get_by=(new get_search_result_by_year($get_by,$year))->search();}
        if($month!=-1){$get_by=(new get_search_result_by_month($get_by,$month))->search();}
        if($day!=-1){$get_by=(new get_search_result_by_day($get_by,$day))->search();}
        if($hour!=-1){$get_by=(new get_search_result_by_hour($get_by,$hour))->search();}
        if($illness_name!=' '){$get_by=(new get_search_result_by_illnessname($get_by,$illness_name))->search();}
        if($country!=' '){$get_by=(new get_search_result_by_country($get_by,$country))->search();}


        $result= $get_by->get_new_array();

        if(empty($result)){
            return null;
        }

        return $result;


    }
}
