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
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=proteccion&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded">                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">Ha Acudido a alguna entidad para solicitar Proteccion:</td>
                                 <td  class="left" width="55%">
                                  <div class="col-md-9" style="text-align: left;">
                                   <input type="radio" name="SolicitudProteD" required="" value="Fiscalia"> Fiscalia<br>
                                   <input type="radio" name="SolicitudProteD" required="" value="Emabajadas"> Emabajadas<br>
                                   <input type="radio" name="SolicitudProteD" required="" value="FuerzasArmadas"> Fuerzas Armadas<br>
                                   <input type="radio" name="SolicitudProteD" required="" value="MinisterioInterior"> Ministerio del Interior<br>
                                   <input type="radio" name="SolicitudProteD" required="" value="DefensoriaOProcuraduria"> Defensoria O Procuraduria<br>
                                   <input type="radio" name="SolicitudProteD" required="" value="OrganismoNacionalDerechosHumanos"> Organismo Nacional de Derechos Humanos<br>                               
                                   <input type="radio" name="SolicitudProteD" required="" value="Ninguno"> Ninguno<br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Otra:</td>
                                <td class="left">
                                <div class="col-md-9">
                                    <input id="otraSolicitudProte" type="text" name="txtSolicitudProteD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Conoce sobre la ayuda que presta el estado a la poblacion desplazada:</td>
                                <td class="left">
                                 <div class="col-md-9">
                                    <select  required class="form-control" id="ayudaEstado" name="cboAyudaEstadoD">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </div>    
                                </td>
                            </tr>
                            <tr>
                                <td class="right">¿Usted o Algunos miembros de su hogar estan Inscritos en programas especificos para Mujer, Adulto Mayor ó jovenes?</td>
                                <td class="left">
                                  <div class="col-md-9" style="text-align: left;">
                                   <input type="checkbox" name="cboMujerD" value="Si" > Mujeres<br>
                                   <input type="checkbox" name="cboAdultoMayorD" value="Si"> Adultos mayores<br>
                                   <input type="checkbox" name="cboJovenesD" value="Si"> Jovenes<br>

                                </td>
                            </tr>
                           
                            <tr>
                                <td class="right">Discapacidad:</td>
                                <td class="left">
                                 <div class="col-md-9">
                                    <select  required class="form-control" id="selectProteccion" name="cboDiscapacidadD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Algun miembro de la familia esta afiliado a OPD:</td>
                                <td class="left">
                                 <div class="col-md-9">
                                    <select  required class="form-control" id="selectProteccion" name="cboAfiliadoOPDD">
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Cual OPD:</td>
                                <td class="left">
                                <div class="col-md-9">
                                    <input id="inputProteccion" type="text" name="txtCualOPDD" required class="form-control" >
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Participan en Evaluacion de politica publica:</td>
                                <td class="left">
                                 <div class="col-md-9">
                                    <select  required class="form-control" id="selectProteccion" name="cboEvaPoliPubliD" >
                                             <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Cual:</td>
                                <td class="left">
                                <div class="col-md-9">
                                    <input id="inputProteccion" type="text" name="txtCualPoliPubliD" class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Clasifique el componente de atencion que considera Prioritario recibir en este momento: </td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad1D">
                                            <option value="">Prioridad 1</option>
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
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad2D">
                                            <option value="">Prioridad 2</option>
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
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad3D">
                                            <option value="">Prioridad 3</option>
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
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad4D">
                                            <option value="">Prioridad 4</option>
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
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="left">
                                 <div class="col-md-4">
                                    <select  required class="form-control" id="prioridad" name="cboPrioridad5D">
                                            <option value="">Prioridad 5</option>
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