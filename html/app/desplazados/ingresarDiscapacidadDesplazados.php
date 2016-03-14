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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=discapacidad&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="55%">La discapacidad surgio antes del desplazamiento:</td>
                                <td  class="left" width="45%">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboDiscaAntesDesplaD" required class="form-control">
                                        <option   value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ANTES_DESPLAZAMIENTO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ANTES_DESPLAZAMIENTO']=='No') ?  "selected": null; ?> value="No">No</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ANTES_DESPLAZAMIENTO']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">la persona discapacitada se siente en igualdad de condiciones:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboIguCondicionesD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['IGUAL_CONDICIONES']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['IGUAL_CONDICIONES']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['IGUAL_CONDICIONES']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Que entidad le ha brindado apoyo para su rehabilitacion:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectReha" name="cboEntiApoyoD" required class="form-control">
                                        <option   value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ENTIDAD_REHABILITACION']=='Privada') ?  "selected": null; ?> value="Privada">Privada</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ENTIDAD_REHABILITACION']=='Publica') ?  "selected": null; ?> value="Publica">Publica</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ENTIDAD_REHABILITACION']=='Otro') ?  "selected": null; ?> value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Se le ha ofrecido hubicarlo laboralmente de acuerdo a sus condiciones:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboRehuLaboraD" required class="form-control">
                                        <option   value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['REHUBICACION_LABORAL']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['REHUBICACION_LABORAL']=='No') ?  "selected": null; ?> value="No">No</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['REHUBICACION_LABORAL']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha sido marginado o discriminado por discapacidad:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboDiscriDiscapaD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['MARGINADO_DISCRIMINADO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['MARGINADO_DISCRIMINADO']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['MARGINADO_DISCRIMINADO']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Encuentra facilidad y suficientes sitios publicos y privados:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboPubliPrivaD" required class="form-control">
                                        <option   value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ENCUENTRA_P_P']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ENCUENTRA_P_P']=='No') ?  "selected": null; ?> value="No">No</option>
                                        <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ENCUENTRA_P_P']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha sido excluido de algun beneficio o ventaja por discapacidad:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboExcluidoD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['EXCLUIDO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['EXCLUIDO']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['EXCLUIDO']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha recibido rehabilitacion y orientacion para su desarrollo:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboRehabilitacionD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['REHABILITACION']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['REHABILITACION']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['REHABILITACION']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Las personas con discapacidad mental estan cuenta con algun subsidio:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboDiscaAntesDesplaD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['SUBSIDIO_DISCAPACIDAD']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['SUBSIDIO_DISCAPACIDAD']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['SUBSIDIO_DISCAPACIDAD']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Familiar cuenta con capacidad economica para cubrir los gastos requeridos:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboCapaEconomicaD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['CAPACIDAD_ECONO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['CAPACIDAD_ECONO']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['CAPACIDAD_ECONO']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Los menores de 18 años con discapacidad estudian:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboDiscaEstudianD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['MENORES_18']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['MENORES_18']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['MENORES_18']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha recibido la prorroga automatica de ayuda humanitaria de emergencia:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboProrroAutoD" required class="form-control">
                                             <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['RECIBIO_AYU_HUMA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['RECIBIO_AYU_HUMA']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['RECIBIO_AYU_HUMA']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Hace parte de alguna organizacion de desplazados discapacitados:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboOrganiDesplaD" required class="form-control">
                                            <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ORGANIZACION_DESPLA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ORGANIZACION_DESPLA']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['ORGANIZACION_DESPLA']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Se le reconoce y se le respeta su participacion en las OPDS:</td>
                                <td  class="left">
                                <div class="col-md-6">
                                    <select id="selectDiscapacidad" name="cboOPDSD" required class="form-control">
                                             <option   value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['PARTICIPACION_OPDS']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['PARTICIPACION_OPDS']=='No') ?  "selected": null; ?> value="No">No</option>
                                            <option <?php echo ( isset($_GET['id']) and $_discapacidades[$_GET['id']]['PARTICIPACION_OPDS']=='NoAplica') ?  "selected": null; ?> value="NoAplica">No Aplica</option>
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