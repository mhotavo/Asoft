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
                    <h1> Agregar Ayudas Recibidas</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=ayudas&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded" >                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">Los menores que no estan al cuidado de un adulto asisten a programa de Atencion al Menor:</td>
                                <td  class="left" width="55%">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboPrograMenorD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['ATENCION_MENOR']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['ATENCION_MENOR']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Niños y jovenes estan en programa de cuidado infantil:</td>
                                <td  class="left">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboPrograCuInfantilD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['CUIDADO_INFANTIL']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['CUIDADO_INFANTIL']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Niños y jovenes asisten a programas de alimentacion: </td>
                                <td  class="left">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboPrograAlimentaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['PRO_ALIMENTACION']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['PRO_ALIMENTACION']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Los miembros del hogar han padecido Hambre o falta de Alimento:</td>
                                <td  class="left">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboHambreD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['HAMBRE_FALTAA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['HAMBRE_FALTAA']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Si estuvieron en retorno contaron con programa de seguridad AI:</td>
                                <td  class="left">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboRetornoD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['SEGURIDAD_AI']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['SEGURIDAD_AI']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Los Adultos Mayores cuentan con complemento alimenticio:</td>
                                <td  class="left">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboCompleAlimenD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['COMPLE_ALIMENTICIO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['COMPLE_ALIMENTICIO']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Los niños del Hogar que estudian son beneficiarios con desayunos:</td>
                                <td  class="left">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboDesayunosD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['BENEFI_DESAYUNO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['BENEFI_DESAYUNO']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                           <!-- <tr>
                                <td class="right">En el momento de los desplazamientos su nucleo familiar recibio ayuda de:</td>
                                <td></td>
                            </tr> -->
                            <tr>
                                <td class="right">En el momento de los desplazamientos su nucleo familiar recibio ayuda de:</td>
                                <td class="left">
                                <div class="col-md8" style="text-align: left;">
                                   <input type="checkbox" <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['AYUDA_SALUD']=='Si') ?  "checked": null; ?>  name="AyudaSalud" value="Si" > Salud<br>
                                   <input type="checkbox" <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['AYUDA_ALOJAMIENTO']=='Si') ?  "checked": null; ?>  name="AyudaAlojamiento" value="Si"> Alojamiento<br>
                                   <input type="checkbox" <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['AYUDA_ALIMENTARIA']=='Si') ?  "checked": null; ?>  name="AyudaRacionAlimentaria" value="Si"> Racion Alimentaria<br>
                                   <input type="checkbox" <?php echo ( isset($_GET['id']) and $_ayudas[$_GET['id']]['AYUDA_AGUA']=='Si') ?  "checked": null; ?>  name="AyudaAguaPotable" value="Si"> Agua Potable<br>
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