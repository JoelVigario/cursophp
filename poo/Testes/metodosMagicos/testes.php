<?php

session_start();

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    public final const COR_DO_SANGUE = "Vermelho";
    private $corSangue;
    
    public function __construct() {
        $this->corSangue = self::COR_DO_SANGUE;
    }
    
    public function __set($nome, $nom) {
        $this->nome = $nom;
    }
    
    public function __get($nome) {
        return $this->nome;
    }
}

class Vet {
    private $vetor = array();
    
    public function __set($nome, $valor) {
        $this->vetor[$nome] = $valor;
    }
    
    public function __get($nome) {
        return $this->vetor[$nome];
    }
    
    public function __toString() {
        $dados = "";
        foreach ($this->vetor as $dado) {
            $dados = $dados . $dado . ' ';
        }
        return $dados;
    }
    
    public function __invoke() {
        print "Vetor invocado!";
    }
}

$ps = array();
$ps[] = new Pessoa();
$ps[0]->nome = "Maura";

$v = new Vet();
$v->cargo = 'Gerente';
$v->empressa = 'Suplina';


$_SESSION['res'] = $ps[0];
header('Location: index.php');

