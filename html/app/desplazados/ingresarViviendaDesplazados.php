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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td>Actualmente la vivienda que habita es:</td>
                                <td>
                                    <select id="actualVivienda" name="cboActualViviendaD">
                                            <option value=""></option>
                                            <option value="Casa">Casa</option>
                                            <option value="Rancho">Rancho</option>
                                            <option value="Habitacion">Habitacion</option>                                            
                                            <option value="Albergue">Albergue</option>
                                            <option value="Apartamento">Apartamento</option>
                                            <option value="Refugio Natural(Calle)">Refugio Natural(Calle)</option>
                                            <option value="Otro">Otro</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tenencia:</td>
                                <td>
                                    <select id="tenencia" name="cboTenenciaD">
                                             <option value=""></option>
                                            <option value="Propia">Propia</option>
                                            <option value="Arriendo">Arriendo</option>
                                            <option value="Invacion">Invacion</option>
                                            <option value="De un Amigo">De un Amigo</option>                                            
                                            <option value="De un Familiar">De un Familiar</option>
                                            <option value="En Asufructo">En Asufructo</option>
                                            <option value="Albergue Temporal">Albergue Temporal</option>
                                            <option value="Ocupada de Hecho">Otra</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tipo de Contrato:</td>
                                <td>
                                    <select id="tipoContra" name="cboTipoContraD">
                                             <option value=""></option>
                                            <option value="Ninguno">Ninguno</option>
                                            <option value="Contrato Verbal">Contrato Verbal</option>
                                            <option value="Contrato Escrito">Contrato Escrito</option>
                                            <option value="Escritura Registrada">Escritura Registrada</option>                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Zona Vivienda:</td>
                                <td>
                                    <select id="zonaVivienda" name="cboZonaViviendaD">
                                             <option value=""></option>
                                            <option value="Rural">Rural</option>
                                            <option value="Urbana">Urbana</option>                                                       
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Esta zona ha sido considerada en Alto Riesgo:</td>
                                <td>
                                    <select id="zonaAltoR" name="cboZonaAltoRD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Paredes:</td>
                                <td>
                                    <select id="paredes" name="cboParedesD">
                                             <option value=""></option>
                                            <option value="Bloque">Bloque</option>
                                            <option value="Piedra">Piedra</option>
                                            <option value="Carton">Carton</option>
                                            <option value="Madera">Madera</option>
                                            <option value="Ladrillo">Ladrillo</option>
                                            <option value="Bahareque">Bahareque</option>
                                            <option value="Otro">Otro</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Piso:</td>
                                <td>
                                    <select id="piso" name="cboPisoD">
                                             <option value=""></option>
                                            <option value="Arena">Arena</option>
                                            <option value="Madera">Madera</option>
                                            <option value="Baldosa">Baldosa</option>
                                            <option value="Cemento">Cemento</option>
                                            <option value="Otro">Otro</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Techo:</td>
                                <td>
                                    <select id="techo" name="cboTechoD">
                                             <option value=""></option>                                            
                                            <option value="Carton">Carton</option>
                                            <option value="Plastico">Plastico</option>
                                            <option value="Teja de Zinc">Teja de Zinc</option>
                                            <option value="Teja de Eternit(Asbesto)">Teja de Eternit(Asbesto)</option>
                                            <option value="Plancha de Cemento">Plancha de Cemento</option>
                                            <option value="Otro">Otro</option>                                                               
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Servicio de Acueducto:</td>
                                <td>
                                    <select id="acueducto" name="cboAcueductoD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Servicio de Telefono:</td>
                                <td>
                                    <select id="telefono" name="cboTelefonoD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Servicio de Energia Electrica:</td>
                                <td>
                                    <select id="eElectrica" name="cboEElectricaD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Servicio de Alcantarillado:</td>
                                <td>
                                    <select id="alcantarillado" name="cboAlcantarilladoD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Servicio de Gas Domiciliario:</td>
                                <td>
                                    <select id="gasDomiciliario" name="cboGasDomiciliarioD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Servicio Recoleccion de Basuras:</td>
                                <td>
                                     <select id="reBasuras" name="cboReBasurasD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>No de Habitaciones para dormir que tenia Anteriormente:</td>
                                <td><input type="text" id="nHabiAnte" name="txtNHabiAnteD" size="2"></td>
                            </tr>
                            <tr>
                                <td>No de Habitaciones para dormir que cuenta Actualmente:</td>
                                <td><input type="text" id="nHabiActu" name="txtNHAbiActuD" size="2"></td>
                            </tr>
                            <tr>
                                <td>Cuantas Familias comparten la casa donde habita el hogar Actualmente: </td>
                                <td><input type="text" id="nFamilias" name="txtNFamiliasD" size="2"></td>
                            </tr>
                            <tr>
                                <td>Ha Recibido subsidio para comprar o mejoramiento de vivienda:</td>
                                <td>
                                    <select id="subsVivienda" name="cboSubsViviendaD">
                                        <option value=""></option>
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