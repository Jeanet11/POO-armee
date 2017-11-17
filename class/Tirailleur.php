<?php

class Tirailleur extends Soldat {

    public function __toString() {
        return parent::__toString()."<br>";
    }
} 