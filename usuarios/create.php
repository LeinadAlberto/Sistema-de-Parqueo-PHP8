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
                
                    <h2 class="text-center">Agregar Nuevo Usuario</h2>    

                    <div class="row mt-3">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-info">
                                    Ingrese los datos del nuevo Usuario
                                </div>

                                <div class="card-body">
                                    <!-- Nombre -->
                                    <div class="form-group">
                                        <label for="nombres">Nombres *</label>
                                        <input type="text" class="form-control" id="nombres" required>
                                    </div><!-- /.form-group -->

                                    <!-- Correo Electrónico -->
                                    <div class="form-group">
                                        <label for="email">Correo Electrónico *</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div><!-- /.form-group -->

                                    <!-- Contraseña -->
                                    <div class="form-group">
                                        <label for="password_user">Contraseña *</label>
                                        <input type="text" class="form-control" id="password_user" required>
                                    </div><!-- /.form-group -->

                                     <!-- Botones Guardar y Cancelar -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info" id="btn-guardar">Guardar</button>
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
    $('#btn-guardar').click(function() {
        var nombres = $('#nombres').val();
        var email = $('#email').val();
        var password_user = $('#password_user').val();

        if (nombres == '') {
            alert('Debe llenar el campo nombres');
            $('#nombres').focus();
        } else if (email == '') {
            alert('Debe llenar el campo correo electronico');
            $('#email').focus();
        } else if (password_user == '') {
            alert('Debe llenar el campo contraseña');
            $('#password_user').focus();
        } else {
            guardar();
        }

        function guardar() {
            var url = 'controller_create.php';
            $.get(url, {nombres:nombres, email:email, password_user:password_user}, function(datos) {
                $('#respuesta').html(datos);
            });

        }

    });
</script>