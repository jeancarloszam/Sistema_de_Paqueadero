<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/App_Soluciones_Generales/assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.html">UTLVT</a>
            </div>
            </div>
        </nav>
    </header>
    <div class="contenedor-flexbox">
        <div class="Registro">
            <img class="img_escudo" src="/imagenes/ESCUDETO_UTE-LVT-removebg-preview.png" alt="Escudo">
            <h4>SOMOS</h4>
            <div class="word">
                <span>U</span>
                <span>T</span>
                <span>L</span>
                <span>V</span>
                <span>T</span>
            </div>
        </div>
        <div class="login-box">
            <img src="./imagenes/perfil.png" width="100px" height="100px">
            <?php  
            include("/xampp/htdocs/App_Soluciones_Generales/conexion/conexion.php");
            include("/xampp/htdocs/App_Soluciones_Generales/controladores/controlador_login.php");
            ?>
            <form action="" method="post">
                <div class="user-box">
                    <input type="text" id="usuario" name="usuario" required="">
                    <label>Usuario</label>
                </div>
                <div class="user-box">
                    <input type="password" id="password" name="password" required="">
                    <label>Contraseña</label>
                </div>
                <center>
                    <input type="submit" value="Entrar" name="boton_enter" id="boton_enter">
                </center>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/Registros/js/script.js"></script>
</body>
</html>
</script>