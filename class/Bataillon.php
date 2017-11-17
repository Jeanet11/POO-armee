<?php
class Bataillon {

    public $soldats = [];

    public function __construct(){
        for($i = 0; $i < 50; $i++)
        {
            $this->soldats[]= new Tirailleur();
            
        }

        for($i = 0; $i < 50; $i++)
        {
            $this->soldats[]= new Cavalier();
            
        }
        for($i = 0; $i < 200; $i++)
        {
            $this->soldats[]= new Arbaletrier();
            
        }

    }
}