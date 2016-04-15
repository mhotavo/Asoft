<html lang="en">
<?php include(HTML_DIR.'/overall/header.php') ?>
    <body>

            <div class=" " > 
            <?php include(HTML_DIR.'/overall/nav.php') ?> 
             <h1 style="color:white;">&nbsp;</h1>  
           
            </div>
  <div class="container" >
        <!-- FORMULARIO AGREGAR DATOS -->
                <div class="row formulario" style="border-radius: 7px;">

                <div class="col-md-12">
                    <h1>Datos usuario</h1> 
                     <form class="form-horizontal" action="?view=validardesplazados&mode=buscar" method="POST" enctype="application/x-www-form-urlencoded">
   
              <div class="form-group">
                    <table width="100%" border="1">
                        <tr>
                            <td class="right">DOCUMENTO: </td>
                            <td class="left">
                              <div class="col-md-7">
                                 <input type="text" name="numDocumento" id="numDocumento" class="form-control"  value="<?php echo isset($_GET['id']) ? $_GET['id'] : null; ?>" required>
                             </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <br><br>
                                <button type="submit" class="btn btn-default">Guardar Información</button>
                            </td>
                        </tr>  
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            
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
