<?php
$tekstas = 'Klausiu "Koks klausimas?"';
$masyvas=['taip','Ne'];

function random_atsakymas($array) {

    $key = rand(0, count($array)-1);
    $random_atsakymas = $array[$key];

    return $random_atsakymas; /* arba tik "return $array[$key];" tada nereikia $random_atsakymo*/

}

if (isset($_POST['klausimas'])) {
    $klausimas = $_POST['klausimas'];
    if (!empty($klausimas)) {
        $tekstas = 'Atsakymas: ' . random_atsakymas($masyvas);
    }
//    print $_POST['skaicius']**2;
//    print $kvadratas;
}
?>
<html>

    <form action="forms.php" method="POST">
        Klausimas: <input name="klausimas" type="text"/>
        <input type="submit"/>
    </form>
    
    <h1><?php print 'Klausimas: ' . $klausimas; ?></h1>
    <h1><?php print $tekstas; ?></h1>


</html>