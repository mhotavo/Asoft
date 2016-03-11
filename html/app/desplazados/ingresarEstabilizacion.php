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
                                <td  class="right" width="45%">Razones para elegir este lugar:</td>
                                <td  class="left" width="55%">
                                <div class="col-md-7" style="text-align: left;">
                                    <input type="radio" name="Razones" value="PorLaVivienda"> Por la vivienda <br>
                                    <input type="radio" name="Razones" value="AccesibilidadSalud"> Accesibilidad a salud <br>
                                    <input type="radio" name="Razones" value="MayorSeguridadPersonal"> Mayor Seguridad Personal <br>
                                    <input type="radio" name="Razones" value="TeniaParientesAmigos"> Tenia Parientes o amigos <br>
                                    <input type="radio" name="Razones" value="AyudasGobierno"> Acceso a Ayudas de Gobierno <br> 
                                    <input type="radio" name="Razones" value="PosibilidadesTrabajo"> Mayores Posibilidades de Trabajo <br>                                
                                    <input type="radio" name="Razones" value="FueronReubicados"> Fueron Reubicados en esta Ciduad <br>
                                    <input type="radio" name="Razones" value="CercaniaResidencia"> Cercania al lugar de residencia <br>
                                    <input type="radio" name="Razones" value="SugerenciaServidorSublico"> Por sugerencia de un servidor publico <br>
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
                                    <input type="radio" name="RazonesReu" value="MotivoFamiliar"> Motivo Familiar <br>
                                    <input type="radio" name="RazonesReu" value="CiudadInsegura"> La ciudad es insegura <br>
                                    <input type="radio" name="RazonesReu" value="Discriminado"> Se siente Discriminado <br>
                                    <input type="radio" name="RazonesReu" value="PrefiereDondeViviaAntes"> Prefiere donde vivia antes <br>
                                    <input type="radio" name="RazonesReu" value="NoAyudaEstatal"> No ha recibido ayuda estatal <br>
                                    <input type="radio" name="RazonesReu" value="OportunidadesTrabajo"> Por oportunidades de trabajo   <br>                               
                                    <input type="radio" name="RazonesReu" value="NoHayOportunidadesTrabajo"> No hay oportunidades de trabajo <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">¿Por qué Razones el hogar no desea retornar?</td>
                                <td class="left">
                                 <div class="col-md-8" style="text-align: left;">
                                    <input type="radio" name="RazonesNoRetor" value="LogroEstabilizarse"> Logro Estabilizarse <br>
                                    <input type="radio" name="RazonesNoRetor" value="NoTieneDondeLlegar"> No tiene a donde llegar <br>
                                    <input type="radio" name="RazonesNoRetor" value="OportunidadesTrabajo"> No hay oportunidades de trabajo <br>
                                    <input type="radio" name="RazonesNoRetor" value="RazonesCausaronDesplazamiento"> Se mantiene las condiciones que causaron el desplazamiento <br>
                                    <input type="radio" name="RazonesNoRetor" value="MalasCondicionesDeVida"> Son malas las condicines de vida (servicios, salud, educacion) <br>
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