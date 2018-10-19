<?php
$fridge = array ("Jogurtas","Kebabas", "Alus", "Sugede vaisiai", "Supuves avokadas");
$text = null;


for ($i = 0; $i <count ($fridge); $i++) {
    
    $text .= $fridge [$i] . "<br>";
}
?>
<html>
    <body>
        <h1> Saldytuvo turinys: </h1>  
        <p> <?php print "$text "; ?></p>
 
    </body>
</html>