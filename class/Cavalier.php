<?php

class Cavalier extends Soldat {

    public $cheval;
    public $random;
    public $tableauCheval = ["Tornado", "Bucéphale", "Jolly Jumper"];

    public function __construct()
    {
        parent::__construct();
        shuffle($this->tableauCheval);
         $this->cheval = $this->tableauCheval[0];

    }

    public function __toString() {
        return parent::__toString()."<br>"
        ."Nom du cheval : ".$this->cheval."<br><hr/>";
    }
    

}