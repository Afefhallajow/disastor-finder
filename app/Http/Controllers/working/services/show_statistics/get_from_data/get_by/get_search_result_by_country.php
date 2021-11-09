<?php


namespace App\Http\Controllers\working\services\show_statistics\get_from_data\get_by;


use App\Http\Controllers\working\services\show_statistics\get_from_data\decorator_get_search_result_by;
use App\Models\search_result;

class get_search_result_by_country extends decorator_get_search_result_by
{

   private $value;
   private $new_array=array();

    public function __construct($get_by,$country)
    {
        parent::__construct($get_by);

        $this->value=$country;
    }
    public function search()
    {
       $results=parent::get_new_array();

       foreach ($results as $result){
           if($result->country==$this->value){
               array_push($this->new_array,$result);
           }
       }
       return $this;
    }

    public function get_new_array(){
        return $this->new_array;
    }
}
