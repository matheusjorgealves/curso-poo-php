<?php

class JogoFutebol {
    // atributos
    var $horario;
    var $mandante;
    var $visitante;
    var $estadio;
    var $marcado;

    // métodos
    function marcarJogo () {
        if ($this->marcado === true) {
            echo "<p>O jogo já está marcado!</p>";
        } else {
            $this->marcado = true;
        }
    }

    function desmarcarJogo () {
        if ($this->marcado === false) {
            echo "<p>O jogo já está desmarcado!</p>";
        } else {
            $this->marcado = false;
        }
    }

    function mudarEstadio ($novoEstadio) {
        if ($this->estadio === $novoEstadio) {
            echo "<p>O novo estádio deve ser diferente do antigo estádio!</p>";
        } else {
            $this->estadio = $novoEstadio;
        }
    }
}