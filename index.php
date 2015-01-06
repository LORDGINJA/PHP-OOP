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

$Alligator1­>firstName = “BooBoo”;

$Alligator1­>lastName = “Iwao”;

print “The dog’s name is {$dog1­>getName()}.”;

//The dog’s name is BooBoo Iwao.



class Crocodile {

protected $region = “region where found”;

protected $country = “country where found”;

protected $gender = “male”;

protected $totalpopulation = number;

function getLocation() {

return “{$this­>firstName}” .

“{$this­>lastName}”;

}

}

$dog1 = new Dog();

$dog1­>firstName = “BooBoo”;

$dog1­>lastName = “Iwao”;

print “The dog’s name is {$dog1­>getName()}.”;

//The dog’s name is BooBoo Iwao.


class Caiman {

private $firstName = “default name”;

private $lastName = “default last name”;

private $gender = “male”;

private $totalpopulation = number;

function getName() {

return “{$this­>firstName}” .

“{$this­>lastName}”;

}

}

$dog1 = new Dog();

$dog1­>firstName = “BooBoo”;

$dog1­>lastName = “Iwao”;

print “The dog’s name is {$dog1­>getName()}.”;

//The dog’s name is BooBoo Iwao.