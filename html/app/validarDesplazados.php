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
                     <form class="form-horizontal" action="?view=validardesplazados&mode=buscar" method="POST" enctype="application/x-www-form-urlencoded">
   
              <div class="form-group">
                    <table width="100%" border="1">
                        <tr>
                            <td class="right">DOCUMENTO: </td>
                            <td class="left">
                              <div class="col-md-8">
                                 <input type="text" name="numDocumento" id="numDocumento" class="form-control"  value="<?php echo isset($_GET['id']) ? $_GET['id'] : null; ?>" required>
                             </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <br><br>
                                <button type="submit" class="btn btn-default">Validar Desplazado</button>
                            </td>
                        </tr>  
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            
                        </tr>                                              
                        <tr> 
                            <td colspan="2">
                            <!-- Mensajes  Registrar-->
                            <?php if (isset($_GET['success']) && $_GET['success']=='false') {  ?>
                            <div class="col-lg-2"></div>
                            <div class="alert alert-warning col-lg-8">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                La persona identificada con ese documento no se encuentra registrada en el sistema.
                                <button type="button" class="btn btn-warning" onclick="window.location='?view=datosdesplazado&mode=add&id=<?php echo $_GET['id']; ?>';">Registrar</button>
                            </div>
                            <?php 
                            } elseif(isset($_GET['success']) && $_GET['success']=='true') {
                             ?>
                            <!-- Mensajes  Ya existe-->
                            <div class="col-lg-2"></div>
                            <div class="alert alert-success col-lg-8">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                               <b><?php echo  ucwords($_desplazados[$_GET['id']]['Nombre_Completo']); ?></b> ya se encuentra registrado(a) en el sistema.
                                <button type="button" class="btn btn-success" onclick="window.location='?view=datosdesplazado&mode=edit&id=<?php echo $_GET['id']; ?>  ';">Editar</button>
                            </div>
                            <?php } ?>
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
