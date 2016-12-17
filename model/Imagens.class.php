<?php

class Imagens{
    private $con;

    function __construct() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    function addImagem($nome,$tipo,$tamanho) {
        if($this->con->exec("INSERT INTO arquivos (nome, tipo, tamanho) VALUES ('{$nome}', '{$tipo}', '{$tamanho}')")){
            return TRUE;
        }
        return FALSE;
    }

}