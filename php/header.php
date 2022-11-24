 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text mx-3">E-Acres</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="./index.php">
            <i class="fas fa-fw fa-hat-cowboy"></i>
            <span>Agrônomos</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./compras.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Compras</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./clientes.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Clientes</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./safras.php">
            <i class="fas fa-fw fa-seedling"></i>
            <span>Safras</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./silos_disponiveis.php">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Silos Disponíveis</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./agronomo_safra.php">
            <i class="fas fa-fw fa-crown"></i>
            <span>Agrônomos por Safra</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                       
            </ul>

        </nav>
        <!-- End of Topbar -->