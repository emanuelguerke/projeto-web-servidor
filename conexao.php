<?php
    class Conexao{
        private $bd;
        public function conexao(){
            try{
                $this->bd = new mysqli('localhost', 'root','', 'agenda');
               // $bd->set_charset('utf-8');
            }catch (Exception $e){
                throw new Exception('erro na conexão'. $e->getMessage());
            }
        }
        public function __get($propriedade){
            return $this->$propriedade;
        }
    }
   

    