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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=estabilizacion&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td  class="right" width="45%">Razones para elegir este lugar:</td>
                                <td  class="left" width="55%">
                                <div class="col-md-7" style="text-align: left;">
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='PorLaVivienda') ?  "checked": null; ?> name="Razones" required value="PorLaVivienda"> Por la vivienda <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='AccesibilidadSalud') ?  "checked": null; ?> name="Razones" required value="AccesibilidadSalud"> Accesibilidad a salud <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='MayorSeguridadPersonal') ?  "checked": null; ?> name="Razones" required value="MayorSeguridadPersonal"> Mayor Seguridad Personal <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='TeniaParientesAmigos') ?  "checked": null; ?> name="Razones" required value="TeniaParientesAmigos"> Tenia Parientes o amigos <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='AyudasGobierno') ?  "checked": null; ?> name="Razones" required value="AyudasGobierno"> Acceso a Ayudas de Gobierno <br> 
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='PosibilidadesTrabajo') ?  "checked": null; ?> name="Razones" required value="PosibilidadesTrabajo"> Mayores Posibilidades de Trabajo <br>                                
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='FueronReubicados') ?  "checked": null; ?> name="Razones" required value="FueronReubicados"> Fueron Reubicados en esta Ciduad <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='CercaniaResidencia') ?  "checked": null; ?> name="Razones" required value="CercaniaResidencia"> Cercania al lugar de residencia <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_LUGAR']=='SugerenciaServidorSublico') ?  "checked": null; ?> name="Razones" required value="SugerenciaServidorSublico"> Por sugerencia de un servidor publico <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">La familia solicito retorno al lugar de donde fue desplazado:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="selectEstabilizacion" name="cboRetorno" required class="form-control">
                                            <opti?> value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['FAMILIA_RETORNO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['FAMILIA_RETORNO']=='No') ?  "selected": null; ?> value="No">No</option>
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
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['ESTUVOESTA_RETORNO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['ESTUVOESTA_RETORNO']=='No') ?  "selected": null; ?> value="No">No</option>
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
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RESIDENCIA_DESEARIA']=='Establecerse') ?  "selected": null; ?> value="Establecerse">Establecerse</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RESIDENCIA_DESEARIA']=='Residir') ?  "selected": null; ?> value="Residir">Residir</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RESIDENCIA_DESEARIA']=='Reubicarse') ?  "selected": null; ?> value="Reubicarse">Reubicarse</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Donde quiere reubicarse o retornar:</td>
                                <td class="left">
                                <div class="col-md-7">
                                <input id="dondeRetornar" type="text" value="<?php echo isset($_GET['id']) ? $_estabilizaciones[$_GET['id']]['DONDEQUIERE_REUBICARSE'] : null   ?>" name="txtDondeRetornar" required class="form-control" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Zona Retorno:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="zonaRetorno" name="cboZonaRetorno" required class="form-control">
                                        <option value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['ZONA_RETORNO']=='Rural') ?  "selected": null; ?> value="Rural">Rural</option>
                                        <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['ZONA_RETORNO']=='Urbana') ?  "selected": null; ?> value="Urbana">Urbana</option> 
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">¿Por qué Razones el hogar quiere reubicarse?</td>
                                <td class="left">
                                <div class="col-md-7" style="text-align: left;">
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_REUBICARSE']=='MotivoFamiliar') ?  "checked": null; ?> name="RazonesReu" required value="MotivoFamiliar"> Motivo Familiar <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_REUBICARSE']=='CiudadInsegura') ?  "checked": null; ?> name="RazonesReu" required value="CiudadInsegura"> La ciudad es insegura <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_REUBICARSE']=='Discriminado') ?  "checked": null; ?> name="RazonesReu" required value="Discriminado"> Se siente Discriminado <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_REUBICARSE']=='PrefiereDondeViviaAntes') ?  "checked": null; ?> name="RazonesReu" required value="PrefiereDondeViviaAntes"> Prefiere donde vivia antes <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_REUBICARSE']=='NoAyudaEstatal') ?  "checked": null; ?> name="RazonesReu" required value="NoAyudaEstatal"> No ha recibido ayuda estatal <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_REUBICARSE']=='OportunidadesTrabajo') ?  "checked": null; ?> name="RazonesReu" required value="OportunidadesTrabajo"> Por oportunidades de trabajo   <br>                               
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_REUBICARSE']=='NoHayOportunidadesTrabajo') ?  "checked": null; ?> name="RazonesReu" required value="NoHayOportunidadesTrabajo"> No hay oportunidades de trabajo <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">¿Por qué Razones el hogar no desea retornar?</td>
                                <td class="left">
                                 <div class="col-md-8" style="text-align: left;">
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_RETORNAR']=='LogroEstabilizarse') ?  "checked": null; ?> name="RazonesNoRetor" required value="LogroEstabilizarse"> Logro Estabilizarse <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_RETORNAR']=='NoTieneDondeLlegar') ?  "checked": null; ?> name="RazonesNoRetor" required value="NoTieneDondeLlegar"> No tiene a donde llegar <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_RETORNAR']=='OportunidadesTrabajo') ?  "checked": null; ?> name="RazonesNoRetor" required value="OportunidadesTrabajo"> No hay oportunidades de trabajo <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_RETORNAR']=='RazonesCausaronDesplazamiento') ?  "checked": null; ?> name="RazonesNoRetor" required value="RazonesCausaronDesplazamiento"> Se mantiene las condiciones que causaron el desplazamiento <br>
                                    <input type="radio" <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAZONES_RETORNAR']=='MalasCondicionesDeVida') ?  "checked": null; ?> name="RazonesNoRetor" required value="MalasCondicionesDeVida"> Son malas las condicines de vida (servicios, salud, educacion) <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">El hogar dejo bienes raices abandonadas:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="selectEstabilizacion" name="cboBienesAbandonadas" required class="form-control">
                                            <option value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAICES_ABANDONADAS']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['RAICES_ABANDONADAS']=='No') ?  "selected": null; ?> value="No">No</option>
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
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['ALGUNOS_DESPOJADOS']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['ALGUNOS_DESPOJADOS']=='No') ?  "selected": null; ?> value="No">No</option>
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
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['SOLICITO_PROTECCION']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_estabilizaciones[$_GET['id']]['SOLICITO_PROTECCION']=='No') ?  "selected": null; ?> value="No">No</option>
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