<?php
	class Person {
		public $firstName;
		public $lastName;
		public $height;
	

		function __construct($firstName, $lastName, $height){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->height = $height;
		}

		 function getName(){
			return "My name is " . $this->firstName . $this->lastName;
		}

		 function getHeight(){
			return "I am " . $this->height;
		}
}
		$person = new Person("Max ", "Karp", "5'11");

		print $person->getName() . ". " .  $person->getHeight();
	

?>