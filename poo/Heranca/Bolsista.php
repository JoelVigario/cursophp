<?php
require_once './Aluno.php';
class Bolsista extends Aluno {
     private $bolsa;
     
     public function renovarBolsa() {
         print "<p>Bolsa renovada</p>";
     }
     
     public function pagarMensalidade() {
         print "<p>Bolsista não paga</p>";
     }
}
