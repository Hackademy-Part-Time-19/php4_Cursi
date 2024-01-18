<?php


/*
class Continent
{
    public $nameContinent;

    public function __construct($nameContinent)
    {
        $this->nameContinent = $nameContinent;
    }

    public function getMyCurrentLocation()
    {
        echo "Mi trovo in " . $this->nameContinent . ",";
    }
}


class Country extends Continent
{
    public $nameCountry;

    public function __construct($nameContinent, $nameCountry)
    {
        parent::__construct($nameContinent);
        $this->nameCountry = $nameCountry;
    }

    public function getMyCurrentLocation()
    {
        parent::getMyCurrentLocation();
        echo " nel paese " . $this->nameCountry . ",";
    }
}

class Region extends Country
{
    public $nameRegion;

    public function __construct($nameContinent, $nameCountry, $nameRegion)
    {
        parent::__construct($nameContinent, $nameCountry);
        $this->nameRegion = $nameRegion;
    }

    public function getMyCurrentLocation()
    {
        parent::getMyCurrentLocation();
        echo " nella regione " . $this->nameRegion . ",";
    }
}

class Province extends Region
{
    public $nameProvince;

    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince)
    {
        parent::__construct($nameContinent, $nameCountry, $nameRegion);
        $this->nameProvince = $nameProvince;
    }

    public function getMyCurrentLocation()
    {
        parent::getMyCurrentLocation();
        echo " nella provincia " . $this->nameProvince . ",";
    }
}

class City extends Province
{
    public $nameCity;

    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity)
    {
        parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince);
        $this->nameCity = $nameCity;
    }

    public function getMyCurrentLocation()
    {
        parent::getMyCurrentLocation();
        echo " nella citta di " . $this->nameCity . ",";
    }
}

class Street extends City
{
    public $nameStreet;

    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet)
    {
        parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity);
        $this->nameStreet = $nameStreet;
    }

    public function getMyCurrentLocation()
    {
        parent::getMyCurrentLocation();
        echo " nella " . $this->nameStreet . ",";
    }
}

$myLocation = new Street("Europa", "Italia", "Emilia Romagna", "Reggio Emilia", "Cadelbosco di sopra", "Via san tommaso");

$myLocation->getMyCurrentLocation();


*/



//SECONDO ESERCIZIO

abstract class Vertebrates{
    public function __construct(){      
      
    }

    protected function Vertebrati(){
        return "Sono un animale Vertebrato \n";
    }
    
}


class WarmBloods extends Vertebrates{
    public function __construct(){

    }

    protected function SangueCaldo(){
        return "Sono un animale a sangue caldo \n";

    }

}


class Mammals extends WarmBloods{
    public function __construct(){
        parent::__construct();
        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueCaldo();
        echo "Roar \n";
    }
}

Class Birds extends WarmBloods{

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueCaldo();
        echo "Cip \n";
    }
}


class ColdBlood extends Vertebrates{
    public function __construct(){}

    protected function SangueFreddo(){
        return "Sono un animale a sangue freddo \n";
    }
}

class Fish extends ColdBlood{
    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "Splash \n";
    }
}

Class Reptiles extends ColdBlood{

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "Psh \n";
    }
}

Class Amphibians extends ColdBlood{

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "Crah \n";
    }
}

$pesce = new Fish();
$leone = new Mammals();
$uccellino = new Birds();
$serpente = new Reptiles();
$rana = new Amphibians();