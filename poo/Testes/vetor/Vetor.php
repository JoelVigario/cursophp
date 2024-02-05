<?php

namespace vetor;
require_once './IVetor.php';

class Vetor implements IVetor {
    private static $vetor = array();
    private static $length = 0;
    private $vet = array();
    private $nomes = array();
    
    public function __set($name, $value) {
        isset( $this->vet[$name] ) ? : $this->nomes[] = $name;
        $this->vet[$name] = $value;
    }
    
    public function __get($name) {
        return $this->vet[$name];
    }
    
    public static function getVetor() {
        return self::$vetor;
    }
    
    public static function add($valor) {
        self::$vetor[] = $valor;
        self::$length++;
    }

    public static function insira(int $index, $valor) {
        if ($index >= 0 and $index < self::$length) {
            if ( isset( self::$vetor[$index] ) ) {
                for ($i = self::$length; $i > $index; $i--) {
                    self::$vetor[$i] = self::$vetor[$i - 1];
                }
                self::$length++;
            } 
            self::$vetor[$index] = $valor;
        } else {
            print '<p style="color: red;">ERRO: Este índece não existe no vetor</p>';
        }
    }

    public static function remova(int $index) {
        if ($index >= 0 and $index < self::$length) {
            for ($i = $index; $i < self::$length - 1; $i++) {
                self::$vetor[$i] = self::$vetor[$i + 1];
            }
            self::$vetor[--self::$length] = null;
        } else {
            print '<p style="color: red;">ERRO: Este índece não existe no vetor</p>';
        }
    }
    
    public static function toString() {
        $dados = "Vetor {<br>";
        $index = 0;
        for ($i = 0; $i < self::$length; $i++) {
            $dados = $dados . "[" . $index++ . "] => " . self::$vetor[$i] . '<br>';
        }
        $dados = $dados . 'length => ' . self::$length . '<br>}';
        
        return $dados;
    }
    
    public function __toString() {
        $dados = "Vetor {<br>";
        $index = 0;
        foreach ($this->vet as $dado) {
            $dados = $dados . "[" . $this->nomes[$index++] . "] => " . $dado . '<br>';
        }
        $dados = $dados . '}';
        
        return $dados;
    }
    
    public function __invoke() {
        print '<p>Este vetor foi invocado!</p>';
        print $this;
    }

    public static function encontre($valor) {
        $i = 0;
        while ($valor != self::$vetor[$i] and $i < self::$length) {
            $i++;
        }
        return $i == self::$length ? "<br><span style='color: red;'>Valor não encontrado!</span>"
        : "<br>O valor está no índice: $i";
    }
}
