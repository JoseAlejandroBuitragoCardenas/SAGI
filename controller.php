<?php
include 'conexion.php';
class controller 
{	
function controller(){

}

function insert($usuario,$contrasena){
$objeto= new conexion();
$objeto->conexionmy();
$objeto->insertar($usuario,base64_encode($contrasena));
$objeto->cerrar();
} 

function consult($usuario,$contrasena){
$objeto= new conexion();
$objeto->conexionmy();
$objeto->consultar($usuario,$contrasena);
$objeto->cerrar();
}

function publicar($url,$comentario){
$objeto= new conexion();
$objeto->conexionmy();
$objeto->insertarpublicidad($url,$comentario);
$objeto->cerrar();
} 

function publicarimagenes(){
$objeto= new conexion();
$objeto->conexionmy();
$objeto->publicar();
$objeto->cerrar();


} 
}
?>
