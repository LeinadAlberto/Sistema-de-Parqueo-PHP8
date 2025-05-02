<?php 

    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("PASSWORD", "");
    define("BD", "parqueo");

    $servidor = "mysql:dbname=" . BD . "; host=" . SERVIDOR;

    try {
        $pdo = new PDO($servidor, 
            USUARIO, 
            PASSWORD, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
        );
        /* echo "<script>
                    alert('La conexión a la Base de Datos fue exitosa')
                </script>"; */
    } catch(PDOException $e) {
        /* echo "<pre>";
            print_r($e);
        echo "</pre>"; */

        echo "<script>
                    alert('Error en la conexión con la Base de Datos');
                </script>";         
    }

    $URL = "http://localhost/www.sisparqueo.com";

    $estado_del_registro = "1";
    
    /* echo "<br>" . $servidor; */


?>