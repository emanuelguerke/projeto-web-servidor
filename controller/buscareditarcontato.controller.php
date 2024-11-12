<?php
    require("../model/buscareditarcontato.model.php");
    $index = $_POST['index'];
    $buscareditarcontato = new BuscarEditarcontato();
    $buscareditarcontato->buscarcontato($index);
    