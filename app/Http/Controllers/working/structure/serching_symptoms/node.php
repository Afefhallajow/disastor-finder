<?php


namespace App\Http\Controllers\working\structure\serching_symptoms;


class node
{
    private $id;
    private $id_in_array;
    private $id_line;
    private $data=array();



    public function add($id,$id_line,$id_in_array,$name,$value){

        $this->id=$id;
        $this->id_line=$id_line;
        $this->id_in_array=$id_in_array;
        array_push($this->data,$name);
        array_push($this->data,$value);

    }

    public function get_id(){
        return $this->id;
    }
    public function get_id_line(){
        return $this->id_line;
    }
    public function get_id_in_array(){
        return $this->id_in_array;
    }


    public function get_name(){
        return $this->data[0];
    }

    public function get_value(){
        return $this->data[1];
    }

    public function get_by_id(){
        return $this->data;
    }


}
