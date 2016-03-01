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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td>Los menores que no estan al cuidado de un adulto asisten a programa de Atencion al Menor:</td>
                                <td>
                                    <select id="selectAyudas" name="cboPrograMenorD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Niños y jovenes estan en programa de cuidado infantil:</td>
                                <td>
                                    <select id="selectAyudas" name="cboPrograCuInfantilD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Niños y jovenes asisten a programas de alimentacion: </td>
                                <td>
                                    <select id="selectAyudas" name="cboPrograAlimentaD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Los miembros del hogar han padecido Hambre o falta de Alimento:</td>
                                <td>
                                    <select id="selectAyudas" name="cboHambreD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Si estuvieron en retorno contaron con programa de seguridad AI:</td>
                                <td>
                                    <select id="selectAyudas" name="cboRetornoD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Los Adultos Mayores cuentan con complemento alimenticio:</td>
                                <td>
                                    <select id="selectAyudas" name="cboCompleAlimenD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Los niños del Hogar que estudian son beneficiarios con desayunos:</td>
                                <td>
                                    <select id="selectAyudas" name="cboDesayunosD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>En el momento de los desplazamientos su nucleo familiar recibio ayuda de:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Por parte del Municipio Urgencia en:</td>
                                <td>
                                    <a><input type="checkbox" name="checkboxMuniAyudaD" value="Salud">Salud</a>
                                    <a><input type="checkbox" name="checkboxMuniAyudaD" value="Alojamiento">Alojamiento</a>
                                    <a><input type="checkbox" name="checkboxMuniAyudaD" value="Racion Alimentaria">Racion Alimentaria</a>
                                    <a><input type="checkbox" name="checkboxMuniAyudaD" value="Agua Potable">Agua Potable</a>
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