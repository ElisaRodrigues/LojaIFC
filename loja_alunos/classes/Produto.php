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


        $con = new Conexao();
        $this->conexao = $con->getConexao();

        //usa a classe conexao ja criada /0\
        //$this->conexao = new Conexao();
    }

    public function cadastrar(){
        $sql = "INSERT INTO tb_produtos (titulo, preco, categoria) VALUES('$this->titulo', $this->preco, '$this->categoria')";
        $this->conexao->exec($sql);

    }
    public static function getProdutos(){

        $con = new Conexao();
        $con = $con->getConexao();

        $consulta = $con->query("SELECT * FROM tb_produtos");

        return  $consulta->fetchAll(PDO::FETCH_ASSOC); //retorna lista prod
    }
}

//teste
//$livro1 = new Produto("cidade dos ossos", 25.50, "romance, ficção");
//$livro1->cadastrar();
//$lista = Produto::getProdutos();
//print_r($lista);