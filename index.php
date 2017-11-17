<?php
require_once("class/Soldat.php");
require_once("class/Bataillon.php");
require_once("class/Tirailleur.php");
require_once("class/Cavalier.php");
require_once("class/Arbaletrier.php");
$bataillon1 = new Bataillon();

for($i = 0; $i < count($bataillon1->soldats); $i++)
{
echo($bataillon1->soldats[$i]);

}