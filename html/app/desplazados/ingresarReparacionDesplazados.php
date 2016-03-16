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
                    <h1> Agregar Reparacion</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=reparacion&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="75%">El estado le ha informado sobre la verdad de la violacion de los D.H y del D.I.H cometidos contra el (ella), y/o los miembros de su hogar en relacion a los hechos ocurridos con su Victimizacion?:</td>
                                 <td class="left" width="25%">
                                <div class="col-md-8">
                                    <select id="selectReparacion" name="cboViolaDHD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['ESTADO_INFORMADO']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['ESTADO_INFORMADO']=='No') ?  "selected": null; ?>  value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun miembro del hogar ha sido reparado o indemnizado por el estado por desplazamiento forzado
                                u otros delitos?:</td>
                            
                             <td class="left">
                                <div class="col-md-8">    
                                <select id="selectReparacion" name="cboRepaIndemnizadoD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['MIEMBROH_INDEMNIZADO']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['MIEMBROH_INDEMNIZADO']=='No') ?  "selected": null; ?>  value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">El estado le ha brindado garantias para que no se vuelva a repetir un nuevo desplazamiento?:</td>
                                 <td class="left">
                                <div class="col-md-8">
                                    <select id="selectReparacion" name="cboGarantiasD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['ESTADO_GARANTIAS']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['ESTADO_GARANTIAS']=='No') ?  "selected": null; ?>  value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun miembro de su hogar ha solicitado restitucion de vivienda o tierras que ocupaban antes del desplazamiento?:</td>
                                 <td class="left">
                                <div class="col-md-8">
                                    <select id="selectReparacion" name="cboSoliRestitucionT" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['MIEMBROH_RESTITUCION']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['MIEMBROH_RESTITUCION']=='No') ?  "selected": null; ?>  value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ante que entidad solicitaron la restitucion de vivienda o tierras?:</td>
                                 <td class="left">
                                <div class="col-md-8">
                                 <input id="selectReparacion" type="text" name="txtQueEntidad"  class="form-control" value="<?php echo isset($_GET['id']) ? $_reparaciones[$_GET['id']]['ENTIDAD_RESTITUCION'] : null   ?>">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">El estado le ha restituido sus bienes (vivienda o tierras que eran de su propiedad):</td>
                                 <td class="left">
                                <div class="col-md-8">
                                    <select id="selectReparacion" name="cboRestitucionBienes" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['ESTADO_RESTITUIDO']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['ESTADO_RESTITUIDO']=='No') ?  "selected": null; ?>  value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun miembro de su familia solicito al estado indemnizacion monetaria para la perdida de su vivienda o tierras?:</td>
                                 <td class="left">
                                <div class="col-md-8">
                                    <select id="selectReparacion" name="cboSoliEstadoD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['ESTADO_INDEMNIZACION']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['ESTADO_INDEMNIZACION']=='No') ?  "selected": null; ?>  value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun miembro de su familia recibio del estado indemnizacion monetaria por la perdida de su vivienda o tierras?:</td>
                                 <td class="left">
                                <div class="col-md-8">
                                    <select id="selectReparacion" name="cboReciEstadoD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['MIEMBROH_INDEMNIZACION']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['MIEMBROH_INDEMNIZACION']=='No') ?  "selected": null; ?>  value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Usted y toda su familia han recibido rehabilitacion despues del desplazamiento para reparar el daño causado?:</td>
                                 <td class="left">
                                <div class="col-md-8">
                                    <select id="selectReparacion" name="cboRehabilitacionD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['FAMILIA_REHABILITACION']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['FAMILIA_REHABILITACION']=='No') ?  "selected": null; ?>  value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun miembro de su hogar ha sido beneficiario de medidas de satisfaccion por parte del estado consistentes en la investigacion, juzgamiento y sancion de los responsables del desplazamiento del cual fueron victimas?:</td>
                                 <td class="left">
                                <div class="col-md-8">
                                    <select id="selectReparacion" name="cboSancionD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['MIEMBROH_BENEFICIARIO']=='Si') ?  "selected": null; ?>  value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_reparaciones[$_GET['id']]['MIEMBROH_BENEFICIARIO']=='No') ?  "selected": null; ?>  value="No">No</option>
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