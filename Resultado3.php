<?php require_once 'validar.php'; ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>validacion formulario</div>
            <?php
                //Entrada Datos
                 $nombre = $_REQUEST['nombre'];
                 $edad = $_REQUEST['edad'];
                 $beca = isset($_REQUEST['beca']);
                 $sexo= (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:false;
                 $estado = (isset($_REQUEST['estado']))?$_REQUEST['estado']:false;
                 $aficiones []= (isset($_REQUEST['aficiones']))?$_REQUEST['aficiones']:false;
                //Validar datos 
                $error =false;
                $mensaje_error ="ERROR: ";
                //Validar nombre
                $nombre = limpiarTexto($nombre);
                if (!validarNombre($nombre)) {
                    $error = true;
                    $mensaje_error .= "Nombre obligatorio<br>";
                } 
                //Validar edad
                if (!validarEdad($edad)) {
                    $error = true;
                    $mensaje_error .= "Edad debe ser un número...<br>";
                }
                 if (!($sexo)) {
                    $error = true;
                    $mensaje_error .= "Sexo no elegido...<br>";
                }
                if (!($estado)) {
                    $error = true;
                    $mensaje_error .= "Estado civil no elegido...<br>";
                }
                if (!($aficiones)) {
                    $error = true;
                    $mensaje_error .= "Debe elegir alguna aficion...<br>";
                }
                                              
               //Cálculo y Salida
                if(!$error) {     
                    //Si no hay error
                    if ($edad>=18) {
                        echo $nombre." es Mayor de edad<br>";
                    } else {
                        echo $nombre." es Menor de edad<br>";
                    }  
                if (resultadoCheck($beca)) {
                        echo "Solicita beca<br>";
                }else{
                        echo "No solicita beca<br>";
                }
                echo "sexo = ".$sexo."<br>";
                echo "Estado civil = ".$estado."<br>";
                echo "aficciones Elegidas<br>";
                                }else{
                    //si hay error
                    echo $mensaje_error;
                    echo "<a href='javascript:history.go(-1);'>Volver al formulario<a href/>";
                }
             ?>  
    </body>
</html>

