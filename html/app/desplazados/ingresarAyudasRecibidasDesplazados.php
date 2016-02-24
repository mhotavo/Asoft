<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ingresar Ayudas Recibidas</title>
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
            <div class="formulario"  id="formularioAyudasRecibidas">
                
                <h1 class="titulo1">Agregar Ayudas Recibidas</h1>            
                
                <form id="formularioAyudasRecibidas" action="AgregarAyudasRecibidasDServlet" method="post">         
                    
                    <a id="prograMenor">Los menores que no estan al cuidado de un adulto asisten a programa de</a><br/>
                    Atencion al Menor: <select id="selectAyudas" name="cboPrograMenorD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>   
                    
                    Niños y jovenes estan en programa de cuidado infantil: <select id="selectAyudas" name="cboPrograCuInfantilD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                    
                    Niños y jovenes asisten a programas de alimentacion: <select id="selectAyudas" name="cboPrograAlimentaD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                         
                    Los miembros del hogar han padecido Hambre o falta de Alimento: <select id="selectAyudas" name="cboHambreD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                    
                    Si estuvieron en retorno contaron con programa de seguridad AI: <select id="selectAyudas" name="cboRetornoD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                         
                    Los Adultos Mayores cuentan con complemento alimenticio: <select id="selectAyudas" name="cboCompleAlimenD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                                         
                    Los niños del Hogar que estudian son beneficiarios con desayunos: <select id="selectAyudas" name="cboDesayunosD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                         </SELECT><br/>
                      
                    <a id="reciAyuda">En el momento de los desplazamientos su nucleo familiar recibio ayuda de:</a><br/>
                    
                    <a id="muniAyuda">Por parte del Municipio Urgencia en:</a> 
                                                <ul id="muniAyuda"> 
                                                    <li id="muniAyuda"><a><input type="checkbox" name="checkboxMuniAyudaD" value="Salud">Salud</a></li>
                                                    <li id="muniAyuda" ><a><input type="checkbox" name="checkboxMuniAyudaD" value="Alojamiento">Alojamiento</a></li>
                                                    <li id="muniAyuda"><a><input type="checkbox" name="checkboxMuniAyudaD" value="Racion Alimentaria">Racion Alimentaria</a></li>                                                    
                                                    <li id="muniAyuda"><a><input type="checkbox" name="checkboxMuniAyudaD" value="Agua Potable">Agua Potable</a></li>                                                    
                                                </ul>
                                            
                    
                    <input id="agregarAyudas" type="submit" value="Agregar Ayudas">
                    <br/><br/> 
                    
                </form>            
            </div>           
    </body>
</html>



