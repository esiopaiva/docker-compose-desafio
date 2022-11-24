<?php

$db = mysqli_connect('172.18.0.1','root','root123456','mydb');

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
