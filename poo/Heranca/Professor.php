<?php

require_once './Pessoa.php';

class Professor extends Pessoa {
    private $especialidade;
    private $salario;
    
    public function receberAumento() {
        print "<p>O prof. $this->nome, recebeu um aumento</p>";
    }
}
