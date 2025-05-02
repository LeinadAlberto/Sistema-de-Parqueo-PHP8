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
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <br>
                <div class="container">
                    <h2>Listado de Usuarios</h2>    

                    <table  class="table table-bordered table-sm table-striped">
                        <thead class="text-center">
                            <th>Nro</th>
                            <th>Nombres de Usuario</th>
                            <th>Correo Electrónico</th>
                            <th>Acciones</th>
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
                                    $email = $usuario["email"];
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $contador; ?></td>
                                        <td class="text-start"><?php echo $nombres; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td class="text-center">
                                            <a href="update.php?id=<?php echo $id; ?>" class="btn btn-success">Editar</a>
                                            <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <?php include("../layout/admin/footer.php"); ?>
        </div><!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <?php include("../layout/admin/footer_link.php"); ?>
        
    </body>

</html>