<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
    $numerouno=rand ( 0,100 );
    $numerodos=rand ( 0,100 );
    $numerotres=rand ( 0,100 );
    if($numerouno<$numerodos || $numerodos<$numerotre){
        echo $numerotres;
    }
    if($numerotre<$numerodos || $numerodos<$numerouno){
        echo $numerotres;
    }
    if($numerouno<$numertres || $numerotres<$numerodos){
        echo $numerotres;
    }

 ?>
 </body>
</html>