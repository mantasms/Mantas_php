<?php
$months = 12;
$starting_money = 1000;
$alga = 700;
$islaidos = rand(0, 2000);
$sum_islaidos = 0;
$men_likutis = 0;
$stop = null;


for ($i = 1; $i <= $months; $i++) {
    if ($starting_money<0)
     {
        $stop = " $i  menesi gali baigtis pinigai. Atsargiai !";
        break;
        
    }
    $sum_islaidos += $islaidos;
    $men = $i;
    $v_islaidos = ($sum_islaidos / $men);
    $men_likutis = $alga - $islaidos;
    $starting_money += $men_likutis;
}
?>

<html>
    <body>
        <h1> <?php print "vidutines islaidos $v_islaidos "; ?></h1>  
        <!--<h1> <?php print $men_likutis; ?></h1>-->
        <h1> <?php print " likutis pabaigoje $starting_money "; ?></h1>
        <h1> <?php print $stop; ?></h1>
    </body>
</html>