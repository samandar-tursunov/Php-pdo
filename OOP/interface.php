<?php
interface Car{

    public function drive();
 

}

class bmw implements Car {
    public function drive(){
        return 'middle driving';
    }
}

$bmw = new bmw();
echo $bmw->drive();


?>