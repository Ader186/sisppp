


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/plantilla.css">
    <title>Login</title>
</head>
<body>
    <div class="contenido">
        <center>
            <fieldset>
                <div class="user-wrapper">
                    <center><img src="vendor/images.png" width="80px" height="80px" alt=""></center> 
                    <div><br>
                        <h3>Iniciar Sesión</h3>
                        <h4>sistema de gestión de prácticas pre profesionales</h4>
                        <div class="loader" hidden>
                            <img src="vendor/abc.gif" alt="" style="width: 50px;height:50px;">
                        </div>
                        <div id="incorecto" class="alert alert-danger sm" role="alert" hidden>
                            contraseña/usuario no coinciden!
                        </div>
                        <div id="notif" class="alert alert-danger " role="alert" hidden>
                            su cuenta esta inactivo!
                        </div>
                        <div id="llenecamp" class="alert alert-danger" role="alert" hidden>
                            Llene los campos vacios!
                        </div>
                        <div id="conteoincorecto" class="alert alert-info" role="alert" hidden>
                            Contantarse con el administrador!
                        </div>
                        <input type="text" name="email" placeholder="Usuario" autofocus id="txt_usu" autocomplete="null">
                        <input type="password" name="contra" placeholder="password" id="txt_con">
                        <select class="js-example-basic-single" name="state" id="cbm_rol" >
                            <option value="" style="background-color:#81DAF5;">
                                <b>seleccione</b>
                            </option>
                            <option value="PRACTICANTE">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRACTICANTE</option>
                            <option value="DECANO">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DECANO</option>
                            <option value="COMISIÓN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMISIÓN</option>
                            <option value="ASESOR">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASESOR</option>
                            <option value="ADMINISTRADOR">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMINISTRADOR</option>
                        </select>
                        <br>
                        <input type="submit" name="login"  id="idbotonloging" value="INGRESAR" onclick="VerificarUsuario()" >
                    </fieldset>
                </center>
            </div> 

<!--=================================================================-->
            <script src="../js/usuario.js"></script>
            
            <script>
            txt_usu.focus();
// $('.js-example-basic-single').select2();
            </script>
</body>
</html>