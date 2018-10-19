<?php
$fridge = ["Jogurtas", "Kebabas", "Alus", "Sugede vaisiai", "Supuves avokadas"];
$text = ' ';


foreach ($fridge as $produktas) {

    $text.=  $produktas . "<br>";
}

?>

<html>
    <body>
        <h1> Saldytuvo turinys: </h1>  
        <p> <?php print $text ; ?></p>

    </body>
</html>