<?php

$distance = rand(0, 10000);
$sanaudos_100km = 10;
$kuro_kaina = 1;
$mano_pinigai = 100;


$kuras = $sanaudos_100km * $distance / 100;
$kaina = $kuras * $kuro_kaina;

If ($kaina > $mano_pinigai) {
    print ("As to negaliu sau leisti, nes");
    print ("<p>");
    print ("nuvaziavus $distance km, masina sunaudos $kuras kuro. Tai kainuos $kaina pinigu");
} else {
    print (" Vaziuojam! ");
}


    