<?php 

class User {
	protected $userName = "Имя пользователя";
	protected $userAge = "Возраст пользователя";

  public function setName($name) {
		$this->userAge = $name;
		return $this->userAge;
	}

	public function getName() {
		return $this->userAge;
	}

	public function setAge($age) {
		$this->userAge = $age;
		return $this->userAge;
	}

	public function getAge() {
		return $this->userAge;
	}
}

class Worker extends User {
	private $workerSalary;
	
	public function setSalary($salary) {
		$this->workerSalary = $salary;
		return $this->workerSalary;
	}

	public function getSalary() {
		return $this->workerSalary;
	}
}

$Ivan = new Worker;
$Ivan->setName("Иван");
$Ivan->setAge(25);
$Ivan->setSalary(1000);

$Vasyl = new Worker;
$Vasyl->setName("Вася");
$Vasyl->setAge(47);
$Vasyl->setSalary(1500);

$sum = ($Ivan->getSalary() + $Vasyl->getSalary());
echo $sum;

?>
