
//PRIMER CHECKBOX
function habilitaDeshabilita(){
	
	if (document.getElementById("primario").checked == true); {

		document.getElementById("secundario").checked = false;
		document.getElementById("terciario").checked = false;
		document.getElementById("icpo").style.display = 'none';
		document.getElementById("etcs").style.display = 'none';
		document.getElementById("apmo").style.display = 'inline';
		
	}
}


function habilitaDeshabilitas(){
	
	if (document.getElementById("secundario").checked == true); {

		document.getElementById("primario").checked = false;
		document.getElementById("terciario").checked = false;
		document.getElementById("apmo").style.display = 'none';
		document.getElementById("etcs").style.display = 'none';
		document.getElementById("icpo").style.display = 'inline';
				
	}
}

function habilitaDeshabilitat(){
	
	if (document.getElementById("terciario").checked == true); {

		document.getElementById("primario").checked = false;
		document.getElementById("secundario").checked = false;
		document.getElementById("icpo").style.display = 'none';
		document.getElementById("apmo").style.display = 'none';
		document.getElementById("etcs").style.display = 'inline';
		
	}
}

function ocultar(){

	if (document.getElementById("noni").checked == true);{
		document.getElementById("nini").style.display = 'none',
		window.confirm("A finalisado el Formulario para Usted, Precione Enviar Formulario");


	}
}

function ver(){

	if (document.getElementById("up35").checked == true); {
		document.getElementById("ups1").disabled = false;
	}
}


function mostraregresado(){

	if (document.getElementById("radioegresado").checked == true);{
		document.getElementById("egresado").style.display = 'block';
		document.getElementById("administrador").style.display = 'none';
		document.getElementById("ciclos").style.display = 'none';
		document.getElementById("carreras").style.display = 'none';
	}
	
}

function mostraradmon(){

	if (document.getElementById("radioadmon").checked == true);{
		document.getElementById("administrador").style.display = 'block';
		document.getElementById("egresado").style.display = 'none';
		document.getElementById("ciclos").style.display = 'none';
		document.getElementById("carreras").style.display = 'none';
	}
}

function mostrarciclo(){

	if (document.getElementById("radiociclo").checked == true);{
		document.getElementById("ciclos").style.display = 'block';
		document.getElementById("egresado").style.display = 'none';
		document.getElementById("administrador").style.display = 'none';
		document.getElementById("carreras").style.display = 'none';
		
	}
}

function mostrarcarrera(){

	if (document.getElementById("radiocarrera").checked == true);{
		document.getElementById("carreras").style.display = 'block';
		document.getElementById("ciclos").style.display = 'none';
		document.getElementById("egresado").style.display = 'none';
		document.getElementById("administrador").style.display = 'none';
		
	}
}

