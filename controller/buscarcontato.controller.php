<?php
    require("../model/buscarcontato.model.php");
    $index = $_GET['index'];
    $buscarcontato = new Buscarcontato();
    $buscarcontato->buscarcontato($index);
    
    