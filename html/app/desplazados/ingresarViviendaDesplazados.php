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
                    <h1> Agregar Vivienda</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=vivienda&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">Actualmente la vivienda que habita es:</td>
                                <td class="left" width="55%">
                                <div class="col-md-7">
                                    <select id="actualVivienda" name="cboActualViviendaD" required class="form-control">
                                            <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ACTUAL_VIVIENDA']=='Casa') ?  "selected": null; ?> value="Casa">Casa</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ACTUAL_VIVIENDA']=='Rancho') ?  "selected": null; ?> value="Rancho">Rancho</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ACTUAL_VIVIENDA']=='Habitacion') ?  "selected": null; ?> value="Habitacion">Habitacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ACTUAL_VIVIENDA']=='Albergue') ?  "selected": null; ?> value="Albergue">Albergue</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ACTUAL_VIVIENDA']=='Apartamento') ?  "selected": null; ?> value="Apartamento">Apartamento</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ACTUAL_VIVIENDA']=='RefugioNatural(Calle)') ?  "selected": null; ?> value="RefugioNatural(Calle)">Refugio Natural(Calle)</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ACTUAL_VIVIENDA']=='Otro') ?  "selected": null; ?> value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Tenencia:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="tenencia" name="cboTenenciaD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TENENCIA']=='Propia') ?  "selected": null; ?> value="Propia">Propia</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TENENCIA']=='Arriendo') ?  "selected": null; ?> value="Arriendo">Arriendo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TENENCIA']=='Invacion') ?  "selected": null; ?> value="Invacion">Invacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TENENCIA']=='DeUnAmigo') ?  "selected": null; ?> value="DeUnAmigo">De un Amigo</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TENENCIA']=='DeUnFamiliar') ?  "selected": null; ?> value="DeUnFamiliar">De un Familiar</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TENENCIA']=='EnAsufructo') ?  "selected": null; ?> value="EnAsufructo">En Asufructo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TENENCIA']=='AlbergueTemporal') ?  "selected": null; ?> value="AlbergueTemporal">Albergue Temporal</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TENENCIA']=='OcupadaDeHecho') ?  "selected": null; ?> value="OcupadaDeHecho">Otra</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Tipo de Contrato:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="tipoContra" name="cboTipoContraD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TIPO_CONTRATO']=='Ninguno') ?  "selected": null; ?> value="Ninguno">Ninguno</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TIPO_CONTRATO']=='ContratoVerbal') ?  "selected": null; ?> value="ContratoVerbal">Contrato Verbal</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TIPO_CONTRATO']=='ContratoEscrito') ?  "selected": null; ?> value="ContratoEscrito">Contrato Escrito</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TIPO_CONTRATO']=='EscrituraRegistrada') ?  "selected": null; ?> value="EscrituraRegistrada">Escritura Registrada</option>                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Zona Vivienda:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="zonaVivienda" name="cboZonaViviendaD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ZONA_VIVIENDA']=='Rural') ?  "selected": null; ?> value="Rural">Rural</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ZONA_VIVIENDA']=='Urbana') ?  "selected": null; ?> value="Urbana">Urbana</option>                                                       
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Esta zona ha sido considerada en Alto Riesgo:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="zonaAltoR" name="cboZonaAltoRD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ZONA_ALTORIESGO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['ZONA_ALTORIESGO']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Paredes:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="paredes" name="cboParedesD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PAREDES']=='Bloque') ?  "selected": null; ?> value="Bloque">Bloque</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PAREDES']=='Piedra') ?  "selected": null; ?> value="Piedra">Piedra</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PAREDES']=='Carton') ?  "selected": null; ?> value="Carton">Carton</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PAREDES']=='Madera') ?  "selected": null; ?> value="Madera">Madera</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PAREDES']=='Ladrillo') ?  "selected": null; ?> value="Ladrillo">Ladrillo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PAREDES']=='Bahareque') ?  "selected": null; ?> value="Bahareque">Bahareque</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PAREDES']=='Otro') ?  "selected": null; ?> value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Piso:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="piso" name="cboPisoD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PISO']=='Arena') ?  "selected": null; ?> value="Arena">Arena</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PISO']=='Madera') ?  "selected": null; ?> value="Madera">Madera</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PISO']=='Baldosa') ?  "selected": null; ?> value="Baldosa">Baldosa</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PISO']=='Cemento') ?  "selected": null; ?> value="Cemento">Cemento</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['PISO']=='Otro') ?  "selected": null; ?> value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Techo:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="techo" name="cboTechoD" required class="form-control">
                                             <option  value="">[...]</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TECHO']=='Carton') ?  "selected": null; ?> value="Carton">Carton</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TECHO']=='Plastico') ?  "selected": null; ?> value="Plastico">Plastico</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TECHO']=='TejaZinc') ?  "selected": null; ?> value="TejaZinc">Teja de Zinc</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TECHO']=='TejaEternit') ?  "selected": null; ?> value="TejaEternit">Teja de Eternit(Asbesto)</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TECHO']=='PlanchaCemento') ?  "selected": null; ?> value="PlanchaCemento">Plancha de Cemento</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['TECHO']=='Otro') ?  "selected": null; ?> value="Otro">Otro</option>                                                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Acueducto:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="acueducto" name="cboAcueductoD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['S_ACUEDUCTO']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['S_ACUEDUCTO']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Telefono:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="telefono" name="cboTelefonoD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Energia Electrica:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="eElectrica" name="cboEElectricaD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Alcantarillado:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="alcantarillado" name="cboAlcantarilladoD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Gas Domiciliario:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="gasDomiciliario" name="cboGasDomiciliarioD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio Recoleccion de Basuras:</td>
                                <td class="left">
                                <div class="col-md-7">
                                     <select id="reBasuras" name="cboReBasurasD" required class="form-control">
                                             <option  value="">[...]</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">N° de Habitaciones para dormir que tenia Anteriormente:</td>
                                <td class="left">
                                <div class="col-md-7">
                                <input type="number" id="nHabiAnte" name="txtNHabiAnteD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">N° de Habitaciones para dormir que cuenta Actualmente:</td>
                                <td class="left">
                                <div class="col-md-7">
                                <input type="number" id="nHabiActu" name="txtNHAbiActuD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Cuantas Familias comparten la casa donde habita el hogar Actualmente: </td>
                                <td class="left">
                                <div class="col-md-7">
                                <input type="number" id="nFamilias" name="txtNFamiliasD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha Recibido subsidio para comprar o mejoramiento de vivienda:</td>
                                <td class="left">
                                <div class="col-md-7">                           

                                    <select id="subsVivienda" name="cboSubsViviendaD" required class="form-control">
                                        <option  value="">[...]</option>
                                        <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="Si">Si</option>
                                        <option <?php echo ( isset($_GET['id']) and $_viviendas[$_GET['id']]['']=='') ?  "selected": null; ?> value="No">No</option>
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