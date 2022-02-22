<?php 

class Student {
	private $studentName = "Имя студента";
	private $studentAge = "Возраст студента";
	private $studentGroup = "Группа студента";

	public function setName($name) {
		$this->studentName = $name;
		return $this->studentName;
	}

	public function getName() {
		return $this->studentName;
	}

	public function setAge($age) {
		$this->studentAge = $age;
		return $this->studentAge;
	}

	public function getAge() {
		return $this->studentAge;
	}

	public function setGroup($group) {
		$this->studentGroup = $group;
		return $this->studentGroup;
	}

	public function getGroup() {
		return $this->studentGroup;
	}
}

$Ivan = new Student;
$Ivan->setName("Иван");
$Ivan->setAge(21);
$Ivan->setGroup("U1001");

$Vasyl = new Student;
$Vasyl->setName("Вася");
$Vasyl->setAge(20);
$Vasyl->setGroup("U1002");

$sum = ($Vasyl->getAge() + $Ivan->getAge());
echo $sum;

?>
