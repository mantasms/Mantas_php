<?php
var_dump($_GET);

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if ($page == 'home') {
        $title = 'Home page';
        $h1 = 'Sveiki atvykę!';
    }

    elseif ($page == 'cv') {
        $title = 'Mano CV';
        $h1 = 'CV:';
    }

    elseif ($page == 'showcase') {
        $title = 'Mano paroda';
        $h1 = 'paroda: Skaiciuokle';
    } else
        $title = 'Error';
        $h1 = 'Wrong Page!';
};
?>

<html>

    <title> <?php print $title; ?></title>

    <h1><?php print $h1; ?></h1>


</html>



