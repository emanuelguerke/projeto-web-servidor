<?php
class ValidarTelefoneController {
    public function validarTelefone($phone) {
        // Regex para validar telefone brasileiro no formato (xx) 9xxxx-xxxx ou xx 9xxxxxxxx ou xx9xxxxxxxx
        //$pattern = "\(?\d{2}\)?\s?9\d{4}-?\d{4}";
        $pattern = "/^\(?\d{2}\)?\s?9\d{4}-?\d{4}$/";
        //Telefones com 0800, telefones residenciais, telefones de operadoras e serviços como 190 
        $pattern2 = "/^1\d\d(\d\d)?$|^0800 ?\d{3} ?\d{4}$|^(\(0?([1-9a-zA-Z][0-9a-zA-Z])?[1-9]\d\) ?|0?([1-9a-zA-Z][0-9a-zA-Z])?[1-9]\d[ .-]?)?(9|9[ .-])?[2-9]\d{3}[ .-]?\d{4}$/";
        // Verifica se o telefone corresponde ao padrão
        if (preg_match($pattern, $phone) || preg_match($pattern2, $phone)) {
            return true;
        } else {
            return false;
        }
    }
}