<?php


namespace App\Http\Controllers\working\services\search_by_symptom;


use function PHPUnit\Framework\isEmpty;

class dijkstra
{
    private $tree;
    private $distances;
    private $final_number;

    private $open=array();
    private $whole_distance;

    private $seccess=false;

    /**
     * dijkstra constructor.
     * @param $tree
     * @param $children
     * @param $distances
     */
    public function __construct($tree, $distances,$final_number)
    {
        $this->tree = $tree;
        $this->distances = $distances;
        $this->final_number=$final_number;
    }


    public function do(){


        $result_number=-1;
        $t=0;
        for($i=0;$i<$this->tree->get_count();$i++){
            $array=$this->tree->get($i);
            $node=$array[1];
            $node_id=$node->get_id();

            $this->whole_distance[$node_id]=$this->distances[$node_id];
            array_push($this->open,$node);
        }

        if(!empty($this->open))

        while(!empty($this->open)  && $this->seccess==false){



            $u=$this->open[0];
            array_splice($this->open,0,1);


            if($u->get_id_in_array()==$this->final_number-1){



                $this->seccess=true;

                $result_number=$u->get_id_line();

            }
            else{


                $array=$this->tree->get($u->get_id_line());
                $child_node=$array[($u->get_id_in_array()+1)];

                $node_id=$child_node->get_id();

                $this->whole_distance[$node_id]
                                                =$this->whole_distance[$u->get_id()]
                                                  +$this->distances[$node_id];

                array_push($this->open,$child_node);

                $this->open=$this->order_open();
            }

        }

        // didn't enter in while loop
        if($result_number==-1){ return false;}

        return $result_number;

    }

        private function order_open()
        {
            $new_open=array();

            $count_open=count($this->open);
            for($i=0;$i<$count_open;$i++) {
                $node = $this->open[0];

                $min = $this->whole_distance[$node->get_id()];
                $id = 0;
                $min_node = $node;

                for ($j = 0; $j < count($this->open); $j++) {
                    $node = $this->open[$j];
                    if ($this->whole_distance[$node->get_id()] < $min) {

                        $min = $this->whole_distance[$node->get_id()];
                        $id = $j;
                        $min_node = $node;

                    }

                }

                array_push($new_open, $min_node);
                array_splice($this->open, $id, 1);
            }

/**
            echo ' !!start : ';
            for ($j = 0; $j < count($new_open); $j++) {
                echo PHP_EOL;
                echo 'n= '.$new_open[$j]->get_id().' d= '.$this->whole_distance[$new_open[$j]->get_id()];

            }
            echo ' !!end!! ';

**/
                return $new_open;
        }

}
