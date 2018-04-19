<?php
class Student{
	var $name;
	var $age;
	
	function setName($set){
		$this->name = $set;
	}
	
	function getName(){
		echo($this->name. "<br>");
	}
	
	function setAge($set){
		$this->age = $set;
	}
	
	function getAge(){
		echo($this->age. "<br>");
	}
}

$stu1 = new Student();
$stu2 = new Student();

$stu1->setName("Sanzid");
$stu2->setAge(23);

$stu1->getName();
$stu2->getAge();

class CR extends Student{
	var $rank;
}

$cr1 = new CR();

$cr1->setName("Sanzid");
$cr1->rank = 3;

$cr1->getName();
echo($cr1->rank);
?>
