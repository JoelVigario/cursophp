<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $aberta;
    
    public function __construct(string $dono) {
        $this->setDono($dono);
        $this->setAberta(false);
        $this->setSaldo(0);
        $this->setNumConta(rand());
    }
    
    public function abrirConta(string $tipo) {
        if ($this->isAberta()) {
            return "Você já tem uma conta aberta, remova o dinheiro e feche para abrir outra!";
        } else {
            if ($tipo == 'cc') {
                $this->setTipo($tipo);
                $this->setAberta(true);
                $this->setSaldo(50);
            } elseif ($tipo == 'cp') {
                $this->setTipo($tipo);
                $this->setAberta(true);
                $this->setSaldo(150);
            }
        }
    }
    
    public function fecharConta() {
        if ($this->isAberta()) {
            if ($this->getSaldo() == 0) {
                $this->setAberta(false);
                return "A conta foi fechada com sucesso!";
            } else {
                return "Não deve haver nenhum saldo na sua conta antes de fechá-la!";
            }
        } else {
            return "A sua Conta já está fechada!";
        }
    }
    
    public function depositar(float $dinheiro) {
        if($this->isAberta()) {
            $this->setSaldo($this->getSaldo() + $dinheiro);
            return "Valor depositado com Sucesso";
        } else {
            return "A sua conta não foi aberta!";
        }
    }
    
    public function levantar(float $dinheiro) {
        if ($this->isAberta()) {
            if ($this->getSaldo() >= $dinheiro) {
                $this->setSaldo($this->getSaldo() - $dinheiro);
                return "Valor levantado com sucesso";
            } else {
                return "O seu saldo é insuficiente!";
            }
        } else {
            return "A sua conta não foi aberta!";
        }
    }
    
    public function pagarMensal():void {
        if ($this->isAberta()) {
            if ($this->getTipo() == 'cc') {
                $this->setSaldo($this->getSaldo() - 12);
            } elseif ($this->getTipo() == 'cp') {
                $this->setSaldo($this->getSaldo() - 20);
            }
        }
    }
    
    public function getNumConta():int {
        return $this->numConta;
    }
    
    public function setNumConta(int $numConta) {
        $this->numConta = $numConta;
    }
    
    public function getTipo():string {
        return $this->tipo;
    }

    public function getDono():string {
        return $this->dono;
    }

    public function getSaldo():float {
        return $this->saldo;
    }

    public function isAberta():bool {
        return $this->aberta;
    }

    public function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono(string $dono): void {
        $this->dono = $dono;
    }

    public function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

    public function setAberta(bool $status): void {
        $this->aberta = $status;
    }


}
