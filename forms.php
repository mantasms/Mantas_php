<?php
$tekstas = 'ivesk skaiciu';

function kvadratas($skaicius) {
    $kvadratas = $skaicius ** 2;

    return $kvadratas;
}

if (isset($_POST['skaicius'])) {
    $skaicius = $_POST['skaicius'];
    if (!empty($skaicius)) {
        $tekstas = 'Atsakymas ' . kvadratas($skaicius);
    }
//    print $_POST['skaicius']**2;
//    print $kvadratas;
}
?>
<html>

    <form action="forms.php" method="POST">
        Ka pakelti kvadratu: <input name="skaicius" type="text"/>
        <input type="submit"/>
    </form>

    <h1><?php print $tekstas; ?></h1>


</html>