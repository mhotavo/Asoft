<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ingresar Desplazamiento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
       
        <link rel="stylesheet" href="../../css/style.css"/>
        <script type="text/javascript" src="../../js/funciones.js"></script>
        
    </head>
    <body>
        <!-- MENU PRINCIPAL -->       
        <header>
            <div class="wrap" > 
                <nav>
                    <ul class="menu">
                        <li><a href="../home.html"><span class="iconic home"></span></a></li>
                        <li><a href="#"><span class="iconic plus-alt"></span>Ingresar</a>                    
                            <ul>
                                <li><a href="../validarDocumentoDesplazados.html">Desplazados</a></li>
                                <li><a href="../validarDocumentoOtrasVictimas.html">Otras Victimas</a></li>
                            </ul>
                        </li>

                        <li><a href="#"><span class="iconic magnifying-glass"></span>Informes</a>
                            <ul>
                                <li><a href="#">Informe Parcial</a></li>
                                <li><a href="#">Informe Total</a></li>                  
                            </ul>
                        </li>

                        <li><a href="#"><span class="iconic mail"></span>Contact</a>
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Directions</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><span class="iconic arrow-right-alt"></span>Cerrar Sesion</a>               
                        </li>
                    </ul>
                    
                    <div class="clearfix"></div>
                </nav>
            </div>
        </header> 
        
        <!-- MENU SECUNDARIO --> 
        <aside>
            <div class="wrap" id='menuDesplazado'> 
                <nav class="navMenuDesplazado">
                    <ul class="menu" id="MD">
                        <li id="MD"><a href="ingresarDatosDesplazados.html"><span></span>Datos</a></li>
                        <li id="MD"><a href="#"><span></span>Familiares</a>
                            <ul>
                                <li ><a href="ingresarFamiliarDesplazados.html">Agregar</a></li>
                                <li ><a href="#">Listar</a></li>
                            </ul>
                        </li>
                        <li id="MD"><a href="ingresarDesplazamiento.html"><span></span>Desplazamiento</a></li>
                        <li id="MD"><a href="ingresarEstabilizacion.html"><span></span>Estabilizacion</a></li>
                        <li id="MD"><a href="ingresarViviendaDesplazados.html"><span></span>Vivienda</a></li>
                        <li id="MD"><a href="ingresarEconomiaFamiliarDesplazados.html"><span></span>Economia</a></li>
                        <li id="MD"><a href="ingresarProteccionDesplazados.html"><span></span>Protección</a></li>
                        <li id="MD"><a href="ingresarAyudasRecibidasDesplazados.html"><span></span>Ayudas</a></li>
                        <li id="MD"><a href="ingresarDiscapacidadDesplazados.html"><span></span>Discapacidad</a></li>
                        <li id="MD"><a href="ingresarEspecialProteccionDesplazados.html"><span></span>Protección Especial</a></li>
                        <li id="MD"><a href="ingresarReparacionDesplazados.html"><span></span>Reparacion</a></li>
                    </ul>
                    
                    <div class="clearfix"></div>
                </nav>
            </div>            
        </aside>
        
        <!-- TITULO IDENTIFICADOR DE POSICION --> 
        <footer>
            <div class="idMenus">
                <h1>POBLACION DESPLAZADA</h1>                                   
            </div>
        </footer>
        
        <!-- FORMULARIO AGREGAR VICTIMIZACION -->
            <div class="formulario"  id="formularioVictimizacion">
                
                <h1 class="titulo1">Agregar Desplazamiento</h1>            
                
                <form action="AgregarDesplazamientoDServlet" method="post">
                    
                    <!-- COMBOBOX VICTIMIZADO QUE OCULTA -->
                    <div>
                        <a id="vecesVictimizado">Durante los ultimos años cuantas</a><br/>
                        veces ha sido desplazado: <select id="victimizado" name="cboVictimizadoD" onChange="victimizadoMostrarSi(this)">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                         </SELECT>                        
                    </div>   
                    <div id="victimizado1" style="display:none">
                            Año: <input type="text" id="anoVictimizacion" name="txtAnoVictimizacionD" size="2">
                            Localidad: <input type="text" id="localidadVictimizacion" name="txtLocalidadVictimizacionD" size="10">
                            Municipio: <input type="text" id="municipioVictimizacion" name="txtMunicipioVictimizacionD" size="10">                       
                    </div>
                    <div id="victimizado2" style="display:none">
                            Año: <input type="text" id="anoVictimizacion" name="txtAnoVictimizacion2D" size="2">
                            Localidad: <input type="text" id="localidadVictimizacion" name="txtLocalidadVictimizacion2D" size="10">
                            Municipio: <input type="text" id="municipioVictimizacion" name="txtMunicipioVictimizacion2D" size="10"><br/>
                            Año: <input type="text" id="anoVictimizacion" name="txtAnoVictimizacion22D" size="2">
                            Localidad: <input type="text" id="localidadVictimizacion" name="txtLocalidadVictimizacion22D" size="10">
                            Municipio: <input type="text" id="municipioVictimizacion" name="txtMunicipioVictimizacion22D" size="10">
                    </div>
                    <div id="victimizado3" style="display:none">
                            Año: <input type="text" id="anoVictimizacion" name="txtAnoVictimizacion3D" size="2">
                            Localidad: <input type="text" id="localidadVictimizacion" name="txtLocalidadVictimizacion3D" size="10">
                            Municipio: <input type="text" id="municipioVictimizacion" name="txtMunicipioVictimizacion3D" size="10"><br/>
                            Año: <input type="text" id="anoVictimizacion" name="txtAnoVictimizacion33D" size="2">
                            Localidad: <input type="text" id="localidadVictimizacion" name="txtLocalidadVictimizacion33D" size="10">
                            Municipio: <input type="text" id="municipioVictimizacion" name="txtMunicipioVictimizacion33D" size="10"><br/>
                            Año: <input type="text" id="anoVictimizacion" name="txtAnoVictimizacion333D" size="2">
                            Localidad: <input type="text" id="localidadVictimizacion" name="txtLocalidadVictimizacion333D" size="10">
                            Municipio: <input type="text" id="municipioVictimizacion" name="txtMunicipioVictimizacion333D" size="10">
                    </div>
                        
                    <div id="infVictimizacion"  style="display:none">
                        <a id="causasVic1">A Cuales Causas Le Atribuye Su</a><br/> 
                        <a id="causasVic2">Desplazamiento:</a><br/> 
                        Confrontacion Armada: <select id="confrontacionArmada" name="cboConfrontacionArmadaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                        Amenaza Indirecta: <select id="amenazaIndirecta" name="amenazaIndirectaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                        Campos Minados: <select id="camposMinados" name="cboCamposMinadosD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                        Asesinato Familia: <select id="asesinatoFamilia" name="cboAsesinatoFamiliaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                        Amenaza Directa: <select id="amenazaDirecta" name="cboAmenazaDirectaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                        Reclutamiento de Menores: <select id="recluMenores" name="cboRecluMenoresD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                        Ausencia del Gobierno <select id="ausenGobierno" name="cboAusenGobiernoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                        Desplazamiento Masivo: <select id="desplaMasivo" name="cboDesplaMasivoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    </div>
                    
                    No de Personas que Conformaban 
                           su hogar en ese momento: <input type="text" id="nPersonas" name="txtNPersonasD" size="2"><br/>
                    
                    En ese momento la familia se  
                    separo: <select id="selectVicti" name="cboFamiliaSeparoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    
                    Solicito ayuda estatal para la reunificacion: <select id="selectVicti" name="cboReunificacionD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                                         
                    Su nucleo se volvio a unificar: <select id="selectVicti" name="cboUnificarD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                                         
                    Para esto recibio ayuda estatal: <select id="selectVicti" name="cboUnificarEstatalD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>           
                           
                    La familia en el momento del 
                    desplazamiento estan vivos: <select id="selectVicti" name="cboFamiliaVivoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    
                    Algun Familiar ha sido detenido 
                    de forma arbitraria: <select id="selectVicti" name="cboFamiliarDeteD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    
                    Algun Familiar ha sido Victima de Violacion o 
                    Prostitucion forzada: <select id="selectVicti" name="cboFamiliarVPD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                                         
                    Algun Familiar fue asesinado por denunciar 
                    grupos armados: <select id="selectVicti" name="cboFamiliarAseD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    Algun Familiar fue reclutado por grupos 
                    armados al margen de la ley: <select id="selectVicti" name="cboFamiliarRecluD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    Algun Familiar ha sido victima de secuestro: <select id="selectVicti" name="cboFamiliarSecuesD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    Ha instalado demanda por desplazamiento: <select id="selectVicti" name="cboDemandaVictiD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    Algun familiar fue victima de Minas-Antipersonal: <select id="selectVicti" name="cboFamiliarMinaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                                         
                    <a id="declaroAnte">En El Momento de los desplazamientos su Nucleo Familiar Declaro Ante:</a><br/>
                    
                    Defensoria: <select id="selectVicti" name="cboDefensoriaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                                         
                    Procuraduria: <select id="selectVicti" name="cboProcuraduriaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    
                    Departamento para la prosperidad social: <select id="selectVicti" name="cboProspeD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    
                    Personeria: <select id="selectVicti" name="cboPersoneriaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    UAO: <select id="selectVicti" name="cboUAOD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                    Otra: <select id="selectVicti" name="cboOtraD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                         </SELECT><br/>
                              
                    
                    <input id="agregar" type="submit" value="Agregar Desplazamiento">
                    <br/><br/> 
                    
                </form>            
            </div>           
    </body>
</html>

