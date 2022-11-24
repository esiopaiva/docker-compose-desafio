<?php
include "db_connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
   
    $nome = $_POST['Nome'];
    $especialidade = $_POST['Especialidade'];


    $insert = mysqli_query($db,"INSERT INTO `agronomo`(`Nome`,`Especialidade`) VALUES ('$nome','$especialidade')");
}

mysqli_close($db); // Close connection

header('Location: ./index.php')

?>