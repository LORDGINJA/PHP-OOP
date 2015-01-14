<?php

	class Person{
		public $firstName;
		public $lastName; 
		public $height;
	

		public function __construct($firstName, $lastName, $height){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->height = $height;
		}

		public function Name(){
			return "My name is " . $this->firstName . $this->lastName;
		}

		public function Height(){
			return "I am " . $this->height;
		}
}
		$person1 = new Person();
		$person1->firstName = "Max ";
		$person1->lastName = "Karp";
		$person1->height = "5'11";

		print $person1->Name() . ". " .  $person1->Height();
	

?>