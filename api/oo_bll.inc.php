<?php

class BLLPlayer
{

    public $squadno;

    public $position;

    public $firstname;

    public $lastname;

    public $nationality;

    public $role;

    public function __construct($psno, $ppos, $pfn, $pln, $pnat = "Spanish", $prole = "")
    {
        $this->squadno = $psno;
        $this->position = $ppos;
        $this->firstname = $pfn;
        $this->lastname = $pln;
        $this->nationality = $pnat;
        $this->role = $prole;
    }
}

class BLLSquad
{

    public $squadlist = array();

    public $squadname;

    public $captainindex;

    public function __construct()
    {
        $this->squadlist = [];
        $this->squadname = "";
        $this->captainindex = - 1;
    }
}

?>