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
                    <h1> Agregar Economia Familiar</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=economia&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">Ingresos Mensuales en la Familia:</td>
                                <td class="left" width="55%">
                                <div class="col-md-7">
                                    <select id="ingreMensuales" name="cboIngreMensualesD" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['INGRESOS_MENSUALES']=='UnSalarioMinimo') ?  "selected": null; ?> value="UnSalarioMinimo">Un Salario Minimo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['INGRESOS_MENSUALES']=='InferiorSalarioMinimo') ?  "selected": null; ?> value="InferiorSalarioMinimo">Inferior a Un Salario Minimo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['INGRESOS_MENSUALES']=='UnoaDosSalariosMinimos') ?  "selected": null; ?> value="UnoaDosSalariosMinimos">Entre uno(1) y dos(2) Salarios Minimos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['INGRESOS_MENSUALES']=='DosaTresSalariosMinimos') ?  "selected": null; ?> value="DosaTresSalariosMinimos">Entre dos(2) y tres(3) Salarios Minimos</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['INGRESOS_MENSUALES']=='MasTresSalariosMinimos') ?  "selected": null; ?> value="MasTresSalariosMinimos">Mas de tres(3) Salarios Minimos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['INGRESOS_MENSUALES']=='NoDevengan') ?  "selected": null; ?> value="NoDevengan">No Devengan</option>                                           
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Gastos Mensuales en la Familia:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="gastosMensuales" name="cboGastosMensualesD" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['GASTOS_MENSUALES']=='UnSalarioMinimo') ?  "selected": null; ?> value="UnSalarioMinimo">Un Salario Minimo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['GASTOS_MENSUALES']=='InferiorSalarioMinimo') ?  "selected": null; ?> value="InferiorSalarioMinimo">Inferior a Un Salario Minimo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['GASTOS_MENSUALES']=='UnoaDosSalariosMinimos') ?  "selected": null; ?> value="UnoaDosSalariosMinimos">Entre uno(1) y dos(2) Salarios Minimos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['GASTOS_MENSUALES']=='DosaTresSalariosMinimos') ?  "selected": null; ?> value="DosaTresSalariosMinimos">Entre dos(2) y tres(3) Salarios Minimos</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['GASTOS_MENSUALES']=='MasTresSalariosMinimos') ?  "selected": null; ?> value="MasTresSalariosMinimos">Mas de tres(3) Salarios Minimos</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">En Orden de Importancia, <br> clasifique los gastos en los cuales el hogar invierte sus ingresos:</td>
                                <td class="left">
                                <div class="col-md-4" style="">
                                    <select id="ordenGastos" name="cboOrdenGastosD" required class="form-control">
                                            <option  value="">  Gasto 1  </option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['1_GASTO']=='Arriendo') ?  "selected": null; ?> value="Arriendo">Arriendo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['1_GASTO']=='Transporte') ?  "selected": null; ?> value="Transporte">Transporte</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['1_GASTO']=='ServiciosPublicos') ?  "selected": null; ?> value="ServiciosPublicos">Servicios Publicos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['1_GASTO']=='Alimentacion') ?  "selected": null; ?> value="Alimentacion">Alimentacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['1_GASTO']=='Educacion') ?  "selected": null; ?> value="Educacion">Educacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['1_GASTO']=='Salud') ?  "selected": null; ?> value="Salud">Salud</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['1_GASTO']=='Otro') ?  "selected": null; ?> value="Otro">Otro</option>
                                    </select> 

                                      <select id="ordenGastos" name="cboOrdenGastos2D" required class="form-control">
                                            <option  value="">  Gasto 2  </option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['2_GASTO']=='Arriendo') ?  "selected": null; ?> value="Arriendo">Arriendo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['2_GASTO']=='Transporte') ?  "selected": null; ?> value="Transporte">Transporte</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['2_GASTO']=='ServiciosPublicos') ?  "selected": null; ?> value="ServiciosPublicos">Servicios Publicos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['2_GASTO']=='Alimentacion') ?  "selected": null; ?> value="Alimentacion">Alimentacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['2_GASTO']=='Educacion') ?  "selected": null; ?> value="Educacion">Educacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['2_GASTO']=='Salud') ?  "selected": null; ?> value="Salud">Salud</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['2_GASTO']=='Otro') ?  "selected": null; ?> value="Otro">Otro</option>                                    </select>
                                    <select id="ordenGastos" name="cboOrdenGastos3D" required class="form-control">
                                            <option  value="">  Gasto 3  </option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['3_GASTO']=='Arriendo') ?  "selected": null; ?> value="Arriendo">Arriendo</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['3_GASTO']=='Transporte') ?  "selected": null; ?> value="Transporte">Transporte</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['3_GASTO']=='ServiciosPublicos') ?  "selected": null; ?> value="ServiciosPublicos">Servicios Publicos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['3_GASTO']=='Alimentacion') ?  "selected": null; ?> value="Alimentacion">Alimentacion</option>                                            
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['3_GASTO']=='Educacion') ?  "selected": null; ?> value="Educacion">Educacion</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['3_GASTO']=='Salud') ?  "selected": null; ?> value="Salud">Salud</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['3_GASTO']=='Otro') ?  "selected": null; ?> value="Otro">Otro</option>                                    </select>
                                </div>
                                </td>
                            </tr>
         
                            <tr>
                                <td class="right">Cuantas comidas consumen en el hogar en promedio al dia:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="comidasDia" name="cboComidasDiaD" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NO_COMIDAS_DIA']=='1') ?  "selected": null; ?> value="1">Una(1)</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NO_COMIDAS_DIA']=='2') ?  "selected": null; ?> value="2">Dos(2)</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NO_COMIDAS_DIA']=='+3') ?  "selected": null; ?> value="+3">Tres(3) o mas</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Cuales son los alimentos que consumen las personas del hogar:</td>
                                <td class="left">
                                <div class="col-md-7">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Adultos:</td>
                                 <td class="left">
                                <div class="col-md-4">
                                    <select id="alimConsumen" name="cboAlimConsumenAdulD" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Frutas') ?  "selected": null; ?> value="Frutas">Frutas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Carnes') ?  "selected": null; ?> value="Carnes">Carnes</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Granos') ?  "selected": null; ?> value="Granos">Granos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Harinas') ?  "selected": null; ?> value="Harinas">Harinas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Verduras') ?  "selected": null; ?> value="Verduras">Verduras</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Tuberculos') ?  "selected": null; ?> value="Tuberculos">Tuberculos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Bienestarina') ?  "selected": null; ?> value="Bienestarina">Bienestarina</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Sopas,Caldos,Cremas') ?  "selected": null; ?> value="Sopas,Caldos,Cremas">Sopas, Caldos, Cremas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='ComplementosAlimenticios') ?  "selected": null; ?> value="ComplementosAlimenticios">Complementos Alimenticios</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ADULTOS']=='Otros') ?  "selected": null; ?> value="Otros">Otros</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Niños: </td>
                                 <td class="left">
                                <div class="col-md-4">
                                    <select id="alimConsumen" name="cboAlimConsumenNinosD" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Frutas') ?  "selected": null; ?> value="Frutas">Frutas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Carnes') ?  "selected": null; ?> value="Carnes">Carnes</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Granos') ?  "selected": null; ?> value="Granos">Granos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Harinas') ?  "selected": null; ?> value="Harinas">Harinas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Verduras') ?  "selected": null; ?> value="Verduras">Verduras</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Tuberculos') ?  "selected": null; ?> value="Tuberculos">Tuberculos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Bienestarina') ?  "selected": null; ?> value="Bienestarina">Bienestarina</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Sopas,Caldos,Cremas') ?  "selected": null; ?> value="Sopas,Caldos,Cremas">Sopas, Caldos, Cremas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='ComplementosAlimenticios') ?  "selected": null; ?> value="ComplementosAlimenticios">Complementos Alimenticios</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['NINOS']=='Otros') ?  "selected": null; ?> value="Otros">Otros</option>                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Menores de dos(2) años:</td>
                                 <td class="left">
                                <div class="col-md-4">
                                    <select id="alimConsumen" name="cboAlimConsumenMe2D" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Frutas') ?  "selected": null; ?> value="Frutas">Frutas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Carnes') ?  "selected": null; ?> value="Carnes">Carnes</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Granos') ?  "selected": null; ?> value="Granos">Granos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Harinas') ?  "selected": null; ?> value="Harinas">Harinas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Verduras') ?  "selected": null; ?> value="Verduras">Verduras</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Tuberculos') ?  "selected": null; ?> value="Tuberculos">Tuberculos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Bienestarina') ?  "selected": null; ?> value="Bienestarina">Bienestarina</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Sopas,Caldos,Cremas') ?  "selected": null; ?> value="Sopas,Caldos,Cremas">Sopas, Caldos, Cremas</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='ComplementosAlimenticios') ?  "selected": null; ?> value="ComplementosAlimenticios">Complementos Alimenticios</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['MENORES_2ANOS']=='Otros') ?  "selected": null; ?> value="Otros">Otros</option>                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Considera que la alimentacion es acorde con su cultura y costumbres:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="alimAcorde" name="cboAlimAcordeD" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ALIMENTACION_CULTURA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ALIMENTACION_CULTURA']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </selecNo
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Considera que la alimentacion es adecuada:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="alimAdecuada" name="cboAlimAdecuadaD" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ALIMENTACION_ADECUADA']=='Si') ?  "selected": null; ?> value="Si">Si</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['ALIMENTACION_ADECUADA']=='No') ?  "selected": null; ?> value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Fuente 1:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="fuente" name="cboFuente1D" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_1']=='Compran') ?  "selected": null; ?> value="Compran">Compran</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_1']=='Producen') ?  "selected": null; ?> value="Producen">Producen</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_1']=='DonacionesVecinos') ?  "selected": null; ?> value="DonacionesVecinos">Donaciones Vecinos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_1']=='DonacionesFamiliares') ?  "selected": null; ?> value="DonacionesFamiliares">Donaciones Familiares</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_1']=='DonacionesEntidades') ?  "selected": null; ?> value="DonacionesEntidades">Donaciones de Entidades</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_1']=='IntercambioOtrosHogares') ?  "selected": null; ?> value="IntercambioOtrosHogares">Intercambio Otros Hogares</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_1']=='Otros') ?  "selected": null; ?> value="Otros">Otros</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Fuente 2:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="fuente" name="cboFuente2D" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_2']=='Compran') ?  "selected": null; ?> value="Compran">Compran</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_2']=='Producen') ?  "selected": null; ?> value="Producen">Producen</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_2']=='DonacionesVecinos') ?  "selected": null; ?> value="DonacionesVecinos">Donaciones Vecinos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_2']=='DonacionesFamiliares') ?  "selected": null; ?> value="DonacionesFamiliares">Donaciones Familiares</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_2']=='DonacionesEntidades') ?  "selected": null; ?> value="DonacionesEntidades">Donaciones de Entidades</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_2']=='IntercambioOtrosHogares') ?  "selected": null; ?> value="IntercambioOtrosHogares">Intercambio Otros Hogares</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_2']=='Otros') ?  "selected": null; ?> value="Otros">Otros</option>                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Fuente 3:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="fuente" name="cboFuente3D" required class="form-control">
                                            <option value=""></option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_3']=='Compran') ?  "selected": null; ?> value="Compran">Compran</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_3']=='Producen') ?  "selected": null; ?> value="Producen">Producen</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_3']=='DonacionesVecinos') ?  "selected": null; ?> value="DonacionesVecinos">Donaciones Vecinos</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_3']=='DonacionesFamiliares') ?  "selected": null; ?> value="DonacionesFamiliares">Donaciones Familiares</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_3']=='DonacionesEntidades') ?  "selected": null; ?> value="DonacionesEntidades">Donaciones de Entidades</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_3']=='IntercambioOtrosHogares') ?  "selected": null; ?> value="IntercambioOtrosHogares">Intercambio Otros Hogares</option>
                                            <option <?php echo ( isset($_GET['id']) and $_economias[$_GET['id']]['FUENTE_3']=='Otros') ?  "selected": null; ?> value="Otros">Otros</option>                                    </select>
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