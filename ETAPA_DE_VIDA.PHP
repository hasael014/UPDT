<!DOCTYPE html>
<html lang="en">
     <head>
          <title></title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="css/style.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     </head>
     <body>
     <center>
               <br>
               <br>
               <br>
               <h2>
                    <?php
                    
                    $edad = $_POST['edad'];

                    if ($edad >= 0 & $edad <= 3) {
                         echo "La edad de $edad años le pertenece a un bebé.<br>";
                    }
                    elseif ($edad >= 4 & $edad <= 12) {
                         echo "La edad de $edad años le pertenece a un niño.<br>";
                    }
                    elseif ($edad >= 13 & $edad <= 17) {
                         echo "La edad de $edad años le pertenece a un adolecente.<br>";
                    }
                    elseif ($edad >= 18 & $edad <= 35) {
                         echo "La edad de $edad años le pertenece a un joven.<br>";
                    }
                    elseif ($edad >= 36 & $edad <= 55) {
                         echo "La edad de $edad años le pertenece a un adulto.<br>";
                    }
                    elseif ($edad >= 56 & $edad <= 85) {
                         echo "La edad de $edad años le pertenece a un adulto mayor.<br>";
                    }
                    elseif ($edad >= 86 & $edad <= 120) {
                         echo "La edad de $edad años le pertenece a un abuelo.<br>";
                    }
                    else {
                         echo "La edad de $edad años no le pertenece a ningú rango.<br>";
                    }
                    ?>
               </h2>
               <br>
               <br>
               <form method="post" action="INDEX.HTML">
                    <input type="submit" name="regresar" value="Regresar">
               </form>
          </center>
     </body>
</html>