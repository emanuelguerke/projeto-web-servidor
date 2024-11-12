<?php 
    require("../model/editarcontato.model.php");
    
    $editarcontato = new Editarcontato();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
        $editarcontato->name = $_POST['name'];
        $editarcontato->email = $_POST['email'];
        $editarcontato->phone = $_POST['phone'];
        $index = $_POST['index'];
        $editarcontato->editar_contato($editarcontato->name,$editarcontato->email,$editarcontato->phone, $index);
    }