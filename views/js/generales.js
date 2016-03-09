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
	        __("anoDesplazamiento2").style.display = 'none';
	        __("MunicipioDesplazamiento2").style.display = 'none';
	        __("localidadDesplazamiento2").style.display = 'none';
	        __("anoDesplazamiento3").style.display = 'none';
	        __("MunicipioDesplazamiento3").style.display = 'none';
	        __("localidadDesplazamiento3").style.display = 'none';
	        break;
	    case "2": 
	        __("anoDesplazamiento2").style.display = '';
	        __("MunicipioDesplazamiento2").style.display = '';
	        __("localidadDesplazamiento2").style.display = '';
	        __("anoDesplazamiento3").style.display = 'none';
	        __("MunicipioDesplazamiento3").style.display = 'none';
	        __("localidadDesplazamiento3").style.display = 'none';
	        break;	    
	    case "3":   
	        __("anoDesplazamiento2").style.display = '';
	        __("MunicipioDesplazamiento2").style.display = '';
	        __("localidadDesplazamiento2").style.display = '';
	        __("anoDesplazamiento3").style.display = '';
	        __("MunicipioDesplazamiento3").style.display = '';
	        __("localidadDesplazamiento3").style.display = '';
	        break;

	}
}

 

 




