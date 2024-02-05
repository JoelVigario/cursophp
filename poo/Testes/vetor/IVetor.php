<?php

namespace vetor;

interface IVetor {
    public static function add($valor);
    public static function insira(int $index, $valor);
    public static function remova(int $index);
    public static function encontre($valor);
}
