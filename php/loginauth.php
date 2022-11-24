<?php

include "db_connection.php";

$login = $_POST['Login'];
$senha = $_POST['Senha'];
$entrar = $_POST['submit'];

  if (isset($submit)) {

    $verifica = mysqli_query($db,"SELECT * FROM `fazendeiro` WHERE `Login` =
    '$login' AND `Senha` = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        mysqli_close($db);  
       
      }
      
  }

 
?>