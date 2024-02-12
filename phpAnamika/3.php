<?php
class Rectangle{
    private $length;
    private $breath;

    public function computeArea($length, $breath){
        $this->length= $length;
        $this->breath= $breath;
    }

    public function displayArea(){
        return $this->length*$this->breath;
    }
}
$rectangle = new Rectangle();
$rectangle->computeArea(2,15);
$a = $rectangle->displayArea();
$rectangle2 = new Rectangle();
$rectangle2->computeArea(10,7);
$b = $rectangle2->displayArea();
if($a>$b)
    echo $a;
else
    echo $b;
?>