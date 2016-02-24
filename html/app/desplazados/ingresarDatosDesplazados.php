<html lang="en">
<?php include(HTML_DIR.'/overall/header.php') ?>
    <body>
        <header>
            <div class="wrap" > 
               <?php include(HTML_DIR.'/overall/nav.php') ?> 
            </div>
        </header> 
         <div >
                <h1>POBLACION DESPLAZADA</h1>                                   
            </div>
        <aside>
            <?php include(HTML_DIR.'/overall/navDesplazados.php') ?> 
        </aside>
        

        <div class="container" >
        <!-- FORMULARIO AGREGAR DATOS -->
      
                <div class="row formulario" >

                <div class="col-md-12">
                    <h1 class="titulo1">Agregar Datos</h1>            
                    <form action="AgregarDatosDesplazadosServlet" method="post" class="form-horizontal">
 Nombre Completo: <input type="text" id="nombreComp" name="txtNombreCompD" size="30"><br/>
                    Tipo de Documento: <select id="tipoDocumento" name="cboTipoDocumentoD">
                                <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                                <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                <option value="Libreta Militar">Libreta Militar</option>
                                <option value="Registro Civil">Registro Civil</option>
                                <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                <option value="NUIP">Numero Unico de Identificacion Personal(NUIP)</option>
                                <option value="No Tiene">No Tiene</option>
                                </select><br/>
                    Fecha de Victimización: <input type="text" name="txtFechaVictimizacionD"><br/>
                    Codigo RUPV: <input type="text" name="txtCodigoRUPVD"><br/>
                    Departamento: <select id="depa" name="cboDepartamentoD">
                                    <option value="#">IngresarBDdepartamento</option>                               
                                 </select><br/>
                    Municipio: <select id="muni" name="cboMunicipioD">
                                    <option value="#">IngresarBDmunicipio</option>                               
                                 </select><br/>
                    Zona: <select id="zona" name="cboZonaD">
                                    <option value=""></option>
                                    <option value="Rural">Rural</option>
                                    <option value="Urbana">Urbana</option> 
                                 </select><br/>
                    Localidad: <input type="text" name="txtLocalidadD"><br/>
                    Direccion: <input type="text" name="txtDireccionD"><br/>
                    Telefono: <input type="text" name="txtTelefonoD"><br/>
                    Estado Civil: <select id="estaCivil" name="cboEstadoCivilD">
                                <option value=""></option>
                                <option value="Soltero">Soltero</option>
                                <option value="Casado">Casado</option>
                                <option value="Union Libre">Union Libre</option>
                                <option value="Viudo">Viudo</option>
                                <option value="Separado/Divorciado">Separado/Divorciado</option>                                                               
                            </select><br/>
                    Parentesco: <select id="Parentesco" name="cboParentescoD">
                                <option value=""></option>
                                <option value="Padre/Padrastro">Padre/Padrastro</option>
                                <option value="Madre/Madrastra">Madre/Madrastra</option>
                                <option value="Hijo(a)/Hojastro(a)">Hijo(a)/Hojastro(a)</option>
                                <option value="Compañero(a)">Compañero(a)</option>
                                <option value="Hermano(a)">Hermano(a)</option>
                                <option value="Suegro(a)">Suegro(a)</option>
                                <option value="Otro">Otro</option>
                                <option value="No Parientes">No Parientes</option>                                
                            </select><br/>
                    Es Jefe de Hogar: <select id="jdh" name="cboJdhD">
                                    <option value=""></option>
                                    <option value="Si">Si</option>
                                    <option value="NO">No</option> 
                                 </select><br/>
                    Territorio: <input type="text" name="txtTerritorioD"><br/><br/>

                    <br/><br/>               
                            <button type="submit" class="btn btn-default">Agregar Victima</button>
                        
                    
                    
                    
                     
                    </form> 
                    </div>         
                 </div>  
            
            </div>
        </div>            
    </body>
    <footer>
        <?php include(HTML_DIR.'/overall/footer.php') ?> 
    </footer>

</html>
