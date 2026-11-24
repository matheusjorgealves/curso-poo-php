<?php

// uma classe é criada da seguinte forma:
class Caneta {
    // uma classe possui atributos, métodos e estado.
    
    // para declarar atributos eu devo fazer o seguinte:
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    // para acessar um atributo em um método dentro da própria classe eu uso $this no lugar do objeto

    // métodos (ou funções):
    function rabiscar () {
        if ($this->tampada === true) {
            echo "<p>Erro: Não posso rabiscar pois a caneta está tampada!</p>";
        } else {
            echo "<p>Rabiscando...</p>";
        }
    }

    function tampar () {
        $this->tampada = true;
    }

    function destampar () {
        $this->tampada = false;
    }
}