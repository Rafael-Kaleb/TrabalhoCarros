<?php
    class veiculoDTO{
        private $id;
        private $placa;
        private $renevan;
        private $ano;
        private $marca;
        private $modelo;
        private $cor;
        private $combustivel;
        private $listaveiculos;

        public function __construct(){

        }
        public function __getId(){
            return $this->id;
        }

        public function __setId($id){
            return $this->id = $id;
        }

        public function __getplaca(){
            return $this->placa;
        }

        public function __setplaca($placa){
            return $this->placa = $placa;
        }

        public function __getrenevan(){
            return $this->renevan;
        }

        public function __setrenevan($renevan){
            return $this->renevan = $renevan;
        }

        public function __getano(){
            return $this->ano;
        }

        public function __setano($ano){
            $this->ano = $ano; 
        }

        public function __getmarca(){
            return $this->marca;
        }

        public function __setmarca($marca){
            $this->marca = $marca;
        }

        public function __setmodelo($modelo){
            $this->modelo = $modelo;
        }

        public function __getmodelo(){
            return $this->modelo;
        }

        public function __getcor(){
            return $this->cor;
        }

        public function __setcor($cor){
            return $this->cor = $cor;
        }

        public function __getcombustivel(){
            return $this->combustivel;
        }

        public function __setcombustivel($combustivel){
            return $this->combustivel = $combustivel;
        }
        public function __setListaveiculos($listaveiculos){
            return $this->listaveiculos = $listaveiculos;
        }
        public function __getListaveiculos(){
            return $this->listaveiculos; 
        }
    }
?>