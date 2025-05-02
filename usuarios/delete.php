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

                    <?php 
                        $id_get = $_GET["id"];
                        
                        $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE id='$id_get' AND estado = '1'");
                        $query_usuario->execute();
                        $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($usuarios as $usuario) {
                            $id = $usuario["id"];
                            $nombres = $usuario["nombres"];
                            $email = $usuario["email"];
                            $password_user = $usuario["password_user"];
                        }
                    
                    ?>
                
                    <h2 class="text-center">Eliminación de Usuario</h2>    

                    <div class="row mt-3">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">¿Esta seguro de eliminar este registro?</h3>
                                </div><!-- /. card-header -->

                                <div class="card-body">
                                    <!-- Nombre -->
                                    <div class="form-group">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control" value="<?php echo $nombres; ?>" disabled>
                                    </div><!-- /.form-group -->

                                    <!-- Correo Electrónico -->
                                    <div class="form-group">
                                        <label>Correo Electrónico</label>
                                        <input type="email" class="form-control" value="<?php echo $email; ?>" disabled>
                                    </div><!-- /.form-group -->

                                    <!-- Contraseña -->
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="text" class="form-control" value="<?php echo  $password_user; ?>" disabled>
                                    </div><!-- /.form-group -->

                                     <!-- Botones Guardar y Cancelar -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger" id="btn-eliminar">Eliminar</button>
                                        <a href="<?php echo $URL; ?>/usuarios/" class="btn btn-secondary">Cancelar</a>
                                    </div><!-- /.form-group -->

                                    <div id="respuesta"></div>

                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-3"></div>
                    </div><!-- /.row -->
                </div>
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <?php include("../layout/admin/footer.php"); ?>
        </div><!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <?php include("../layout/admin/footer_link.php"); ?>
        
    </body>

</html>

<script>
    $('#btn-eliminar').click(function() {
        
        var id_user = '<?php echo $id_get; ?>';

         var url = 'controller_delete.php';
        
        $.get(url, { id_user:id_user }, function(datos) {
                $('#respuesta').html(datos);
        });
          
    });
</script>

