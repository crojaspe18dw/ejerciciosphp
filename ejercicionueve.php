<html>
 <head>
  <title></title>
 </head>
 <body>

 <?php 
$ventas=8000;
$gana=0;
if($ventas>0 && $ventas<=10000){
    $gana=$ventas*5/100;
}else if($ventas>10000 && $ventas<=20000){
    $gana=$ventas*8/100;
}else if($ventas>20000 && $ventas<=40000){
    $gana=$ventas*10/100;
}else if($ventas>40000){
    $gana=$ventas*14/100;
}
echo $gana;
 ?>
 



 </body>
</html>