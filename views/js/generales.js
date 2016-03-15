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


function discapacitadoMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("discapacitadoSi").style.display = "";
      }else
      {
          document.getElementById("discapacitadoSi").style.display = "none";        
          document.getElementById("OtraDiscapacidad").style.display = "none";      
      }
}

function discapacidadMostrarSi(get) {
      if (get.value=="OtraDiscapacidad")
      {
          document.getElementById("OtraDiscapacidad").style.display = "";
      }else
      {
          document.getElementById("OtraDiscapacidad").style.display = "none";          
      }
}

function victimaMinaMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("victimaMinaSi").style.display = "";
      }else
      {
          document.getElementById("victimaMinaSi").style.display = "none";          
      }
}
 


function afiliadoSaludMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("afiliadoSaludSi").style.display = "";
          document.getElementById("cualRegimen").style.display = "";  
      }else
      {
          document.getElementById("afiliadoSaludSi").style.display = "none";  
          document.getElementById("cualRegimen").style.display = "none";        
      }
}


function vacunasMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("cualesVacunasSi").style.display = "";
      }else
      {
          document.getElementById("cualesVacunasSi").style.display = "none";          
      }
}

function enfCronicaMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("cualEnfCronicasSi").style.display = "";
      }else
      {
          document.getElementById("cualEnfCronicasSi").style.display = "none";          
      }
}

function estudiaAMostrarSi(get) {
      if (get.value=="Si")
      {
          document.getElementById("programaEscolar").style.display = "";
          document.getElementById("CancelaEducativo").style.display = "";
      }else 
      {
          document.getElementById("programaEscolar").style.display = "none";          
          document.getElementById("CancelaEducativo").style.display = "none";          
      }
}




