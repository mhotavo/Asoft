 <nav style="border-radius: 0px 0px 6px 6px;">
                <ul class="menu">
                    <li><a href="?view=home"><span class="iconic home"></span></a></li>
                    <li><a href=""><span class="iconic plus-alt"></span>Ingresar</a>                    
                        <ul>
                            <li><a href="?view=validardesplazados">Desplazados</a></li>
                           <!-- <li><a href="?view=validarvictimas">Otras Victimas</a></li>-->
                        </ul>
                    </li>

                    <li><a href="#"><span class="iconic magnifying-glass"></span>Informes</a>
                        <ul>
                            <li><a href="#">Informe Parcial</a></li>
                            <li><a href="#">Informe Total</a></li>					
                        </ul>
                    </li>

                    <li><a href="?view=listardesplazados"><span style="vertical-align: top;" class="fa fa-list-alt fa-2x"></span> Listado Desplazados</a></li>

                    <li><a href="#"><i class="fa fa-user fa-lg"></i> <?php echo $users[$_SESSION['app_id']]['NOM_COMPLETO']  ?>, <?php echo $users[$_SESSION['app_id']]['DOC']  ?></a>
                        <ul style="width:100%;">
                            <li><a href="?view=perfil&id=<?php echo $_SESSION['app_id']; ?>"><i class="fa fa-gear fa-lg"></i> Mi perfil</a>
                            <li><a href="?view=logout"><i class="fa fa-sign-in fa-lg"></i> Cerrar Sesión</a>

                        </ul>
                    </li>
                </ul>

                <div class="clearfix"></div>

            </nav>