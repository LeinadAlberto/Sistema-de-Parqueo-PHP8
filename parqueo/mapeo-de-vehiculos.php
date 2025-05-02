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
                    <h2 class="text-center">Listado de Espacios</h2>    

                    <div class="row mt-3">
                         <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <table  class="table table-bordered table-sm table-striped">
                                <thead class="text-center">
                                    <th>Nro</th>
                                    <th>Nro de Espacio</th>
                                    <th>Acciones</th>
                                </thead>

                                <tbody>
                                    <?php 
                                        $contador = 0;
                                        $query_mapeos = $pdo->prepare("SELECT * FROM tb_mapeos WHERE estado = '1'");
                                        $query_mapeos->execute();
                                        $mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($mapeos as $mapeo) {
                                            $contador = $contador + 1;
                                            $id_map = $mapeo["id_map"];
                                            $nro_espacio = $mapeo["nro_espacio"];
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $contador; ?></td>
                                                <td class="text-start"><?php echo $nro_espacio; ?></td>
                                                <td class="text-center">
                                                    <a href="delete.php?id=<?php echo $id_map; ?>" class="btn btn-danger">Eliminar</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
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