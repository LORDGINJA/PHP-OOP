<?php
	class Race {
		public $color;
		public $generalHeight;
		public $generalHair;
		public $athleticAbilities;
		public $academicAbilities;
	
		function __construct($color, $generalHeight, $generalHair, $athleticAbilities, $academicAbilities) {
			$this->color = $color;
			$this->generalHeight = $generalHeight;
			$this->generalHair = $generalHair;
			$this->athleticAbilities = $athleticAbilities;
			$this->academicAbilities = $academicAbilities;
		}

		function getWorthiness() {
			return "are " . $this->academicAbilities . 
			" smart, and " . $this->athleticAbilities .
			" athletic. ";
		}

	}

	class White extends Race {
		function __construct($color, $generalHeight, $generalHair, $athleticAbilities, $academicAbilities, $english) {
			parent::__construct($color, $generalHeight, $generalHair, $athleticAbilities, $academicAbilities);
			$this->english = $english;
		}
		function speak() {
			return $this->english;
		}
	}

	class Asian extends Race {
		function __construct($color, $generalHeight, $generalHair, $athleticAbilities, $academicAbilities, $chinese) {
			parent::__construct($color, $generalHeight, $generalHair, $athleticAbilities, $academicAbilities);
			$this->chinese = $chinese;
		}
		function language() {
			return $this->chinese;
		}
	}

	$white = new White("white", "tall", "blond", "average", "average", "english", "chinese");
	print "White people " . $white->getWorthiness();
	print "They speak " . $white->speak();





	class Plant {
		public $flowers;
		public $species;
		public $scientificName;
		public $gender;
		public $height;

		function __construct($flowers, $species, $scientificName, $gender, $height) {
			$this->flowers = $flowers;
			$this->species = $species;
			$this->scientificName = $scientificName;
			$this->gender = $gender;
			$this->height = $height;
		}

		function getPlant() {
			return "is an " . $this->species . 
			" and " . $this->flowers . ". ";
		}

	}

	class Oak extends Plant {
		function __construct($benefits, $species, $scientificName, $gender, $height, $shade) {
			parent::__construct($benefits, $species, $scientificName, $gender, $height);
			$this->shade = $shade;
		}
		function Shade() {
			return $this->shade;
		}
	}

	class Rose extends Plant {
		function __construct($benefits, $species, $scientificName, $gender, $height, $cuts) {
			parent::__construct($benefits, $species, $scientificName, $gender, $height);
			$this->cuts = $cuts;
		}
		function Cut() {
			return $this->cuts;
		}
	}

	$oak = new Oak("doesn't have flowers", "Oak", "oakus treeus", "male", "50ft", "provides shade", "cuts and scrapes");
	print "<br>" . "This plant " . $oak->getPlant();
	print "It " . $oak->Shade();




	class Game {
		public $category;
		public $name;
		public $levelOfFun;
		public $timeNecessary;
		public $playersNecessary;

		function __construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary) {
			$this->category = $category;
			$this->name = $name;
			$this->levelOfFun = $levelOfFun;
			$this->timeNecessary = $timeNecessary;
			$this->playersNecessary = $playersNecessary;
		}

		function getGame() {
			return " is a " . $this->category . 
			". It's called " . $this->name;
		}

	}

	class Soccer extends Game {
		function __construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary, $muscles) {
			parent::__construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary);
			$this->muscles = $muscles;
		}
		function needed() {
			return $this->muscles;
		}
	}

	class Chess extends Game {
		function __construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary, $brain) {
			parent::__construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary);
			$this->brain = $brain;
		}
		function Needed() {
			return $this->brain;
		}
	}

	$soccer = new Soccer("sport", "soccer", "very fun", "any amount of time", "at least two players", "muscles", "brain");
	print "<br>" . "This game" . $soccer->getGame();
	print ". It requires " . $soccer->needed();
?>