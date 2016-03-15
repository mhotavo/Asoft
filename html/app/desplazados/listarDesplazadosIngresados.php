<html lang="en">
<?php include(HTML_DIR.'/overall/header.php') ?>
    <body>

            <div class=" " > 
            <?php include(HTML_DIR.'/overall/nav.php') ?> 
             <h1 style="color:white;">&nbsp;</h1>  
           
            </div>
          
        

        <div class="container" >

             <div class="row formulario" >
                <div class="col-md-1">&nbsp;</div>    
                <div class="col-md-10">
                    <h1> Listado Desplazados </h1> 
                    <div style="text-align: right;padding: 0 14px 14px 14px;">
                         <br>
                    </div>
                    <div style="background-color: #E3E3E3;padding: 10px;">
                    <table id="FamiliaresDesplazados" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Numero de documento</th>
                                    <th>Nombre Completo</th>
                                    <th>Fecha Registro</th>
                                    <th>Estado</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            
                         if(false != $_desplazados) {
                                foreach($_desplazados as $id_familiaresDesplazados => $contenido) {  ?>                                 
                                 <tr>
                                        <td><?php echo $_desplazados[$id_familiaresDesplazados]['Documento']; ?></td>
                                        <td><?php echo $_desplazados[$id_familiaresDesplazados]['Nombre_Apellido']; ?></td>
                                        <td><?php echo $_desplazados[$id_familiaresDesplazados]['FechaRegistro']; ?></td>
                                        <td><?php echo $desplazados->Estado($_desplazados[$id_familiaresDesplazados]['Documento']);  ?></td>
                                        <td><a href="?view=datosdesplazado&mode=edit&id=<?php echo $_desplazados[$id_familiaresDesplazados]['Documento']; ?>" class="btn btn-primary">Editar</a></td>
                                        <td><a onclick="DeleteItem('¿Está seguro de eliminar este desplazado?','?view=datosdesplazado&mode=delete&id=<?php echo $_desplazados[$id_familiaresDesplazados]['Documento']; ?>')" class="btn btn-danger">Eliminar</a></td>
                                    </tr>
                                <?php }
                            }
                             ?>
                            </tbody>
                        </table>
  
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
