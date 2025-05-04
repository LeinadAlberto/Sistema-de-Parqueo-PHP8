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

                        <!-- <div class="col-md-1"></div> -->

                        <div class="col-md-12">

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
                                        <?php 
                                            $query_mapeos = $pdo->prepare("SELECT * FROM tb_mapeos WHERE estado = '1'");
                                            $query_mapeos->execute();
                                            $mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
                                            foreach($mapeos as $mapeo) {
                                                $id_map = $mapeo["id_map"];
                                                $nro_espacio = $mapeo["nro_espacio"];
                                                $estado_espacio = $mapeo["estado_espacio"];

                                                if ($estado_espacio == "LIBRE") {
                                        ?>
                                                    <div class="col text-center">
                                                        <h2><?php echo $nro_espacio; ?></h2>
                                                        <button type="button" class="btn btn-success" style="width: 100%; height: 114px;" 
                                                            data-toggle="modal" data-target="#modal<?php echo $id_map; ?>">
                                                            <p><?php echo $estado_espacio; ?></p>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="modal<?php echo $id_map; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">INGRESO DEL VEHÍCULO</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group row">
                                                                            <label for="placa" class="col-sm-2 col-form-label text-left">Placa</label>
                                                                            <div class="col-sm-7">
                                                                                <input type="text" class="form-control" id="placa">
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <button class="btn btn-info" style="display: flex; align-items: center;">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search mr-1" viewBox="0 0 16 16">
                                                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                                                                    </svg>
                                                                                    <span style="margin-top: -4px;">Buscar</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="nombre" class="col-sm-2 col-form-label text-left">Nombre</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" id="nombre">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="nombre" class="col-sm-2 col-form-label text-left">NIT/CI</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" id="nombre">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="nombre" class="col-sm-4 col-form-label text-left">Fecha de ingreso</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="date" class="form-control" id="nombre">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="nombre" class="col-sm-4 col-form-label text-left">Hora de ingreso</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="time" class="form-control" id="nombre">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-info">Imprimir Ticket</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                        <?php
                                                }
                                                if ($estado_espacio == "OCUPADO") {
                                        ?>
                                                    <div class="col text-center">
                                                        <h2><?php echo $nro_espacio; ?></h2>
                                                        <button class="btn btn-info">
                                                            <img src="<?php echo $URL; ?>/public/imagenes/auto.png" width="60" alt="">
                                                        </button>
                                                        <p><?php echo $estado_espacio; ?></p>
                                                    </div>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div><!-- /.row -->

                                </div><!-- /.card-body -->

                            </div><!-- /.card -->

                        </div><!-- /.col-md-10 -->

                        <!-- <div class="col-md-1"></div> -->

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
    



