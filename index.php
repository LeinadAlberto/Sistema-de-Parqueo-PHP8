<?php 
include("app/config.php"); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="public/imagenes/logo3.png"/>
       
        <!-- Bootstrap CSS - Versión 4.6.2 -->
        <link rel="stylesheet" href="public/css/bootstrap.min.css">       
        
        <title>Sistema de Parqueo</title>
    </head>

    <body style="background-image: url('public/imagenes/piso-fondo.jpg');
                            background-repeat: no-repeat;
                            position: relative;
                            z-index: -3;
                            background-size: 100vw 100vh;">

        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#">
                <img src="public/imagenes/logo3.png" width="50" height="50" class="d-inline-block align-center" alt="">
                SisParqueo
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Promociones
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Mensuales</a>
                            <a class="dropdown-item" href="#"> Dias</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Fichas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactanos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                </form>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                    Ingresar
                </button>
            </div>
        </nav>

        <div class="container">
            <table>
                <tr>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>1</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>2</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>3</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>4</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>5</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>6</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>7</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>8</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>9</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>10</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>11</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>12</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>13</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>14</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>15</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>16</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>17</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>18</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>19</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                    <td width="100px">
                        <p>
                            <center>
                                <h3><b>20</b></h3>
                                <img src="public/imagenes/auto.png" width="50px" alt="Imágen de vehiculo">
                            </center>
                        </p>
                    </td>
                </tr>
            </table>
        </div><!-- .container -->

        <!-- Bootstrap JS -->
        <!-- <script src="public/js/jquery.slim.min.js"></script> -->
        <script src="public/js/jquery-3.7.1.min.js"></script>
        <script src="public/js/popper.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">

			<div class="modal-header bg-info text-white">
				<h5 class="modal-title" id="exampleModalLabel">Inicio de Sesión</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div><!-- .modal-header -->

			<div class="modal-body">
				<div class="row">
                    <!-- Usuario / Email  -->
					<div class="col-md-12">
						<div class="form-group">
							<label for="usuario">Usuario/Email</label>
							<input id="usuario" type="email" class="form-control">
						</div><!-- /.form-group -->
					</div><!-- /.col-md-12 -->

                    <!-- Contraseña -->
					<div class="col-md-12">
						<div class="form-group">
							<label for="password">Contraseña</label>
							<input id="password" type="password" class="form-control">
						</div><!-- /.form-group -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->

                <div id="respuesta"></div>

			</div><!-- .modal-body -->

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button id="btn_ingresar" type="button" class="btn btn-info">Ingresar</button>
			</div><!-- .modal-body -->

		</div><!-- .modal-content -->

	</div><!-- modal-dialog -->
</div><!-- modal -->

<script>
    $('#btn_ingresar').click(function() {
        login();
    });

    $('#password').keypress(function(e) {
        if (e.which == 13) {
            login();
        }
    });

    function login() {
        var usuario = $('#usuario').val();

        var password_user = $('#password').val();
    
        if (usuario == "")  {
            alert("Debe introducir su usuario...");
            $('#usuario').focus();
        } else if (password_user == "") {
            alert("Debe introducir su contraseña...");
            $('#password').focus();
        } else {
            var url = "login/controller_login.php"; 
            $.post(url, {usuario:usuario, password_user:password_user}, function(datos) {
                $('#respuesta').html(datos);
            });
        }
    }
</script>
