<?php

    // requer o arquivo da classe Caneta
    require_once("classes/Caneta.php");

    // recebendo o resultado do form
    $m = $_POST["nomeModelo"];
    $c = $_POST["corCaneta"];
    $p = $_POST["pontaCaneta"];

    // instanciando o objeto. passando argumentos por conta do método construtor
    $c1 = new Caneta($m, $c, $p);

    // chamando os métodos para modificar os atributos do objeto
    $c1->setModelo($m);
    $c1->setPonta($p);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <header>
        <h1>Aula 04 - Getter, Setter e Construtor</h1>
    </header>

    <main>
        <form action="" method="post">
            <label for="nomeModelo">Modelo da caneta:</label>
            <input type="text" name="nomeModelo" id="nomeModelo">
            <br> <br>

            <label for="corCaneta">Cor da caneta:</label>
            <input type="text" name="corCaneta" id="corCaneta">
            <br> <br>

            <label for="pontaCaneta">Ponta da caneta:</label>
            <input type="number" name="pontaCaneta" id="pontaCaneta" step="0.01">
            <br> <br>

            <button type="submit">Enviar</button>
        </form>
    </main>

    <h2>Exibindo os atriutos do objeto:</h2>

    <?php
        echo "Eu tenho uma caneta ". $c1->getModelo() ." de cor ". $c1->getCor() ." de ponta ". $c1->getPonta();
    ?>

    <h2>Exibindo o estado atual do objeto:</h2>

    <?php
        print_r($c1);
    ?>

    <footer>
        <p>Site desenvolvido por <a href="https://GitHub.com/matheusjorgealves" target="_blank">Matheus Jorge</a></p>
    </footer>
</body>
</html>