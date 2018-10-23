<?php

?>
<html>
    
<form action="forms.php" method="POST">
    Ka pakelti kvadratu: <input name="skaicius" type="text"/>
    <input type="submit"/>
</form>


</html>
<?php
if (isset($_POST['skaicius'])) {
    $skaicius = $_POST['skaicius']**2;
    print $skaicius;
    
   

}
?>