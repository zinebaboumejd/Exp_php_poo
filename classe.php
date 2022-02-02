<?php
class employee{
         var $name;
         var $position;
         var $salary;

         function employee($name, $position, $salary){
               $this->name = $name;
               $this->position = $position;
               $this->salary = $salary;
         }

         function working(){
               echo($this->name." is working");
         }

         function getSalary(){
               echo("Paying salary ".$this->salary." for ".$this->name);
         }
}
?>
<?php
class manager extends employee{
        function manager($name, $position, $salary){

             //declare manager to be one of employee with name
             $this->employee($name, $position, $salary);
             $this->special_duty = $duty;
        }

        function working(){
            echo($this->working());
            echo(" and working harder");
        }
}
?>
<?php
$emp1 = new employee("Bob", "Programmer", 1500);
$emp1->working();  //Prints Bob is working
$emp1->getSalary(); //Prints Paying salary 1500 for Bob

$emp2 = new manager("John", "System Analyst", 4500);
$emp2->working(); //Prints John is working and working harder
$emp2->getSalary(); //Prints Paying salary 4500 for John
?>