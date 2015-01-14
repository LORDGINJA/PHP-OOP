<?php
	class Race {
		public $color;
		public $generalHeight;
		public $generalHair;
		public $athleticAbilities;
		public $academicAbilities;
		public $noiseLevel;
		public $scaryness;

		function __construct($color, $generalHeight, $generalHair, $athleticAbilities, $academicAbilities, $noiseLevel, $scaryness) {
			$this->color = $color;
			$this->generalHeight = $generalHeight;
			$this->generalHair = $generalHair;
			$this->athleticAbilities = $athleticAbilities;
			$this->academicAbilities = $academicAbilities;
			$this->noiseLevel = $noiseLevel;
			$this->scaryness = $scaryness;
		}

		function getWorthiness() {
			return "are " . $this->academicAbilities . 
			" smart, and " . $this->athleticAbilities .
			" athletic. ";
		}

	}

	class White extends Race {
		function speak() {
			return $this->noiseLevel;
		}
	}

	class Asian extends Race {
		function scream() {
			return $this->noiseLevel;
		}
	}

	$white = new White("white", "tall", "blond", "average", "average", "average", "not");
	print "White people " . $white->getWorthiness();






	class Plant {
		public $benefits;
		public $species;
		public $scientificName;
		public $gender;
		public $height;
		public $flowers;
		public $color;

		function __construct($benefits, $species, $scientificName, $gender, $height, $flowers, $color) {
			$this->benefits = $benefits;
			$this->species = $species;
			$this->scientificName = $scientificName;
			$this->gender = $gender;
			$this->height = $height;
			$this->flowers = $flowers;
			$this->color = $color;
		}

		function getPlant() {
			return "is an " . $this->species . 
			" and " . $this->benefits . ". ";
		}

	}

	class Oak extends Plant {
		function shade() {
			return $this->benefits;
		}
	}

	class Rose extends Plant {
		function cut() {
			return $this->benefits;
		}
	}

	$oak = new Oak("Provides shade", "Oak", "oakus treeus", "male", "50ft", "no", "green and brown");
	print "This plant " . $oak->getPlant();





	class Game {
		public $category;
		public $name;
		public $levelOfFun;
		public $timeNecessary;
		public $playersNecessary;
		public $desiredLocation;
		public $gearNecessary;

		function __construct($category, $name, $levelOfFun, $timeNecessary, $playersNecessary, $desiredLocation, $gearNecessary) {
			$this->category = $category;
			$this->name = $name;
			$this->levelOfFun = $levelOfFun;
			$this->timeNecessary = $timeNecessary;
			$this->playersNecessary = $playersNecessary;
			$this->desiredLocation = $desiredLocation;
			$this->gearNecessary = $gearNecessary;
		}

		function getGame() {
			return " is a " . $this->category . 
			". It's called " . $this->name;
		}

	}

	class Soccer extends Game {
		function amountOfFun() {
			return $this->levelOfFun;
		}
	}

	class Chess extends Game {
		function Funness() {
			return $this->levelOfFun;
		}
	}

	$soccer = new Soccer("sport", "soccer", "very fun", "any amount of time", "at least two players", "grassy field", "ball");
	print "This game" . $soccer->getGame();
?>