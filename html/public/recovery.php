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
        body{ background-color: #15b0b0}
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
                 <img src="views/img/Asoft.png" width="200px"> 
                  <h4 class="" id="">Recuperar Contraseña</h4>              
                <div  onkeypress="return runScriptLostpass(event)">                  
                  <div class="form-group ">
                      <label for="emailLostpass">Email</label>
                    <input type="email" class="form-control" id="emailLostpass" placeholder="Email" required>
                  </div>
                  <button type="submit" class="btn btn-default" onclick="goLostpass();">Recuperar</button>
                </div>   
                 <div style="text-align: right">
                                 <br><a href="?view=index">Iniciar Sesión</a>   
                </div>
                <div id="_AJAX_LOSTPASS_" style="padding-top:10px;"></div>        
        </div> 

       <div class="col-md-3"></div>   
    </div>

    </div>   
    <script src="views/web/assets/jquery/jquery-2.2.0.min.js"></script> 
    <script src="views/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
