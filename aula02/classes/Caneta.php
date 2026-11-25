<?php

class Caneta {
    
    // aprendendo sobre a visibilidade dos atributos.
    // public = o objeto pode acessar os atributos da classe.
    // private = o objeto não pode acessar os atributos da classe.
    // protected = objetos específicos podem acessar os atributos da classe.
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada = true;

    // visibilidade dos métodos funciona da mesma forma dos atributos.
    public function rabiscar () {
        if ($this->tampada === true) {
            echo "<p>Erro: Não posso rabiscar pois a caneta está tampada!</p>";
        } else {
            echo "<p>Rabiscando...</p>";
        }
    }

    public function tampar () {
        if ($this->tampada === true) {
            echo "<p>A caneta já está tampada!</p>";
        } else {
            $this->tampada = true;
            echo "<p>Tampei a caneta!</p>";
        }
    }

    public function destampar () {
        if ($this->tampada === false) {
            echo "<p>A caneta já está destampada!</p>";
        } else {
            $this->tampada = false;
            echo "<p>Destampei a caneta!</p>";
        }
    }
}