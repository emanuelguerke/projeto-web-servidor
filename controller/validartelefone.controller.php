<?php
class ValidarTelefoneController {
    public function validarTelefone($phone) {
        // Regex para validar telefone brasileiro no formato (xx) 9xxxx-xxxx ou xx 9xxxxxxxx ou xx9xxxxxxxx
        //$pattern = "\(?\d{2}\)?\s?9\d{4}-?\d{4}";
        $pattern = "/^\(?\d{2}\)?\s?9\d{4}-?\d{4}$/";
        // Verifica se o telefone corresponde ao padrão
        if (preg_match($pattern, $phone)) {
            return true;
        } else {
            return false;
        }
    }
}