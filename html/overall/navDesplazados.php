            <div class="" id='menuDesplazado'> 
                <nav style="border-radius: 6px 6px  0px 0px;">
                    <ul class="menu" id="MD">
                        <li id="MD"><a href="?view=datosdesplazado&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?> "><span></span>Datos</a></li>
                        <li id="MD"><a href="?view=listarfamiliares&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Familiares</a>
                           <!-- <ul>
                                <li ><a href="splazados.html">Agregar</a></li>
                                <li ><a href="#">Listar</a></li>
                            </ul> -->
                        </li>
                        <li id="MD"><a href="?view=desplazamiento&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Desplazamiento</a></li>
                        <li id="MD"><a href="?view=estabilizacion&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Estabilizacion</a></li>
                        <li id="MD"><a href="?view=vivienda&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Vivienda</a></li>
                        <li id="MD"><a href="?view=economia&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Economia</a></li>
                        <li id="MD"><a href="?view=proteccion&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Protección</a></li>
                        <li id="MD"><a href="?view=ayudas&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Ayudas</a></li>
                        <li id="MD"><a href="?view=discapacidad&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Discapacidad</a></li>
                        <li id="MD"><a href="?view=proteccionespecial&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Protección Especial</a></li>
                        <li id="MD"><a href="?view=reparacion&mode=<?php echo isset($_GET['id']) ? "edit&id=".$_GET['id'] : "add" ?>"><span></span>Reparacion</a></li>
                    </ul>
                    
                    <div class="clearfix"></div>
                </nav>
            </div>