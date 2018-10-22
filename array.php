<?php
$fridge = ['kebabas' => 2.50,
    'alus' => 1.89,
    'burokai' => 1.50
];

//var_dump($fridge);

$index = array_keys($fridge);
$random = rand(0, count($index) - 1);


?>
<html>
    <body>
        <h1> Bet kas: </h1>  
        <p> <?php print "$index[$random] "; ?></p>

    </body>
</html> 