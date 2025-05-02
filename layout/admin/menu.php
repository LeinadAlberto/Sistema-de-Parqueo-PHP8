<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL; ?>/principal.php" class="brand-link">
        <img src="<?php echo $URL; ?>/public/imagenes/logo3.png" alt="imagen-logo"  class="brand-image img-circle elevation-3"
        style="opacity: .9">
        <span class="brand-text font-weight-light">SISTEMA PARQUEO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo $URL; ?>/public/imagenes/icono-usuario.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php echo $nombres_sesion; ?>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Usuarios -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Usuarios
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/usuarios/index.php" class="nav-link">
                                <i class="fas fa-user-tie nav-icon"></i>
                                <p>Listado de Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/usuarios/create.php" class="nav-link">
                                <i class="fas fa-user-tie nav-icon"></i>
                                <p>Agregar Nuevo Usuario</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Roles -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tag"></i>
                        <p>
                            Roles
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/roles/index.php" class="nav-link">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>Listado de Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/roles/create.php" class="nav-link">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>Agregar Nuevo Rol</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/roles/asignar.php" class="nav-link">
                                <i class="fas fa-user-tag nav-icon"></i>
                                <p>Asignar Rol</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Parqueo -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Parqueo
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Mapeo de Vehículos -->
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/parqueo/mapeo-de-vehiculos.php" class="nav-link">
                                <i class="fas fa-car fa-xs nav-icon" style="color: #74C0FC;"></i>
                                <p>Mapeo de Vehículos</p>
                            </a>
                        </li>

                        <!-- Registro de Espacios -->
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/parqueo/create.php" class="nav-link">
                                <i class="fas fa-pencil-alt fa-xs nav-icon" style="color: #74C0FC;"></i>
                                <p>Registro de Espacios</p>
                            </a>
                        </li>
                    </ul>
                </li>
               
                <!-- Cerrar Sesión -->
                <li class="nav-item">
                    <a href="<?php echo $URL; ?>/login/cerrar_sesion.php" class="nav-link">
                        <i class="nav-icon fas fa-door-closed"></i>
                        Cerrar Sesión
                    </a>
                </li>
            </ul>
        </nav><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
</aside>