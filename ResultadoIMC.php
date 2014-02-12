
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado </div>
        <?php
               // print_r($_REQUEST);
                $masa = $_REQUEST['masa'];
                $estatura = $_REQUEST['estatura'];
                $IMC = 0.0;
                $clasificacion ="";
              //Calculo
                $estatura = $estatura /100; //cms a mts
                $IMC = $masa * ($estatura * $estatura);
                
                echo "Valor IMC = ";
                echo $IMC;
    
         
         
                 if ($IMC<=18.5) {
                        $clasificacion = "Bajo peso";
                   }elseif ($IMC < 25) {
                     $clasificacion = "Normal";
                 } elseif ($IMC < 30) {
                     $clasificacion = "Sobrepeso";
                 }else{
                     $clasificacion = "Obesidad";
                 }
                 echo "<br>";
                 echo "Clasificacion = ".$clasificacion;
          ?>
    </body>
            
</html>

