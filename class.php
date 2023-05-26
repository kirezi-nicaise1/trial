<?php
// class Person{
//     public $num1;
//     public $num2;
     
//     public function display(){
//       $sum=$this->num1+$this->num2;
//       echo("the sum is $sum");
//     }
// }

// $person=new Person();
// $person->num1=4;
// $person->num2=5;

// $person->display();
class Fruit{
    public $name;
    public $color;

    public function setName($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    public function getName(){
        echo("{$this->name}{$this->color}");
    }
}

$orange=new Fruit;
$orange->setName('orange','blue');
$orange->getName();

?>