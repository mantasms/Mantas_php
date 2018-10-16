<?php date_default_timezone_set("Europe/Vilnius");

?>

<html lang="en" dir="ltr">    
  <head>
    <meta charset="utf-8">
    <title> PHP lydės ir <?php print date ('D', strtotime('+1 day')) . ' !'; ?> </title>
  </head>
  
  <h1> Mantas - PHP su manim buvo ir <?php print date ('h',strtotime (' -1 hour')) . ' valandą!'; ?> </h1>
  <p> <?php print date('Y',strtotime(' +1 year')) . ' metai, '; ?> ne už kalnų !</p>
  
</html>
