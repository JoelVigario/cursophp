<?php

abstract class Pessoa {
     protected $nome;
     protected $idade;
     protected $sexo;
     
     public function getNome() {
         return $this->nome;
     }

     public function getIdade() {
         return $this->idade;
     }

     public function getSexo() {
         return $this->sexo;
     }

     public function setNome($nome): void {
         $this->nome = $nome;
     }

     public function setIdade($idade): void {
         $this->idade = $idade;
     }

     public function setSexo($sexo): void {
         $this->sexo = $sexo;
     }
     
     public final function fazerAno() {
         $this->idade++;
     }

}
