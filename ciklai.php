<?php
$x = 10;
$y = 2;
$text = "";

for ($i = 0; $i<=10; $i++) {
    if ($x>20) {
        
        $stop =' ciklas sustabdytas';
        break;
    }
    $x += $y;
    $text .= "Dabartine X verte: $x <br>";
    
}
?>

<html>
    <body>
        <h1> <?php print $text; ?></h1>  
        <h1> <?php print $stop; ?></h1>
    </body>
</html>