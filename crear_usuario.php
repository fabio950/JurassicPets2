<?php

$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];
$role = $_POST["role"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "INSERT INTO usuario VALUES (null, '".$nombre."','".$password."','".$email."','".$role."')";

mysqli_query($con, $sql);

mysqli_close($con);

?>