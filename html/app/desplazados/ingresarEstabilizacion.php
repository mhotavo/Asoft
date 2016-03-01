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
                                <td>Razones para elegir este lugar:</td>
                                <td>
                                    <a><input type="checkbox" name="checkboxRazones" value="Por la vivienda">Por la vivienda</a>
                                    <a><input type="checkbox" name="checkboxRazones" value="Accesibilidad a salud">Accesibilidad a salud</a>
                                    <a><input type="checkbox" name="checkboxRazones" value="Mayor Seguridad Personal">Mayor Seguridad Personal</a>
                                    <a><input type="checkbox" name="checkboxRazones" value="Tenia Parientes o amigos">Tenia Parientes o amigos</a>
                                    <a><input type="checkbox" name="checkboxRazones" value="Acceso a Ayudas de Gobierno">Acceso a Ayudas de Gobierno</a>
                                    <a><input type="checkbox" name="checkboxRazones" value="Mayores Posibilidades de Trabajo">Mayores Posibilidades de Trabajo</a>                                
                                    <a><input type="checkbox" name="checkboxRazones" value="Fueron Reubicados en esta Ciduad">Fueron Reubicados en esta Ciduad</a>
                                    <a><input type="checkbox" name="checkboxRazones" value="Cercania al lugar de residencia">Cercania al lugar de residencia</a>
                                    <a><input type="checkbox" name="checkboxRazones" value="Por sugerencia de un servidor publico">Por sugerencia de un servidor publico</a>
                                </td>
                            </tr>
                            <tr>
                                <td>La familia solicito retorno al lugar de donde fue desplazado:</td>
                                <td>
                                    <select id="selectEstabilizacion" name="cboRetorno">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Su familia esta actualmente o estuvo en retorno:</td>
                                <td>
                                    <select id="selectEstabilizacion" name="cboEstuEstaRetorno">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>En cuanto a residencia Actualmente el hogar desearia:</td>
                                <td>
                                    <select id="selectDesearia" name="cboDesearia">
                                            <option value=""></option>
                                            <option value="Si">Establecerse</option>
                                            <option value="No">Residir</option>
                                            <option value="Si">Reubicarse</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Donde quiere reubicarse o retornar:</td>
                                <td><input id="dondeRetornar" type="text" name="txtDondeRetornar"></td>
                            </tr>
                            <tr>
                                <td>Zona Retorno:</td>
                                <td>
                                    <select id="zonaRetorno" name="cboZonaRetorno">
                                        <option value=""></option>
                                        <option value="Rural">Rural</option>
                                        <option value="Urbana">Urbana</option> 
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Porque Razones el hogar quiere reubicarse:</td>
                                <td>
                                    <a><input type="checkbox" name="checkboxRazonesReu" value="Motivo Familiar">Motivo Familiar</a>
                                    <a><input type="checkbox" name="checkboxRazonesReu" value="La ciudad es insegura">La ciudad es insegura</a>
                                    <a><input type="checkbox" name="checkboxRazonesReu" value="Se siente Discriminado">Se siente Discriminado</a>
                                    <a><input type="checkbox" name="checkboxRazonesReu" value="Prefiere donde vivia antes">Prefiere donde vivia antes</a>
                                    <a><input type="checkbox" name="checkboxRazonesReu" value="No ha recibido ayuda estatal">No ha recibido ayuda estatal</a>
                                    <a><input type="checkbox" name="checkboxRazonesReu" value="Por oportunidades de trabajo">Por oportunidades de trabajo</a>                                 
                                    <a><input type="checkbox" name="checkboxRazonesReu" value="No hay oportunidades de trabajo">No hay oportunidades de trabajo</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Porque Razones el hogar no desea retornar:</td>
                                <td>
                                    <a><input type="checkbox" name="checkboxRazonesNoRetor" value="Logro Estabilizarse">Logro Estabilizarse</a>
                                    <a><input type="checkbox" name="checkboxRazonesNoRetor" value="No tiene a donde llegar">No tiene a donde llegar</a>
                                    <a><input type="checkbox" name="checkboxRazonesNoRetor" value="No hay oportunidades de trabajo">No hay oportunidades de trabajo</a>
                                    <a><input type="checkbox" name="checkboxRazonesNoRetor" value="Se mantiene las condiciones que causaron el desplazamiento">Se mantiene las condiciones que causaron el desplazamiento</a>
                                    <a><input type="checkbox" name="checkboxRazonesNoRetor" value="Son malas las condicines de vida (servicios, salud, educacion)">Son malas las condicines de vida (servicios, salud, educacion)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>El hogar dejo bienes raices abandonadas:</td>
                                <td>
                                    <select id="selectEstabilizacion" name="cboBienesAbandonadas">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Algunos le fueron despojados:</td>
                                <td>
                                    <select id="selectEstabilizacion" name="cboDespojados">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Solicito esquema de proteccion de bienes:</td>
                                <td>
                                    <select id="selectEstabilizacion" name="cboProteccion">
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