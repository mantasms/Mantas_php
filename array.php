<?php
$fridge = ["Jogurtas","Kebabas", "Alus", "Sugede vaisiai", "Supuves avokadas"];
$text = ' ';
$noriu = ["Kebabas", "Alus", "Pica"];

foreach ($noriu as $kazkas) {
    
 if (in_array($kazkas, $fridge)) {
         
     $text.=  "$kazkas: turiu <br>";
 }
 
else {
    $text.=  "$kazkas: Neturiu <br>";
}
}
 ?>
 <html>
    <body>
        <h1> Saldytuvo turinys: </h1>  
        <p> <?php print "$text "; ?></p>
 
     </body>
</html> 