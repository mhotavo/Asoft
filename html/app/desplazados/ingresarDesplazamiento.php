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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
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
                            <!-- Se muestra cuando cuando ha sido victimizado 1 vez -->
                            <tr>
                                <td class="right" >Año:</td>
                                <td  class="left">
                                <div class="col-md-3" id="anoDesplazamiento1">    
                                    <input  required class="form-control" type="text" name="anoDesplazamiento1"  placeholder="Año 1">
                                </div>
                                 <div class="col-md-3" style="display: none;" id="anoDesplazamiento2">    
                                    <input  required class="form-control" type="text" name="anoDesplazamiento2"  placeholder="Año 2">
                                </div>
                                 <div class="col-md-3" style="display: none;" id="anoDesplazamiento3">    
                                    <input  required class="form-control" type="text" name="anoDesplazamiento3"   placeholder="Año 3">
                                </div>
                                </td>
                            </tr>
                          <tr>
                                <td class="right" >Municipio:</td>
                                <td  class="left">
                                <div class="col-md-3"  id="MunicipioDesplazamiento1">  
                                <select  required name="MunicipioDesplazamiento1" class=" selectpicker form-control "  data-show-subtext="true"  data-live-search="true">
                                    <option value="">[...]</option>
                                      <?php 
                                     if(false != $_municipios) {
                                        foreach($_municipios as $id__municipios => $contenido) {  ?>
                                        <option value="<?php echo $_municipios[$id__municipios]['ID_MUNICIPIO']; ?>" data-subtext=" <?php echo $_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?> " <?php echo ( isset($_GET['id']) and $_desplazados[$_GET['id']]['Municipio']==$_municipios[$id__municipios]['ID_MUNICIPIO']) ?  "selected": null; ?>> 
                                          <?php echo $_municipios[$id__municipios]['NOMBRE_MUNICIPIO']; ?>
                                        </option>

                                       <?php  } 
                                     } ?>
                                 </select>  
                                </div>
                                <div class="col-md-3" style="display: none;" id="MunicipioDesplazamiento2">    
                                <select  required name="MunicipioDesplazamiento2" class=" selectpicker form-control "  data-show-subtext="true"  data-live-search="true">
                                    <option value="">[...]</option>
                                      <?php 
                                     if(false != $_municipios) {
                                        foreach($_municipios as $id__municipios => $contenido) {  ?>
                                        <option value="<?php echo $_municipios[$id__municipios]['ID_MUNICIPIO']; ?>" data-subtext=" <?php echo $_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?> " <?php echo ( isset($_GET['id']) and $_desplazados[$_GET['id']]['Municipio']==$_municipios[$id__municipios]['ID_MUNICIPIO']) ?  "selected": null; ?>> 
                                          <?php echo $_municipios[$id__municipios]['NOMBRE_MUNICIPIO']; ?>
                                        </option>

                                       <?php  } 
                                     } ?>
                                 </select>                                 
                                 </div>
                                <div class="col-md-3" style="display: none;" id="MunicipioDesplazamiento3">    
                                <select  required name="MunicipioDesplazamiento3" class=" selectpicker form-control "  data-show-subtext="true"  data-live-search="true">
                                    <option value="">[...]</option>
                                      <?php 
                                     if(false != $_municipios) {
                                        foreach($_municipios as $id__municipios => $contenido) {  ?>
                                        <option value="<?php echo $_municipios[$id__municipios]['ID_MUNICIPIO']; ?>" data-subtext=" <?php echo $_municipios[$id__municipios]['NOMBRE_DEPARTAMENTO']; ?> " <?php echo ( isset($_GET['id']) and $_desplazados[$_GET['id']]['Municipio']==$_municipios[$id__municipios]['ID_MUNICIPIO']) ?  "selected": null; ?>> 
                                          <?php echo $_municipios[$id__municipios]['NOMBRE_MUNICIPIO']; ?>
                                        </option>

                                       <?php  } 
                                     } ?>
                                 </select>                                
                                 </div>                                                                
                                </td>
                            </tr>                            
                            <tr>
                                <td class="right" >Localidad:</td>
                                <td  class="left" >
                                <div class="col-md-3"  id="localidadDesplazamiento1">    
                                    <input  required class="form-control" type="text"  name="localidadDesplazamiento1" placeholder="Localidad 1">
                                </div>
                                <div class="col-md-3" style="display: none;" id="localidadDesplazamiento2">    
                                    <input  required class="form-control" type="text"  name="localidadDesplazamiento2"  placeholder="Localidad 2">
                                </div>
                                <div class="col-md-3" style="display: none;" id="localidadDesplazamiento3">    
                                    <input  required class="form-control" type="text"  name="localidadDesplazamiento3"  placeholder="Localidad 3">
                                </div>
                                </td>
                            </tr>
  
                            <!-- Se muestra cuando cuando ha sido victimizado 1 y 2 veces
                            <tr>
                                <td class="right">Año:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input  required class="form-control" type="text" id="anoVictimizacion" name="txtAnoVictimizacion2D" >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Localidad:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input  required class="form-control" type="text"  name="txtLocalidadVictimizacion2D" >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Municipio:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input  required class="form-control" type="text" id="municipioVictimizacion" name="txtMunicipioVictimizacion2D">
                                </div>
                                </td>
                            </tr> -->
                            <!-- Se muestra cuando cuando ha sido victimizado 1  2 y 3 veces 
                            <tr>
                                <td class="right">Año:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input  required class="form-control" type="text" id="anoVictimizacion" name="txtAnoVictimizacion3D" >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Localidad:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input  required class="form-control" type="text"  name="txtLocalidadVictimizacion3D">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Municipio:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input  required class="form-control" type="text" id="municipioVictimizacion" name="txtMunicipioVictimizacion3D">
                                </div>
                                </td>
                            </tr>-->
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td class="right">A Cuales Causas Le Atribuye Su Desplazamiento:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input type="text" id="CausaDesplazamiento" name="CausaDesplazamiento" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td  class="right" >Confrontacion Armada:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="confrontacionArmada" name="cboConfrontacionArmadaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td class="right">Amenaza Indirecta:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="amenazaIndirecta" name="amenazaIndirectaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td  class="right" >Campos Minados:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="camposMinados" name="cboCamposMinadosD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td class="right">Asesinato Familia:</td>
                                <td class="left">
                                <div class="col-md-9">
                                <select id="asesinatoFamilia" name="cboAsesinatoFamiliaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                                </td>
                            </tr>
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td class="right">Amenaza Directa:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="amenazaDirecta" name="cboAmenazaDirectaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td  class="right">Reclutamiento de Menores:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="recluMenores" name="cboRecluMenoresD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td class="right">Ausencia del Gobierno:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="ausenGobierno" name="cboAusenGobiernoD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr> 
                            <!-- Se muestra siempre cuantas veces ha sido victimizado -->
                            <tr>
                                <td  class="right">Desplazamiento Masivo:</td>
                                <td  class="left">
                                <div class="col-md-9">
                                    <select id="desplaMasivo" name="cboDesplaMasivoD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>                                            
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="right">No de Personas que Conformaban su hogar en ese momento:</td>
                                <td  class="left">
                                <div class="col-md-9">    
                                    <input  required class="form-control" type="text" id="nPersonas" name="txtNPersonasD" >
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