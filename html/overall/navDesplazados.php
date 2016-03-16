            <div class="" id='menuDesplazado'> 
                <nav style="border-radius: 6px 6px  0px 0px;">
                    <ul class="menu" id="MD">
                        <li id="MD">
                            <a href="?view=datosdesplazado&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?> ">
                            <span></span>Datos 
                            <?php echo isset($_desplazamientos[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                          </a></li>
                        <li id="MD">
                             <a href="?view=listarfamiliares&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>">
                             <span></span>Familiares 
                             <?php 
                             $_familiaresDesplazados=familiaresDesplazados($_GET['id']);
                             echo (false!=$_familiaresDesplazados) ? "<i class='fa fa-check-square-o'></i>" : null;  ?> 
                        </a>
                           <!-- <ul>
                                <li ><a href="splazados.html">Agregar</a></li>
                                <li ><a href="#">Listar</a></li>
                            </ul> -->
                        </li>
                        <li id="MD">
                            <a href="?view=desplazamiento<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Desplazamiento 
                           <?php echo isset($_desplazamientos[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a>
                        </li>
                        <li id="MD">
                            <a href="?view=estabilizacion<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Estabilizacion 
                           <?php echo isset($_estabilizaciones[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=vivienda<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Vivienda 
                            <?php echo isset($_viviendas[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=economia<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Economia 
                            <?php echo isset($_economias[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=proteccion<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Protección 
                            <?php echo isset($_protecciones[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=ayudas<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Ayudas 
                            <?php echo isset($_desplazamientos[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=discapacidad<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Discapacidad 
                            <?php echo isset($_discapacidades[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=proteccionespecial<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Protección Especial 
                            <?php echo isset($_especiales[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a></li>
                        <li id="MD">
                            <a href="?view=reparacion<?php echo isset($_GET['id']) ? "&id=".$_GET['id'] : "? null; " ?>">
                            <span></span>Reparacion 
                            <?php echo isset($_reparaciones[$_GET['id']]['DOCUMENTO_DESPLAZADO']) ? "<i class='fa fa-check-square-o'></i>" : null;  ?>
                            </a></li>
                    </ul>
                    
                    <div class="clearfix"></div>
                </nav>
            </div>