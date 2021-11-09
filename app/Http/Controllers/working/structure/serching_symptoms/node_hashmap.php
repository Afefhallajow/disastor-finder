<?php


namespace App\Http\Controllers\working\structure\serching_symptoms;


class node_hashmap
{
    ///////node
    private $nodes=array();

    public function __construct(int $num_illness)
    {
        for($i = 0;$i<$num_illness;$i++){
            $this->nodes[$i]=array();
        }
    }


    public function add_node($key,$node)
    {
            array_push($this->nodes[$key], $node);
    }


    public function get(int $key)
    {
                return $this->nodes[$key];
    }

    public function get_count(){
        return count($this->nodes);
    }

}
