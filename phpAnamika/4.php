<?php
interface Num{
    public function add($x, $y);
    public function diff($x, $y);
}
class Anamika implements Num{
    private $x, $y;
    public function add($x, $y){
        $this->x=$x;
        $this->y=$y;
        return $this->x+$this->y;
    }
    public function diff($x, $y){
        $this->x=$x;
        $this->y=$y;
        return $this->x-$this->y;
    }
}
$num = new Anamika();
echo $num->add(20,10)."<br>";
echo $num->diff(15,5);
?>