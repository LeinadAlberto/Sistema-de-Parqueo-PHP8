<?php 

include("../app/config.php");

$id_rol = $_GET["id_rol"];

$estado_inactivo = "0";

date_default_timezone_set("America/La_Paz");

$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_roles 
                                                SET fyh_eliminacion = :fyh_eliminacion, 
                                                        estado = :estado 
                                                WHERE id_rol = :id_rol");

$sentencia->bindParam(":fyh_eliminacion", $fechaHora);
$sentencia->bindParam(":estado", $estado_inactivo);
$sentencia->bindParam(":id_rol", $id_rol);

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