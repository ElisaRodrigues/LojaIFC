<?php
require_once "../classes/Conexao.php";
class Produto
{
    private $codigo;
    private $titulo;
    private $preco;
    private $categoria;
    private $conexao;

    public function __construct($titulo, $preco, $categoria){
        $this->titulo = $titulo;
        $this->preco = $preco;
        $this->categoria = $categoria;

        //usa a classe conexao ja criada /0\
        $this->conexao = new Conexao();
    }

    public function cadastrarProduto(){
        $sql = "INSERT INTO tb_produtos (titulo, preco, categoria) VALUES()";
    }
}