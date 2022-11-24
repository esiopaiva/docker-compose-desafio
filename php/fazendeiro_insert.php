<?php
include "db_connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $id_fazendeiro = $_POST['id_fazendeiro'];
    $nome = $_POST['nome'];

    $insert = mysqli_query($db,"INSERT INTO `fazendeiro`(`id_usuario`, `Nome`) VALUES ('$id_fazendeiro','$nome')");
}

mysqli_close($db); // Close connection
?>