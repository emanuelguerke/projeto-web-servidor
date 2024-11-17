<?php
    class ContatoController{
        public function contato(){
            require("view/contato.view.php");
        }

        public function __get($propriedade){
            return $this->$propriedade;
        }
    }