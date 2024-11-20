<?php
    require("vendor/autoload.php");
    class BuscarContatoController {
        public function buscarcontato($index) {
            $buscarcontato = new BuscarContato();
            $contato = $buscarcontato->buscarcontato($index);

            require("view/contato.view.php");
        }
    }

    
    
    