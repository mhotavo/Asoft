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
                <div class="col-md-1">&nbsp;</div>    
                <div class="col-md-10">
                    <h1> Listar Familiares </h1> 
                    <div style="text-align: right;padding: 0 14px 14px 14px;">
                        <a href="?view=agregarfamiliares&mode=add&id=<?php echo $_GET['id']; ?>" class="btn btn-success">Agregar Familiar</a>
                        <br>
                    </div>
                    <div style="background-color: #E3E3E3;padding: 10px;">
                    <table id="FamiliaresDesplazados" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr >
                                    <th>Numero de documento</th>
                                    <th>Nombre Completo</th>
                                    <th>Parentesco</th>
                                    <th>Edad</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            
                         if(false != $_familiaresDesplazados) {
                                foreach($_familiaresDesplazados as $id_familiaresDesplazados => $contenido) {  ?>                                 
                                 <tr>
                                        <td style="vertical-align: middle"><?php echo $_familiaresDesplazados[$id_familiaresDesplazados]['IDENTIFICACION_FAMILIAR']; ?></td>
                                        <td style="vertical-align: middle"><?php echo $_familiaresDesplazados[$id_familiaresDesplazados]['NOMBRE_COMPLETO']; ?></td>
                                        <td style="vertical-align: middle"><?php echo $_familiaresDesplazados[$id_familiaresDesplazados]['PARENTESCO']; ?></td>
                                        <td style="vertical-align: middle"><?php echo $_familiaresDesplazados[$id_familiaresDesplazados]['EDAD']; ?></td>
                                        <td style="vertical-align: middle"><a href="?view=agregarfamiliares&mode=edit&id=<?php echo $_GET['id']; ?>&familiar=<?php echo  $_familiaresDesplazados[$id_familiaresDesplazados]['IDENTIFICACION_FAMILIAR']; ?>" class="btn btn-primary">Editar</a></td>
                                        <td style="vertical-align: middle"><a onclick="DeleteItem('¿Está seguro de eliminar este familiar?','?view=agregarfamiliares&mode=delete&id=<?php echo $_GET['id']; ?>&familiar=<?php echo  $_familiaresDesplazados[$id_familiaresDesplazados]['IDENTIFICACION_FAMILIAR']; ?>')" class="btn btn-danger">Eliminar</a></td>
                                    </tr>
                                <?php }
                            }
                             ?>
                            </tbody>
                        </table>
                           <tr>
                                <td colspan="2">
                                <br><br>                      
                                    <a href="?view=desplazamiento&id=<?php echo $_GET['id']; ?>" class="btn btn-primary">Guardar y continuar</a>     
                                </td>
                            </tr>    
                        </div>
                    </div>  
                    <div class="col-md-1">&nbsp;</div>       
            </div>  
            
         </div>
             
    </body>
    <footer>
        <?php include(HTML_DIR.'/overall/footer.php') ?> 
    </footer>

</html>
