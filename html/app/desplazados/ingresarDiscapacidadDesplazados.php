<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ingresar Discapacidad</title>
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
            <div class="formulario"  id="formularioDiscapacidad">
                
                <h1 class="titulo1">Agregar Discapacidad</h1>            
                
                <form id="formularioDiscapacidad" action="AgregarDiscapacidadDServlet" method="post">         
                    
                    La discapacidad surgio antes del desplazamiento: <select id="selectDiscapacidad" name="cboDiscaAntesDesplaD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/> 
                    la persona discapacitada se siente en igualdad de condiciones: <select id="selectDiscapacidad" name="cboIguCondicionesD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>
                    Que entidad le ha brindado apoyo para su rehabilitacion: <select id="selectReha" name="cboEntiApoyoD">
                                             <option value=""></option>
                                            <option value="Privada">Privada</option>
                                            <option value="Publica">Publica</option>
                                            <option value="Otro">Otro</option>
                                         </SELECT><br/>
                    Se le ha ofrecido hubicarlo laboralmente de acuerdo a sus condiciones: <select id="selectDiscapacidad" name="cboRehuLaboraD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>
                    Ha sido marginado o discriminado por discapacidad: <select id="selectDiscapacidad" name="cboDiscriDiscapaD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/> 
                    Encuentra facilidad y suficientes sitios publicos y privados: <select id="selectDiscapacidad" name="cboPubliPrivaD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/> 
                    Ha sido excluido de algun beneficio o ventaja por discapacidad: <select id="selectDiscapacidad" name="cboExcluidoD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>  
                    Ha recibido rehabilitacion y orientacion para su desarrollo: <select id="selectDiscapacidad" name="cboRehabilitacionD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/> 
                    Las personas con discapacidad mental estas cuenta con algun subsidio: <select id="selectDiscapacidad" name="cboDiscaAntesDesplaD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>
                    Familiar cuenta con capacidad economica para cubrir los gastos requeridos: <select id="selectDiscapacidad" name="cboCapaEconomicaD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>
                                         
                    Los menores de 18 años con discapacidad estudian: <select id="selectDiscapacidad" name="cboDiscaEstudianD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>
                    Ha recibido la prorroga automatica de ayuda humanitaria de emergencia: <select id="selectDiscapacidad" name="cboProrroAutoD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>
                    Hace parte de alguna organizacion de desplazados discapacitados: <select id="selectDiscapacidad" name="cboOrganiDesplaD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>
                    Se le reconoce y se le respeta su participacion en las OPDS: <select id="selectDiscapacidad" name="cboOPDSD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                         </SELECT><br/>                             
                    
                    <input id="agregarDiscapacidad" type="submit" value="Agregar Discapacidad">
                    <br/><br/> 
                    
                </form>            
            </div>           
    </body>
</html>



