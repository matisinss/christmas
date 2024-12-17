<?php

class Flights {
    public functi on __construct(public $kods,
                                public $origin,
                                public $destination,
                                public $departuretime,
                                public $aircraft) {
    }

    public function getdistance(){
        return 300;
    }
}