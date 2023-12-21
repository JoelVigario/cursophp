<?php

require_once './Controlador.php';

class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function isLigado(): bool {
        return $this->ligado;
    }

    private function isTocando(): bool {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        print "<p>Ligado: " . ($this->isLigado() ? 'Sim' : 'Não');
        print "<br>Volume: {$this->getVolume()} ";
        for($i = 0; $i <= $this->getVolume(); $i += 10) {
            print ' |';
        }
        print "<br>Tocando: " . ($this->isTocando() ? 'Sim' : 'Não') . "</p>";
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if ($this->isLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        print "Fechando o menu...100%";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if ($this->isLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->isLigado() && $this->getVolume() < 100) {
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if ($this->isLigado() && $this->getVolume() > 0) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function pause() {
        if ($this->isLigado() && $this->isTocando()) {
            $this->setTocando(false);
        }
    }

    public function play() {
        if ($this->isLigado() && !$this->isTocando()) {
            $this->setTocando(true);
        }
    }
    
}
