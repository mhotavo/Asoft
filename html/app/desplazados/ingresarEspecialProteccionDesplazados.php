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
                    <h1> Agregar Especial Proteccion</h1> 
                        <form class="form-horizontal" action="<?php echo isset($_GET['id']) ?  "?view=proteccionespecial&id=".$_GET['id'] : "?view=validardesplazados";  ?> " method="POST" enctype="application/x-www-form-urlencoded" >                    
                        <table width="100%">
                            <tr>
                                <td class="right" width="45%">La ayuda humanitaria recibida corresponde a su cultura:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboEsProteccionD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">La Educacion recibida por menores de 18 años es apropiada a su cultura: </td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboEducaCulturaD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Los funcionarios publicos les dan un trato digno y respetuoso:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboTratoD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Seleccione el nombre del pueblo indigena al que pertenece:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion2" name="cboPuebloIndiD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Achagua">Achagua</option>
                                            <option value="Andaquí">Andaquí</option>
                                            <option value="Andoque">Andoque</option>
                                            <option value="Arhuaco">Arhuaco</option>
                                            <option value="Awá">Awá</option>
                                            <option value="Bara (indígenas)">Bara (indígenas)</option>
                                            <option value="Barasana">Barasana</option>
                                            <option value="Betoye">Betoye</option>
                                            <option value="Cacique Bitagüí">Cacique Bitagüí</option>
                                            <option value="Camsá">Camsá</option>
                                            <option value="Carijona">Carijona</option>
                                            <option value="Catíos">Catíos</option>
                                            <option value="Cañamomo">Cañamomo</option>
                                            <option value="Chamíes">Chamíes</option>
                                            <option value="Chimila">Chimila</option>
                                            <option value="Chitareros">Chitareros</option>
                                            <option value="Cocama">Cocama</option>
                                            <option value="Cocamilla">Cocamilla</option>
                                            <option value="Cofán">Cofán</option>
                                            <option value="Coreguaje">Coreguaje</option>
                                            <option value="Cubeo">Cubeo</option>
                                            <option value="Cuiba">Cuiba</option>
                                            <option value="Desano">Desano</option>
                                            <option value="Dujo">Dujo</option>
                                            <option value="Emberá">Emberá</option>
                                            <option value="Emberá-Katio">Emberá-Katio</option>
                                            <option value="Emberá-Chami">Emberá-Chami</option>
                                            <option value="Emberá-Dobida">Emberá-Dobida</option>
                                            <option value="Guahibo">Guahibo</option>
                                            <option value="Guambiano">Guambiano</option>
                                            <option value="Guanano">Guanano</option>
                                            <option value="Guando">Guando</option>
                                            <option value="Guanes">Guanes</option>
                                            <option value="Guayabero">Guayabero</option>
                                            <option value="Guayupe">Guayupe</option>
                                            <option value="Hitnü">Hitnü</option>
                                            <option value="Huitoto">Huitoto</option>
                                            <option value="Inga (etnia)">Inga (etnia)</option>
                                            <option value="Jupda">Jupda</option>
                                            <option value="Kabiyarí">Kabiyarí</option>
                                            <option value="Kamentza">Kamentza</option>
                                            <option value="Kankuamos">Kankuamos</option>
                                            <option value="Karapana">Karapana</option>
                                            <option value="Kichwa">Kichwa</option>
                                            <option value="Kogui">Kogui</option>
                                            <option value="Kofan">Kofan</option>
                                            <option value="Koreguaje">Koreguaje</option>
                                            <option value="Kuiva">Kuiva</option>
                                            <option value="Kuna (etnia)">Kuna (etnia)</option>
                                            <option value="Macuna">Macuna</option>
                                            <option value="Matapí">Matapí</option>
                                            <option value="Mirañas">Mirañas</option>
                                            <option value="Misak">Misak</option>
                                            <option value="Mochila arhuaca">Mochila arhuaca</option>
                                            <option value="Mokaná">Mokaná</option>
                                            <option value="Múcura">Múcura</option>
                                            <option value="Nasa">Nasa</option>
                                            <option value="Nonuyas">Nonuyas</option>
                                            <option value="Nukak-Makú">Nukak-Makú</option>
                                            <option value="Nutabes">Nutabes</option>
                                            <option value="Panche">Panche</option>
                                            <option value="Pastos">Pastos</option>
                                            <option value="Pijaos">Pijaos</option>
                                            <option value="Piratapuyo">Piratapuyo</option>
                                            <option value="Población indígena de Colombia">Población indígena de Colombia</option>
                                            <option value="Pubenenses">Pubenenses</option>
                                            <option value="Pueblo barí">Pueblo barí</option>
                                            <option value="Pueblo bora">Pueblo bora</option>
                                            <option value="Pueblo kurripako">Pueblo kurripako</option>
                                            <option value="Pueblo nasa">Pueblo nasa</option>
                                            <option value="Pueblo sáliba">Pueblo sáliba</option>
                                            <option value="Pueblo wenaiwika">Pueblo wenaiwika</option>
                                            <option value="Pueblo Yanacona">Pueblo Yanacona</option>
                                            <option value="Pueblo yukpa">Pueblo yukpa</option>
                                            <option value="Pueblo puinave">Pueblo puinave</option>
                                            <option value="Raizal">Raizal</option>
                                            <option value="Siona">Siona</option>
                                            <option value="Sikuani">Sikuani</option>
                                            <option value="Siriano">Siriano</option>
                                            <option value="Sutagaos">Sutagaos</option>
                                            <option value="Tahamíes">Tahamíes</option>
                                            <option value="Taironas">Taironas</option>
                                            <option value="Taiwano">Taiwano</option>
                                            <option value="Tamas (tribu)">Tamas (tribu)</option>
                                            <option value="Tanimuca">Tanimuca</option>
                                            <option value="Tatuyo">Tatuyo</option>
                                            <option value="Tikuna">Tikuna</option>
                                            <option value="Timanaes">Timanaes</option>
                                            <option value="Tinigua">Tinigua</option>
                                            <option value="Totoro">Totoro</option>
                                            <option value="Tucano">Tucano</option>
                                            <option value="Tupe">Tupe</option>
                                            <option value="Tuyuca">Tuyuca</option>
                                            <option value="U'wa">U'wa</option>
                                            <option value="Uitoto">Uitoto</option>
                                            <option value="Umbrá">Umbrá</option>
                                            <option value="Waunana">Waunana</option>
                                            <option value="Wayuu">Wayuu</option>
                                            <option value="Wiwa">Wiwa</option>
                                            <option value="Yagua (pueblo)">Yagua (pueblo)</option>
                                            <option value="Yalcón">Yalcón</option>
                                            <option value="Yariguies">Yariguies</option>
                                            <option value="Yucuna">Yucuna</option>
                                            <option value="Yukpa de Colombia y Venezuela">Yukpa de Colombia y Venezuela</option>
                                            <option value="Yuri (etnia)">Yuri (etnia)</option>
                                            <option value="Zenú">Zenú</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Las mujeres indigenas o afrodescendientes reciben violencia intrafamiliar:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboViolenciaD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ha denunciado:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboDenunciadoD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Ante Cual Entidad: </td>
                                <td class="left">
                              <div class="col-md-8">                                
                                    <input id="cualEntidad" type="text" name="txtCualEntidadD" required class="form-control">
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Que tipo de Violencia han padecido:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion3" name="cboTipoViolenciaD" required class="form-control">
                                             <option value=""></option>
                                            <option value="Psicologica">Psicologica</option>
                                            <option value="Fisica">Fisica</option>
                                            <option value="Sexual">Sexual</option>
                                            <option value="Otra">Otra</option>
                                    </select>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="right">Son parte de una organizacion donde promueven sus derechos:</td>
                                <td class="left">
                              <div class="col-md-8">
                                    <select id="selectEsProteccion" name="cboPromuevenDereD" required class="form-control">
                                            <option value=""></option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
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


