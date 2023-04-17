<?php
    // Definiendo una Clase : Cliente
    class Cliente
    {
        // Atributos de la Clase
        private $cod; 
        private $nom;
        private $ape;
        private $dir;
        private $fnac;
        private $sex;
        
        // Gets
        public function __GET($k){
            return $this->$k;
        }

        // Sets
        public function __SET($k,$v){
            return $this->$k = $v;
        }
    }
?>