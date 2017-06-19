<?php 
session_start();
?>
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="frmusuario">
            <div><label>Nombre:</label><input id="nom" type="text" name="nomusuario" ></div>
            <div><label>Usuario:</label><input id="nomusuario" type="text" name="usuario" ></div>
            <div><label>Clave:</label><input id="clave" type="password" name="clave" ></div>
            <input id="enviar" type="button" onclick="" value="Enviar"> 
        </form>
        <?php
        
        $nomusuario = (isset($_SESSION['nomusuario']) ? $_SESSION['nomusuario'] : null);
        $usuario = (isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null);
        $clave = (isset($_SESSION['clave']) ? $_SESSION['clave'] : null);
        
        $link = mysqli_connect("localhost", "root", "", "solostocks");

            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $sql = "INSERT INTO acceso (contrasena,nombreUsuario,nombre) VALUES ($clave ,$usuario,$nomusuario)";

            if(mysqli_query($link, $sql)){
                echo "Records inserted successfully.";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            mysqli_close($link);
           
        
        ?>
    </body>
    <script>
    
    </script>
</html>
