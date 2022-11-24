<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Acres</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php include "header.php"; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
                    <p class="mb-4">Relatório de todos os clientes!</p>

                    <!-- DataTales Example -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            <?php
                                include "db_connection.php";

                                //Query
                                $sql = "SELECT * FROM cliente";

                                //Execution + error checking
                                if(!$result = $db->query($sql)){
                                    die('There was an error running the query [' . $db->error . ']');
                                }
                            ?>
                            
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>CNPJ</th>
                                            <th>Nome</th>
                                            <th>Cidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row = $result->fetch_assoc()){
                                                //Displaying results in table rows
                                                echo "<tr>
                                                        <td>".$row["id_Cliente"]."</td>
                                                        <td>".$row["CNPJ"]."</td>
                                                        <td>".$row["Nome_fantasia"]."</td>
                                                        <td>".$row["Cidade"]."</td>
                                                </tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include "footer.php"; ?>

        </div>
        <!-- End of Content Wrapper -->

        <?php include "bottom.php"; ?>

</body>

</html>