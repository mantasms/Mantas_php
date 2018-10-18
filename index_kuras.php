<?php
$distance = rand(0, 2000);
$sanaudos_100km = 7.5;
$kuro_kaina = 1.3;
$mano_pinigai = 100;
$bako_talpa= 40;

$kuras = $sanaudos_100km * $distance / 100;
$kaina = $kuras * $kuro_kaina;
$pylimai = 


If ($kaina > $mano_pinigai) {
    $atsakymas = "As to negaliu sau leisti, nes nuvaziavus $distance km, masina sunaudos $kuras litru kuro. Tai kainuos $kaina pinigu !";
} else {
    $atsakymas = (" Vaziuojam! $distance km. kainuos tik $kaina pinigu!");
}
?>

<html>
    <head>

    </head>

    <body>
        <h1> <?php print $atsakymas;?></h1>
    </body>
</html>