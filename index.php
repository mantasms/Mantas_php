<?php
$mano_pinigai = 1000;
$spent_per_month = 600;
$earned_per_month = 800;
$unknown_per_month = rand(0, 1000);
$months = 24;

$prognoze = $mano_pinigai + ($earned_per_month - $spent_per_month - $unknown_per_month) * 24;
print "Po " . $months . " menesiu as turesiu " . $prognoze . " pinigu, kai random yra " . $unknown_per_month;

print "<p>";

$liepa = 31;
$rugpjutis = 30;
$rugsejis = 30;

$siandien = date('d');

print $siandien;

$dienos = $liepa + $rugpjutis + $rugsejis + $siandien;

print "<br>";

print $dienos;
print "<p>";

$sun = rand(0, 1);
$rain = rand(0, 1);
$oras = null;
$lietus = null;

if ($sun&&$rain){
  
    print 'sviecia saule ir lyja';
    $oras = 'Sauletas_lietus';
    
} else {
    print 'debesuota ir nelyja';
    $oras = 'Debesuota';
}
if ($sun XOR $rain) {
    print ' Sviecia saule';
    $oras = 'Saule';
    
} else {
    print ' ir nelyja';
    $oras = 'nelyja';
}
?>

<html>








