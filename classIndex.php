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
			return $this->firstName . $this->lastName;
		}

		public function Height(){
			return $this->height;
		}
}
		$person1 = new Person();
		$person1->firstName = "Max ";
		$person1->lastName = "Karp";
		$person1->height = "5'11";

		print "My name is " . $person1->Name() . ". " . "I am " . $person1->Height();
	

?>