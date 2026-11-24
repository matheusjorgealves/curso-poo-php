<?php

    // requer o arquivo da classe caneta.
    require_once("classes/Caneta.php");

    // instanciando a classe (criando o objeto):
    $c1 = new Caneta;

    // o objeto é modelado a partir da classe, ou seja, objetos oriundos de uma mesma classe possuem os mesmos atributos, métodos e estados.

    // acessando os atributos do objeto:
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = true;

    // chamando os métodos de um objeto (definidos pela classe):
    $c1->destampar();
    $c1->rabiscar();
    $c1->tampar();

    var_dump($c1);

    // criando outro objeto:
    $c2 = new Caneta;

    // atributos do objeto:
    $c2->cor = "Verde";
    $c2->carga = 50;

    // chamando um método desse objeto:
    $c2->tampar();

    echo "<br><br>";
    var_dump($c2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - POO</title>
</head>
<body>
    
</body>
</html>