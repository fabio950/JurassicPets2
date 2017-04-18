$(document).ready(function () {
	$("#btnRegistro").click(function() {
		$.ajax({
			type: "POST",
			data: $("#formRegistro").serialize(),
			url: "../php/registro.php",
			success: function(datos) {
				if(datos === 1) {
					location.href = "../index.php";
				} else {
					alert("ERROR"); //mostrar modal???
				}
			}
		});
	});
	
	$("#btnLogin").click(function() {
		$.ajax({
			type: "POST",
			data: $("#formLogin").serialize(),
			url: "../php/login.php",
			success: function(datos) {
				if(datos === 1) {
					location.href = "../index.php";
				} else {
					alert("ERROR"); //mostrar modal???
				}
			}
		});
	});
}