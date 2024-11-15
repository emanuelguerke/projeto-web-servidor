<?php

class BuscarContatoController {
    public function buscarcontato($index) {
        require("model/buscarcontato.model.php");
        $buscarcontato = new BuscarContato();
        $contato = $buscarcontato->buscarcontato($index);

        require("view/contato.view.php");
    }
}

   
    
    