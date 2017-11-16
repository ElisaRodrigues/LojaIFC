<?php

class Produto
{
    public $codigo;
    public $titulo;
    public $preco;
    public $categoria;
    public $conexao;

    public function __construct($titulo, $preco, $categoria){
        $this->titulo = $titulo;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }
}
