<?php 

include("../app/config.php");

$id_user = $_GET["id_user"];

$estado_inactivo = "0";

date_default_timezone_set("America/La_Paz");

$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_usuarios 
                                                SET fyh_eliminacion = :fyh_eliminacion, 
                                                        estado = :estado 
                                                WHERE id = :id");

$sentencia->bindParam(":fyh_eliminacion", $fechaHora);
$sentencia->bindParam(":estado", $estado_inactivo);
$sentencia->bindParam(":id", $id_user);

if ($sentencia->execute()) {
        echo "Registro Eliminado con Exito";
        ?>
        <script>
            location.href = 'index.php';
        </script>
    <?php
} else {
        echo "No se pudo Eliminar el Registro";
}