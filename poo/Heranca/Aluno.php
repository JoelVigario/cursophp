<?php
require_once './Pessoa.php';
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    
    public function pagarMensalidade() {
        print "<p>Pagando a mensalidade o aluno $this->nome";
    }
}
