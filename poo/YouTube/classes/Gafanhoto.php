<?php

namespace classes;
require_once 'classes/Pessoa.php';

class Gafanhoto extends Pessoa {
     private $login, $totAssistido;
     
     public function __construct($nome, $idade, $sexo, $login) {
         parent::__construct($nome, $idade, $sexo);
         $this->login = $login;
         $this->totAssistido = $totAssistido = 0;
     }
     
     public function viuMaisUm() {
         $this->totAssistido++;
     }

}
