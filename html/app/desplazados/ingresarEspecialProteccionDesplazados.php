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
                    <h1> Agregar Especial Proteccion</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=proteccionespecial&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded" >                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">La ayuda humanitaria recibida corresponde a su cultura:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboEsProteccionD" required class="form-control">
                                            <option  value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['AYUDA_CULTURA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['AYUDA_CULTURA']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">La Educacion recibida por menores de 18 años es apropiada a su cultura: </td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboEducaCulturaD" required class="form-control">
                                            <option  value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['AYUDA_18_CULTURA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['AYUDA_18_CULTURA']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Los funcionarios publicos les dan un trato digno y respetuoso:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboTratoD" required class="form-control">
                                            <option  value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['FUNCIONARIO_TRATO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['FUNCIONARIO_TRATO']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Seleccione el nombre del pueblo indigena al que pertenece:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion2" name="cboPuebloIndiD" required class="form-control">
                                    <option  value="">[...]</option>
                                        <?php 
                                         if(false != $_pueblosIndigenas) {
                                            foreach($_pueblosIndigenas as $id__pueblosIndigenas => $contenido) {  ?>
                                            <option  value="<?php echo $_pueblosIndigenas[$id__pueblosIndigenas]['ID_PUEBLO']; ?>" 
                                            <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['PUEBLO_INDIGENA']==$_pueblosIndigenas[$id__pueblosIndigenas]['ID_PUEBLO']) ?  "selected": null; ?>> 
                                            <?php echo $_pueblosIndigenas[$id__pueblosIndigenas]['NOM_PUEBLO']; ?>
                                            </option>

                                           <?php  } 
                                         } ?>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Las mujeres indigenas o afrodescendientes reciben violencia intrafamiliar:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboViolenciaD" required class="form-control">
                                            <option  value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['INDIGENAS_VIOINTRA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['INDIGENAS_VIOINTRA']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha denunciado:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboDenunciadoD" required class="form-control">
                                            <option  value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['DENUNCIADO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['DENUNCIADO']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ante Cual Entidad: </td>
                                <td class="left">
                              <div class="col-md-8">                                
                                    <input id="cualEntidad" type="text" value="<?php echo  isset($_GET['id']) ? $_especiales[$_GET['id']]['CUALENTIDAD_DENUN'] : null ?>" name="txtCualEntidadD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Que tipo de Violencia han padecido:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion3" name="cboTipoViolenciaD" required class="form-control">
                                             <option  value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['TIPO_VIOLENCIA']=='Psicologica') ?  "selected": null; ?> value="Psicologica">Psicologica</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['TIPO_VIOLENCIA']=='Fisica') ?  "selected": null; ?> value="Fisica">Fisica</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['TIPO_VIOLENCIA']=='Sexual') ?  "selected": null; ?> value="Sexual">Sexual</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['TIPO_VIOLENCIA']=='Otra') ?  "selected": null; ?> value="Otra">Otra</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Son parte de una organizacion donde promueven sus derechos:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboPromuevenDereD" required class="form-control">
                                            <option  value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['PROMUEVEN_DERECHOS']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_especiales[$_GET['id']]['PROMUEVEN_DERECHOS']=='No') ?  "selected": null; ?> value="No">No</option>
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


