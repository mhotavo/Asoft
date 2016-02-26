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
                    <h1> Agregar Datos</h1> 
                        <form class="form-horizontal" action="?view=datosdesplazado&mode=edit&id=<?php echo $_GET['id'] ?>" method="POST" enctype="application/x-www-form-urlencoded">                    <table width="100%">
                        <tr>
                            <td class="right">Nombre Completo: </td>
                            <td class="left">
                              <div class="col-md-8">
                                 <input type="text" value="<?php echo $_desplazados[$_GET['id']]['Nombre_Completo'] ?>" class="form-control" name="txtNombre" id="txtNombre" >
                             </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Primer Apellido: </td>
                            <td class="left">
                              <div class="col-md-8">
                                 <input type="text" value="<?php echo $_desplazados[$_GET['id']]['Primer_Apellido'] ?>" class="form-control" name="txtPrimerApellido"  >
                             </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Segundo Apellido: </td>
                            <td class="left">
                              <div class="col-md-8">
                                 <input type="text" value="<?php echo $_desplazados[$_GET['id']]['Segundo_Apellido'] ?>" class="form-control" name="txtSegundoApellido" id="" >
                             </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td class="right">Tipo de Documento: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <select  name="cboTipoDocumentoD" class="form-control">
                                    <option value="">[...]</option>
                                    <option value="CeduladeCiudadania" <?php echo ($_desplazados[$_GET['id']]['Tipo_de_Documento']=='CeduladeCiudadania') ?  "selected": null; ?> >Cedula de Ciudadania</option>
                                    <option value="TarjetadeIdentidad" <?php echo ($_desplazados[$_GET['id']]['Tipo_de_Documento']=='TarjetadeIdentidad') ?  "selected": null; ?>>Tarjeta de Identidad</option>
                                    <option value="LibretaMilitar" <?php echo ($_desplazados[$_GET['id']]['Tipo_de_Documento']=='LibretaMilitar') ?  "selected": null; ?>>Libreta Militar</option>
                                    <option value="RegistroCivil" <?php echo ($_desplazados[$_GET['id']]['Tipo_de_Documento']=='RegistroCivil') ?  "selected": null; ?>>Registro Civil</option>
                                    <option value="TarjetadeIdentidad" <?php echo ($_desplazados[$_GET['id']]['Tipo_de_Documento']=='TarjetadeIdentidad') ?  "selected": null; ?>>Tarjeta de Identidad</option>
                                    <option value="NUIP" <?php echo ($_desplazados[$_GET['id']]['Tipo_de_Documento']=='NUIP') ?  "selected": null; ?>>Numero Unico de Identificacion Personal(NUIP)</option>
                                    <option value="NoTiene" <?php echo ($_desplazados[$_GET['id']]['Tipo_de_Documento']=='NoTiene') ?  "selected": null; ?>>No Tiene</option>
                                </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Fecha de Victimización: </td>
                            <td class="left">
                             <div class="col-md-8"> 
                                <input type="text" class="form-control" name="txtFechaVictimizacionD" value="<?php echo $_desplazados[$_GET['id']]['Fecha_de_Victimizacion']; ?>">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right">Codigo RUPV: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <input type="text" class="form-control"  name="txtCodigoRUPVD" value="<?php echo $_desplazados[$_GET['id']]['Codigo_RUPV']; ?>">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right"> Departamento: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <select id="depa" name="cboDepartamentoD" class="form-control">
                                    <option value="#">IngresarBDdepartamento</option>                               
                                </select>   
                            </div>                             
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Municipio: </td>
                            <td class="left">
                             <div class="col-md-8">
                                 <select id="muni" name="cboMunicipioD" class="form-control">
                                    <option value="#">IngresarBDmunicipio</option>                               
                                 </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Zona: </td>
                            <td class="left">
                             <div class="col-md-8">                                
                                <select id="zona" name="cboZonaD" class="form-control">
                                    <option value="">[...]</option>
                                    <option value="Rural"  <?php echo ($_desplazados[$_GET['id']]['Zona']=='Rural') ?  "selected": null; ?>>Rural</option>
                                    <option value="Urbana"  <?php echo ($_desplazados[$_GET['id']]['Zona']=='Urbana') ?  "selected": null; ?>>Urbana</option> 
                                 </select>
                            </td>
                            </div>
                        </tr>
                        <tr>
                            <td class="right">Localidad: </td>
                            <td class="left">
                             <div class="col-md-8"> 
                                <input type="text" name="txtLocalidadD" class="form-control" value="<?php echo $_desplazados[$_GET['id']]['Localidad']; ?>">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right">Direccion: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <input type="text" name="txtDireccionD" class="form-control" value="<?php echo $_desplazados[$_GET['id']]['Direccion']; ?>">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right">Telefono: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <input type="text" name="txtTelefonoD" class="form-control" value="<?php echo $_desplazados[$_GET['id']]['Telefono']; ?>">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right">Estado Civil: </td>
                            <td class="left">
                             <div class="col-md-8">
                            <select name="estaCivil"  class="form-control">
                                <option value=""></option>
                                <option value="Soltero(a)"  <?php echo ($_desplazados[$_GET['id']]['Estado_Civil']=='Soltero(a)') ?  "selected": null; ?>>Soltero</option>
                                <option value="Casado(a)"  <?php echo ($_desplazados[$_GET['id']]['Estado_Civil']=='Casado(a)') ?  "selected": null; ?>>Casado</option>
                                <option value="UnionLibre"  <?php echo ($_desplazados[$_GET['id']]['Estado_Civil']=='UnionLibre') ?  "selected": null; ?>>Union Libre</option>
                                <option value="Viudo(a)"  <?php echo ($_desplazados[$_GET['id']]['Estado_Civil']=='Viudo(a)') ?  "selected": null; ?>>Viudo</option>
                                <option value="Separado(a)"  <?php echo ($_desplazados[$_GET['id']]['Estado_Civil']=='Separado(a)') ?  "selected": null; ?>>Separado/Divorciado</option>                                                               
                            </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Parentesco: </td>
                            <td class="left">
                             <div class="col-md-8">
                            <select name="Parentesco"  class="form-control">
                                <option value="">[...]</option>
                                <option value="Padre/Padrastro" <?php echo ($_desplazados[$_GET['id']]['Parentesco']=='Padre/Padrastro') ?  "selected": null; ?> >Padre/Padrastro</optioMadre/Madrastran>
                                <option value="Madre/Madrastra" <?php echo ($_desplazados[$_GET['id']]['Parentesco']=='Madre/Madrastra') ?  "selected": null; ?> >Madre/Madrastra</option>
                                <option value="Hijo(a)/Hojastro(a)" <?php echo ($_desplazados[$_GET['id']]['Parentesco']=='Separado(a)') ?  "selected": null; ?> >Hijo(a)/Hojastro(a)</option>
                                <option value="Compañero(a)" <?php echo ($_desplazados[$_GET['id']]['Parentesco']=='Compañero(a)') ?  "selected": null; ?> >Compañero(a)</option>
                                <option value="Hermano(a)" <?php echo ($_desplazados[$_GET['id']]['Parentesco']=='Hermano(a)') ?  "selected": null; ?> >Hermano(a)</option>
                                <option value="Suegro(a)" <?php echo ($_desplazados[$_GET['id']]['Parentesco']=='Suegro(a)') ?  "selected": null; ?> >Suegro(a)</option>
                                <option value="Otro" <?php echo ($_desplazados[$_GET['id']]['Parentesco']=='Otro') ?  "selected": null; ?> >Otro</option>
                                <option value="NoParientes" <?php echo ($_desplazados[$_GET['id']]['Parentesco']=='NoParientes') ?  "selected": null; ?> >No Parientes</option>                                
                            </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Es Jefe de Hogar: </td>
                            <td class="left">
                             <div class="col-md-8" >
                                <select  name="JefeDeHogar" class="form-control">
                                    <option value="">[...]</option>
                                    <option value="Si" <?php echo ($_desplazados[$_GET['id']]['JefeDeHogar']=='SI') ?  "selected": null; ?> >Si</option>
                                    <option value="NO" <?php echo ($_desplazados[$_GET['id']]['JefeDeHogar']=='NO') ?  "selected": null; ?> >No</option> 
                                 </select>
                             </div>    
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Territorio: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <input type="text" name="txtTerritorioD" class="form-control" value="<?php echo $_desplazados[$_GET['id']]['Territorio']; ?>">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <br><br>

                                <button type="submit" class="btn btn-default" >Agregar Desplazado</button>
 
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
