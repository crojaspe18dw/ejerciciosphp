<html>
 <head>
  <title></title>
 </head>
 <body>
 <?php 
 $importecesta=67; //numero con dos decimales
 $tipocompra='ropa'; //mascotas o ropa
 $final;

if($importecesta<19){
    if($tipocompra=='mascotas'){
        $final='no se puede realizar el envio';
    }else if($tipocompra=='ropa'){
        $final='los gastos de envio son 9€';
    }
}else if($importecesta>19 && $importecesta<40){
    $final='los gastos de envio son 9€';
}else if($importecesta>80){
    $final='los gastos de envio son gratis';
}
echo $final;

?>

 </body>
</html>