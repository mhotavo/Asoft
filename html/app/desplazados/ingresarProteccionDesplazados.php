<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ingresar Proteccion</title>
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
        
        <!-- FORMULARIO AGREGAR PROTECCION -->
            <div class="formulario"  id="formularioProteccion">
                
                <h1 class="titulo1">Agregar Proteccion</h1>            
                
                <form id="formularioProteccion" action="AgregarProteccionDServlet" method="post">                    
                                        
                    <a id="solicitudProte">Ha Acudido a alguna para solicitar </a><br/>
                    <a id="solicitudProte" >Proteccion: </a><br/> 
                                                <ul id="solicitudProte"> 
                                                    <li id="solicitudProte" ><a><input type="checkbox" name="checkboxSolicitudProteD" value="Fiscalia">Fiscalia</a></li>
                                                    <li id="solicitudProte"><a><input type="checkbox" name="checkboxSolicitudProteD" value="Emabajadas">Emabajadas</a></li>
                                                    <li id="solicitudProte"><a><input type="checkbox" name="checkboxSolicitudProteD" value="Fuerzas Armadas">Fuerzas Armadas</a></li>
                                                    <li id="solicitudProte"><a><input type="checkbox" name="checkboxSolicitudProteD" value="Ministerio del Interior">Ministerio del Interior</a></li>
                                                    <li id="solicitudProte" ><a><input type="checkbox" name="checkboxSolicitudProteD" value="Defensoria O Procuraduria">Defensoria O Procuraduria</a></li>
                                                    <li id="solicitudProte" ><a><input type="checkbox" name="checkboxSolicitudProteD" value="Organismo Nacional de Derechos Humanos">Organismo Nacional de Derechos Humanos</a></li>                                 
                                                    <li id="solicitudProte"><a><input type="checkbox" name="checkboxSolicitudProteD" value="Ninguno">Ninguno</a></li>
                                                </ul>
                                                Otra: <input id="otraSolicitudProte" type="text" name="txtSolicitudProteD"><br/>
                    
                    <a id="ayudaEstado">Conoce sobre la ayuda que presta el estado a la</a><br/>
                    poblacion desplazada: <select id="ayudaEstado" name="cboAyudaEstadoD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                    
                    <a id="programas1">Usted o Algunos miembros de su hogar estan</a><br/>
                    <a id="programas2">Inscritos en porgramas especificos para: </a><br/>
                    Mujer: <select id="selectProteccion" name="cboMujerD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                        
                    Adulto Mayor: <select id="selectProteccion" name="cboAdultoMayorD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                        
                    Jovenes: <select id="selectProteccion" name="cboJovenesD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                         
                    Discapacidad: <select id="selectProteccion" name="cboDiscapacidadD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                         
                    Algun miembro de la familia esta afiliado a OPD: <select id="selectProteccion" name="cboAfiliadoOPDD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                    Cual OPD: <input id="inputProteccion" type="text" name="txtCualOPDD"><br/>
                    
                    Participan en Evaluacion de politica publica: <select id="selectProteccion" name="cboEvaPoliPubliD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                         
                    Cual: <input id="inputProteccion" type="text" name="txtCualPoliPubliD"><br/>
                                        
                    <a id="clasifique1">Clasifique el componente de atencion que</a><br/>
                    <a id="clasifique2">considera Prioritario recibir en este momento: </a><br/>
                    
                    Prioridad 1: <select id="prioridad" name="cboPrioridad1D">
                                             <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                         </SELECT><br/>                                         
                    Prioridad 2: <select id="prioridad" name="cboPrioridad2D">
                                             <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                         </SELECT><br/>                                     
                    Prioridad 3: <select id="prioridad" name="cboPrioridad3D">
                                             <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                         </SELECT><br/>
                    Prioridad 4: <select id="prioridad" name="cboPrioridad4D">
                                             <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                         </SELECT><br/>
                    Prioridad 5: <select id="prioridad" name="cboPrioridad5D">
                                             <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                         </SELECT><br/>                    
                    <input id="agregarProteccion" type="submit" value="Agregar Proteccion">
                    <br/><br/> 
                    
                </form>            
            </div>           
    </body>
</html>


