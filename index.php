
<?php date_default_timezone_set("Europe/Vilnius");
// komentaras PHP

?>

<html lang="en" dir="ltr">   
    <!-- komentaras-->
  <head>
    <meta charset="utf-8">
    <title> PHP lydės ir <?php print date ('Y', strtotime('+' . rand (1, 10) . 'years')) . ' !'; ?> </title>
  </head>
  
  <body style="background-color:rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255); ?>)">
        
      
    <h1> Mantas - galbut turesiu <?php print rand (1, 5) . ' vaikus!'; ?> </h1>
    <p> trampas nebebus prezidentu <?php print date('Y, m, d', strtotime('+' . rand (3, 10) . 'years')) ; ?> </p>
    
  </body>
</html>
