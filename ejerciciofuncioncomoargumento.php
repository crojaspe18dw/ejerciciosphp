<html>
<head>
<title></title>
</head>
<body>
<?php
function enviar ($func,$p1,$p2){
    
    $resul=$func($p1,$p2);
    return $resul;
}
function resta ($p,$pp){
    $res=$p-$pp;
    return $res;
}
function suma ($p,$pp){
    $res=$p+$pp;
    return $res;
}
function multiplicacion ($p,$pp){
    $res=$p*$pp;
    return $res;
}
function division ($p,$pp){
    $res=$p/$pp;
    return $res;
}
$numerouno=4;
$numerodos=2;

$resultado=enviar(multiplicacion,$numerouno,$numerodos);


echo $resultado;



?>
</body>
</html>