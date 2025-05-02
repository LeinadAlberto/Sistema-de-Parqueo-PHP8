<?php 
include("../app/config.php"); 
include("../layout/admin/datos_usuario_sesion.php");
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <?php include("../layout/admin/head.php"); ?>
    </head>

    <body class="hold-transition sidebar-mini">

        <div class="wrapper">

            <?php include("../layout/admin/menu.php"); ?>
            
            <!-- Content Wrapper -->
            <div class="content-wrapper">

                <br>

                <div class="container">

                    <h2 class="text-center">Asignación de Roles a Usuarios</h2>    

                    <div class="row mt-3">

                        <div class="col-md-1"></div>

                        <div class="col-md-10">

                            <div class="card card-outline card-info">

                                <div class="card-header">
                                    <h3 class="card-title">Listado de Usuarios</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div><!-- /.card-header -->

                                <div class="card-body">

                                    <table  class="table table-bordered table-sm table-striped">

                                        <thead class="text-center">
                                            <th>Nro</th>
                                            <th>Nombres de Usuario</th>
                                            <th>Correo Electrónico</th>
                                            <th>Asignar Rol</th>
                                        </thead>

                                        <tbody>
                                            <?php 
                                                $contador = 0;
                                                $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE estado = '1'");
                                                $query_usuario->execute();
                                                $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
                                                foreach($usuarios as $usuario) {
                                                    $contador = $contador + 1;
                                                    $id = $usuario["id"];
                                                    $nombres = $usuario["nombres"];
                                                    $rol = $usuario["rol"];
                                                    $email = $usuario["email"];
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $contador; ?></td>
                                                        <td class="text-start"><?php echo $nombres; ?></td>
                                                        <td><?php echo $email; ?></td>
                                                        <td class="text-center">
                                                            <?php 
                                                                if ($rol == "") {
                                                            ?>
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $id; ?>">
                                                                        Asignar
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">

                                                                                <form action="controller_asignar.php" method="post">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Asignar Rol</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div><!-- /.modal-header -->
                
                                                                                    <div class="modal-body text-left">
                                                                                        
                                                                                        <!-- Nombre de Usuario -->
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label>Nombre del Usuario</label>
                                                                                                    <input type="text" name="nombre" class="form-control" value="<?php echo $nombres; ?>">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- Correo Electrónico -->
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label>Correo Electrónico</label>
                                                                                                    <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- Rol -->
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label>Rol</label>
                                                                                                    <select name="rol" class="form-control">
                                                                                                        <?php 
                                                                                                            $query_rol = $pdo->prepare("SELECT * FROM tb_roles WHERE estado = '1'");
                                                                                                            $query_rol->execute();
                                                                                                            $roles = $query_rol->fetchAll(PDO::FETCH_ASSOC);
                                                                                                            foreach($roles as $rol) {
                                                                                                                $id_rol = $rol["id_rol"];
                                                                                                                $nombre = $rol["nombre"];
                                                                                                                ?>
                                                                                                                <option value="<?php echo $nombre; ?>"><?php echo $nombre; ?></option>
                                                                                                                <?php
                                                                                                            }
                                                                                                        ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- ID del Usuario -->
                                                                                        <input type="text" name="id_user" value="<?php echo $id; ?>" hidden>
                                                                                    </div><!-- /.modal-body -->
                
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                        <button type="submit" class="btn btn-info">Asignar Rol</button>
                                                                                    </div><!-- /.modal-footer -->
                                                                                </form>


                                                                            </div><!-- /.modal-content -->
                                                                        </div><!-- /.modal-dialog -->
                                                                    </div><!-- /.modal -->
                                                            <?php
                                                                } else {
                                                                    echo $rol;
                                                                }
                                                            ?>
                                                        </td>
                                                        
                                                    </tr>
                                                    <?php
                                                }
                                            ?>
                                        </tbody>

                                    </table>

                                </div><!-- /.card-body -->

                            </div><!-- /.card -->

                        </div><!-- /.col-md-10 -->

                        <div class="col-md-1"></div>

                    </div><!-- /.row -->
                    
                </div><!-- /.container -->

            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <?php include("../layout/admin/footer.php"); ?>

        </div><!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <?php include("../layout/admin/footer_link.php"); ?>
        
    </body>

</html>