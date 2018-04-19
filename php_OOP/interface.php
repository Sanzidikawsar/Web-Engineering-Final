<?php
interface student{
	public function setName($name);
	public function setAge($name);
}

class newStudent implements student{
	var $name;
	var $age;
	
	function setName($name){
		$this->name = $name;
		
	}
	function setAge($age){
		$this->age = $age;
	}
}

$stu1 = new newStudent();
$stu2 = new newStudent();

$stu1->setName("San");
$stu1->setAge(21);

$stu2->setName("Mou");
$stu2->setAge(22);

echo($stu1->name.", ".$stu1->age. "<br>");
echo($stu2->name.", ".$stu2->age);

?>
