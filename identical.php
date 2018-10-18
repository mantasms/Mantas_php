<?php
$bool = true;
$int = 1;
$str1 = "1";
$flt = 1.23;
$str2 = "1.23";



If ($bool == $int) { 
$atsakymas1 = "Lyginame boolen- $bool ir integer- $int atsakymas: lygu (equal)";

}else {
$atsakymas1 = "Lyginame boolen- $bool ir integer- $int atsakymas: nelygu ( not equal)";

}

If ($bool === $int) { 
$atsakymas2 = "identiski (identical)";

}else {
$atsakymas2 = "neidentiski ( not identical)";

}
If ($bool == $str) { 
$atsakymas3 = "Lyginame boolen- $bool ir integer- $int atsakymas: lygu (equal)";

}else {
$atsakymas3 = "Lyginame boolen- $bool ir integer- $int atsakymas: nelygu ( not equal)";

}

If ($bool === $int) { 
$atsakymas4 = "identiski (identical)";

}else {
$atsakymas4 = "neidentiski ( not identical)";

}
?>

<html>
    <head>

    </head>

    <body>
        <h1> <?php print "$atsakymas1   $atsakymas2"; ?></h1>

    </body>
</html>