<?php
$fridge = ['Alus', 'Kebabas', 'Burokai', 'Suris'];
$text = ' ';
$noriu = ['Kebabas', 'Alus', 'Pjuklas'];

foreach ($fridge as $key => $kazkas) {
    
 if (in_array($kazkas, $noriu)) {
    unset($fridge[$key]);

 }
}
        var_dump($fridge);


 ?>
 <html>
    <body>
        <h1> Saldytuvo turinys: </h1>  
        <p> <?php print "$text "; ?></p>
 
     </body>
</html> 