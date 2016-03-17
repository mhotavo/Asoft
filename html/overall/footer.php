<div>

    <script src="views/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	var url= window.location.search;
    	var view = url.split('&');
 
    	switch(view[0]){
    		case '?view=datosdesplazado': 
    						document.getElementById("DatosItem").style.fontWeight = 'bold' 
    					break;
			case '?view=agregarfamiliares': 
			    			document.getElementById("FamiliaresItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=listarfamiliares': 
			    			document.getElementById("FamiliaresItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=desplazamiento': 
			    			document.getElementById("DesplazamientoItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=estabilizacion': 
			    			document.getElementById("EstabilizacionItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=vivienda': 
			    			document.getElementById("ViviendaItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=economia': 
			    			document.getElementById("EconomiaItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=proteccion': 
			    			document.getElementById("ProteccionItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=ayudas': 
			    			document.getElementById("AyudasItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=discapacidad': 
			    			document.getElementById("DiscapacidadItem").style.fontWeight = 'bold' 
			    		break;
			case '?view=proteccionespecial': 
			    			document.getElementById("EspecialItem").style.fontWeight = 'bold' 
			    		break;		
			case '?view=reparacion': 
			    			document.getElementById("ReparacionItem").style.fontWeight = 'bold' 
			    		break;			    		    		
			  
    	}

    </script>
    
<?php 
echo "Asoft &copy; " . date("Y");
 ?>

</div>