<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Lu�s Mendes
 */
interface BD {

    public function cadastrar();
    public function alterar();
    public function excluir();
    public function buscar($palavra);
}

?>
