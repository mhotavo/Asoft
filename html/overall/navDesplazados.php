            <div class="" id='menuDesplazado'> 
                <nav style="border-radius: 6px 6px  0px 0px;">
                    <ul class="menu" id="MD">
                        <li id="MD">
                            <a href="?view=datosdesplazado&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?> ">
                            <span id="DatosItem">Datos</span>
                            <?php echo isset($_desplazamientos[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                          </a></li>
                        <li id="MD">
                             <a href="?view=listarfamiliares&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>">
                             <span id="FamiliaresItem">Familiares</span> 
                             <?php 
                             $_familiaresDesplazados=familiaresDesplazados($_GET['id']);
                             echo (false!=$_familiaresDesplazados) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?> 
                        </a>
                           <!-- <ul>
                                <li ><a href="splazados.html">Agregar</a></li>
                                <li ><a href="#">Listar</a></li>
                            </ul> -->
                        </li>
                        <li id="MD">
                            <a href="?view=desplazamiento<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="DesplazamientoItem">Desplazamiento</span> 
                           <?php echo isset($_desplazamientos[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a>
                        </li>
                        <li id="MD">
                            <a href="?view=estabilizacion<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="EstabilizacionItem">Estabilizacion</span> 
                           <?php echo isset($_estabilizaciones[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=vivienda<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="ViviendaItem">Vivienda</span> 
                            <?php echo isset($_viviendas[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=economia<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="EconomiaItem">Economia</span> 
                            <?php echo isset($_economias[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=proteccion<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="ProteccionItem">Protección</span> 
                            <?php echo isset($_protecciones[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=ayudas<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="AyudasItem">Ayudas</span> 
                            <?php echo isset($_desplazamientos[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=discapacidad<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="DiscapacidadItem">Discapacidad</span> 
                            <?php echo isset($_discapacidades[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=proteccionespecial<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="EspecialItem">Protección Especial</span> 
                            <?php echo isset($_especiales[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=reparacion<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span id="ReparacionItem">Reparacion</span> 
                            <?php echo isset($_reparaciones[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i style='color:#2dad2d' class='fa fa-check-circle'></i>" : "<i style='color:red' class='fa fa-times-circle'></i>";  ?>
                            </a></li>
                    </ul>
                    
                    <div class="clearfix"></div>
                </nav>
            </div>