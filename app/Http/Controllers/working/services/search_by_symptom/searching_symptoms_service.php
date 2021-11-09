<?php


namespace App\Http\Controllers\working\services\search_by_symptom;


use App\Http\Controllers\working\services\service;
use App\Http\Controllers\working\structure\serching_symptoms\node;
use App\Http\Controllers\working\structure\serching_symptoms\node_hashmap;
use App\Models\symptom;
class searching_symptoms_service extends service
{

    public function execute()
    {

        $entered_symptom = $this->inputs->get_input_by_name("symptom");

        $symptoms=symptom::all()
            ->where('temperature','<=',$entered_symptom->temperature+1)
            ->where('temperature','>=',$entered_symptom->temperature-1);


        if($symptoms==null){return false;}





        $tree=$this->make_a_tree($symptoms);
        $distances=$this->make_distances($tree,$entered_symptom);

        $dijkstra=new dijkstra($tree,$distances,$entered_symptom->get_count());
        $result=$dijkstra->do();


        $i=0;

        foreach ($symptoms as $symptom){
            if($i==$result){

                return $symptom;
            }
            $i++;
        }

    }


    private function make_a_tree($symptoms){

        $nodes=new node_hashmap(count($symptoms));

        $id=0;

        $key=0;
        $id_array=0;
        foreach($symptoms as $symptom){


            $id_array=0;

            $id++;
            $node=new node();
            $node->add($id,$key,$id_array,'temperature',$symptom->temperature);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'headache',$symptom->headache);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'malnourishment',$symptom->malnourishment);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'down_syndrome',$symptom->down_syndrome);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'diabetes',$symptom->diabetes);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'high_cholesterol',$symptom->high_cholesterol);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'high_pressure_blood',$symptom->high_pressure_blood);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'low_pressure_blood',$symptom->low_pressure_blood);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'tense',$symptom->tense);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'nervous',$symptom->nervous);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'need_toilet_less_than_often',$symptom->need_toilet_less_than_often);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'need_toilet_more_than_often',$symptom->need_toilet_more_than_often);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'dizzy',$symptom->dizzy);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'sleep_problems',$symptom->sleep_problems);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'faster_breathing',$symptom->faster_breathing);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'bleeding_place',$symptom->bleeding_place);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'stomacheache',$symptom->stomacheache);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'less_weight_before_ill',$symptom->less_weight_before_ill);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'over_weight_before_ill',$symptom->over_weight_before_ill);
            $nodes->add_node($key,$node);


            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'weight_gained',$symptom->weight_gained);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'weight_loss',$symptom->weight_loss);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'diarrhea',$symptom->diarrhea);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'runny_nose',$symptom->runny_nose);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'weakness',$symptom->weakness);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'loss_tasty_or_smell',$symptom->loss_tasty_or_smell);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'difficulty_breathing',$symptom->difficulty_breathing);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'cough',$symptom->cough);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'vomit',$symptom->vomit);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'nausea',$symptom->nausea);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'joint_pain',$symptom->joint_pain);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'red_skin',$symptom->red_skin);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'sneezing',$symptom->sneezing);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'ear_pain',$symptom->ear_pain);
            $nodes->add_node($key,$node);

            $id++;
            $id_array++;
            $node=new node();
            $node->add($id,$key,$id_array,'heart_problem',$symptom->heart_problem);
            $nodes->add_node($key,$node);

            $key++;

        }

        return $nodes;
    }



    private function make_distances($tree,$entered_symptom){

        $destance=array();


        for($i=0;$i<$tree->get_count();$i++){
            $array=$tree->get($i);

            for($j=0;$j<count($array);$j++){
                $node=$array[$j];

                $node_id=$node->get_id();
                $name=$node->get_name();
                $value=$node->get_value();

                $value_symp=$this->get_from_symptom($entered_symptom,$name);







                    if ($value_symp == false) {

                        if ($value == false) {
                            $destance[$node_id] = -100;
                        } else {
                            $destance[$node_id] = 100;
                        }
                    }


                elseif ($value_symp == 1) {


                    if ($value == 1) {
                        $destance[$node_id] = -1000;
                    } else {
                        $destance[$node_id] = 1000;
                    }
                }






                else if(filter_var($value_symp,FILTER_VALIDATE_FLOAT)==true) {


                    if($value==$value_symp){
                        $destance[$node_id] = -500;
                    }else if($value<=$value_symp+0.5 && $value>=$value_symp-0.5){

                        $destance[$node_id] = -300;
                    }
                    else {
                        $destance[$node_id] = -100;
                    }


                }
                else{


                    //string
                    if($value==$value_symp){$destance[$node_id] = -10000;}
                    else{$destance[$node_id] = 10000;}
                }


            }

        }

        return $destance;


    }

    private function get_from_symptom($entered_symptom,$name){



        if($name=='malnourishment'){return $entered_symptom->malnourishment;}
        else if($name=='down_syndrome'){return $entered_symptom->down_syndrome;}
        else if($name=='diabetes'){return $entered_symptom->diabetes;}
        else if($name=='high_cholesterol'){return $entered_symptom->high_cholesterol;}
        else if($name=='high_pressure_blood'){return $entered_symptom->high_pressure_blood;}
        else if($name=='low_pressure_blood'){return $entered_symptom->low_pressure_blood;}
        else if($name=='tense'){return $entered_symptom->tense;}
        else if($name=='nervous'){return $entered_symptom->nervous;}
        else if($name=='need_toilet_less_than_often'){return $entered_symptom->need_toilet_less_than_often;}
        else if($name=='need_toilet_more_than_often'){return $entered_symptom->need_toilet_more_than_often;}
        else if($name=='dizzy'){return $entered_symptom->dizzy;}
        else if($name=='sleep_problems'){return $entered_symptom->sleep_problems;}
        else if($name=='faster_breathing'){return $entered_symptom->faster_breathing;}
        else if($name=='bleeding_place'){return $entered_symptom->bleeding_place;}
        else if($name=='stomacheache'){return $entered_symptom->stomacheache;}
        else if($name=='less_weight_before_ill'){return $entered_symptom->less_weight_before_ill;}
        else if($name=='over_weight_before_ill'){return $entered_symptom->over_weight_before_ill;}
        else if($name=='weight_gained'){return $entered_symptom->weight_gained;}
        else if($name=='weight_loss'){return $entered_symptom->weight_loss;}
        else if($name=='diarrhea'){return $entered_symptom->diarrhea;}
        else if($name=='runny_nose'){return $entered_symptom->runny_nose;}
        else if($name=='weakness'){return $entered_symptom->weakness;}
        else if($name=='loss_tasty_or_smell'){return $entered_symptom->loss_tasty_or_smell;}
        else if($name=='difficulty_breathing'){return $entered_symptom->difficulty_breathing;}
        else if($name=='cough'){return $entered_symptom->cough;}
        else if($name=='vomit'){return $entered_symptom->vomit;}
        else if($name=='nausea'){return $entered_symptom->nausea;}
        else if($name=='headache'){return $entered_symptom->headache;}
        else if($name=='temperature'){return $entered_symptom->temperature;}

        else if($name=='joint_pain'){return $entered_symptom->joint_pain;}
        else if($name=='red_skin'){return $entered_symptom->red_skin;}
        else if($name=='sneezing'){return $entered_symptom->sneezing;}
        else if($name=='ear_pain'){return $entered_symptom->ear_pain;}
        else if($name=='heart_problem'){return $entered_symptom->heart_problem;}

    }




}
