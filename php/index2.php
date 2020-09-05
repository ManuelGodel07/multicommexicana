<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Chrome-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon/MCM.ico">
    <link rel="stylesheet" type="text/css" href="../Jquery/style5.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Recursos Humanos</title>
</head>
<body>
    <?php
        include("conexion.php");
    ?>
    <!----<a href="index17.html">usuario</a>
    <a href="index18.html">revisión</a>-->
    <div class="login">
        <div class="wrap">
            <div id="toggle-wrap">
                <div id="toggle-terms">
                    <div id="cross">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="terms">
                <p>Solo se permite un registro por usuario.</p><br>
                <p>En dado caso de olvido de contraseña hay una sección para crear una nueva contraseña</p>
            </div>
            <div class="recovery">
                <h2>Recuperar contraseña</h2>
                <p>Ingresa tu correo registrado</p>
                <form class="recovery-form" action="#" method="post">
                    <input type="text" name="input" id="user_recover" placeholder="Ingresa tu correo">
                    <input type="submit" class="button" value="Enviar">
                </form>
                <p class="mssg">Un email para enviar</p>          
            </div>
            <div class="content">
                <div class="logo">
                    <img src="../img/MCM.png" alt="MCM">
                </div>
                <div id="slideshow">
                    <div class="one">
                        <h2><span>Empresa</span></h2>
                        <p>Multicom Mexicana te ayuda a crecer como profesional.</p>
                    </div>
                    <div class="two">
                        <h2><span>Lo destacado</span></h2>
                        <p>Se dara un premio al mejor trabajador del mes</p>
                    </div>
                    <div class="three">
                        <h2><span>Capacitación</span></h2>
                        <p>Cursos sobre habilidades en el trabajo</p>
                    </div>
                    <div class="four">
                        <h2><span>Comunicados</span></h2>
                        <p>Enterate de las decisiones que esta tomano la empresa para alcanzar el exito</p>
                    </div>                    
                </div>
            </div>
            <div class="user">
                <!---
                <div class="actions">
                    <a href="#signup-tab-content" class="help">Entra</a><a href="#login-tab-content" class="faq"></a>
                </div>
                -->
                <div class="form-wrap">
                    <div class="tabs">
                        <h3 class="login-tab"><a href="html\index17.html" class="log-in active"><span>Iniciar sesión</span></a></h3>
                        <h3 class="signup-tab"><a href="#signup-tab-content" class="sign-up"><span>Registrarse</span></a></h3>
                    </div>
                    <div class="tabs-content">
                        <div id="login-tab-content" class="active">
                                <form name="envia_form" action="#" class="login-form" method="POST" enctype="application/x-www-form-urlencoded">
                                    <input type="text" name="nombre_txt" id="entrada" id="user_login" autocomplete="off" placeholder="Correo electronico">
                                    <input type="password" name="password_txt" id="entrada" id="user_pass" autocomplete="off" placeholder="contraseña">
                                    <input type="checkbox" class="checkbox" checked id="remember_me">
                                    <label for="remember_me">Recordar contraseña</label>
                                    <input type="submit" name="enviar_btn" value="Iniciar sesión" id="boton">
                                </form>
                            <div class="help-action">
                                <p><i class="fa fa-arrow-left" aria-hidden="true"><a href="#" class="forgot">¿Olvidaste tu contraseña?</a></i></p>
                            </div>
                        </div>
                        <div id="signup-tab-content">
                            <form class="signup-form" action="insertar.php" method="post">
                                <input type="email" name="user_email" id="entrada" id="user_email" autocomplete="off" placeholder="Correo">
                                <input type="text" name="user_name" id="entrada" id="user_name" autocomplete="off" placeholder="Nombre de usuario">
                                <input type="password" name="user_pass" id="entrada" id="user_pass" autocomplete="off" placeholder="Contraseña">
                                <input type="submit" id="boton" value="Registrarme">
                            </form>
                            <div class="help-action">
                                <p>Llena los datos para registrarte</p>
                                <p><i class="fa fa-arrow-left" aria-hidden="true"><a href="#" class="agree">Terminos del registro</a></i></p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../Jquery/script2.js"></script>
</body>
</html>