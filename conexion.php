<?php
class conexion {
private $conexion;
private $localhost="127.0.0.1";
private $user="root";
private $password="";
private $database="proyecto";

function conexionmy(){
$this->conexion= mysqli_connect($this->localhost,$this->user,$this->password)or die("error al conectar al servidor".$conexion);

if($this->conexion->connect_errno){
	echo "hola";
}else{
	mysqli_select_db($this->conexion,$this->database);
}
}

function cerrar(){
	mysqli_close($this->conexion);
}

function insertar($nombre,$contrasena){
	mysqli_query($this->conexion,"insert into usuarios(nombre,contrasena) values ('$nombre','$contrasena')");


}
function insertarpublicidad($url,$comentario){
	mysqli_query($this->conexion,"insert into publicidad(url,comentario) values ('$url','$comentario')");
}
function publicar(){
	$reg=mysqli_query($this->conexion,"select * from publicidad ");
		$registros=mysqli_num_rows($reg);
		while(	$fila= mysqli_fetch_assoc($reg)) {
	echo '
  <div class="col-md-4">
    <div class="thumbnail">
      <a href='.$fila['url'].'>
        <img src="'.$fila['url'].'" alt="Lights" style="width:100%">
        <div class="caption">
          <p>'.$fila['comentario'].'</p>
        </div>
      </a>
    </div>';
		}

}
function consultar($nombre,$contrasena){
	$reg=mysqli_query($this->conexion,"select * from proyecto where nombre='$nombre' and password ='$contrasena'");
	$registros=mysqli_num_rows($reg);
	$file=fopen("archivo.txt","w");
	fwrite($file,"el contenido es".$registros);
	fclose($file);
	if($registros!=0){
	session_start();
	$_SESSION['sesion']='ok';
	$fila= mysqli_fetch_assoc($reg);
	$_SESSION['usuario']=$fila['nombre'];
	/*mail("julman0198@gmail.com","julman0198@gmail.com","hola");*/
	header("location:index.html");
	}else{
		echo '
<!-- Modal -->
<div class="modal fade"  id="basicExampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        EL USUARIO NO EXISTE INTENTA DE NUEVO
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<script>
  $("#basicExampleModal").modal("show");
</script>';
	}
}

}
?>
