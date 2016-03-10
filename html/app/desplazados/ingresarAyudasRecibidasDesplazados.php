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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded" >                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">Los menores que no estan al cuidado de un adulto asisten a programa de Atencion al Menor:</td>
                                <td  class="left" width="55%">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboPrograMenorD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
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
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
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
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
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
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
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
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
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
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Los niños del Hogar que estudian son beneficiarios con desayunos:</td>
                                <td  class="left">
                                <div class="col-md-8">
                                    <select id="selectAyudas" name="cboDesayunosD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
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
                                <div class="col-md79" style="text-align: left;">
                                   <input type="checkbox" name="AyudaSalud" value="1" > Salud<br>
                                   <input type="checkbox" name="AyudaAlojamiento" value="1"> Alojamiento<br>
                                   <input type="checkbox" name="AyudaRacionAlimentaria" value="1"> Racion Alimentaria<br>
                                   <input type="checkbox" name="AyudaAguaPotable" value="1"> Agua Potable<br>
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