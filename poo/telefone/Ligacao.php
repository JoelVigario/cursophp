<?php

require_once './Telefone.php';
require_once './PlacaTelefone.php';

class Ligacao {
    private PlacaTelefone $emissor;
    private PlacaTelefone $receptor;
    
    public function __construct(PlacaTelefone $emissor, PlacaTelefone $receptor) {
        $this->emissor = $emissor;
        $this->receptor = $receptor;
    }
    
    public function getEmissor(): PlacaTelefone {
        return $this->emissor;
    }

    public function getReceptor(): PlacaTelefone {
        return $this->receptor;
    }

    public function setEmissor(PlacaTelefone $emissor): void {
        $this->emissor = $emissor;
    }

    public function setReceptor(PlacaTelefone $receptor): void {
        $this->receptor = $receptor;
    }
    
    public function ligar() {
        if ($this->getEmissor() != null && $this->getReceptor() != null && ($this->emissor != $this->receptor) ) {
            
            if ($this->getEmissor()->getDisponivel() && $this->getReceptor()->getDisponivel()) {
                $this->getEmissor()->telefonarPara("{$this->getReceptor()->getNum()}");
                $this->getReceptor()->chamar();
                $this->atender();
            } else {
                print "<br>O numero " . ( $this->getEmissor()->getDisponivel() ? $this->getReceptor()->getNum() : $this->getEmissor()->getNum() ) 
                        . " não está disponível!";
            }
            
        } else {
            print '<br>Introduza os cantactos!';
        }
    }
    
    public function atender() {
        if ($this->getEmissor()->getTelefonando() && $this->getReceptor()->getChamando()) {
            switch (rand(0, 1)) {
                case 1:
                    $this->getEmissor()->atendido();
                    $this->getReceptor()->atender();
                    break;
                case 0:
                    print '<br>Chamada não atendida!';
                    $this->getEmissor()->terminarChammada();
                    $this->getReceptor()->terminarChammada();
            }
        }
    }
    
    public function terminarLigacao() {
        if ($this->getEmissor()->getFalando() && $this->getReceptor()->getFalando()) {
            $this->getEmissor()->terminarChammada();
            $this->getReceptor()->terminarChammada();
        }
    }
    
}
