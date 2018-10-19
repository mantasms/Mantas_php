<?php
$fridge = ["Jogurtas", "Kebabas", "Alus", "Sugede vaisiai", "Supuves avokadas"];
$i= rand(0, count ($fridge)-1);
$text = $fridge [$i];
var_dump ($fridge);

?>

<html>
    <body>
        <!--<h1> Saldytuvo turinys: </h1>-->  
        <p> <?php print $text ; ?></p>

    </body>
</html>