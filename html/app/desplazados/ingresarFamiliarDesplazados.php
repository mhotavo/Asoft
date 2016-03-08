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
                        <form class="form-horizontal" action="<?php echo isset($_GET['familiar']) ?  "?view=agregarfamiliares&mode=edit&familiar=".$_GET['familiar']."&id=".$_GET['id'] : "?view=agregarfamiliares&mode=add&id=".$_GET['id'];  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="40%">Identificacion:</td>
                                <td class="left" width="60%">
                                <div class="col-md-8">
                                    <input type="text" name="txtIdentificacionD" required class="form-control" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['IDENTIFICACION_FAMILIAR'] : null   ?>"  <?php echo isset($_GET['familiar']) ?  "disabled" : null ; ?>  >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Tipo de Identificacion: </td>
                                <td class="left">
                                <div class="col-md-8">
                                    <select name="cboTipoIdentificacionD" required class="form-control" >
                                        <option value="">[...]</option>
                                        <option value="CeduladeCiudadania" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TIPO_IDENTIFICACION']=='CeduladeCiudadania' ) ?  "selected": null; ?> >Cedula de Ciudadania</option>
                                        <option value="TarjetadeIdentidad" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TIPO_IDENTIFICACION']=='TarjetadeIdentidad') ?  "selected": null; ?>>Tarjeta de Identidad</option>
                                        <option value="LibretaMilitar" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TIPO_IDENTIFICACION']=='LibretaMilitar') ?  "selected": null; ?>>Libreta Militar</option>
                                        <option value="RegistroCivil" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TIPO_IDENTIFICACION']=='RegistroCivil') ?  "selected": null; ?>>Registro Civil</option>
                                        <option value="TarjetadeIdentidad" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TIPO_IDENTIFICACION']=='TarjetadeIdentidad') ?  "selected": null; ?>>Tarjeta de Identidad</option>
                                        <option value="NUIP" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TIPO_IDENTIFICACION']=='NUIP') ?  "selected": null; ?>>Numero Unico de Identificacion Personal(NUIP)</option>
                                        <option value="NoTiene" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TIPO_IDENTIFICACION']=='NoTiene') ?  "selected": null; ?>>No Tiene</option>
                                </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Nombres:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtNombresD" required class="form-control" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['NOMBRES'] : null   ?>">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Primer Apellido:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtPrimerApellido" required class="form-control" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['PRIMER_APELLIDO'] : null   ?>">
                                </div>    

                                </td>
                            </tr>
                            <tr>
                                <td class="right">Segundo Apellido:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtSegundoApellido" required class="form-control" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['SEGUNDO_APELLIDO'] : null   ?>">
                                </div>    

                                </td>
                            </tr>
                            <tr>
                                <td class="right">Genero:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <select name="cboGeneroD" required class="form-control">
                                        <optionvalue="">[...]</option>
                                         <option value="Femenino" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GENERO']=='Femenino' ) ?  "selected": null; ?> >Femenino</option>
                                        <option value="Masculino" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GENERO']=='Masculino' ) ?  "selected": null; ?> >Masculino</option>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Fecha de Nacimiento:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtFechaNacimientoD" data-date-format="dd-mm-aaaa" required class="form-control fechas" placeholder="DD-MM-AAAA" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['FECHA_NACIMIENTO'] : null   ?>">
                                </div>    
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Enfoque Diferencial:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select  name="cboEnfoqueD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ENFOQUE_DIFERENCIAL']=='Ninguno' ) ?  "selected": null; ?> value="Ninguno">Ninguno</option>                            
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ENFOQUE_DIFERENCIAL']=='LGBTI' ) ?  "selected": null; ?> value="LGBTI">LGBTI</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ENFOQUE_DIFERENCIAL']=='Indigena' ) ?  "selected": null; ?> value="Indigena">Indigena</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ENFOQUE_DIFERENCIAL']=='Gitano' ) ?  "selected": null; ?> value="Gitano">Gitano "Room"</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ENFOQUE_DIFERENCIAL']=='Afrocolombiano' ) ?  "selected": null; ?> value="Afrocolombiano">Afrocolombiano</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ENFOQUE_DIFERENCIAL']=='Raizal' ) ?  "selected": null; ?> value="Raizal">Raizal "San Andres"</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ENFOQUE_DIFERENCIAL']=='Otro' ) ?  "selected": null; ?> value="Otro">Otro</option>
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTADO_CIVIL']=='Soltero' ) ?  "selected": null; ?> value="Soltero">Soltero</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTADO_CIVIL']=='Casado' ) ?  "selected": null; ?> value="Casado">Casado</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTADO_CIVIL']=='UnionLibre' ) ?  "selected": null; ?> value="UnionLibre">Union Libre</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTADO_CIVIL']=='Viudo' ) ?  "selected": null; ?> value="Viudo">Viudo</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTADO_CIVIL']=='Separado/Divorciado' ) ?  "selected": null; ?> value="Separado/Divorciado">Separado/Divorciado</option>                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Parentesco:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="Parentesco" name="cboParentescoD" required class="form-control"> 
                                        <option  value="">[...]</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PARENTESCO']=='Padre/Padrastro' ) ?  "selected": null; ?> value="Padre/Padrastro">Padre/Padrastro</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PARENTESCO']=='Madre/Madrastra' ) ?  "selected": null; ?> value="Madre/Madrastra">Madre/Madrastra</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PARENTESCO']=='Hijo(a)/HIjastro(a)' ) ?  "selected": null; ?> value="Hijo(a)/HIjastro(a)">Hijo(a)/Hojastro(a)</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PARENTESCO']=='Compañero(a)' ) ?  "selected": null; ?> value="Compañero(a)">Compañero(a)</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PARENTESCO']=='Hermano(a)' ) ?  "selected": null; ?> value="Hermano(a)">Hermano(a)</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PARENTESCO']=='Suegro(a)' ) ?  "selected": null; ?> value="Suegro(a)">Suegro(a)</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PARENTESCO']=='Otro' ) ?  "selected": null; ?> value="Otro">Otro</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PARENTESCO']=='NoParientes' ) ?  "selected": null; ?> value="NoParientes">No Parientes</option>                                
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTUVO_SEPARADO']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTUVO_SEPARADO']=='No' ) ?  "selected": null; ?> value="No">No</option>                                                                                               
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACITADO']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACITADO']=='No' ) ?  "selected": null; ?> value="No">No</option> 
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='Visual' ) ?  "selected": null; ?> value="Visual">Visual</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='Autismo' ) ?  "selected": null; ?> value="Autismo">Autismo</option> 
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='Auditiva' ) ?  "selected": null; ?> value="Auditiva">Auditiva</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='Dispersion' ) ?  "selected": null; ?> value="Dispersion">Dispersion</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='RetardoMental' ) ?  "selected": null; ?> value="RetardoMental">Retardo Mental</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='ParalisisTotal' ) ?  "selected": null; ?> value="ParalisisTotal">Paralisis Total</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='SindromedeDown' ) ?  "selected": null; ?> value="SindromedeDown">Sindrome de Down</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='BajaConcentracion' ) ?  "selected": null; ?> value="BajaConcentracion">Baja Concentracion</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='ControldeEsfinteres' ) ?  "selected": null; ?> value="ControldeEsfinteres">Control de Esfinteres</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='ParalisisOAusenciaDeMiembroSuperior' ) ?  "selected": null; ?> value="ParalisisOAusenciaDeMiembroSuperior">Paralisis o Ausencia de un Miembro Superior</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='ParalisisOAusenciaDeMiembroInferior' ) ?  "selected": null; ?> value="ParalisisOAusenciaDeMiembroInferior">Paralisis o Ausencia de un Miembro Inferior</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DISCAPACIDAD']=='OtraDiscapacidad' ) ?  "selected": null; ?> value="OtraDiscapacidad">Otra Discapacidad</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Cual) que se muestra o se oculta si es dicapacitado -->
                            <tr>
                                <td class="right">Cual:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" name="txtOtraDiscapacidadD" required class="form-control" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['CUAL_D'] : null   ?>">
                                </div>
                                    </td>
                            </tr>
                            <tr>
                                <td class="right">¿Ha Sido Victima de Mina-Antipersonal?:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <select name="cboVictimaMinaD" onChange="victimaMinaMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['HA_SIDO_VICTIMA_M_A_']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['HA_SIDO_VICTIMA_M_A_']=='No' ) ?  "selected": null; ?> value="No">No</option> 
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RECIBIO_AUXILIO_T_E_C_A']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RECIBIO_AUXILIO_T_E_C_A']=='No' ) ?  "selected": null; ?> value="No">No</option> 
                                    </select> 
                                </div>
                                </td>
                            </tr>
                            <!-- (Se le Otorgo ayuda medica en) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td class="right">Se le Otorgo ayuda medica en:</td>
                                <td class="left">
                                <div class="col-md-10" style="text-align: left;">

                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SE_OTORGO_AYUDA_M']=='Medicamentos' ) ?  "checked": null; ?> name="checkboxAyudaMedicaD" value="Medicamentos"> Medicamentos <br>
                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SE_OTORGO_AYUDA_M']=='CirugiaPlastica' ) ?  "checked": null; ?> name="checkboxAyudaMedicaD" value="CirugiaPlastica"> Cirugia Plastica <br>
                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SE_OTORGO_AYUDA_M']=='CirugiaVascular' ) ?  "checked": null; ?> name="checkboxAyudaMedicaD" value="CirugiaVascular"> Cirugia Vascular <br>
                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SE_OTORGO_AYUDA_M']=='Osteosintesis' ) ?  "checked": null; ?> name="checkboxAyudaMedicaD" value="Osteosintesis"> Osteosintesis <br>
                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SE_OTORGO_AYUDA_M']=='Protesis' ) ?  "checked": null; ?> name="checkboxAyudaMedicaD" value="Protesis"> Protesis <br>
                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SE_OTORGO_AYUDA_M']=='Ortesis' ) ?  "checked": null; ?> name="checkboxAyudaMedicaD" value="Ortesis"> Ortesis  <br>                   
                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SE_OTORGO_AYUDA_M']=='Terapias' ) ?  "checked": null; ?> name="checkboxAyudaMedicaD" value="Terapias"> Terapias <br>
                                </td>
                            </tr>
                            <!-- (Otra:) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td class="right">Otra:</td>
                                <td class="left">
                                <div class="col-md-8">
                                     <input  type="text" name="txtOtraAyudaD" required class="form-control" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['OTRA_A_M'] : null   ?>">
                                </div>
                                </td>
                            </tr>
                            <!-- (En cuanto a indemnizacion por) que se muestra o se oculta si Ha Sido Victima de Mina-Antipersonal -->
                            <tr>
                                <td class="right">En cuanto a indemnizacion por Concepto de victimizacion por Minas-Antipersonal se le otorgo:</td>
                                <td class="left">
                                <div class="col-md-10" style="text-align: left;">

                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['EN_CUANTO_INDEMNIZACION']=='HumanitariaInmediata' ) ?  "checked": null; ?> name="checkboxIndemnizacionD" value="HumanitariaInmediata"> Indemnizacion ayuda humanitaria inmediata <br>
                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['EN_CUANTO_INDEMNIZACION']=='PorLesiones' ) ?  "checked": null; ?> name="checkboxIndemnizacionD" value="PorLesiones"> Indemnizaciones Administrativa por lesiones que no  <br>
                                    <input type="checkbox" <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['EN_CUANTO_INDEMNIZACION']=='IncapacidadPermanente' ) ?  "checked": null; ?> name="checkboxIndemnizacionD" value="IncapacidadPermanente"> Indemnizacion Administrativa por incapacidad permanente
                                </td>
                            </tr> 
                            <tr>
                                <td class="right"> Afiliado a Salud:</td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="afiliadoSalud" name="cboAfiliadoSaludD" onChange="afiliadoSaludMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['AFILIADO_SALUD']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['AFILIADO_SALUD']=='No' ) ?  "selected": null; ?> value="No">No</option> 
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['REGIMEN']=='Contributivo' ) ?  "selected": null; ?> value="Contributivo">Contributivo</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['REGIMEN']=='Subsidiado' ) ?  "selected": null; ?> value="Subsidiado">Subsidiado</option> 
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['REGIMEN']=='Vinculado' ) ?  "selected": null; ?> value="Vinculado">Vinculado</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['REGIMEN']=='Especial' ) ?  "selected": null; ?> value="Especial">Especial</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['REGIMEN']=='Ninguno' ) ?  "selected": null; ?> value="Ninguno">Ninguno</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Cual:) que se muestra o se oculta si es Afiliado a Salud: --> 
                            <tr>
                                <td class="right">Cual:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" id="cualRegimen" name="txtCualRegimenD" required class="form-control" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['CUAL_R'] : null   ?>">
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td class="right">Recibio Atencion Salud Mental:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <select  name="cboSaludMentalD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RECIBIO_ATENCION_S_M']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RECIBIO_ATENCION_S_M']=='No' ) ?  "selected": null; ?> value="No">No</option>                                                                                               
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RECIBIO_APOYO_PSICOSOCIAL']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RECIBIO_APOYO_PSICOSOCIAL']=='No' ) ?  "selected": null; ?> value="No">No</option>                                                                                             
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ASISTIO_PROGRAMA_S_R']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ASISTIO_PROGRAMA_S_R']=='No' ) ?  "selected": null; ?> value="No">No</option>                                                                                               
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
                                            <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['VACUNAS']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['VACUNAS']=='No' ) ?  "selected": null; ?> value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- (Cuales Vacunas:) que se muestra o se oculta si tiene vacunas --> 
                            <tr>
                                <td class="right">Cuales Vacunas:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" id="cualesVacunas" name="txtCualesVacunasD" required class="form-control" value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['CUALES_VACUNAS'] : null   ?>">
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td class="right">Le han Diagnosticado una Enfermedad Cronica: </td>
                                <td class="left">
                                <div class="col-md-8">

                                    <select id="enfCronica" name="cboEnfCronicaD" onChange="enfCronicaMostrarSi(this)" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DIAGNOSTICADO_E_C']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['DIAGNOSTICADO_E_C']=='No' ) ?  "selected": null; ?> value="No">No</option> 
                                    </select>
                                </div>
                                </td>
                            </tr> 
                            <!-- (Cual Enfermedad:) que se muestra o se oculta si Le han Diagnosticado una Enfermedad Cronica: -->  
                            <tr>
                                <td class="right">Cual Enfermedad:</td>
                                <td class="left">
                                <div class="col-md-8">
                                    <input type="text" id="cualEnfCronica" name="txtCualEnfCronicaD" required class="form-control"  value="<?php echo isset($_GET['familiar']) ? $_familiaresDesplazados[$_GET['familiar']]['CUAL_ENFERMEDAD_'] : null   ?>">
                                </div>
                                </td>
                            </tr>  
                            <tr>
                                <td class="right">Califique el Estado de Salud (1-5):</td>
                                <td class="left">
                                <div class="col-md-8">
                                     <select  name="txtCalifEstadoSaludD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CALIFIQUE_E_S']=='1' ) ?  "selected": null; ?> value="1"> Uno </option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CALIFIQUE_E_S']=='2' ) ?  "selected": null; ?> value="2"> Dos </option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CALIFIQUE_E_S']=='3' ) ?  "selected": null; ?> value="3"> Tres </option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CALIFIQUE_E_S']=='4' ) ?  "selected": null; ?> value="4"> Cuatro </option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CALIFIQUE_E_S']=='5' ) ?  "selected": null; ?> value="5"> Cinco</option>
                                        

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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTUDIABA_ANTES_V']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTUDIABA_ANTES_V']=='No' ) ?  "selected": null; ?> value="No">No</option>                                                                                               
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTUDIA_ACTUALMENTE']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ESTUDIA_ACTUALMENTE']=='No' ) ?  "selected": null; ?> value="No">No</option> 
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PROGRAMA_A_E']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['PROGRAMA_A_E']=='No' ) ?  "selected": null; ?> value="No">No</option> 
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CANCELA_COSTO_E']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CANCELA_COSTO_E']=='No' ) ?  "selected": null; ?> value="No">No</option> 
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SABE_LEER']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['SABE_LEER']=='No' ) ?  "selected": null; ?> value="No">No</option>                                                                                               
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['NIVEL_ALCANZADO']=='Preescolar' ) ?  "selected": null; ?> value="Preescolar">Preescolar</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['NIVEL_ALCANZADO']=='Primaria' ) ?  "selected": null; ?> value="Primaria">Primaria</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['NIVEL_ALCANZADO']=='Secundaria' ) ?  "selected": null; ?> value="Secundaria">Secundaria</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['NIVEL_ALCANZADO']=='Tecnico' ) ?  "selected": null; ?> value="Tecnico">Tecnico</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['NIVEL_ALCANZADO']=='Tecnologico' ) ?  "selected": null; ?> value="Tecnologico">Tecnologico</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['NIVEL_ALCANZADO']=='Universitario' ) ?  "selected": null; ?> value="Universitario">Universitario</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['NIVEL_ALCANZADO']=='Posgrado' ) ?  "selected": null; ?> value="Posgrado">Posgrado</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['NIVEL_ALCANZADO']=='Ninguno' ) ?  "selected": null; ?> value="Ninguno">Ninguno</option>
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Mineria' ) ?  "selected": null; ?> value="Mineria">Mineria</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Industria' ) ?  "selected": null; ?> value="Industria">Industria</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Sistemas' ) ?  "selected": null; ?> value="Sistemas">Sistemas</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Comercio' ) ?  "selected": null; ?> value="Comercio">Comercio</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Servicios' ) ?  "selected": null; ?> value="Servicios">Servicios</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Seguridad' ) ?  "selected": null; ?> value="Seguridad">Seguridad</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Transporte' ) ?  "selected": null; ?> value="Transporte">Transporte</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Construccion' ) ?  "selected": null; ?> value="Construccion">Construccion</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Manufactura' ) ?  "selected": null; ?> value="Manufactura">Manufactura</option>                                
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='AgropecuarioSiembraPezcaCaza' ) ?  "selected": null; ?> value="AgropecuarioSiembraPezcaCaza">Agropecuario Siembra,Pezca,Caza</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_LABORAL']=='Otra' ) ?  "selected": null; ?> value="Otra">Otra</option>
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_CERTIFICADA']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['COMPETENCIA_CERTIFICADA']=='No' ) ?  "selected": null; ?> value="No">No</option>                                                                                               
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Mineria' ) ?  "selected": null; ?> value="Mineria">Mineria</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Industria' ) ?  "selected": null; ?> value="Industria">Industria</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Sistemas' ) ?  "selected": null; ?> value="Sistemas">Sistemas</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Comercio' ) ?  "selected": null; ?> value="Comercio">Comercio</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Servicios' ) ?  "selected": null; ?> value="Servicios">Servicios</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Seguridad' ) ?  "selected": null; ?> value="Seguridad">Seguridad</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Transporte' ) ?  "selected": null; ?> value="Transporte">Transporte</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Construccion' ) ?  "selected": null; ?> value="Construccion">Construccion</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Manufactura' ) ?  "selected": null; ?> value="Manufactura">Manufactura</option>                                
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='AgropecuarioSiembraPezcaCaza' ) ?  "selected": null; ?> value="AgropecuarioSiembraPezcaCaza">Agropecuario Siembra,Pezca,Caza</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['GUSTARIA__CAPACITARSE_']=='Otra' ) ?  "selected": null; ?> value="Otra">Otra</option>
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['HORARIO_CAPACITACION_']=='Diurno' ) ?  "selected": null; ?> value="Diurno">Diurno</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['HORARIO_CAPACITACION_']=='Nocturno' ) ?  "selected": null; ?> value="Nocturno">Nocturno</option>                                
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ACTIVIDAD_LABORAL_ACTUAL']=='Trabajando' ) ?  "selected": null; ?> value="Trabajando">Trabajando</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ACTIVIDAD_LABORAL_ACTUAL']=='BuscandoTrabajo' ) ?  "selected": null; ?> value="BuscandoTrabajo">Buscando Trabajo</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ACTIVIDAD_LABORAL_ACTUAL']=='Estudiante' ) ?  "selected": null; ?> value="Estudiante">Estudiante</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ACTIVIDAD_LABORAL_ACTUAL']=='Rentista' ) ?  "selected": null; ?> value="Rentista">Rentista</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ACTIVIDAD_LABORAL_ACTUAL']=='OficiosDelHogar' ) ?  "selected": null; ?> value="OficiosDelHogar">Oficios del Hogar</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ACTIVIDAD_LABORAL_ACTUAL']=='Invalido' ) ?  "selected": null; ?> value="Invalido">Invalido</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ACTIVIDAD_LABORAL_ACTUAL']=='Pensionado' ) ?  "selected": null; ?> value="Pensionado">Pensionado</option>                                
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['ACTIVIDAD_LABORAL_ACTUAL']=='Otra' ) ?  "selected": null; ?> value="Otra">Otra</option>
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Mineria' ) ?  "selected": null; ?> value="Mineria">Mineria</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Industria' ) ?  "selected": null; ?> value="Industria">Industria</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Sistemas' ) ?  "selected": null; ?> value="Sistemas">Sistemas</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Comercio' ) ?  "selected": null; ?> value="Comercio">Comercio</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Servicios' ) ?  "selected": null; ?> value="Servicios">Servicios</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Seguridad' ) ?  "selected": null; ?> value="Seguridad">Seguridad</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Transporte' ) ?  "selected": null; ?> value="Transporte">Transporte</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Construccion' ) ?  "selected": null; ?> value="Construccion">Construccion</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Manufactura' ) ?  "selected": null; ?> value="Manufactura">Manufactura</option>                                
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='AgropecuarioSiembraPezcaCaza' ) ?  "selected": null; ?> value="AgropecuarioSiembraPezcaCaza">Agropecuario Siembra,Pezca,Caza</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['RAMA_ACTIVIDAD_ACTUAL']=='Otra' ) ?  "selected": null; ?> value="Otra">Otra</option>
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CONTRATO_ESCRITO']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['CONTRATO_ESCRITO']=='No' ) ?  "selected": null; ?> value="No">No</option>                                                                                               
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TRABAJA_JORNADA']=='Legal' ) ?  "selected": null; ?> value="Legal">Legal</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TRABAJA_JORNADA']=='Ilegal' ) ?  "selected": null; ?> value="Ilegal">Ilegal</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['TRABAJA_JORNADA']=='Ns/Nr' ) ?  "selected": null; ?> value="Ns/Nr">Ns/Nr</option> 
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
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['S_SOCIAL_R_P']=='Si' ) ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['familiar']) and $_familiaresDesplazados[$_GET['familiar']]['S_SOCIAL_R_P']=='No' ) ?  "selected": null; ?> value="No">No</option>                                 
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