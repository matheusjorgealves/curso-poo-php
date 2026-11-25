<?php

    // requer o arquivo da classe caneta.
    require_once("classes/Caneta.php");

    $c1 = new Caneta;

    $c1->modelo = "BIC cristal";
    $c1->cor = "Azul";
    //$c1->ponta = 0.5;
    //$c1->carga = 99;
    //$c1->tampada = true;

    // os métodos são públicos. porém, eles são capazes de alterar um atributo protegido. o atributo tampada, por exemplo, é protegido, mas os dois métodos de tampar e destampar coneguem modificar seu valor.
    $c1->destampar();
    $c1->rabiscar();
    $c1->tampar();
    
    print_r($c1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    
</body>
</html>