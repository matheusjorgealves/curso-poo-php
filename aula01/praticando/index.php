<?php

    require_once("classes/JogoFutebol.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício POO</title>
</head>
<body>
    <header>
        <h1>Meu primeiro exercício solo em POO</h1>
    </header>

    <main>
        <?php
            // instanciando um objeto:
            $jogo1 = new JogoFutebol;

            // acessando os atributos do objeto:
            $jogo1->horario = "18:00";
            $jogo1->mandante = "São Paulo";
            $jogo1->visitante = "Vasco";
            $jogo1->estadio = "MorumBIS";
            $jogo1->marcado = true;

            // chamando métodos do objeto:
            $jogo1->marcarJogo();
            $jogo1->desmarcarJogo();

            // exibindo o estado atual do jogo1:
            echo "<p>jogo 1:</p>";
            var_dump($jogo1);

            $novoEstadio = "MorumBIS";

            // chamando um método do objeto:
            $jogo1->mudarEstadio($novoEstadio);

            // exibindo o estado atual do jogo1:
            echo "<p>jogo 1 atualizado:</p>";
            var_dump($jogo1);
        ?>
    </main>

    <footer>
        <p>Site desenvolvido por <a href="https://GitHub.com/matheusjorgealves" target="_blank">Matheus Jorge</a></p>
    </footer>
</body>
</html>