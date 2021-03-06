<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">

        <?php
        if ($_SESSION['user']['Role_id'] == 2) {
            $modules = ['Users', 'works', 'categories', 'department', 'Roles'];
        }
        else{
            $modules = ['works'];
        }
       
        foreach ($modules as $key => $module) {


        ?>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages<?php echo $key; ?>" aria-expanded="true" aria-controls="collapsePages">
                <span><?php
                        echo $module;
                        ?></span>

                <i class="fas fa-fw fa-folder"></i>

            </a>
            <div id="collapsePages<?php echo $key; ?>" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">


                <div class="bg-white py-2 collapse-inner rounded">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link text-dark" href="<?php echo Url($module . '/create.php'); ?>"> + Create</a>
                        <a class="nav-link text-dark" href="<?php echo Url($module . '/'); ?>"> *Control</a>
                    </nav>

                    <!-- <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="../login.php">Login</a>
                    <a class="collapse-item" href="../register.php">Register</a>
                    <a class="collapse-item" href="../../folk/index.php">Departments</a>
                    <a class="collapse-item" href="../works/create.php">Works</a>
                    <a class="collapse-item" href="../users/create.php">Users</a> -->
                    <!-- <a class="collapse-item" href="../categories/create.php">Categories</a>
            <a class="collapse-item" href="../roles/create.php">Roles</a> -->

                    <div class="collapse-divider"></div>


                    <!-- <a class="collapse-item" href="blank.html">Blank Page</a> -->
                </div>
            </div>

        <?php
        } ?>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="../img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">