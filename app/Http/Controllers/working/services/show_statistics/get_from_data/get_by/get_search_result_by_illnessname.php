<?php



namespace App\Http\Controllers\working\services\show_statistics\get_from_data\get_by;

use App\Http\Controllers\working\services\show_statistics\get_from_data\decorator_get_search_result_by;

class get_search_result_by_illnessname extends decorator_get_search_result_by
{
    private $value;
    private $new_array=array();

    public function __construct($get_by,$name)
    {
        parent::__construct($get_by);

        $this->value=$name;
    }
    public function search()
    {
        $results=parent::get_new_array();

        foreach ($results as $result){
            if($result->illness_name==$this->value){
                array_push($this->new_array,$result);
            }
        }
        return $this;
    }


    public function get_new_array(){
        return $this->new_array;
    }

}
