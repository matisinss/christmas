<?php

require "aircraft.php";
require "airport.php";
require "flight.php";

$manaaircraft = new Aircraft("Airbus", "A220-300", 120, 850);
var_dump($manaaircraft);
$manalidosta = new Airport("RIX", 56.924, 23.871);
var_dump($manalidosta);
$jfxlidosta = new airport("jfk", 40.641766, -70.2344);
$departuretime= new DateTime();
$flights = new Flights("SA503", $manalidosta, $jfxlidosta, $departuretime, $manaaircraft);
var_dump($flights);
class Flights {
    private $flightNumber;
    private $departureAirport;
    private $destinationAirport;
    private $departureTime;
    private $aircraft;

    public function __construct($flightNumber, $departureAirport, $destinationAirport, $departureTime, $aircraft) {
        $this->flightNumber = $flightNumber;
        $this->departureAirport = $departureAirport;
        $this->destinationAirport = $destinationAirport;
        $this->departureTime = $departureTime;
        $this->aircraft = $aircraft;
    }

    public function getDistance() {
        $radius = 6371; // Zemes rādiuss km
        $lat1 = deg2rad($this->departureAirport->getLatitude());
        $lon1 = deg2rad($this->departureAirport->getLongitude());
        $lat2 = deg2rad($this->destinationAirport->getLatitude());
        $lon2 = deg2rad($this->destinationAirport->getLongitude());

        $distance = $radius * acos(
            sin($lat1) * sin($lat2) + 
            cos($lat1) * cos($lat2) * cos($lon2 - $lon1)
        );

        return $distance;
    }
}

echo $flights->getdistance();