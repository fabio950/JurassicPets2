function Carrito(fecha) {
	this.fecha = fecha;
	this.articulos = [];
	this.total = 0;
}

function Articulo(id, nombre, descripcion, precio){
	this.id = id;
	this.nombre = nombre;
	this.descripcion = descripcion;
	this.unidad = 1;
	this.precio = precio;
}

Carrito.prototype.anyadirArticulo = function(articulo) {
	this.articulos.push(articulo);
}

Carrito.prototype.totalCarrito = function() {
	var total = 0;
	
	for(i = 0; this.articulos.length > 0; i++) {
		total += parseFloat(this.articulos[i].precio);	
	}
	
	this.total = total.toFixed(2);
}