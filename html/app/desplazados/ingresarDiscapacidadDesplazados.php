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
                    <h1> Agregar Discapacidad</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">La discapacidad surgio antes del desplazamiento:</td>
                                <td  class="left" width="55%">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboDiscaAntesDesplaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">la persona discapacitada se siente en igualdad de condiciones:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboIguCondicionesD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Que entidad le ha brindado apoyo para su rehabilitacion:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectReha" name="cboEntiApoyoD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Privada">Privada</option>
                                        <option value="Publica">Publica</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Se le ha ofrecido hubicarlo laboralmente de acuerdo a sus condiciones:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboRehuLaboraD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha sido marginado o discriminado por discapacidad:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboDiscriDiscapaD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Encuentra facilidad y suficientes sitios publicos y privados:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboPubliPrivaD" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha sido excluido de algun beneficio o ventaja por discapacidad:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboExcluidoD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha recibido rehabilitacion y orientacion para su desarrollo:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboRehabilitacionD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Las personas con discapacidad mental estas cuenta con algun subsidio:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboDiscaAntesDesplaD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Familiar cuenta con capacidad economica para cubrir los gastos requeridos:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboCapaEconomicaD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Los menores de 18 años con discapacidad estudian:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboDiscaEstudianD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha recibido la prorroga automatica de ayuda humanitaria de emergencia:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboProrroAutoD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Hace parte de alguna organizacion de desplazados discapacitados:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboOrganiDesplaD" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Se le reconoce y se le respeta su participacion en las OPDS:</td>
                                <td  class="left">
                                <div class="col-md-7">
                                    <select id="selectDiscapacidad" name="cboOPDSD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
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