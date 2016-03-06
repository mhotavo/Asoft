<html lang="en">
<?php include(HTML_DIR.'/overall/header.php') ?>
    <body>

            <div class=" " > 
            <?php include(HTML_DIR.'/overall/nav.php') ?> 
             <h1 style="color:white;">POBLACION DESPLAZADA</h1>  
           
            </div>
          
        

        <div class="container" >
        <!-- FORMULARIO AGREGAR DATOS -->
                <?php include(HTML_DIR.'/overall/navDesplazados.php') ?> 
                <div class="row formulario" >

                <div >
                    <h1> Agregar Familiar</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['idFamiliar']) ?  "?view=agregarfamiliares&mode=edit&idFamiliar=".$_GET['idFamiliar']."&id=".$_GET['id'] : "?view=agregarfamiliares&mode=add&id=".$_GET['id'];  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="40%">Identificacion:</td>
                                <td class="left" width="60%">
                                <div class="col-md-8">
                                    <input type="text" name="txtIdentificacionD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Tipo de Identificacion: </td>
                                <td class="left">
                                <div class="col-md-8">
                                    <select id="TI" name="cboTipoIdentificacionD" required class="form-control">
                                        <option value="CeduladeCiudadania">Cedula de Ciudadania</option>
                                        <option value="TarjetadeIdentidad">Tarjeta de Identidad</option>
                                        <option value="LibretaMilitar">Libreta Militar</option>
                                        <option value="RegistroCivil">Registro Civil</option>
                                        <option value="NUIP">Numero Unico de Identificacion Personal(NUIP)</option>
                                        <option value="NoTiene">No Tiene</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Nombres:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtNombresD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Primer Apellido:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtPrimerApellido" required class="form-control">
                                </div>    

                                </td>
                            </tr>
                            <tr>
                                <td class="right">Segundo Apellido:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtSegundoApellido" required class="form-control">
                                </div>    

                                </td>
                            </tr>
                            <tr>
                                <td class="right">Genero:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <select name="cboGeneroD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Fecha de Nacimiento:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtFechaNacimientoD" data-date-format="dd-mm-aaaa" required class="form-control fechas" placeholder="DD-MM-AAAA">
                                </div>    
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Enfoque Diferencial:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboEnfoqueD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Ninguno">Ninguno</option>                            
                                        <option value="LGBTI">LGBTI</option>
                                        <option value="Indigena">Indigena</option>
                                        <option value="Gitano (Room)">Gitano "Room"</option>
                                        <option value="Afrocolombiano">Afrocolombiano</option>
                                        <option value="Raizal (San Andres)">Raizal "San Andres"</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Estado Civil:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="estaCivil" name="cboEstadoCivilD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Union Libre">Union Libre</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Separado/Divorciado">Separado/Divorciado</option>                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Parentesco:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="Parentesco" name="cboParentescoD" required class="form-control"> 
                                        <option value="">[...]</option>
                                        <option value="Padre/Padrastro">Padre/Padrastro</option>
                                        <option value="Madre/Madrastra">Madre/Madrastra</option>
                                        <option value="Hijo(a)/Hojastro(a)">Hijo(a)/Hojastro(a)</option>
                                        <option value="Compañero(a)">Compañero(a)</option>
                                        <option value="Hermano(a)">Hermano(a)</option>
                                        <option value="Suegro(a)">Suegro(a)</option>
                                        <option value="Otro">Otro</option>
                                        <option value="No Parientes">No Parientes</option>                                
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Estuvo Separado:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="separado" name="cboSeparadoD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Discapacitado:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="discapacitado" name="cboDiscapacitadoD" onChange="discapacitadoMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                     </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Discapacidad) que se muestra o se oculta si es dicapacitado -->
                            <tr>
                                <td class="right">Discapacidad:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="discapacidad" name="cboDiscapacidadD" onChange="discapacidadMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Visual">Visual</option>
                                        <option value="Autismo">Autismo</option> 
                                        <option value="Auditiva">Auditiva</option>
                                        <option value="Dispersion">Dispersion</option>
                                        <option value="Retardo Mental">Retardo Mental</option>
                                        <option value="Paralisis Total">Paralisis Total</option>
                                        <option value="Sindrome de Down">Sindrome de Down</option>
                                        <option value="Baja Concentracion">Baja Concentracion</option>
                                        <option value="Control de Esfinteres">Control de Esfinteres</option>
                                        <option value="Paralisis o Ausencia de un Miembro Superior">Paralisis o Ausencia de un Miembro Superior</option>
                                        <option value="Paralisis o Ausencia de un Miembro Inferior">Paralisis o Ausencia de un Miembro Inferior</option>
                                        <option value="Otra Discapacidad">Otra Discapacidad</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Cual) que se muestra o se oculta si es dicapacitado -->
                            <tr>
                                <td class="right">Cual:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtOtraDiscapacidadD" required class="form-control">
                                </div>
                                    </td>
                            </tr>
                            <tr>
                                <td class="right">¿Ha Sido Victima de Mina-Antipersonal?:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <select name="cboVictimaMinaD" onChange="victimaMinaMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Recibio Auxilio de Transporte) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td class="right">Recibio Auxilio de Transporte de Emergencia al Centro Asistencial?:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select name="auxilioTransporteD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select> 
                                </div>
                                </td>
                            </tr>
                            <!-- (Se le Otorgo ayuda medica en) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td class="right">Se le Otorgo ayuda medica en:</td>
                                <td class="left">
                                <div class="col-md-10" style="text-align: left;">

                                    <input type="checkbox" name="checkboxAyudaMedicaD" value="Medicamentos"> Medicamentos <br>
                                    <input type="checkbox" name="checkboxAyudaMedicaD" value="CirugiaPlastica"> Cirugia Plastica <br>
                                    <input type="checkbox" name="checkboxAyudaMedicaD" value="CirugiaVascular"> Cirugia Vascular <br>
                                    <input type="checkbox" name="checkboxAyudaMedicaD" value="Osteosintesis"> Osteosintesis <br>
                                    <input type="checkbox" name="checkboxAyudaMedicaD" value="Protesis"> Protesis <br>
                                    <input type="checkbox" name="checkboxAyudaMedicaD" value="Ortesis"> Ortesis  <br>                   
                                    <input type="checkbox" name="checkboxAyudaMedicaD" value="Terapias"> Terapias <br>
                                </td>
                            </tr>
                            <!-- (Otra:) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td class="right">Otra:</td>
                                <td class="left">
                                <div class="col-md-8">
                                     <input  type="text" name="txtOtraAyudaD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <!-- (En cuanto a indemnizacion por) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td class="right">En cuanto a indemnizacion por Concepto de victimizacion por Minas-Antipersonal se le otorgo:</td>
                                <td class="left">
                                <div class="col-md-10" style="text-align: left;">

                                    <input type="checkbox" name="checkboxIndemnizacionD" value="Indemnizacion HI"> Indemnizacion ayuda humanitaria inmediata <br>
                                    <input type="checkbox" name="checkboxIndemnizacionD" value="Indemnizaciones A.P.l.Q.N.I.P"> Indemnizaciones Administrativa por lesiones que no  <br>
                                    <input type="checkbox" name="checkboxIndemnizacionD" value="Indemnizaciones A.P.I.P"> Indemnizacion Administrativa por incapacidad permanente
                                </td>
                            </tr> 
                            <tr>
                                <td class="right"> Afiliado a Salud:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="afiliadoSalud" name="cboAfiliadoSaludD" onChange="afiliadoSaludMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Regimen) que se muestra o se oculta si es Afiliado a Salud: -->
                            <tr>
                                <td class="right">Regimen:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="regimen" name="cboRegimenD" onChange="regimenMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Contributivo">Contributivo</option>
                                        <option value="Subsidiado">Subsidiado</option> 
                                        <option value="Vinculado">Vinculado</option>
                                        <option value="Especial">Especial</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Cual:) que se muestra o se oculta si es Afiliado a Salud: --> 
                            <tr>
                                <td class="right">Cual:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" id="cualRegimen" name="txtCualRegimenD" required class="form-control">
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td class="right">Recibio Atencion Salud Mental:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <select  name="cboSaludMentalD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td class="right">Recibio Apoyo PsicoSocial:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboPsicosocialD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                             
                                    </select>
                                </div>
                                </td>
                            </tr>  
                            <tr>
                                <td class="right">Asistio Programa Salud Reproductiva:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboSaludReproductivaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right"> Vacunas:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="vacunas" name="cboVacunasD" onChange="vacunasMostrarSi(this)" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Cuales Vacunas:) que se muestra o se oculta si tiene vacunas --> 
                            <tr>
                                <td class="right">Cuales Vacunas:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" id="cualesVacunas" name="txtCualesVacunasD" required class="form-control">
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td class="right">Le han Diagnosticado una Enfermedad Cronica: </td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="enfCronica" name="cboEnfCronicaD" onChange="enfCronicaMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr> 
                            <!-- (Cual Enfermedad:) que se muestra o se oculta si Le han Diagnosticado una Enfermedad Cronica: -->  
                            <tr>
                                <td class="right">Cual Enfermedad:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" id="cualEnfCronica" name="txtCualEnfCronicaD" required class="form-control">
                                </div>
                                </td>
                            </tr>  
                            <tr>
                                <td class="right">Califique el Estado de Salud (1-5):</td>
                                <td class="left">
                                <div class="col-md-8">
                                     <select  name="txtCalifEstadoSaludD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="1"> Uno </option>
                                        <option value="2"> Dos </option>
                                        <option value="3"> Tres </option>
                                        <option value="4"> Cuatro </option>
                                        <option value="5"> Cinco</option>
                                        

                                    </select>
                                </div>
                                </td>
                            </tr>   
                            <tr>
                                <td class="right">Estudiaba Antes de Ser Victima:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboEstudiabaAntesD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Estudia Actualmente:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="estudiaA" name="cboEstudiaAD" onChange="estudiaAMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Programa de Acom) que se muestra o se oculta si Estudia Actualmente: -->  
                            <tr>
                                <td class="right">Programa de Acompañamiento Escolar:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="proEscolar" name="cboProEscolarD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Cancela Algun Costo ) que se muestra o se oculta si Estudia Actualmente: -->  
                            <tr>
                                <td class="right">Cancela Algun Costo Educativo:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="costoEdu" name="cboCostoEduD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Sabe Leer:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboSabeLeerD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </div>
                                </td>
                            </tr>              
                            <tr>
                                <td class="right"> Nivel Alcanzado:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="nivelAlcanzado" name="cboNivelAlcanzadoD" required class="form-control">
                                        <option value="">[...]</option>                                
                                        <option value="Preescolar">Preescolar</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Tecnico">Tecnico</option>
                                        <option value="Tecnologico">Tecnologico</option>
                                        <option value="Universitario">Universitario</option>
                                        <option value="Posgrado">Posgrado</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Competencia Laboral:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="compeLaboral" name="cboCompeLaboralD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Mineria">Mineria</option>
                                        <option value="Industria">Industria</option>
                                        <option value="Sistemas">Sistemas</option>
                                        <option value="Comercio">Comercio</option>
                                        <option value="Servicios">Servicios</option>
                                        <option value="Seguridad">Seguridad</option>
                                        <option value="Transporte">Transporte</option>
                                        <option value="Construccion">Construccion</option>
                                        <option value="Manufactura">Manufactura</option>                                
                                        <option value="Agropecuario Siembra,Pezca,Caza">Agropecuario Siembra,Pezca,Caza</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Competencia ha Sido Certificada:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboCompeCertificadaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Le Gustaria Capacitarse en:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="capacitacion" name="cboCapacitacionD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Mineria">Mineria</option>
                                        <option value="Industria">Industria</option>
                                        <option value="Sistemas">Sistemas</option>
                                        <option value="Comercio">Comercio</option>
                                        <option value="Servicios">Servicios</option>
                                        <option value="Seguridad">Seguridad</option>
                                        <option value="Transporte">Transporte</option>
                                        <option value="Construccion">Construccion</option>
                                        <option value="Manufactura">Manufactura</option>                                
                                        <option value="Agropecuario Siembra,Pezca,Caza">Agropecuario Siembra,Pezca,Caza</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Horario de Capacitacion:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="horaCapacitacion" name="cboHoraCapacitacionD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Diurno">Diurno</option>
                                        <option value="Nocturno">Nocturno</option>                                
                                    </select>
                                </div>
                                </td>
                            </tr>
                             <tr>
                                <td class="right">Actividad Laboral Actual:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="actiLaboral" name="cboActiLaboralD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Trabajando">Trabajando</option>
                                        <option value="Buscando Trabajo">Buscando Trabajo</option>
                                        <option value="Estudiante">Estudiante</option>
                                        <option value="Rentista">Rentista</option>
                                        <option value="Oficios del Hogar">Oficios del Hogar</option>
                                        <option value="Invalido">Invalido</option>
                                        <option value="Pensionado">Pensionado</option>                                
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                             <tr>
                                <td class="right">Rama Actividad Actual:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="ramaActual" name="cboRamaActualD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Mineria">Mineria</option>
                                        <option value="Industria">Industria</option>
                                        <option value="Sistemas">Sistemas</option>
                                        <option value="Comercio">Comercio</option>
                                        <option value="Servicios">Servicios</option>
                                        <option value="Seguridad">Seguridad</option>
                                        <option value="Transporte">Transporte</option>
                                        <option value="Construccion">Construccion</option>
                                        <option value="Manufactura">Manufactura</option>                                
                                        <option value="Agropecuario Siembra,Pezca,Caza">Agropecuario Siembra,Pezca,Caza</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                             <tr>
                                <td class="right">Contrato Laboral Escrito:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboContraLaboralD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Trabaja en Jornada:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="jornada" name="cboJornadaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Legal">Legal</option>
                                        <option value="Ilegal">Ilegal</option>
                                        <option value="Ns/Nr">Ns/Nr</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Seguro Social y Riesgos Profesinales: </td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboSSocialRProfeD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                 
                                    </select>
                                </div>
                                </td>
                            </tr> 

                            <tr>
                                <td colspan="2">
                                <br><br>                      
                                    <button type="submit" class="btn btn-primary">Guardar y continuar</button>     
                                </td>
                            </tr>                           
                        
                        </table>
                        </form> 
                    </div>         
                 </div>           
            </div>                    
    </body>

    <footer>
        <?php include(HTML_DIR.'/overall/footer.php') ?> 
    </footer>

</html>