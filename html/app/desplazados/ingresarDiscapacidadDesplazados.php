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
                                <td>La discapacidad surgio antes del desplazamiento:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboDiscaAntesDesplaD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>la persona discapacitada se siente en igualdad de condiciones:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboIguCondicionesD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Que entidad le ha brindado apoyo para su rehabilitacion:</td>
                                <td>
                                    <select id="selectReha" name="cboEntiApoyoD">
                                        <option value=""></option>
                                        <option value="Privada">Privada</option>
                                        <option value="Publica">Publica</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Se le ha ofrecido hubicarlo laboralmente de acuerdo a sus condiciones:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboRehuLaboraD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ha sido marginado o discriminado por discapacidad:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboDiscriDiscapaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Encuentra facilidad y suficientes sitios publicos y privados:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboPubliPrivaD">
                                        <option value=""></option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                        <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ha sido excluido de algun beneficio o ventaja por discapacidad:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboExcluidoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ha recibido rehabilitacion y orientacion para su desarrollo:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboRehabilitacionD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Las personas con discapacidad mental estas cuenta con algun subsidio:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboDiscaAntesDesplaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Familiar cuenta con capacidad economica para cubrir los gastos requeridos:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboCapaEconomicaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Los menores de 18 años con discapacidad estudian:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboDiscaEstudianD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ha recibido la prorroga automatica de ayuda humanitaria de emergencia:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboProrroAutoD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hace parte de alguna organizacion de desplazados discapacitados:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboOrganiDesplaD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Se le reconoce y se le respeta su participacion en las OPDS:</td>
                                <td>
                                    <select id="selectDiscapacidad" name="cboOPDSD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            <option value="No">No Aplica</option>
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