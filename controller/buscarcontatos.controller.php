<?php
    class BuscarContatosController{
        public function buscarcontatos(){
            require("model/buscarcontatos.model.php");
            $buscarcontatos = new BuscarContatosController();
            $buscarcontatos->buscarcontatos();
        }
    }
    