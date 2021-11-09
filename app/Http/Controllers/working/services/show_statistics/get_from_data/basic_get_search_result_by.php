<?php


namespace App\Http\Controllers\working\services\show_statistics\get_from_data;


use App\Models\search_result;

class basic_get_search_result_by extends get_search_result_by
{

    private $new_array=array();
    public function search()
    {
        $results=search_result::all();

        foreach ($results as $result){
           array_push($this->new_array,$result);
        }
        return $this;
    }

    public function get_new_array(){
        return $this->new_array;
    }
}
