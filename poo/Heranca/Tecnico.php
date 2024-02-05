<?php
require_once './Aluno.php';
class Tecnico extends Aluno {
    private $regProfissional;
    
    public function praticar() {
        print "<p>Praticando...</p>";
    }
}
