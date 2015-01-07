LECTURE 1

class Alligator {

	//class body

	//class body

	//class body

}

class Crocodile {

	//class body

	//class body

	//class body

}

class Caiman {

	//class body

	//class body

	//class body

}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$Alligator1 = new Alligator();

$Alligator2 = new Alligator();

$Crocodile1 = new Crocodile();

$Crocodile2 = new Crocodile();

$Caiman1 = new Caiman();

$Caiman2 = new Caiman();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Alligator {

	public $locaton =  “location”;

	public $species = “species name”;

	public $gender = “male”;

	public $totalpopulation = number;

}

class Crocodile {

	protected $location = “location”;

	protected $species = “species name”;

	protected $gender = “female”;

	protected $totalpopulation = number;

}

class Caiman {

	private $location = “location”;

	private $species = “species name”;

	private $gender = “male”;

	private $totalpopulation = number;

}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$Alligator1 = new Alligator();

print $Alligator1­>location;

// default location

$Crocodile1 = new Crocodile();

print $Crocodile1­>location;

// default location

$Caiman1 = new Caiman();

print $Caiman1­>location;

// default location

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function myMethod( $argument, $another) {

// stuff

}

public function myMethod( $argument, $another) {

// stuff

}

public function myMethod( $argument, $another) {

// stuff

}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Alligator {

	public $region = “region where found”;

	public $country = “country where found”;

	public $gender = “male”;

	public $totalpopulation = number;

	function getLocation() {

		return “{$this­>region}” .

		“{$this­>country}”;

	}

}

$Alligator1 = new Alligator();

$Alligator1­>region = “swamps, ”;

$Alligator1­>country = “America”;

print “The locationn of the alligator is {$Alligator1­>getLocation()}.”;

//The location of the Alligator is swamps, america



class Crocodile {

	protected $region = “region where found”;

	protected $country = “country where found”;

	protected $gender = “male”;

	protected $totalpopulation = number;

	function getLocation() {

		return “{$this­>region}” .

		“{$this­>country}”;

	}

}

$Crocodile1 = new Crocodile();

$Crocodile1­>region = “rivers, ”;

$Crocodile1­>country = “Egypt”;
print “The locationn of the Crocodile is {$Crocodile1­>getLocation()}.”;

//The location of the Crocodile is rivers, Egypt


class Caiman {

	private $region = “region where found”;

	private $country = “country where found”;

	private $gender = “male”;

	private $totalpopulation = number;

	function getLocation() {

		return “{$this­>region}” .

		“{$this­>country}”;

	}

}

$Caiman1 = new Caiman();

$Caiman1­>region = “lakes, ”;

$Caiman1­>country = “South America”;
print “The locationn of the Caiman is {$Crocodile1­>getLocation()}.”;

//The location of the Caiman is lakes, South America



====================================================================================================================================
====================================================================================================================================



LECTURE 2

class Alligator {

	public $region;

	public $country;

	public $species;

	function __construct($title, $region, $country, $species) {

		$this­>region = $region;

		$this­>country = $country;

		$this­>species = $species;

	}

	function getLocation() {

		return “{$this­>region}” .

		“{$this­>country}”;

	}

}



class Crocodile {

	public $region;

	public $country;

	public $species;

	function __construct($title, $region, $country, $species) {

		$this­>region = $region;

		$this­>country = $country;

		$this­>species = $species;

	}

	function getLocation() {

		return “{$this­>region}” .

		“{$this­>country}”;

	}

}




class Caiman {

	public $region;

	public $country;

	public $species;

	function __construct($title, $region, $country, $species) {

		$this­>region = $region;

		$this­>country = $country;

		$this­>species = $species;

	}

	function getLocation() {

		return “{$this­>region}” .

		“{$this­>country}”;

	}

}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$Alligator1 = new Alligator(“swamps, ”, “America”, “saltwater”);

print “Alligator 1: {$Alligator1­>getLocation()}\n;


$Crocodile1 = new Crocodile(“rivers, ”, “Egypt”, “freshwater”);

print “Crocodile 1: {$Crocodile1­>getLocation()}\n;


$Caiman1 = new Caiman(“lakes, ”, “South America”, “speckled”);

print “Caiman 1: {$Caiman1­>getLocation()}\n;