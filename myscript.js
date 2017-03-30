$(document).ready(function(){
	var fecha = new Date();
	var dia =  fecha.getDate();
	var mes = fecha.getMonth() + 1;
	var anyo = fecha.getFullYear();
	var hora = fecha.getHours();
	var minutos = ("0" + fecha.getMinutes()).slice(-2);
	
	var carrito = new Carrito(dia + "/" + mes + "/" + anyo);
	
	//Carga las categorías
	$.ajax({
        url: "php/categorias.php",
        dataType: "json",
        success: function (datos) {
            $.each(datos, function (index, value) {
                $("#listaCategorias").append("<a href='javascript:void(0)' class='collection-item' id='" + value.id + "'>" + value.nombre + "</a>");
            });
        }
    });
	
	//Carga los artículos
	$.ajax({
        url: "php/articulos.php",
        dataType: "json",
        success: function (datos) {
            pintarArticulos(datos);
        }
    });
});

//Carga los artículos segun la categoría
$('#listaCategorias').on('click', 'a', function () {
    $("#contenedor").children().remove();
    idCategoria = $(this).attr('id');
	
    $.ajax({
        url: "php/articulosPorCategoria.php?id=" + idCategoria,
        type: "GET",
        dataType: "json",
        success: function (datos) {
            pintarArticulos(datos);
        }
    });
});

function pintarArticulos(datos) {
    $.each(datos, function (index, value) {
        articulo = "<div class='col-md-4'>" +
					"<div class='card hoverable'>" +
					"<div class='card-image'>" +
					"<img src='img/" + value.imagen + "'>" +
					"</div>" +
					"<div>" +
					"<h4>" + value.nombre + "</h4>" +
					"<h5>" + value.precio + " €</h5>" +
					"</div>" + 
					"<div class='hiddendiv'>" + value.descripcion + "</div>" +
					"<div class='hiddendiv'>" + value.id + "</div>" +
					"<div class='card-action'>" +
					"<button type='button' id='btnArticulo' class='btn btn-default waves-effect waves-light' data-toggle='modal' data-target='#myModal'>Comprar</button>" +
					"</div>" +
					"</div>" +
					"</div>";
						
        $("#contenedor").append(articulo);
    });
}
