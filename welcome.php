<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--form type-->
<form method="POST"><!--if use post in html have to use post on php --have to be the same-->
    <!--- 2--1  thing action  write php page and 2 method use get or post
     method get sent in fo that not important and less amount of data// post is when to send confidentail and more amount of data-->
    <label for="">Enter your name</label>
    <input type="text" name="userName">
    <!--in php we use name insted of id-->
    <input type="submit" value="Click" name="submitButton">

</form>
  

<?php
//if we click submit only then code excecuse
if (isset($_POST["submitButton"]))
{
$name = $_POST["userName"];//put have of text box in data.html name=
// html page use GET and php use $_GET or $_REQUEST is ok
// html page use POST and php use $_POST or $_REQUEST is ok
//so request can use for both
echo "Welcome $name";
}
?>


</body>
</html>


