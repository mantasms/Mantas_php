<?php
    $array1 = [2,3,4];
    $array2 = [5,6,7];
    
/*
 * @param integer array1 vienas masyvas su reiksmemis
 * @param integer array2 kitas masyvas su reiksmemis
 * @return integer suma array1 ir array2 
 */
function rank($array1, $array2) {
    $a = array_sum($array1);
    $b = array_sum($array2);
    
    return ($a + $b);
    
}
?>
<html>
    <header>
        
    </header>
    <body>

        <h1>
            <?php print " suma " . rank($a, $b); ?>
        </h1>

    </body>
</html> 

