<?php 

class Vehicule{
    protected $marque;
    private $_volomCarburant;
    protected $_estRepare;
    //constrecure
    // public function __construct(){
    //     $this->_volomCarburant=40;
    // }    
    public function __construct($marque){
        $this->marque=$marque;
    }
    //Methodes
    public function setVolomCarburant($int){
        $this->_volomCarburant=$int;
    }
    public function gitVolomCarburant(){
        return $this->_volomCarburant;
    }
    public function repare(){
        return $this->_estRepare=true;
        echo 'le vehicule est en réparation';
    }
    public function demarrer(){
      if($this->controleCarburant()){
      echo 'le vehicule demare<br>';
      return true;
      }
      echo 'les reservoire est vide ...<br>';
      return false;
    }
    public function controleCarburant(){
        return ($this->_volomCarburant>0);
    }
//destractur
public function __destruct(){
    // $this->_volomCarburant=0;
    echo "destruct";
}
}










class voiture extends Vehicule{
public $car_horn;
public function __construct($marque){
    parent::__construct($marque);
    $this->__volomCarburant=40;
}
// public function demarrer(){
// if($this->controleCarburant()){
// echo 'les vehicule demare ';
// return true;
// }
// echo 'le reservoir est vide..';
// }
// public function controleCarburant(){
//     return ($this->__volomCarburant>0);
// }
}


//Main:







//$monVehicule=new Vehicule();
//$monVehicule->marque='peugot<br>';
//echo $monVehicule->marque;// return value marque
//$monVehicule->setVolomCarburant(10);
//$monVehicule->demarrer();//return value  demarrer
//echo $monVehicule->gitVolomCarburant();//return value VolomCarburant
// echo"<br>";
//$monVehicule1=new Vehicule();
//echo $monVehicule1->gitVolomCarburant(); // construct par defaut
// $monVehicule2=new Vehicule("DASIA");
// echo $monVehicule2->marque;
echo "<br>";
$monVehicule=new voiture('peugot');

$monVehicule->repare();
$monVehicule->demarrer();
echo '<br>';
$monVehicule->car_horn='horn<br>';
echo $monVehicule->car_horn;
// var_dump($monVehicule);


