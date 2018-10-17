<?php
       
$mano_pinigai = 1000;
$spent_per_month = 600;
$earned_per_month = 800;
$unknown_per_month = rand(0, 1000);
$months = 24;      

$prognoze = $mano_pinigai + ($earned_per_month - $spent_per_month - $unknown_per_month)*24;
print "Po " . $months . " menesiu as turesiu " . $prognoze . " pinigu, kai random yra " . $unknown_per_month;

print "<p>";

$liepa = 31;
$rugpjutis = 30;
$rugsejis = 30;

$siandien = date('d');
        
print $siandien;

$dienos = $liepa+$rugpjutis+$rugsejis+$siandien;

print "<br>";

print $dienos;


       

