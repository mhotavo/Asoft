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
                    <h1> Agregar Estabilizacion</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td  class="right" width="60%">Razones para elegir este lugar:</td>
                                <td  class="left" width="40%">
                                <div class="col-md-7" style="text-align: left;">
                                    <input type="checkbox" name="checkboxRazones" value="Por la vivienda"> Por la vivienda <br>
                                    <input type="checkbox" name="checkboxRazones" value="Accesibilidad a salud"> Accesibilidad a salud <br>
                                    <input type="checkbox" name="checkboxRazones" value="Mayor Seguridad Personal"> Mayor Seguridad Personal <br>
                                    <input type="checkbox" name="checkboxRazones" value="Tenia Parientes o amigos"> Tenia Parientes o amigos <br>
                                    <input type="checkbox" name="checkboxRazones" value="Acceso a Ayudas de Gobierno"> Acceso a Ayudas de Gobierno <br> 
                                    <input type="checkbox" name="checkboxRazones" value="Mayores Posibilidades de Trabajo"> Mayores Posibilidades de Trabajo <br>                                
                                    <input type="checkbox" name="checkboxRazones" value="Fueron Reubicados en esta Ciduad"> Fueron Reubicados en esta Ciduad <br>
                                    <input type="checkbox" name="checkboxRazones" value="Cercania al lugar de residencia"> Cercania al lugar de residencia <br>
                                    <input type="checkbox" name="checkboxRazones" value="Por sugerencia de un servidor publico"> Por sugerencia de un servidor publico <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">La familia solicito retorno al lugar de donde fue desplazado:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="selectEstabilizacion" name="cboRetorno" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Su familia esta actualmente o estuvo en retorno:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="selectEstabilizacion" name="cboEstuEstaRetorno" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">En cuanto a residencia Actualmente el hogar desearia:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="selectDesearia" name="cboDesearia" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Establecerse</option>
                                            <option value="No">Residir</option>
                                            <option value="Si">Reubicarse</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Donde quiere reubicarse o retornar:</td>
                                <td class="left">
                                <div class="col-md-7">
                                <input id="dondeRetornar" type="text" name="txtDondeRetornar" required class="form-control" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Zona Retorno:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="zonaRetorno" name="cboZonaRetorno" required class="form-control">
                                        <option value="">[...]</option>
                                        <option value="Rural">Rural</option>
                                        <option value="Urbana">Urbana</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">¿Por qué Razones el hogar quiere reubicarse?</td>
                                <td class="left">
                                <div class="col-md-7" style="text-align: left;">
                                    <input type="checkbox" name="checkboxRazonesReu" value="Motivo Familiar"> Motivo Familiar <br>
                                    <input type="checkbox" name="checkboxRazonesReu" value="La ciudad es insegura"> La ciudad es insegura <br>
                                    <input type="checkbox" name="checkboxRazonesReu" value="Se siente Discriminado"> Se siente Discriminado <br>
                                    <input type="checkbox" name="checkboxRazonesReu" value="Prefiere donde vivia antes"> Prefiere donde vivia antes <br>
                                    <input type="checkbox" name="checkboxRazonesReu" value="No ha recibido ayuda estatal"> No ha recibido ayuda estatal <br>
                                    <input type="checkbox" name="checkboxRazonesReu" value="Por oportunidades de trabajo"> Por oportunidades de trabajo   <br>                               
                                    <input type="checkbox" name="checkboxRazonesReu" value="No hay oportunidades de trabajo"> No hay oportunidades de trabajo <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">¿Por qué Razones el hogar no desea retornar?</td>
                                <td class="left">
                                 <div class="col-md-8" style="text-align: left;">
                                    <input type="checkbox" name="checkboxRazonesNoRetor" value="Logro Estabilizarse"> Logro Estabilizarse <br>
                                    <input type="checkbox" name="checkboxRazonesNoRetor" value="No tiene a donde llegar"> No tiene a donde llegar <br>
                                    <input type="checkbox" name="checkboxRazonesNoRetor" value="No hay oportunidades de trabajo"> No hay oportunidades de trabajo <br>
                                    <input type="checkbox" name="checkboxRazonesNoRetor" value="Se mantiene las condiciones que causaron el desplazamiento"> Se mantiene las condiciones que causaron el desplazamiento <br>
                                    <input type="checkbox" name="checkboxRazonesNoRetor" value="Son malas las condicines de vida (servicios, salud, educacion)"> Son malas las condicines de vida (servicios, salud, educacion) <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">El hogar dejo bienes raices abandonadas:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="selectEstabilizacion" name="cboBienesAbandonadas" required class="form-control">
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algunos le fueron despojados:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="selectEstabilizacion" name="cboDespojados" required class="form-control"> 
                                            <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Solicito esquema de proteccion de bienes:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="selectEstabilizacion" name="cboProteccion" required class="form-control">
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