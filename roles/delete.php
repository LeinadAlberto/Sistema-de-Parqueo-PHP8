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
                
                    <h2 class="text-center">Eliminación de Rol</h2>    

                    <?php 
                        $id_rol = $_GET["id"];
                        
                        $query_rol = $pdo->prepare("SELECT * FROM tb_roles WHERE id_rol='$id_rol' AND estado = '1'");
                        $query_rol->execute();
                        $roles = $query_rol->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($roles as $rol) {
                            $id_rol = $rol["id_rol"];
                            $nombre = $rol["nombre"];
                        }
                    
                    ?>

                    <div class="row mt-3">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-red">
                                    ¿Estas seguro de eliminar este registro?
                                </div>

                                <div class="card-body">
                                    <!-- Nombre -->
                                    <div class="form-group">
                                        <label>Nombre de Rol</label>
                                        <input type="text" class="form-control" value="<?php echo $nombre; ?>" disabled>
                                    </div><!-- /.form-group -->

                                     <!-- Botones Guardar y Cancelar -->
                                    <div class="form-group">
                                        <button class="btn btn-danger" id="btn-eliminar">Eliminar</button>
                                        <a href="<?php echo $URL; ?>/roles/" class="btn btn-secondary">Cancelar</a>
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
        
        var id_rol = '<?php echo $id_rol; ?>';

         var url = 'controller_delete.php';
        
        $.get(url, { id_rol:id_rol }, function(datos) {
                $('#respuesta').html(datos);
        });
          
    });
</script>