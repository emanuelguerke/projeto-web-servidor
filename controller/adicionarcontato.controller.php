<?php
    require("../model/adicionarcontato.model.php");
   
    $adicionarcontato = new Adicionarcontato();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $adicionarcontato->name = $_POST['name'];
        $adicionarcontato->email = $_POST['email'];
        $adicionarcontato->phone = $_POST['phone'];

        $adicionarcontato->adicionar_contato($adicionarcontato->name, $adicionarcontato->email, $adicionarcontato->phone);
        

    }

    