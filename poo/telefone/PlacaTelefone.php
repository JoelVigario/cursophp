<?php

require_once './Telefone.php';

class PlacaTelefone implements Telefone {
    private $num;
    private $carga;
    private $ligado;
    private $som;
    private $falando;
    private $chamando;
    private $telefonando;
    private $disponivel;
    
    public function __construct(int $num) {
        $this->ligado = false;
        $this->chamando = false;
        $this->telefonando = false;
        $this->falando = false;
        $this->som = "geral";
        $this->carga = 4;
        $this->num = $num;
    }
    
    public function getDisponivel() {
        return $this->disponivel;
    }

    private function setDisponivel($disponivel): void {
        $this->disponivel = $disponivel;
    }   
    public function getNum() {
        return $this->num;
    }
    public function setNum($num): void {
        $this->num = $num;
    }
        public function getFalando() {
        return $this->falando;
    }
    private function setFalando($falando): void {
        $this->falando = $falando;
    }
        public function getCarga() {
        return $this->carga;
    }
    public function getLigado() {
        return $this->ligado;
    }

    public function getSom() {
        return $this->som;
    }

    public function getChamando() {
        return $this->chamando;
    }

    public function getTelefonando() {
        return $this->telefonando;
    }

    private function setCarga($carga): void {
        $this->carga = $carga;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setSom($som): void {
        $this->som = $som;
    }

    private function setChamando($chamando): void {
        $this->chamando = $chamando;
    }

    public function setTelefonando($telefonando): void {
        $this->telefonando = $telefonando;
    }

        
    public function carregar() {
        $this->setCarga(6);
        print '<br>Carregando...........Carga Completa';
    }

    public function chamar() {
        if ($this->getLigado()) {
            if ($this->getTelefonando()) {
                print '<br>ERRO: termine o telefonema';
            } elseif ($this->getFalando()) {
                print '<br>ERRO: já tem um telefonema em curso!';
            } else {
                $this->setChamando(true);
                $this->alertaChamada();
                $this->setDisponivel(false);
                $this->descarregar();
            }
        } else {
            print '<br>ERRO: Telefone está desligado';
        }
    }
    
    private function alertaChamada() {
        switch ($this->getSom()) {
            case "geral":
                print '<br>O telefone está chamando...';
                break;
            case "vibrador":
                print '<br>«»«»zzz«»«»';
                break;
            case "silencio":
                print '<br>..';
        }
    }

    private function descarregar() {
        if ($this->getCarga() == 2) {
            print '<br>AVISO: a carga está acabando!';
        } elseif ($this->getCarga() == 1) {
            print '<br>AVISO: a carga acabou! Desligando...';
            $this->desligar();
        }  
        if ($this->getCarga() > 0) {
            $this->setCarga($this->getCarga() - 1);
        }
    }

    public function desligar() {
        if ($this->getLigado()) {
            $this->verificarLigacao();
            $this->setDisponivel(false);
            $this->setLigado(false);
            print '<br>O telefone foi desligado';
        } else {
            print '<br>ERRO: o telefone já está desligado!';
        }
    }

    public function ligar() {
        if (! $this->getLigado()) {
            if ($this->getCarga() > 0) {
                $this->setLigado(true);
                $this->setDisponivel(true);
                print '<br>O telefone foi ligado';
            } else {
                print '<br>ERRO: o telefone está sem carga!';
            }
        } else {
            print '<br>ERRO: o telefone já está ligado!';
        }
    }

    public function mudarSomPara(string $som) {
        if ($this->getLigado()) {
            if ($som != "vibrador" && $som != "geral" && $som != "silencio") {
                print '<br>ERRO: Os modos de som permitidos são: "geral", "vibrador" e "silencio"';
            } else {
                $this->setSom($som);
                print "<br>Som alterado para $som";
                $this->descarregar();
            }
        } else {
            print '<br>ERRO: o telefone está desligado!';
        }
    }

    public function telefonarPara(string $contacto) {
        if ($this->getLigado()) {
            if ($this->getChamando()) {
                print '<br>ERRO: o telefone está chamando, atenda ou termine a chamada!';
            } elseif ($this->getFalando()) {
                print '<br>ERRO: já tem um telefonema em curso!';
            } else {
                $this->setTelefonando(true);
                print "<br>Ligando para $contacto";
                $this->setDisponivel(false);
                $this->descarregar();
            }
        } else {
            print '<br>ERRO: o telefone está desligado!';
        }
    }

    public function atender() {
        if ($this->getLigado()) {
            if ($this->getChamando()) {
                $this->setChamando(false);
                $this->setFalando(true);
                $this->setDisponivel(false);
                print "<br>$this->num está falando...";
                $this->descarregar();
            } else {
                print '<br>ERRO: o telefone não está chamando!';
            }
        } else {
            print '<br>ERRO: o telefone está desligado!';
        }
    }
    
    public function atendido() {
        if ($this->getLigado() && $this->getTelefonando()) {
            $this->setTelefonando(false);
            $this->setFalando(true);
            print "<br>$this->num está falando...";
        } else {
            print "<br>ERRO: $this->num não está telefonando!";
        }
    } 

    public function terminarChammada() {
        if ($this->getLigado()) {
            if ($this->getFalando() || $this->getTelefonando() || $this->getChamando()) {
                $this->verificarLigacao();
                $this->setDisponivel(true);
                print '<br>Chamada terminada';
            } else {
                print '<br>ERRO: não há nenhuma chamada em curso!';
            }
        } else {
            print '<br>ERRO: o telefone está desligado!';
        }
    }
    
    private function verificarLigacao() {
        if ($this->getChamando()) {
            $this->setChamando (false);
        } elseif ($this->getTelefonando()) {
            $this->setTelefonando (false);
        } elseif ($this->getFalando()) {
            $this->setFalando(false);
        }
    }
}
