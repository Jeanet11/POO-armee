<?php

class Soldat {
    public $matricule = "";
    public $age;
    public $esperanceVie = 0;

    public static $generateurMatricule = 1;

    
    public function __construct()
    {
        $this->matricule = self::$generateurMatricule++;
        $this->age = rand(18,50);
        $this->esperanceVie = rand(10,1000);
       
    }


    public function __toString()
    {
        return "<br>".get_class($this)."<br>"
            ."Matricule : ".$this->matricule
            ." / Age : ".$this->age." ans "
            ." / Esperance de vie : ".$this->esperanceVie." jours";
    }
}