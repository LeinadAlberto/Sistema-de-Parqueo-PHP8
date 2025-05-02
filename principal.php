<?php 

include("app/config.php");

include("layout/admin/datos_usuario_sesion.php");

?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <?php include("layout/admin/head.php"); ?>
    </head>

    <body class="hold-transition sidebar-mini">

        <div class="wrapper">

            <?php include("layout/admin/menu.php"); ?>
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <br>

                <div class="container">

                    <h2 class="text-center">Bienvenido al SISTEMA DE PARQUEO - LOKYWEBDEV</h2>    

                    <div class="row mt-3">

                        <div class="col-md-1"></div>

                        <div class="col-md-10">

                            <div class="card card-outline card-info">

                                <div class="card-header">
                                    <h3 class="card-title">Mapeo actual del Parqueo</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div><!-- /.card-header -->

                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-1 text-center">
                                            <h2>1</h2>
                                            <img src="<?php echo $URL; ?>/public/imagenes/auto.png" width="60" alt="">
                                        </div>
                                    </div><!-- /.row -->

                                </div><!-- /.card-body -->

                            </div><!-- /.card -->

                        </div><!-- /.col-md-10 -->

                        <div class="col-md-1"></div>

                    </div><!-- /.row -->
                    
                </div><!-- /.container -->

            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <?php include("layout/admin/footer.php"); ?>

        </div><!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <?php include("layout/admin/footer_link.php"); ?>
        
    </body>

</html>
    



