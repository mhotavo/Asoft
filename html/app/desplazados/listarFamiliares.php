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
                        <a href="#" class="btn btn-success">Agregar Familiar</a>
                        <br>
                    </div>
                    <table id="FamiliaresDesplazados" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Numero de documento</th>
                                    <th>Nombre Completo</th>
                                    <th>Parentesco</th>
                                    <th>Edad</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td><a href="?view=agregarfamiliares&mode=edit" class="btn btn-primary">Editar</a></td>
                                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                    <div class="col-md-1">&nbsp;</div>       
            </div>  
            
         </div>
             
    </body>
    <footer>
        <?php include(HTML_DIR.'/overall/footer.php') ?> 
    </footer>

</html>