<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="mainquery.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body class="container text-center align-items-center justify-content-center CENTER display-4">
		<?php
	session_start();
	if (isset($_SESSION['sesion'])) {
	if($_SESSION['sesion']=='ok'){
		header("location:Inicio.php");
	}else{
	}}else{	}?>



	<div class="container" id="contenedor1">
		<div id="contenedor2" >
			<div class="container">
				<img src="imagenes/PNG_transparency_demonstration_1.png" alt="" width="50%">
			</div>
			<form method="post" accept-charset="utf-8" class="container ">
				<label style="color: white" >USUARIO</label>
				<br>
				<input type="text" name="usuario" value="" placeholder="usuario" id="caja1" required="requerido">
				<br>
				<label style="color: white" >CONTRASEÑA</label>
				<br>
				<input type="password" name="contrasena" value="" placeholder="password" id="caja1" required="requerido">
				<br><br>
				<button type="btn" class="btn btn-info " id="btn1" name="boton1"  >INGRESAR</button>
			</form>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<?php
include 'controller.php';
if (isset($_POST['boton1'])) {
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	$objeto = new controller();
	$objeto->consult($usuario,$contrasena);
}
?>
</html>
