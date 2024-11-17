<?php
    try{
        $bd = new mysqli('localhost', 'root','', 'agenda');
       // $bd->set_charset('utf-8');
    }catch (Exception $e){
        throw new Exception('erro na conexão'. $e->getMessage());
    }

    