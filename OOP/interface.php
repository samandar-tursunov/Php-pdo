<?php
interface Animal{
    public function makesound();
    public function eat();

}

class Dog implements Animal{
    public function makesound(){
        echo 'voof';
    }

    public function eat(){
        echo 'meat';
    }
}

class Cow implements Animal{
    public function makesound()
    {
        echo 'Muuu';
    }

    public function eat()
    {
        echo 'grass';
    }
}

$dog = new Dog();
$cow = new Cow();

$animals = array($dog , $cow);
foreach($animals as $animal)
{
   $animal -> makesound();
   echo '<br>';
   $animal -> eat();
   echo '<br>';
}

?>