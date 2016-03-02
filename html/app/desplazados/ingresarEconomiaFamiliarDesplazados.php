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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">Ingresos Mensuales en la Familia:</td>
                                <td class="left" width="55%">
                                <div class="col-md-7">
                                    <select id="ingreMensuales" name="cboIngreMensualesD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Un Salario Minimo">Un Salario Minimo</option>
                                            <option value="Inferior a Un Salario Minimo">Inferior a Un Salario Minimo</option>
                                            <option value="Entre uno(1) y dos(2) Salarios Minimos">Entre uno(1) y dos(2) Salarios Minimos</option>
                                            <option value="Entre dos(2) y tres(3) Salarios Minimos">Entre dos(2) y tres(3) Salarios Minimos</option>                                            
                                            <option value="Mas de tres(3) Salarios Minimos">Mas de tres(3) Salarios Minimos</option>
                                            <option value="No Devengan">No Devengan</option>                                           
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
                                            <option value="Un Salario Minimo">Un Salario Minimo</option>
                                            <option value="Inferior a Un Salario Minimo">Inferior a Un Salario Minimo</option>
                                            <option value="Entre uno(1) y dos(2) Salarios Minimos">Entre uno(1) y dos(2) Salarios Minimos</option>
                                            <option value="Entre dos(2) y tres(3) Salarios Minimos">Entre dos(2) y tres(3) Salarios Minimos</option>                                            
                                            <option value="Mas de tres(3) Salarios Minimos">Mas de tres(3) Salarios Minimos</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">En Orden de Importancia, <br> clasifique los gastos en los cuales el hogar invierte sus ingresos:</td>
                                <td class="left">
                                <div class="col-md-7" style="">
                                    <select id="ordenGastos" name="cboOrdenGastosD" required class="form-control">
                                            <option value="">  Gasto 1  </option>
                                            <option value="Arriendo">Arriendo</option>
                                            <option value="Transporte">Transporte</option>
                                            <option value="Servicios Publicos">Servicios Publicos</option>
                                            <option value="Alimentacion">Alimentacion</option>                                            
                                            <option value="Educacion">Educacion</option>
                                            <option value="Mas de tres(3) Salarios Minimos">Salud</option>
                                            <option value="Mas de tres(3) Salarios Minimos">Otro</option>
                                    </select>
                                      <select id="ordenGastos" name="cboOrdenGastos2D" required class="form-control">
                                            <option value="">  Gasto 2  </option>
                                            <option value="Arriendo">Arriendo</option>
                                            <option value="Transporte">Transporte</option>
                                            <option value="Servicios Publicos">Servicios Publicos</option>
                                            <option value="Alimentacion">Alimentacion</option>                                            
                                            <option value="Educacion">Educacion</option>
                                            <option value="Mas de tres(3) Salarios Minimos">Salud</option>
                                            <option value="Mas de tres(3) Salarios Minimos">Otro</option>
                                    </select>
                                    <select id="ordenGastos" name="cboOrdenGastos3D" required class="form-control">
                                            <option value="">  Gasto 3  </option>
                                            <option value="Arriendo">Arriendo</option>
                                            <option value="Transporte">Transporte</option>
                                            <option value="Servicios Publicos">Servicios Publicos</option>
                                            <option value="Alimentacion">Alimentacion</option>                                            
                                            <option value="Educacion">Educacion</option>
                                            <option value="Mas de tres(3) Salarios Minimos">Salud</option>
                                            <option value="Mas de tres(3) Salarios Minimos">Otro</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
         
                            <tr>
                                <td class="right">Cuantas comidas consumen en el hogar en promedio al dia:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="comidasDia" name="cboComidasDiaD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Una(1)">Una(1)</option>
                                            <option value="Dos (2)">Dos(2)</option>
                                            <option value="Tres (3) o mas">Tres(3) o mas</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Cuales son los alimentos que consumen las personas del hogar:</td>
                                <td class="left">
                                <div class="col-md-7">
                                    <input type="text"  required value="" class="form-control" name="txtNombre" id="txtNombre" >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Adultos:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="alimConsumen" name="cboAlimConsumenAdulD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Frutas">Frutas</option>
                                            <option value="Carnes">Carnes</option>
                                            <option value="Granos">Granos</option>
                                            <option value="Harinas">Harinas</option>
                                            <option value="Verduras">Verduras</option>
                                            <option value="Tuberculos">Tuberculos</option>
                                            <option value="Bienestarina">Bienestarina</option>
                                            <option value="Sopas, Caldos, Cremas">Sopas, Caldos, Cremas</option>
                                            <option value="Complementos Alimenticios">Complementos Alimenticios</option>
                                            <option value="Otros">Otros</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Niños: </td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="alimConsumen" name="cboAlimConsumenNinosD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Frutas">Frutas</option>
                                            <option value="Carnes">Carnes</option>
                                            <option value="Granos">Granos</option>
                                            <option value="Harinas">Harinas</option>
                                            <option value="Verduras">Verduras</option>
                                            <option value="Tuberculos">Tuberculos</option>
                                            <option value="Bienestarina">Bienestarina</option>
                                            <option value="Sopas, Caldos, Cremas">Sopas, Caldos, Cremas</option>
                                            <option value="Complementos Alimenticios">Complementos Alimenticios</option>
                                            <option value="Otros">Otros</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Menores de dos(2) años:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="alimConsumen" name="cboAlimConsumenMe2D" required class="form-control">
                                            <option value=""></option>
                                            <option value="Frutas">Frutas</option>
                                            <option value="Carnes">Carnes</option>
                                            <option value="Granos">Granos</option>
                                            <option value="Harinas">Harinas</option>
                                            <option value="Verduras">Verduras</option>
                                            <option value="Tuberculos">Tuberculos</option>
                                            <option value="Bienestarina">Bienestarina</option>
                                            <option value="Sopas, Caldos, Cremas">Sopas, Caldos, Cremas</option>
                                            <option value="Complementos Alimenticios">Complementos Alimenticios</option>
                                            <option value="Otros">Otros</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Considera que la alimentacion es acorde con su cultura y costumbres:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="alimAcorde" name="cboAlimAcordeD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Considera que la alimentacion es adecuada:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="alimAdecuada" name="cboAlimAdecuadaD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
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
                                            <option value="Si">Compran</option>
                                            <option value="No">Producen</option>
                                            <option value="Si">Donaciones Vecinos</option>
                                            <option value="No">Donaciones Familiares</option>
                                            <option value="No">Donaciones de Entidades</option>
                                            <option value="Si">Intercambio Otros Hogares</option>
                                            <option value="No">Otros</option>
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
                                            <option value="Si">Compran</option>
                                            <option value="No">Producen</option>
                                            <option value="Si">Donaciones Vecinos</option>
                                            <option value="No">Donaciones Familiares</option>
                                            <option value="No">Donaciones de Entidades</option>
                                            <option value="Si">Intercambio Otros Hogares</option>
                                            <option value="No">Otros</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Fuente 3:</td>
                                 <td class="left">
                                <div class="col-md-7">
                                    <select id="fuente" name="cboFuente3D" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Compran</option>
                                            <option value="No">Producen</option>
                                            <option value="Si">Donaciones Vecinos</option>
                                            <option value="No">Donaciones Familiares</option>
                                            <option value="No">Donaciones de Entidades</option>
                                            <option value="Si">Intercambio Otros Hogares</option>
                                            <option value="No">Otros</option>
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