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
                    <h1> Agregar Proteccion</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=datosdesplazado&mode=edit&id=".$_GET['id'] : "?view=datosdesplazado&mode=add";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td>Ha Acudido a alguna entidad para solicitar Proteccion:</td>
                                <td>
                                    <a><input type="checkbox" name="checkboxSolicitudProteD" value="Fiscalia">Fiscalia</a>
                                    <a><input type="checkbox" name="checkboxSolicitudProteD" value="Emabajadas">Emabajadas</a>
                                    <a><input type="checkbox" name="checkboxSolicitudProteD" value="Fuerzas Armadas">Fuerzas Armadas</a>
                                    <a><input type="checkbox" name="checkboxSolicitudProteD" value="Ministerio del Interior">Ministerio del Interior</a>
                                    <a><input type="checkbox" name="checkboxSolicitudProteD" value="Defensoria O Procuraduria">Defensoria O Procuraduria</a>
                                    <a><input type="checkbox" name="checkboxSolicitudProteD" value="Organismo Nacional de Derechos Humanos">Organismo Nacional de Derechos Humanos</a>                               
                                    <a><input type="checkbox" name="checkboxSolicitudProteD" value="Ninguno">Ninguno</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Otra:</td>
                                <td><input id="otraSolicitudProte" type="text" name="txtSolicitudProteD"></td>
                            </tr>
                            <tr>
                                <td>Conoce sobre la ayuda que presta el estado a la poblacion desplazada:</td>
                                <td>
                                    <select id="ayudaEstado" name="cboAyudaEstadoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Usted o Algunos miembros de su hogar estan Inscritos en porgramas especificos para:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Mujer:</td>
                                <td>
                                    <select id="selectProteccion" name="cboMujerD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Adulto Mayor:</td>
                                <td>
                                    <select id="selectProteccion" name="cboAdultoMayorD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jovenes:</td>
                                <td>
                                    <select id="selectProteccion" name="cboJovenesD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Discapacidad:</td>
                                <td>
                                    <select id="selectProteccion" name="cboDiscapacidadD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Algun miembro de la familia esta afiliado a OPD:</td>
                                <td>
                                    <select id="selectProteccion" name="cboAfiliadoOPDD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Cual OPD:</td>
                                <td><input id="inputProteccion" type="text" name="txtCualOPDD"></td>
                            </tr>
                            <tr>
                                <td>Participan en Evaluacion de politica publica:</td>
                                <td>
                                    <select id="selectProteccion" name="cboEvaPoliPubliD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Cual:</td>
                                <td><input id="inputProteccion" type="text" name="txtCualPoliPubliD"></td>
                            </tr>
                            <tr>
                                <td>Clasifique el componente de atencion que considera Prioritario recibir en este momento: </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prioridad 1:</td>
                                <td>
                                    <select id="prioridad" name="cboPrioridad1D">
                                            <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Prioridad 2:</td>
                                <td>
                                    <select id="prioridad" name="cboPrioridad2D">
                                             <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Prioridad 3:</td>
                                <td>
                                    <select id="prioridad" name="cboPrioridad3D">
                                             <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Prioridad 4:</td>
                                <td>
                                    <select id="prioridad" name="cboPrioridad4D">
                                             <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Prioridad 5:</td>
                                <td>
                                    <select id="prioridad" name="cboPrioridad5D">
                                            <option value=""></option>
                                            <option value="Salud">Salud</option>
                                            <option value="Empleo">Empleo</option>
                                            <option value="Vivienda">Vivienda</option>
                                            <option value="Educacion">Educacion</option>
                                            <option value="Capacitacion">Capacitacion</option>                                            
                                            <option value="Asesorias Juridicas">Asesorias Juridicas</option>
                                            <option value="Consec. Docuemntos">Consec. Docuemntos</option>
                                            <option value="Atencion Humanitaria">Atencion Humanitaria</option>
                                            <option value="Generacion de Ingresos">Generacion de Ingresos</option>
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