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

                    <h2 class="text-center">Creación de un nuevo espacio</h2>    

                    <div class="row mt-3">

                        <div class="col-md-3"></div>

                        <div class="col-md-6">

                            <div class="card card-outline card-info">

                                <div class="card-header">
                                    <h3 class="card-title">Llene todos los campos</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div><!-- /.card-header -->

                                <div class="card-body">

                                    <!--  Número de Espacio | Estado -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nro_espacio">Nro. de Espacio</label>
                                                <input id="nro_espacio" type="number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="estado_espacio">Estado</label>
                                                <select id="estado_espacio" class="form-control">
                                                    <option value="LIBRE">LIBRE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->

                                    <!-- Observaciones -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="obs">Observaciones</label>
                                                <textarea id="obs" class="form-control" rows="5" style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->

                                    <!-- Botones Cancelar y Registrar -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="" class="btn btn-default btn-block">Cancelar</a>
                                        </div>
                                        <div class="col-md-6">
                                            <button id="btn-registrar" class="btn btn-info btn-block">Registrar</button>
                                        </div>
                                        
                                    </div><!-- /.row -->

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
    $('#btn-registrar').click(function() {

        var nro_espacio = $('#nro_espacio').val();

        var estado_espacio = $('#estado_espacio').val();

        var obs = $('#obs').val();

        if (nro_espacio == '') {
            alert('Debe llenar el campo número de espacio');
            $('#nro_espacio').focus();
        } else {
            guardar();
        }

        function guardar() {
            var url = 'controller_create.php';
            $.get(
                url, 
                { nro_espacio:nro_espacio, estado_espacio:estado_espacio, obs:obs }, 
                function(datos) {
                    $('#respuesta').html(datos);
                }
            );
        }

    });
</script>