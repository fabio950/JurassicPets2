//-------------------------------- Constructores -----------------------------------
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

//----------------------------------- Métodos --------------------------------------
Carrito.prototype.getFecha = function() {
	return this.fecha;
}

Carrito.prototype.getArticulos = function() {
	return this.articulos.length;
}

Carrito.prototype.getTotal = function() {
	return this.total;
}

Carrito.prototype.anyadirArticulo = function(articulo) {
	this.articulos.push(articulo);
}

Carrito.prototype.totalCarrito = function() {
	var total = 0;
	
	for(i = 0; this.getArticulos > i; i++) {
		total += parseFloat(this.articulos[i].precio);	
	}
	
	this.total = total.toFixed(2);
}

Articulo.prototype.getId = function() {
	return this.id;
}

Articulo.prototype.getNombre = function() {
	return this.nombre;
}

Articulo.prototype.getDescripcion = function() {
	return this.descripcion;
}

Articulo.prototype.getUnidad = function() {
	return this.unidad;
}

Articulo.prototype.getPrecio = function() {
	return this.precio;
}
