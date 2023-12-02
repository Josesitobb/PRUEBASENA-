<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.php"> <h4>Rosella</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="./register.php" method="post"  onsubmit="return validarRegister();">
                                    <!-- <h1>title="SOLO LETRAS CON ESPACIO,MAXIMO 10 CARACTERES" required pattern="(^[a-zA-Z]{1,10}[a-zA-Z]{1,10}$)" 
                                    title="SOLO LETRAS CON ESPACIO,MAXIMO 10 CARACTERES" required pattern="(^[a-zA-Z]{1,10}[a-zA-Z]{1,10}$)"
                                    title="SOLO LETRAS CON ESPACIO,MAXIMO 30 CARACTERES" required pattern="(^[a-zA-Z]{1,30}[a-zA-Z]{1,30}$)"
                                    </h1> -->
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Nombre" name="usernamereg" id="usernamereg" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Apellido" name="lastnamereg" id="lastnamereg" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Nombre De Usuario" name="nameuserg"  id="nameuserg" required >
                                    </div> 
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Contraseña" name="passwordreg" id="passwordreg" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Correo" name="emailreg" id="emailreg" required >
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Ya tiene cuenta <a href="page-login.php" class="text-primary">click aqui Up </a> :3</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="./js/validaciones/ValidacionRegister.js"></script>
</body>
</html>





