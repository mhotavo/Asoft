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
	    case 1:
	        __(anoDesplazamiento1).display="";
	        __(MunicipioDesplazamiento1).display="";
	        __(localidadDesplazamiento1).display="";
	        break;
	    case 2:
	        __(anoDesplazamiento2).display="";
	        __(MunicipioDesplazamiento2).display="";
	        __(localidadDesplazamiento2).display="";
	        break;	    
	    case 2:
	        __(anoDesplazamiento3).display="";
	        __(MunicipioDesplazamiento3).display="";
	        __(localidadDesplazamiento3).display="";
	        break;
	    default:
	         alert("hola");
	}
}

 

 




