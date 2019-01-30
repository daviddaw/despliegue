<?php
// $cookie_name = "usuario";
// $cookie_value = "Alfonso Rebolleda";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 segundos = 1 día






$contador=0;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$salario = $_POST['salario'];

$contador++;
crearCookie($nombre,$contador);
$contador++;
crearCookie($apellido,$contador);
$contador++;
crearCookie($fecha,$contador);
$contador++;
crearCookie($salario,$contador);



function crearCookie($parametro,$contador){

$nombreCookie="cookie".$contador;

  setcookie($nombreCookie , $parametro);
  
  if(!isset($_COOKIE[$nombreCookie])) {
     echo " la Cookie llamada " . $nombreCookie. " no definida!!!<br>";
} else {
     echo " la Cookie llamada " . $nombreCookie . " definida!!!<br>";
     echo "valor de la cookie ->: " . $_COOKIE [$nombreCookie]."<br>";
}
  
  
}











// $apellido = $_POST['apellido'];
// $nombreCookie="cookie2";
// setcookie($nombreCookie , $apellido);



	// echo  "<br>";
// if(!isset($_COOKIE[$nombreCookie])) {
     // echo " la Cookie llamada " . $nombreCookie . " no definida!!!<br>";

// } else {
     // echo " la Cookie llamada " . $nombreCookie . " definida!!!<br>";
     // echo "Valor de la 2 cookie ->: " . $_COOKIE [$nombreCookie];
	 
// }








//$nombre valor nombre
//posicioncookie nombrecookie


		

		
		
// echo "el method usado es server: " , $_SERVER['REQUEST_METHOD'] ,"<br>";

// $cookie_apellidos = $_POST['apellido'],"<br>";
// $cookie_fecha  = $_POST['fecha'],"<br>";
// $cookie_salario  = $_POST['salario'],"<br>";
?>