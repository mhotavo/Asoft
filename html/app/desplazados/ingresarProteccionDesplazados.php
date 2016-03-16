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
                    <h1> Agregar Proteccion</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=proteccion&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">Ha Acudido a alguna entidad para solicitar Proteccion:</td>
                                 <td  class="left" width="55%">
                                  <div class="col-md-9" style="text-align: left;">
                                   <input type="radio" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['SOLICITAR_PROTECCION']=='Fiscalia') ?  "checked": null; ?> name="SolicitudProteD" required="" value="Fiscalia"> Fiscalia<br>
                                   <input type="radio" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['SOLICITAR_PROTECCION']=='Emabajadas') ?  "checked": null; ?> name="SolicitudProteD" required="" value="Emabajadas"> Emabajadas<br>
                                   <input type="radio" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['SOLICITAR_PROTECCION']=='FuerzasArmadas') ?  "checked": null; ?> name="SolicitudProteD" required="" value="FuerzasArmadas"> Fuerzas Armadas<br>
                                   <input type="radio" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['SOLICITAR_PROTECCION']=='MinisterioInterior') ?  "checked": null; ?> name="SolicitudProteD" required="" value="MinisterioInterior"> Ministerio del Interior<br>
                                   <input type="radio" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['SOLICITAR_PROTECCION']=='DefensoriaOProcuraduria') ?  "checked": null; ?> name="SolicitudProteD" required="" value="DefensoriaOProcuraduria"> Defensoria O Procuraduria<br>
                                   <input type="radio" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['SOLICITAR_PROTECCION']=='OrganismoNacionalDerechosHumanos') ?  "checked": null; ?> name="SolicitudProteD" required="" value="OrganismoNacionalDerechosHumanos"> Organismo Nacional de Derechos Humanos<br>                               
                                   <input type="radio" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['SOLICITAR_PROTECCION']=='Ninguno') ?  "checked": null; ?> name="SolicitudProteD" required="" value="Ninguno"> Ninguno<br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Otra:</td>
                                <td class="left">
                                <div class="col-md-9">
                                    <input id="otraSolicitudProte" type="text" value="<?php echo isset($_GET['id']) ? $_protecciones[$_GET['id']]['OTRA_ENTIDAD'] : null   ?>"  name="txtSolicitudProteD"  class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Conoce sobre la ayuda que presta el estado a la poblacion desplazada:</td>
                                <td class="left">
                                 <div class="col-md-9">
                                    <select  required class="form-control" id="ayudaEstado" name="cboAyudaEstadoD">
                                            <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['AYUDAPOBLAC_DESPLAZA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['AYUDAPOBLAC_DESPLAZA']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </selecNo
                                </div>
                                </div>    
                                </td>
                            </tr>
                            <tr>
                                <td class="right">¿Usted o Algunos miembros de su hogar estan Inscritos en programas especificos para Mujer, Adulto Mayor ó jovenes?</td>
                                <td class="left">
                                  <div class="col-md-9" style="text-align: left;">
                                   <input type="checkbox" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['MUJER']=='Si') ?  "checked": null; ?> name="cboMujerD" value="Si" > Mujeres<br>
                                   <input type="checkbox" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['ADULTO_MAYOR']=='Si') ?  "checked": null; ?> name="cboAdultoMayorD" value="Si"> Adultos mayores<br>
                                   <input type="checkbox" <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['JOVENES']=='Si') ?  "checked": null; ?> name="cboJovenesD" value="Si"> Jovenes<br>

                                </td>
                            </tr>
                           
                            <tr>
                                <td class="right">Discapacidad:</td>
                                <td class="left">
                                 <div class="col-md-9">
                                    <select  required class="form-control" id="selectProteccion" name="cboDiscapacidadD">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['DISCAPACIDAD']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['DISCAPACIDAD']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun miembro de la familia esta afiliado a OPD:</td>
                                <td class="left">
                                 <div class="col-md-9">
                                    <select  required class="form-control" id="selectProteccion" name="cboAfiliadoOPDD">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['AFILIADO_OPD']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['AFILIADO_OPD']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Cual OPD:</td>
                                <td class="left">
                                <div class="col-md-9">
                                    <input id="inputProteccion" type="text" value="<?php echo isset($_GET['id']) ? $_protecciones[$_GET['id']]['CUAL_OPD'] : null   ?>"  name="txtCualOPDD"  class="form-control" >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Participan en Evaluacion de politica publica:</td>
                                <td class="left">
                                 <div class="col-md-9">
                                    <select  required class="form-control" id="selectProteccion" name="cboEvaPoliPubliD" >
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PARTICIPA_E_P_P']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PARTICIPA_E_P_P']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Cual:</td>
                                <td class="left">
                                <div class="col-md-9">
                                    <input id="inputProteccion" type="text" value="<?php echo isset($_GET['id']) ? $_protecciones[$_GET['id']]['CUAL_E_P_P'] : null   ?>"  name="txtCualPoliPubliD" class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Clasifique el componente de atencion que considera Prioritario recibir en este momento: </td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad1D">
                                            <option  value="">Prioridad 1</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='Salud') ?  "selected": null; ?> value="Salud">Salud</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='Empleo') ?  "selected": null; ?> value="Empleo">Empleo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='Vivienda') ?  "selected": null; ?> value="Vivienda">Vivienda</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='Educacion') ?  "selected": null; ?> value="Educacion">Educacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='Capacitacion') ?  "selected": null; ?> value="Capacitacion">Capacitacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='AsesoriasJuridicas') ?  "selected": null; ?> value="AsesoriasJuridicas">Asesorias Juridicas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='ConsecDocuemntos') ?  "selected": null; ?> value="ConsecDocuemntos">Consec. Docuemntos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='AtencionHumanitaria') ?  "selected": null; ?> value="AtencionHumanitaria">Atencion Humanitaria</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_1']=='GeneracionIngresos') ?  "selected": null; ?> value="GeneracionIngresos">Generacion de Ingresos</option>
                                    </select>
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad2D">
                                            <option  value="">Prioridad 2</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='Salud') ?  "selected": null; ?> value="Salud">Salud</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='Empleo') ?  "selected": null; ?> value="Empleo">Empleo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='Vivienda') ?  "selected": null; ?> value="Vivienda">Vivienda</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='Educacion') ?  "selected": null; ?> value="Educacion">Educacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='Capacitacion') ?  "selected": null; ?> value="Capacitacion">Capacitacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='AsesoriasJuridicas') ?  "selected": null; ?> value="AsesoriasJuridicas">Asesorias Juridicas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='ConsecDocuemntos') ?  "selected": null; ?> value="ConsecDocuemntos">Consec. Docuemntos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='AtencionHumanitaria') ?  "selected": null; ?> value="AtencionHumanitaria">Atencion Humanitaria</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_2']=='GeneracionIngresos') ?  "selected": null; ?> value="GeneracionIngresos">Generacion de Ingresos</option>                                    </select>
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad3D">
                                            <option  value="">Prioridad 3</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='Salud') ?  "selected": null; ?> value="Salud">Salud</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='Empleo') ?  "selected": null; ?> value="Empleo">Empleo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='Vivienda') ?  "selected": null; ?> value="Vivienda">Vivienda</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='Educacion') ?  "selected": null; ?> value="Educacion">Educacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='Capacitacion') ?  "selected": null; ?> value="Capacitacion">Capacitacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='AsesoriasJuridicas') ?  "selected": null; ?> value="AsesoriasJuridicas">Asesorias Juridicas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='ConsecDocuemntos') ?  "selected": null; ?> value="ConsecDocuemntos">Consec. Docuemntos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='AtencionHumanitaria') ?  "selected": null; ?> value="AtencionHumanitaria">Atencion Humanitaria</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_3']=='GeneracionIngresos') ?  "selected": null; ?> value="GeneracionIngresos">Generacion de Ingresos</option>                                    </select>
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad4D">
                                            <option  value="">Prioridad 4</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='Salud') ?  "selected": null; ?> value="Salud">Salud</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='Empleo') ?  "selected": null; ?> value="Empleo">Empleo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='Vivienda') ?  "selected": null; ?> value="Vivienda">Vivienda</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='Educacion') ?  "selected": null; ?> value="Educacion">Educacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='Capacitacion') ?  "selected": null; ?> value="Capacitacion">Capacitacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='AsesoriasJuridicas') ?  "selected": null; ?> value="AsesoriasJuridicas">Asesorias Juridicas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='ConsecDocuemntos') ?  "selected": null; ?> value="ConsecDocuemntos">Consec. Docuemntos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='AtencionHumanitaria') ?  "selected": null; ?> value="AtencionHumanitaria">Atencion Humanitaria</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_4']=='GeneracionIngresos') ?  "selected": null; ?> value="GeneracionIngresos">Generacion de Ingresos</option>                                    </select>
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad5D">
                                            <option  value="">Prioridad 5</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='Salud') ?  "selected": null; ?> value="Salud">Salud</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='Empleo') ?  "selected": null; ?> value="Empleo">Empleo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='Vivienda') ?  "selected": null; ?> value="Vivienda">Vivienda</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='Educacion') ?  "selected": null; ?> value="Educacion">Educacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='Capacitacion') ?  "selected": null; ?> value="Capacitacion">Capacitacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='AsesoriasJuridicas') ?  "selected": null; ?> value="AsesoriasJuridicas">Asesorias Juridicas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='ConsecDocuemntos') ?  "selected": null; ?> value="ConsecDocuemntos">Consec. Docuemntos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='AtencionHumanitaria') ?  "selected": null; ?> value="AtencionHumanitaria">Atencion Humanitaria</option>
                                            <option <?php echo ( isset($_GET['id']) and $_protecciones[$_GET['id']]['PRIORIDAD_5']=='GeneracionIngresos') ?  "selected": null; ?> value="GeneracionIngresos">Generacion de Ingresos</option>                                    </select>
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