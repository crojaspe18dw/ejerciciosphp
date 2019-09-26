<html>
 <head>
  <title></title>
 </head>
 <body>

 <?php 
$numerointroducido=2;
$resultado=0;

if($numerointroducido>0){
    if($numerointroducido%2==0){
        $resultado=$numerointroducido/2;
        echo $resultado;
    }else 
        $resultado=$numerointroducido*3+1;
        echo $resultado;
}    else
echo "introduzca un numero positivo";

 ?>
 



 </body>
</html>