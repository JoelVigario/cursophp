<?php 

    class Caderno {
        private $nome;
        private $paginas;
        private $totPaginas;
        private $fechado;

        public function __construct(int $totPaginas = 30, string $nome) {
            $this->totPaginas = $totPaginas;
            $this->fechado = true;
            $this->nome = $nome;
        }

        public function abrir() {
            $this->fechado = false;
        }

        public function fechar() {
            $this->fechado = true;
        }

        public function escreva(string $texto, int $pagina) {
            if (! $this->isFechado()) {
                if ($pagina > 0 && $pagina <= $this->totPaginas) {
                    $this->paginas[$pagina] = $texto;
                } else {
                    return "Está página não existe!";
                }
            } else {
                return "O caderno está Fechado!";
            }
        }

        public function leia(int $pagina) {
            if (! $this->isFechado()) {
                if ($pagina > 0 && $pagina <= $this->totPaginas) {
                    return $this->paginas[$pagina];
                } else {
                    return "Está página não existe!";
                }
            } else {
                return "O caderno está Fechado!";
            }
        }

        public function getFolhas() {
            return $this->paginas;
        }

        public function getTotFolhas() {
            return $this->totPaginas;
        }

        public function isFechado() {
            return $this->fechado;
        }

        public function getNome() {
            return $this->totPaginas;
        }

        public function setFolhas($folhas) {
            $this->paginas = $folhas;
        }

        public function setTotFolhas($totFolhas) {
            $this->totPaginas = $totFolhas;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

    }