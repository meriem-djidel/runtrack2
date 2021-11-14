<?php
session_start();

if(!(isset($_SESSION['nbvisites']))){
    $_SESSION['nbvisites'] = 0; 
}
else{
    $_SESSION['nbvisites'] ++;
}
echo "nombre de visite de la page : ".$_SESSION['nbvisites']." fois.";

?>
<form method="GET" action="index.php">
<input type="submit" name="reset" value="rafraîchir"></form>