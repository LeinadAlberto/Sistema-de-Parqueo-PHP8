<?php 

include("../app/config.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$rol = $_POST["rol"];
$id_user = $_POST["id_user"];

date_default_timezone_set("America/La_Paz");

$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_usuarios 
                            SET rol = :rol, fyh_actualizacion = :fyh_actualizacion 
                            WHERE id = :id");

$sentencia->bindParam(":rol", $rol);
$sentencia->bindParam(":fyh_actualizacion", $fechaHora);
$sentencia->bindParam(":id", $id_user);

if ($sentencia->execute()) {
        echo "Rol asignado con Exito";
        ?>
        <script>
            location.href = 'asignar.php';
        </script>
    <?php
} else {
        echo "Erro al asignar el Rol al usuario";
} 

