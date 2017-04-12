<?php

$id = (int) $_GET["id"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "SELECT * FROM articulo WHERE categoria=$id";
$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) > 0) {
	$i = 0;
	while($fila = mysqli_fetch_assoc($resultado)){
		$articulos[$i] = array("id"=>$fila["id"], "nombre"=>$fila["nombre"], 
			"descripcion"=>$fila["descripcion"], "imagen"=>$fila["imagen"], 
			"precio"=>$fila["precio"], "categoria"=>$fila["categoria"]);
		$i++;
	}
	
	echo json_encode($articulos);
} else {
	echo "0"
}

mysqli_close($con);

?>