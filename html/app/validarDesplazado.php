<html lang="en">
<?php include(HTML_DIR.'/overall/header.php') ?>
    <body>

            <div class=" " > 
            <?php include(HTML_DIR.'/overall/nav.php') ?> 
             <h1 style="color:white;">POBLACION DESPLAZADA</h1>  
           
            </div>
          
        

  <div class="container" >
        <!-- FORMULARIO AGREGAR DATOS -->
                <div class="row formulario" style="border-radius: 7px;">

                <div class="col-md-12">
                    <h1>Validar Documento</h1> 
                    <form class="formularioValidacionDesplazados"  action="menuDesplazados.html">
                    <table width="100%" border="1">
                        <tr>
                            <td class="right">DOCUMENTO: </td>
                            <td class="left">
                              <div class="col-md-8">
                                 <input type="text" id="txtDocumentoDesplazado" class="form-control" name="documentoDesplazados" >
                             </div>
                            </td>
                        </tr>
                               <tr>
                            <td colspan="2">
                            <br><br>

                                <button type="submit" class="btn btn-default">Validar Desplazado</button>
 
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