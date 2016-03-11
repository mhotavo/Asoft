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
                    <h1> Agregar Desplazamiento</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=desplazamiento&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">Durante los ultimos años cuantas veces ha sido desplazado:</td>
                                <td  class="left" width="55%">
                                <div class="col-md-9">
                                    <select id="victimizado" name="cboVictimizadoD" onChange="Desplazamiento(this.value)" required class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- Informacion cada desplazamiento
                                 Primer Desplazamiento
                            -->
                            <div>
                                <tr id="Anodesplazamiento1" >
                                    <td class="right" >Año Primer Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9" >    
                                        <input  required class="form-control" type="text" name="anoDesplazamiento1"  placeholder="Primer Desplazamiento">
                                    </div>

                                    </td>
                                </tr>
                              <tr id="MunicipioDesplazamiento1">
                                    <td class="right" >Municipio Primer Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9" >  
                                    <select  required name="MunicipioDesplazamiento1" class="  form-control "  data-show-subtext="true"  data-live-search="true">
                                        <option value="">[...]</option>
                                          <?php 
                                         if(false != $_municipios) {
                                            foreach($_municipios as $id__municipios => $contenido) {  ?>
                                            <option value="<?php echo $_municipios[$id__municipios]['ID_MUNICIPIO']; ?>" data-subtext=" <?php echo $_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?> " <?php echo ( isset($_GET['id']) and $_desplazados[$_GET['id']]['Municipio']==$_municipios[$id__municipios]['ID_MUNICIPIO']) ?  "selected": null; ?>> 
                                              <?php echo $_municipios[$id__municipios]['NOMBRE_MUNICIPIO'].' - '.$_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?>
                                            </option>

                                           <?php  } 
                                         } ?>
                                     </select>  
                                    </div>                                                               
                                    </td>
                                </tr>                            
                                <tr id="localidadDesplazamiento1">
                                    <td class="right" >Localidad Primer Desplazamiento:</td>
                                    <td  class="left" >
                                    <div class="col-md-9"   >    
                                        <input  required class="form-control" type="text"  name="localidadDesplazamiento1" placeholder="Primer Desplazamiento">
                                    </div>
                           
                                    </td>
                                </tr>
                                <tr id="CausaDesplazamiento1">
                                    <td  class="right" >A Que Causa Le Atribuye Su Primer Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9"  style="text-align: left;">
                                        <input type="radio" name="CausaDesplazamiento1" value="ConfrontacionArmada"> Confrontacion Armada<br>
                                        <input type="radio" name="CausaDesplazamiento1" value="AmenazaIndirecta"> Amenaza Indirecta<br>
                                        <input type="radio" name="CausaDesplazamiento1" value="CamposMinados"> Campos Minados<br>
                                        <input type="radio" name="CausaDesplazamiento1" value="AsesinatoFamilia"> Asesinato Familia<br>
                                        <input type="radio" name="CausaDesplazamiento1" value="AmenazaDirecta"> Amenaza Directa<br>
                                        <input type="radio" name="CausaDesplazamiento1" value="ReclutamientoMenores"> Reclutamiento de Menores<br>
                                        <input type="radio" name="CausaDesplazamiento1" value="AusenciaGobierno"> Ausencia del Gobierno<br>
                                        <input type="radio" name="CausaDesplazamiento1" value="DesplazamientoMasivo"> Desplazamiento Masivo<br>
                                    </div>
                                    </td>
                                </tr>
                            </div>
                            <!-- Segundo desplazamiento -->
                            <div  >
                                <tr id="Anodesplazamiento2"  style="display: none;">
                                    <td class="right" >Año Segundo Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9">    
                                        <input   class="form-control" type="text" name="anoDesplazamiento2"  placeholder="Segundo Desplazamiento">
                                    </div>

                                    </td>
                                </tr>
                              <tr id="MunicipioDesplazamiento2" style="display: none;">
                                    <td class="right" >Municipio Segundo Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9">  
                                    <select   name="MunicipioDesplazamiento2" class="  form-control "  data-show-subtext="true"  data-live-search="true">
                                        <option value="">[...]</option>
                                          <?php 
                                         if(false != $_municipios) {
                                            foreach($_municipios as $id__municipios => $contenido) {  ?>
                                            <option value="<?php echo $_municipios[$id__municipios]['ID_MUNICIPIO']; ?>" data-subtext=" <?php echo $_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?> " <?php echo ( isset($_GET['id']) and $_desplazados[$_GET['id']]['Municipio']==$_municipios[$id__municipios]['ID_MUNICIPIO']) ?  "selected": null; ?>> 
                                              <?php echo $_municipios[$id__municipios]['NOMBRE_MUNICIPIO'].' - '.$_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?>
                                            </option>

                                           <?php  } 
                                         } ?>
                                     </select>  
                                    </div>                                                               
                                    </td>
                                </tr>                            
                                <tr id="localidadDesplazamiento2" style="display: none;">
                                    <td class="right" >Localidad Segundo Desplazamiento:</td>
                                    <td  class="left" >
                                    <div class="col-md-9"  >    
                                        <input   class="form-control" type="text"  name="localidadDesplazamiento2" placeholder="Segundo Desplazamiento">
                                    </div>
                           
                                    </td>
                                </tr>
                                <tr id="CausaDesplazamiento2" style="display: none;">
                                    <td  class="right" >A Que Causa Le Atribuye Su Segundo Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9" style="text-align: left;">
                                        <input type="radio" name="CausaDesplazamiento2" value="ConfrontacionArmada"> Confrontacion Armada<br>
                                        <input type="radio" name="CausaDesplazamiento2" value="AmenazaIndirecta"> Amenaza Indirecta<br>
                                        <input type="radio" name="CausaDesplazamiento2" value="CamposMinados"> Campos Minados<br>
                                        <input type="radio" name="CausaDesplazamiento2" value="AsesinatoFamilia"> Asesinato Familia<br>
                                        <input type="radio" name="CausaDesplazamiento2" value="AmenazaDirecta"> Amenaza Directa<br>
                                        <input type="radio" name="CausaDesplazamiento2" value="ReclutamientoMenores"> Reclutamiento de Menores<br>
                                        <input type="radio" name="CausaDesplazamiento2" value="AusenciaGobierno"> Ausencia del Gobierno<br>
                                        <input type="radio" name="CausaDesplazamiento2" value="DesplazamientoMasivo"> Desplazamiento Masivo<br>
                                    </div>
                                    </td>
                                </tr>
                            </div>
                            <!-- tercer desplazamiento -->
                            <div >
                                <tr  id="Anodesplazamiento3" style="display: none;">
                                    <td class="right" >Año Tercer Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9">    
                                        <input   class="form-control" type="text" name="anoDesplazamiento1"  placeholder="Tercer Desplazamiento">
                                    </div>

                                    </td>
                                </tr>
                              <tr  id="MunicipioDesplazamiento3" style="display: none;">
                                    <td class="right" >Municipio Tercer Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9">  
                                    <select   name="MunicipioDesplazamiento1" class="  form-control "  data-show-subtext="true"  data-live-search="true">
                                        <option value="">[...]</option>
                                          <?php 
                                         if(false != $_municipios) {
                                            foreach($_municipios as $id__municipios => $contenido) {  ?>
                                            <option value="<?php echo $_municipios[$id__municipios]['ID_MUNICIPIO']; ?>" data-subtext=" <?php echo $_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?> " <?php echo ( isset($_GET['id']) and $_desplazados[$_GET['id']]['Municipio']==$_municipios[$id__municipios]['ID_MUNICIPIO']) ?  "selected": null; ?>> 
                                              <?php echo $_municipios[$id__municipios]['NOMBRE_MUNICIPIO'].' - '.$_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?>
                                            </option>

                                           <?php  } 
                                         } ?>
                                     </select>  
                                    </div>                                                               
                                    </td>
                                </tr>                            
                                <tr  id="localidadDesplazamiento3" style="display: none;">
                                    <td class="right" >Localidad Tercer Desplazamiento:</td>
                                    <td  class="left" >
                                    <div class="col-md-9"  >    
                                        <input   class="form-control" type="text"  name="localidadDesplazamiento1" placeholder="Tercer Desplazamiento">
                                    </div>
                           
                                    </td>
                                </tr>
                                <tr  id="CausaDesplazamiento3" style="display: none;">
                                    <td  class="right" >A Que Causa Le Atribuye Su Tercer Desplazamiento:</td>
                                    <td  class="left">
                                    <div class="col-md-9" style="text-align: left;">
                                        <input type="radio" name="CausaDesplazamiento3" value="ConfrontacionArmada"> Confrontacion Armada<br>
                                        <input type="radio" name="CausaDesplazamiento3" value="AmenazaIndirecta"> Amenaza Indirecta<br>
                                        <input type="radio" name="CausaDesplazamiento3" value="CamposMinados"> Campos Minados<br>
                                        <input type="radio" name="CausaDesplazamiento3" value="AsesinatoFamilia"> Asesinato Familia<br>
                                        <input type="radio" name="CausaDesplazamiento3" value="AmenazaDirecta"> Amenaza Directa<br>
                                        <input type="radio" name="CausaDesplazamiento3" value="ReclutamientoMenores"> Reclutamiento de Menores<br>
                                        <input type="radio" name="CausaDesplazamiento3" value="AusenciaGobierno"> Ausencia del Gobierno<br>
                                        <input type="radio" name="CausaDesplazamiento3" value="DesplazamientoMasivo"> Desplazamiento Masivo<br>
                                    </div>
                                    </td>
                                </tr>
                            </div>                                                        
                            <!--  Fin Informacion cada desplazamiento -->


                            <tr>
                                <td  class="right">N° de Personas que Conformaban su hogar en ese momento:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input   class="form-control" type="text" id="nPersonas" name="txtNPersonasD" >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right">En ese momento la familia se separo:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboFamiliaSeparoD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td  class="right">Solicito ayuda estatal para la reunificacion:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboReunificacionD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right">Su nucleo se volvio a unificar:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboUnificarD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right">Para esto recibio ayuda estatal:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboUnificarEstatalD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">La familia en el momento del desplazamiento estan vivos:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboFamiliaVivoD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun Familiar ha sido detenido de forma arbitraria:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboFamiliarDeteD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun Familiar ha sido Victima de Violacion o Prostitucion forzada:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboFamiliarVPD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun Familiar fue asesinado por denunciar grupos armados:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboFamiliarAseD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun Familiar fue reclutado por grupos armados al margen de la ley:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboFamiliarRecluD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun Familiar ha sido victima de secuestro:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboFamiliarSecuesD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right"> Ha instalado demanda por desplazamiento:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboDemandaVictiD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun familiar fue victima de Minas-Antipersonal:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboFamiliarMinaD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td  class="right">En El Momento de los desplazamientos su Nucleo Familiar Declaro Ante:</td>
                               <td  class="left">
                                <div class="col-md-9">
                                  <input  required class="form-control" type="text" id="" name="" >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right">Defensoria:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboDefensoriaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td  class="right">Procuraduria:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboProcuraduriaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right">Departamento para la prosperidad social:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboProspeD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr> 
                            <tr>
                                <td  class="right">Personeria:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboPersoneriaD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right">UAO:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboUAOD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right">Otra: </td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="selectVicti" name="cboOtraD" required class="form-control">
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