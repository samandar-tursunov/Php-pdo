<?php

class Car {
    protected $model;
    public $year;

    function __construct($model, $year)
    {
        $this->model = $model;
        $this->year = $year;

    }
    function get(){

        return $this->model;
        
    }

    // function set(){
    //     return $this->year;
        
    // }


}
$rolls= new Car('Rolls Royce',2023);
echo $rolls->get().'<br>';
// echo $rolls->set();
