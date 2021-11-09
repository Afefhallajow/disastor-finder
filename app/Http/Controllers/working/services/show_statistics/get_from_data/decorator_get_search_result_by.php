<?php


namespace App\Http\Controllers\working\services\show_statistics\get_from_data;


class decorator_get_search_result_by extends get_search_result_by
{

    private $get_by;

    public function __construct($get_by)
    {
        $this->get_by=$get_by;
    }


    public function search()
    {
       return $this->get_by->serch();
    }

    public function get_new_array(){
        return $this->get_by->get_new_array();
    }
}
