<?php

interface Telefone {
    public function ligar();
    public function desligar();
    public function carregar();
    public function mudarSomPara(string $modo);
    public function chamar();
    public function atender();
    public function atendido();
    public function terminarChammada();
    public function telefonarPara(string $contacto);
}
