function solonumero (e){
	key = e.keycode || e.which;
	teclado = String.fromCharCode(key);
	numero = "0123456789";
	especiales = "8-37-38-46";
	teclado_espeial = false;
	for (var i in especiales) {
		if (key == especiales [i]) {
			teclado_espeial = true;
		}
		
	}

	if (numero.indexOf(teclado) == -1 && !teclado_espeial) {
		return false;

	}
}


