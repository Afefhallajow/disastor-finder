<?php


namespace App\Http\Controllers\working\services;


abstract class service
{
    protected $inputs;

    private $rest_input;
    /**
     * service constructor.
     */
    public function __construct()
    {
        $this->inputs=new input();

        $this->rest_input=new input();
    }

    public function add_input($value){
        $this->inputs->add_new_input($value);
    }

    public function rest_input()
    {
    $this->inputs=$this->rest_input;
    }






    abstract public function execute();

}
