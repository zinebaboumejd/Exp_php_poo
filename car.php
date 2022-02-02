<?php 
class Car{
    public $color="red";
    private $wieght=2000;
    static $carcolors=['red','green','orange'];
    static $Conter=0;
    static $myConter=0;

    public function  __construct(){
self::$Conter++;
    }
}
$mycar=new Car();
echo Car::$Conter." ".$mycar->$myConter.PHP_EOL;
echo Car::$Conter.' '.$mycar->$myConter.PHP_EOL;
// Car::$carcolors;
?>