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
                    <form action="AgregarDatosDesplazadosServlet" method="post" class="form-horizontal">
                    <table width="100%">
                        <tr>
                            <td class="right">Nombre Completo: </td>
                            <td class="left">
                              <div class="col-md-8">
                                 <input type="text" id="nombreComp" class="form-control" name="txtNombreCompD" >
                             </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Tipo de Documento: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <select id="tipoDocumento" name="cboTipoDocumentoD" class="form-control">
                                    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                    <option value="Libreta Militar">Libreta Militar</option>
                                    <option value="Registro Civil">Registro Civil</option>
                                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                    <option value="NUIP">Numero Unico de Identificacion Personal(NUIP)</option>
                                    <option value="No Tiene">No Tiene</option>
                                </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Fecha de Victimización: </td>
                            <td class="left">
                             <div class="col-md-8"> 
                                <input type="text" class="form-control" name="txtFechaVictimizacionD">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right">Codigo RUPV: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <input type="text" class="form-control"  name="txtCodigoRUPVD">
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
                                    <option value=""></option>
                                    <option value="Rural">Rural</option>
                                    <option value="Urbana">Urbana</option> 
                                 </select>
                            </td>
                            </div>
                        </tr>
                        <tr>
                            <td class="right">Localidad: </td>
                            <td class="left">
                             <div class="col-md-8"> 
                                <input type="text" name="txtLocalidadD" class="form-control">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right">Direccion: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <input type="text" name="txtDireccionD" class="form-control">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right">Telefono: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <input type="text" name="txtTelefonoD" class="form-control">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td class="right">Estado Civil: </td>
                            <td class="left">
                             <div class="col-md-8">
                            <select id="estaCivil" name="cboEstadoCivilD" class="form-control">
                                <option value=""></option>
                                <option value="Soltero">Soltero</option>
                                <option value="Casado">Casado</option>
                                <option value="Union Libre">Union Libre</option>
                                <option value="Viudo">Viudo</option>
                                <option value="Separado/Divorciado">Separado/Divorciado</option>                                                               
                            </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Parentesco: </td>
                            <td class="left">
                             <div class="col-md-8">
                            <select id="Parentesco" name="cboParentescoD" class="form-control">
                                <option value=""></option>
                                <option value="Padre/Padrastro">Padre/Padrastro</option>
                                <option value="Madre/Madrastra">Madre/Madrastra</option>
                                <option value="Hijo(a)/Hojastro(a)">Hijo(a)/Hojastro(a)</option>
                                <option value="Compañero(a)">Compañero(a)</option>
                                <option value="Hermano(a)">Hermano(a)</option>
                                <option value="Suegro(a)">Suegro(a)</option>
                                <option value="Otro">Otro</option>
                                <option value="No Parientes">No Parientes</option>                                
                            </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Es Jefe de Hogar: </td>
                            <td class="left">
                             <div class="col-md-8" >
                                <select id="jdh" name="cboJdhD" class="form-control">
                                    <option value=""></option>
                                    <option value="Si">Si</option>
                                    <option value="NO">No</option> 
                                 </select>
                             </div>    
                            </td>
                        </tr>
                        <tr>
                            <td class="right">Territorio: </td>
                            <td class="left">
                             <div class="col-md-8">
                                <input type="text" name="txtTerritorioD" class="form-control">
                            </div>
                             </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <br><br>

                                <button type="submit" class="btn btn-default">Agregar Desplazado</button>
 
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
