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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td>El estado le ha informado sobre la verdad de la violacion de los D.H y del D.I.H cometidos contra el (ella), y/o los miembros de su hogar en relacion a los hechos ocurridos con su Victimizacion?:</td>
                                <td>
                                    <select id="selectReparacion" name="cboViolaDHD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Algun miembro del hogar ha sido reparado o indemnizado por el estado por desplazamiento forzado
                                u otros delitos?:</td>
                                <td>
                                    <select id="selectReparacion" name="cboRepaIndemnizadoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>El estado le ha brindado garantias para que no se vuelva a repetir un nuevo desplazamiento?:</td>
                                <td>
                                    <select id="selectReparacion" name="cboGarantiasD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Algun miembro de su hogar ha solicitado restitucion de vivienda o tierras que ocupaban antes del desplazamiento?:</td>
                                <td>
                                    <select id="selectReparacion" name="cboSoliRestitucionT">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ante que entidad solicitaron la restitucion de vivienda o tierras?:</td>
                                <td><input id="selectReparacion" type="text" name="txtQueEntidad"></td>
                            </tr>
                            <tr>
                                <td>El estado le ha restituido sus bienes (vivienda o tierras que eran de su propiedad):</td>
                                <td>
                                    <select id="selectReparacion" name="cboRestitucionBienes">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Algun miembro de su familia solicito al estado indemnizacion monetaria para la perdida de su vivienda o tierras?:</td>
                                <td>
                                    <select id="selectReparacion" name="cboSoliEstadoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Algun miembro de su familia recibio del estado indemnizacion monetaria por la perdida de su vivienda o tierras?:</td>
                                <td>
                                    <select id="selectReparacion" name="cboReciEstadoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Usted y toda su familia han recibido rehabilitacion despues del desplazamiento para reparar el daño causado?:</td>
                                <td>
                                    <select id="selectReparacion" name="cboRehabilitacionD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Algun miembro de su hogar ha sido beneficiario de medidas de satisfaccion por parte del estado consistentes en la investigacion, juzgamiento y sancion de los responsables del desplazamiento del cual fueron victimas?:</td>
                                <td>
                                    <select id="selectReparacion" name="cboSancionD">
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