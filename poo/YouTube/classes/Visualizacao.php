<?php

namespace classes;
require_once 'classes/Video.php';
require_once 'classes/Gafanhoto.php';

class Visualizacao {
    private $expectador;
    private $filme;
    
    public function __construct(Gafanhoto $expectador, Video $filme) {
        $this->expectador = $expectador;
        $this->filme = $filme;
        $this->filme->play();
        $this->filme->setViews( $this->filme->getViews() + 1 );
        $this->expectador->viuMaisUm();
        $this->expectador->ganharExp();
    }
    
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    
    public function avaliarPerc($perc) {
        $nova = 0;
        if ($perc <= 20) {
            $nova = 3;
        } elseif ($perc <= 50) {
            $nova = 5;
        } elseif ($perc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
    
    public function getExpectador() {
        return $this->expectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setExpectador($expectador): void {
        $this->expectador = $expectador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }


    
}
