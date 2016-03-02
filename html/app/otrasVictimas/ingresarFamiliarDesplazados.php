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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td>Identificacion:</td>
                                <td><input type="text" name="txtIdentificacionD"></td>
                            </tr>
                            <tr>
                                <td>Tipo de Identificacion: </td>
                                <td>
                                    <select id="TI" name="cboTipoIdentificacionD">
                                        <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                        <option value="Libreta Militar">Libreta Militar</option>
                                        <option value="Registro Civil">Registro Civil</option>
                                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                        <option value="NUIP">Numero Unico de Identificacion Personal(NUIP)</option>
                                        <option value="No Tiene">No Tiene</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nombres:</td>
                                <td><input type="text" name="txtNombresD"></td>
                            </tr>
                            <tr>
                                <td>Apellidos:</td>
                                <td><input type="text" name="txtApellidosD"></td>
                            </tr>
                            <tr>
                                <td>Genero:</td>
                                <td>
                                    <select name="cboGeneroD">
                                        <option value=""></option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha de Nacimiento:</td>
                                <td><input type="text" name="txtFechaNacimientoD"></td>
                            </tr>
                            <tr>
                                <td>Edad:</td>
                                <td><input type="text" name="txtEdadD"></td>
                            </tr>
                            <tr>
                                <td>Enfoque Diferencial:</td>
                                <td>
                                    <select id="ED" name="cboEnfoqueD">
                                        <option value=""></option>
                                        <option value="Ninguno">Ninguno</option>                            
                                        <option value="LGBTI">LGBTI</option>
                                        <option value="Indigena">Indigena</option>
                                        <option value="Gitano (Room)">Gitano "Room"</option>
                                        <option value="Afrocolombiano">Afrocolombiano</option>
                                        <option value="Raizal (San Andres)">Raizal "San Andres"</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Estado Civil:</td>
                                <td>
                                    <select id="estaCivil" name="cboEstadoCivilD">
                                        <option value=""></option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Union Libre">Union Libre</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Separado/Divorciado">Separado/Divorciado</option>                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Parentesco:</td>
                                <td>
                                    <select id="Parentesco" name="cboParentescoD">
                                        <option value=""></option>
                                        <option value="Padre/Padrastro">Padre/Padrastro</option>
                                        <option value="Madre/Madrastra">Madre/Madrastra</option>
                                        <option value="Hijo(a)/Hojastro(a)">Hijo(a)/Hojastro(a)</option>
                                        <option value="Compañero(a)">Compañero(a)</option>
                                        <option value="Hermano(a)">Hermano(a)</option>
                                        <option value="Suegro(a)">Suegro(a)</option>
                                        <option value="Otro">Otro</option>
                                        <option value="No Parientes">No Parientes</option>                                
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Estuvo Separado:</td>
                                <td>
                                    <select id="separado" name="cboSeparadoD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Discapacitado:</td>
                                <td>
                                    <select id="discapacitado" name="cboDiscapacitadoD" onChange="discapacitadoMostrarSi(this)">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                     </select>
                                </td>
                            </tr>
                            <!-- (Discapacidad) que se muestra o se oculta si es dicapacitado -->
                            <tr>
                                <td>Discapacidad:</td>
                                <td>
                                    <select id="discapacidad" name="cboDiscapacidadD" onChange="discapacidadMostrarSi(this)">
                                        <option value=""></option>
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
                                </td>
                            </tr>
                            <!-- (Cual) que se muestra o se oculta si es dicapacitado -->
                            <tr>
                                <td>Cual:</td>
                                <td><input type="text" id="otraDiscapacidad" name="txtOtraDiscapacidadD" size="30"></td>
                            </tr>
                            <tr>
                                <td>¿Ha Sido Victima de Mina-Antipersonal?:</td>
                                <td><select id="mina-Antipersonal" name="cboVictimaMinaD" onChange="victimaMinaMostrarSi(this)">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </td>
                            </tr>
                            <!-- (Recibio Auxilio de Transporte) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td>Recibio Auxilio de Transporte de Emergencia al Centro Asistencial?:</td>
                                <td>
                                    <select id="auxilioTransporte" name="auxilioTransporteD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select> 
                                </td>
                            </tr>
                            <!-- (Se le Otorgo ayuda medica en) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td>Se le Otorgo ayuda medica en:</td>
                                <td>
                                    <a><input type="checkbox" name="checkboxAyudaMedicaD" value="Medicamentos">Medicamentos</a>
                                    <a><input type="checkbox" name="checkboxAyudaMedicaD" value="Cirugia Plastica">Cirugia Plastica</a>
                                    <a><input type="checkbox" name="checkboxAyudaMedicaD" value="Cirugia Vascular">Cirugia Vascular</a>
                                    <a><input type="checkbox" name="checkboxAyudaMedicaD" value="Osteosintesis">Osteosintesis</a>
                                    <a><input type="checkbox" name="checkboxAyudaMedicaD" value="Protesis">Protesis</a>
                                    <a><input type="checkbox" name="checkboxAyudaMedicaD" value="Ortesis">Ortesis</a>                                
                                    <a><input type="checkbox" name="checkboxAyudaMedicaD" value="Terapias">Terapias</a>
                                </td>
                            </tr>
                            <!-- (Otra:) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td>Otra:</td>
                                <td> <input id="otraAyuda" type="text" name="txtOtraAyudaD"></td>
                            </tr>
                            <!-- (En cuanto a indemnizacion por) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td>En cuanto a indemnizacion por Concepto de victimizacion por Minas-Antipersonal se le otorgo:</td>
                                <td>
                                    <a><input type="checkbox" name="checkboxIndemnizacionD" value="Indemnizacion HI">Indemnizacion ayuda humanitaria inmediata</a></li>
                                    <a><input type="checkbox" name="checkboxIndemnizacionD" value="Indemnizaciones A.P.l.Q.N.I.P">Indemnizaciones Administrativa por lesiones que no
                                    <a><input type="checkbox" name="checkboxIndemnizacionD" value="Indemnizaciones A.P.I.P">Indemnizacion Administrativa por incapacidad permanente</a>
                                </td>
                            </tr> 
                            <tr>
                                <td> Afiliado a Salud:</td>
                                <td> 
                                    <select id="afiliadoSalud" name="cboAfiliadoSaludD" onChange="afiliadoSaludMostrarSi(this)">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </td>
                            </tr>
                            <!-- (Regimen) que se muestra o se oculta si es Afiliado a Salud: -->
                            <tr>
                                <td>Regimen:</td>
                                <td>
                                    <select id="regimen" name="cboRegimenD" onChange="regimenMostrarSi(this)">
                                        <option value=""></option>
                                        <option value="Contributivo">Contributivo</option>
                                        <option value="Subsidiado">Subsidiado</option> 
                                        <option value="Vinculado">Vinculado</option>
                                        <option value="Especial">Especial</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                </td>
                            </tr>
                            <!-- (Cual:) que se muestra o se oculta si es Afiliado a Salud: --> 
                            <tr>
                                <td>Cual:</td>
                                <td>
                                    <input type="text" id="cualRegimen" name="txtCualRegimenD">
                                </td>
                            </tr> 
                            <tr>
                                <td>Recibio Atencion Salud Mental:</td>
                                <td>
                                    <select id="comboboxDesicion" name="cboSaludMentalD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </td>
                            </tr> 
                            <tr>
                                <td>Recibio Apoyo PsicoSocial:</td>
                                <td>
                                    <select id="comboboxDesicion" name="cboPsicosocialD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </td>
                            </tr>  
                            <tr>
                                <td>Asistio Programa Salud Reproductiva:</td>
                                <td>
                                    <select id="comboboxDesicion" name="cboSaludReproductivaD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> Vacunas:</td>
                                <td>
                                    <select id="vacunas" name="cboVacunasD" onChange="vacunasMostrarSi(this)">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option> 
                                    </select>
                                </td>
                            </tr>
                            <!-- (Cuales Vacunas:) que se muestra o se oculta si tiene vacunas --> 
                            <tr>
                                <td>Cuales Vacunas:</td>
                                <td><input type="text" id="cualesVacunas" name="txtCualesVacunasD" size="30"></td>
                            </tr> 
                            <tr>
                                <td>Le han Diagnosticado una Enfermedad Cronica: </td>
                                <td>
                                    <select id="enfCronica" name="cboEnfCronicaD" onChange="enfCronicaMostrarSi(this)">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </td>
                            </tr> 
                            <!-- (Cual Enfermedad:) que se muestra o se oculta si Le han Diagnosticado una Enfermedad Cronica: -->  
                            <tr>
                                <td>Cual Enfermedad:</td>
                                <td><input type="text" id="cualEnfCronica" name="txtCualEnfCronicaD" size="30"></td>
                            </tr>  
                            <tr>
                                <td>Califique el Estado de Salud (1-5):</td>
                                <td><input type="text" id="califEstadoSalud" name="txtCalifEstadoSaludD" size="2"></td>
                            </tr>   
                            <tr>
                                <td>Estudiaba Antes de Ser Victima:</td>
                                <td>
                                    <select id="comboboxDesicion" name="cboEstudiabaAntesD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Estudia Actualmente:</td>
                                <td>
                                    <select id="estudiaA" name="cboEstudiaAD" onChange="estudiaAMostrarSi(this)">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </td>
                            </tr>
                            <!-- (Programa de Acom) que se muestra o se oculta si Estudia Actualmente: -->  
                            <tr>
                                <td>Programa de Acompañamiento Escolar:</td>
                                <td>
                                    <select id="proEscolar" name="cboProEscolarD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </td>
                            </tr>
                            <!-- (Cancela Algun Costo ) que se muestra o se oculta si Estudia Actualmente: -->  
                            <tr>
                                <td>Cancela Algun Costo Educativo:</td>
                                <td>
                                    <select id="costoEdu" name="cboCostoEduD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option> 
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Sabe Leer:</td>
                                <td>
                                    <select id="comboboxDesicion" name="cboSabeLeerD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </td>
                            </tr>              
                            <tr>
                                <td> Nivel Alcanzado:</td>
                                <td>
                                    <select id="nivelAlcanzado" name="cboNivelAlcanzadoD">
                                        <option value=""></option>                                
                                        <option value="Preescolar">Preescolar</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Tecnico">Tecnico</option>
                                        <option value="Tecnologico">Tecnologico</option>
                                        <option value="Universitario">Universitario</option>
                                        <option value="Posgrado">Posgrado</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Competencia Laboral:</td>
                                <td>
                                    <select id="compeLaboral" name="cboCompeLaboralD">
                                        <option value=""></option>
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
                                </td>
                            </tr>
                            <tr>
                                <td>Competencia ha Sido Certificada:</td>
                                <td>
                                    <select id="comboboxDesicion" name="cboCompeCertificadaD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Le Gustaria Capacitarse en:</td>
                                <td>
                                    <select id="capacitacion" name="cboCapacitacionD">
                                        <option value=""></option>
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
                                </td>
                            </tr>
                            <tr>
                                <td>Horario de Capacitacion:</td>
                                <td>
                                    <select id="horaCapacitacion" name="cboHoraCapacitacionD">
                                        <option value=""></option>
                                        <option value="Diurno">Diurno</option>
                                        <option value="Nocturno">Nocturno</option>                                
                                    </select>
                                </td>
                            </tr>
                             <tr>
                                <td>Actividad Laboral Actual:</td>
                                <td>
                                    <select id="actiLaboral" name="cboActiLaboralD">
                                        <option value=""></option>
                                        <option value="Trabajando">Trabajando</option>
                                        <option value="Buscando Trabajo">Buscando Trabajo</option>
                                        <option value="Estudiante">Estudiante</option>
                                        <option value="Rentista">Rentista</option>
                                        <option value="Oficios del Hogar">Oficios del Hogar</option>
                                        <option value="Invalido">Invalido</option>
                                        <option value="Pensionado">Pensionado</option>                                
                                        <option value="Otra">Otra</option>
                                    </select>
                                </td>
                            </tr>
                             <tr>
                                <td>Rama Actividad Actual:</td>
                                <td>
                                    <select id="ramaActual" name="cboRamaActualD">
                                        <option value=""></option>
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
                                </td>
                            </tr>
                             <tr>
                                <td>Contrato Laboral Escrito:</td>
                                <td>
                                    <select id="comboboxDesicion" name="cboContraLaboralD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Trabaja en Jornada:</td>
                                <td>
                                    <select id="jornada" name="cboJornadaD">
                                        <option value=""></option>
                                        <option value="Legal">Legal</option>
                                        <option value="Ilegal">Ilegal</option>
                                        <option value="Ns/Nr">Ns/Nr</option> 
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Seguro Social y Riesgos Profesinales: </td>
                                <td>
                                    <select id="comboboxDesicion" name="cboSSocialRProfeD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                 
                                    </select>
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