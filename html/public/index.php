<html lang="en">
<head>

    <meta charset="UTF-8">
    <base href="<?php echo APP_URL;  ?>"></base>
    <title><?php echo APP_TITLE;  ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <script src="views/js/generales.js"></script>
    <script src="views/js/login.js"></script>
    <link rel="stylesheet" href="views/css/style.css"/>
    <link href="views/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{ background-color: #300404}
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-xs-12" style="height:25%;"></div>
    </div>
     <div class="row">
        <div class="col-md-3" ></div>
        <div class="col-md-6 formularioSesion">            
                 <!--<h1 class="" id="">INICIAR SESION</h1>  -->
                 <img src="views/img/Asoft.png" width="200px">             
                <div  onkeypress="return runScriptLogin(event)">
                        <table width="100%" border="1" align="center">
                            <tr>
                                <td style="text-align:right;">USUARIO: &nbsp; </td>
                                <td style="text-align:left;"><input id="usuario" type="text" name="txtUsuario" required></td>
                            </tr>
                            <tr>
                                  <td style="text-align:right;">CONTRASEÑA: &nbsp;</td>
                                <td style="text-align:left;"><input id="contrasena" type="text" name="txtContrasena" required></td>
                            </tr>
                            <tr>
                            <td>&nbsp;</td>
                                <td><br>
                                    <label> <input type="checkbox" value="1" id="session_login" checked> Recordarme </label>
                                </td>
                            </tr>
                        </table>                      
                        <button class="btn btn-default" onclick="goLogin();" >  Iniciar Sesión </button>
                             <div style="text-align: right">
                                 <br><a href="?view=lostpass">¿Olvidaste tu contraseña?</a>   
                             </div>



                </div>   
                <div id="_AJAX_LOGIN_" style="padding-top:10px;"></div>        
        </div> 

       <div class="col-md-3"></div>   
    </div>

    </div>   
    <script src="views/web/assets/jquery/jquery-2.2.0.min.js"></script> 
    <script src="views/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
