<html>
 <head>
  <title></title>
 </head>
 <body>

 <?php  
    $pisos=rand ( 0,100 );
    $puertas=rand ( 0,100 );
    for($x=1 ; $x<=$pisos ; $x++ ){
        for($i=1 ; $i<=$puertas ; $i++){
            print ' piso '.$x.' puerta '.$i.' <br>';
           
            
        }
    }
 ?>
 </body>
</html>