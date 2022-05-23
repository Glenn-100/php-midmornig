<?php
$cars=("volvo,toyota,BMW,SUBARU,VOLKSWGAGEN");
echo $cars;
echo"<br>";


$float=10.56;
echo $float;
echo"<br>";

$string="Hello world";
echo $string;
echo"<br>";

$integer=11995;
echo $integer;
echo"<br>";


class car {
    public $color;
    public $model;
    public function _construct($color,$model){
        $this->color=$color;
        $this->model=$model;

    }
    public function message(){
        return "My car is a ".$this ->color."Golden Brown". $this->model."Subaru";
    }
}
$mycar=new car("Golden Brown","Subaru");
echo $mycar->message();
echo"<br>";
echo $mycar->message();


