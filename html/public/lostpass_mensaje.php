<html lang="en">
<head>

    <meta charset="UTF-8">
    <base href="<?php echo APP_URL;  ?>"></base>
    <title><?php echo APP_TITLE;  ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <script src="views/js/generales.js"></script>
    <script src="views/js/lostpass.js"></script>
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
        <div class="col-md-6 formularioSesion" style="padding:60px;">            
                 <img src="views/img/Asoft.png" width="200px" align="center"> 
                 <br><br>
                    <strong>Contraseña cambiada!</strong> se ha generado una nueva contraseña: <strong><?php echo $password;; ?></strong>  prueba <a href="?view=index">iniciar sesión</a> con ella y podrás cambiarla una vez estes dentro.
                  <br>
       </div>

</div>
</section>
</body>
</html>         
        </div> 
       <div class="col-md-3"></div>   
    </div>

    </div>   
    <script src="views/web/assets/jquery/jquery-2.2.0.min.js"></script> 
    <script src="views/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
