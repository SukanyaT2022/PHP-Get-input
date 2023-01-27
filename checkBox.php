<?php
$hobby=$_GET["hobby"];  /*hobby is name of variablle name in html page*/
/*we need to print all value from array*/
for ($i=0; $i<count($hobby); $i++){
    echo "<br> $hobby[$i]";
}


?>