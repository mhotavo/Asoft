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
                                            <option value="">[...]</option>
                                            <option value="Casa">Casa</option>
                                            <option value="Rancho">Rancho</option>
                                            <option value="Habitacion">Habitacion</option>                                            
                                            <option value="Albergue">Albergue</option>
                                            <option value="Apartamento">Apartamento</option>
                                            <option value="Refugio Natural(Calle)">Refugio Natural(Calle)</option>
                                            <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Tenencia:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="tenencia" name="cboTenenciaD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Propia">Propia</option>
                                            <option value="Arriendo">Arriendo</option>
                                            <option value="Invacion">Invacion</option>
                                            <option value="De un Amigo">De un Amigo</option>                                            
                                            <option value="De un Familiar">De un Familiar</option>
                                            <option value="En Asufructo">En Asufructo</option>
                                            <option value="Albergue Temporal">Albergue Temporal</option>
                                            <option value="Ocupada de Hecho">Otra</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Tipo de Contrato:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="tipoContra" name="cboTipoContraD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Ninguno">Ninguno</option>
                                            <option value="Contrato Verbal">Contrato Verbal</option>
                                            <option value="Contrato Escrito">Contrato Escrito</option>
                                            <option value="Escritura Registrada">Escritura Registrada</option>                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Zona Vivienda:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="zonaVivienda" name="cboZonaViviendaD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Rural">Rural</option>
                                            <option value="Urbana">Urbana</option>                                                       
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Esta zona ha sido considerada en Alto Riesgo:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="zonaAltoR" name="cboZonaAltoRD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Paredes:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="paredes" name="cboParedesD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Bloque">Bloque</option>
                                            <option value="Piedra">Piedra</option>
                                            <option value="Carton">Carton</option>
                                            <option value="Madera">Madera</option>
                                            <option value="Ladrillo">Ladrillo</option>
                                            <option value="Bahareque">Bahareque</option>
                                            <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Piso:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="piso" name="cboPisoD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Arena">Arena</option>
                                            <option value="Madera">Madera</option>
                                            <option value="Baldosa">Baldosa</option>
                                            <option value="Cemento">Cemento</option>
                                            <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Techo:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="techo" name="cboTechoD" required class="form-control">
                                             <option value="">[...]</option>                                            
                                            <option value="Carton">Carton</option>
                                            <option value="Plastico">Plastico</option>
                                            <option value="Teja de Zinc">Teja de Zinc</option>
                                            <option value="Teja de Eternit(Asbesto)">Teja de Eternit(Asbesto)</option>
                                            <option value="Plancha de Cemento">Plancha de Cemento</option>
                                            <option value="Otro">Otro</option>                                                               
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Acueducto:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="acueducto" name="cboAcueductoD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Telefono:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="telefono" name="cboTelefonoD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Energia Electrica:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="eElectrica" name="cboEElectricaD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Alcantarillado:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="alcantarillado" name="cboAlcantarilladoD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio de Gas Domiciliario:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <select id="gasDomiciliario" name="cboGasDomiciliarioD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Servicio Recoleccion de Basuras:</td>
                                <td class="left">
                                <div class="col-md-7">
                                     <select id="reBasuras" name="cboReBasurasD" required class="form-control">
                                             <option value="">[...]</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
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
                                        <option value="">[...]</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
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