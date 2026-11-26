<?php

// a maneira de acessar um atributo/método privado é por meio dos métodos get e set

// classe Caneta
class Caneta {
    // atributos da classe
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // método construtor (assim que o objeto for criado ele executa as instruções)
    public function __construct ($m, $c, $p) { // o nome da classe serve como método construtor
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function tampar () {
        $this->tampada = true;
    }

    // métodos getter (acessa) e setter (modifica). normalmente o set precisa de parâmetro
    public function getModelo () {
        return $this->modelo;
    }
    public function setModelo ($m) {
        $this->modelo = $m;
    }

    public function getCor () {
        return $this->cor;
    }
    public function setCor ($c) {
        $this->cor = $c;
    }

    public function getPonta () {
        return $this->ponta;
    }
    public function setPonta ($p) {
        $this->ponta = $p;
    }
}