function __(id){
	return document.getElementById(id);
}

function DeleteItem(contenido, url){
	var action= window.confirm(contenido);
	if (action) {
		window.location=url;
	}
}

function Desplazamiento (value){

	switch(value) {
	    case "1":
	        __("Anodesplazamiento1").style.display = '';
	        __("MunicipioDesplazamiento1").style.display = '';
	        __("localidadDesplazamiento1").style.display = '';
	        __("CausaDesplazamiento1").style.display = '';

	        __("Anodesplazamiento2").style.display = 'none';
	        __("MunicipioDesplazamiento2").style.display = 'none';
	        __("localidadDesplazamiento2").style.display = 'none';
	        __("CausaDesplazamiento2").style.display = 'none';

	        __("Anodesplazamiento3").style.display = 'none';
	        __("MunicipioDesplazamiento3").style.display = 'none';
	        __("localidadDesplazamiento3").style.display = 'none';
	        __("CausaDesplazamiento3").style.display = 'none';
	        break;
	    case "2": 

	        __("Anodesplazamiento1").style.display = '';
	        __("MunicipioDesplazamiento1").style.display = '';
	        __("localidadDesplazamiento1").style.display = '';
	        __("CausaDesplazamiento1").style.display = '';

	        __("Anodesplazamiento2").style.display = '';
	        __("MunicipioDesplazamiento2").style.display = '';
	        __("localidadDesplazamiento2").style.display = '';
	        __("CausaDesplazamiento2").style.display = '';

	        __("Anodesplazamiento3").style.display = 'none';
	        __("MunicipioDesplazamiento3").style.display = 'none';
	        __("localidadDesplazamiento3").style.display = 'none';
	        __("CausaDesplazamiento3").style.display = 'none';

	        break;	    
	    case "3":   
	        __("Anodesplazamiento1").style.display = '';
	        __("MunicipioDesplazamiento1").style.display = '';
	        __("localidadDesplazamiento1").style.display = '';
	        __("CausaDesplazamiento1").style.display = '';

	        __("Anodesplazamiento2").style.display = '';
	        __("MunicipioDesplazamiento2").style.display = '';
	        __("localidadDesplazamiento2").style.display = '';
	        __("CausaDesplazamiento2").style.display = '';

	        __("Anodesplazamiento3").style.display = '';
	        __("MunicipioDesplazamiento3").style.display = '';
	        __("localidadDesplazamiento3").style.display = '';
	        __("CausaDesplazamiento3").style.display = '';

	        break;

	}
}

 

 




