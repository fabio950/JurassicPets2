<?php

$id = (int) $_POST["id"];
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];
$role = $_POST["role"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "UPDATE usuario SET nombre='".$nombre."', password='".$password."', email='".$email."', role='".$role."' WHERE id=".$id."";

mysqli_query($con, $sql);

mysqli_close($con);

?>