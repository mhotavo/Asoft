<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ingresar Estabilizacion</title>
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
        
        <!-- FORMULARIO AGREGAR AYUDAS RECIBIDAS -->
            <div class="formulario"  id="formularioEstabilizacion">
                
                <h1 class="titulo1">Agregar Estabilizacion</h1>            
                
                <form id="formularioEstabilizacion" action="AgregarEstabilizacionDServlet" method="post">         
                    
                    <a id="razones">Razones para elegir este lugar:</a><br/>
                                        <ul id="razones"> 
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Por la vivienda">Por la vivienda</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Accesibilidad a salud">Accesibilidad a salud</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Mayor Seguridad Personal">Mayor Seguridad Personal</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Tenia Parientes o amigos">Tenia Parientes o amigos</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Acceso a Ayudas de Gobierno">Acceso a Ayudas de Gobierno</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Mayores Posibilidades de Trabajo">Mayores Posibilidades de Trabajo</a></li>                                 
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Fueron Reubicados en esta Ciduad">Fueron Reubicados en esta Ciduad</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Cercania al lugar de residencia">Cercania al lugar de residencia</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazones" value="Por sugerencia de un servidor publico">Por sugerencia de un servidor publico</a></li>
                                        </ul> 
                    
                    <a id="retorno">La familia solicito retorno al lugar de donde</a><br/>
                    fue desplazado: <select id="selectEstabilizacion" name="cboRetorno">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                         
                    Su familia esta actualmente o estuvo en retorno: <select id="selectEstabilizacion" name="cboEstuEstaRetorno">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                    <a id="desearia">En cuanto a residencia Actualmente el hogar </a><br/>                                         
                    desearia: <select id="selectDesearia" name="cboDesearia">
                                             <option value=""></option>
                                            <option value="Si">Establecerse</option>
                                            <option value="No">Residir</option>
                                            <option value="Si">Reubicarse</option>
                                            </SELECT><br/>                 
                                         
                    Donde quiere reubicarse o retornar: <input id="dondeRetornar" type="text" name="txtDondeRetornar"><br/>
                    
                    Zona Retorno: <select id="zonaRetorno" name="cboZonaRetorno">
                                    <option value=""></option>
                                    <option value="Rural">Rural</option>
                                    <option value="Urbana">Urbana</option> 
                                 </select><br/>
                                 
                    <a id="razones">Porque Razones el hogar quiere reubicarse:</a><br/>
                                        <ul id="razones"> 
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesReu" value="Motivo Familiar">Motivo Familiar</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesReu" value="La ciudad es insegura">La ciudad es insegura</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesReu" value="Se siente Discriminado">Se siente Discriminado</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesReu" value="Prefiere donde vivia antes">Prefiere donde vivia antes</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesReu" value="No ha recibido ayuda estatal">No ha recibido ayuda estatal</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesReu" value="Por oportunidades de trabajo">Por oportunidades de trabajo</a></li>                                 
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesReu" value="No hay oportunidades de trabajo">No hay oportunidades de trabajo</a></li>
                                        </ul><br/>
                    
                    <a id="razones">Porque Razones el hogar no desea retornar:</a><br/>
                                        <ul id="razones"> 
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesNoRetor" value="Logro Estabilizarse">Logro Estabilizarse</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesNoRetor" value="No tiene a donde llegar">No tiene a donde llegar</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesNoRetor" value="No hay oportunidades de trabajo">No hay oportunidades de trabajo</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesNoRetor" value="Se mantiene las condiciones que causaron el desplazamiento">Se mantiene las condiciones que causaron el desplazamiento</a></li>
                                            <li id="razones"><a><input type="checkbox" name="checkboxRazonesNoRetor" value="Son malas las condicines de vida (servicios, salud, educacion)">Son malas las condicines de vida (servicios, salud, educacion)</a></li>
                                        </ul> 
                    
                    El hogar dejo bienes raices abandonadas: <select id="selectEstabilizacion" name="cboBienesAbandonadas">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                          
                    Algunos le fueron despojados: <select id="selectEstabilizacion" name="cboDespojados">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                         
                    Solicito esquema de proteccion de bienes: <select id="selectEstabilizacion" name="cboProteccion">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>                                                                      
                    
                    <input id="agregarEstabilizacion" type="submit" value="Agregar Estabilizacion">
                    <br/><br/> 
                    
                </form>            
            </div>           
    </body>
</html>



