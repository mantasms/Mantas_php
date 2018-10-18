<?php
$kiek_isgerei = rand(0, 6);
$barnio_riba = rand(1, 4);
$skirtumas = $kiek_isgerei-$barnio_riba;


If ($kiek_isgerei >= $barnio_riba) { 
$atsakymas = "Miegosi balkone,nes isgerei $skirtumas bokalu per daug";

}else {
$atsakymas = " Nemiegosi balkone, nes saunuolis, galejai dar isgerti " .  abs($skirtumas);

}
?>

<html>
    <head>

    </head>

    <body>
        <h1> <?php print $atsakymas; ?></h1>

    </body>
</html>