<?php
$grade=$_GET["grade"];  /*grade is name of variablle name in html page*/
/*we need to print all value from array*/
for ($i=0; $i<count($grade); $i++){
    echo "<br>$grade[$i]";
}


?>