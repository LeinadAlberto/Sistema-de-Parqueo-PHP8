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
                
                    <h2 class="text-center">Agregar Nuevo Rol</h2>    

                    <div class="row mt-3">
                        <div class="col-md-3"></div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-info">
                                    Ingrese los datos del nuevo Rol
                                </div>

                                <div class="card-body">
                                    <!-- Nombre -->
                                    <div class="form-group">
                                        <label for="nombre">Nombre de Rol <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nombre" required>
                                    </div><!-- /.form-group -->

                                     <!-- Botones Guardar y Cancelar -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info" id="btn-guardar">Guardar</button>
                                        <a href="<?php echo $URL; ?>/roles/" class="btn btn-secondary">Cancelar</a>
                                    </div><!-- /.form-group -->

                                    <div id="respuesta"></div>

                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div><!-- /.col-md-6 -->
                        
                        <div class="col-md-3"></div>
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

<script>
    $('#btn-guardar').click(function() {
        var nombre = $('#nombre').val();

        if (nombre == '') {
            alert('Debe llenar el campo nombre');
            $('#nombre').focus();
        } else {
            guardar();
        }

        function guardar() {
            var url = 'controller_create.php';
            $.get(url, { nombre:nombre }, function(datos) {
                $('#respuesta').html(datos);
            });
        }

    });
</script>