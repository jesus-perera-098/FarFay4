<?php

   session_start();

   if(isset($_SESSION['usuario'])){
       header("location: Registro.php");
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="assets/css/Estilos3.css">
</head>
<body>


    
    <main>
    

       <div class= ".contenedor__todo"  >

           <div class="caja__trasera">

               <div class="caja__trasera-login">
                   <h3>¿Ya tienes cuenta?</h3>
                   <p>Inicia Sesion para entrar en la pagina</p>
                   <button id="btn__iniciar-sesion">Iniciar Sesion</button>
               </div>

               <div class="caja__trasera-register">
                <h3>¿Aún no tienes cuenta?</h3>
                <p>Registrate  para iniciar sesion</p>
                <button id="btn__registrarse">Registrate</button>
               </div>
           </div>

           <div class="contenedor__login-register">
 
              <form action="php/login_usuario_be.php" method="POST" class="formulario__login">

                 <h2>Iniciar Sesion</h2>
                 <input type="text" placeholder="Usuario" name ="usuario">
                 <input type="password" placeholder="Contraseña" name ="clave">
                 <button>Entrar</button>

              </form>

              <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">

                <h2>Iniciar Sesion</h2>
                <input type="text" placeholder="Nombre Completo" name ="nombre_completo">
                <input type="text" placeholder="Usuario" name ="usuario">
                <input type="password" placeholder="Contraseña" name ="clave">
                <button>Registrarse</button>

              </form>

           </div>

       </div> 

    </main>

    <script src="assets/js/script.js"></script>


</body>
</html>