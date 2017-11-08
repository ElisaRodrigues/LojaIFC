<?php
require_once  "../../loja_alunos/config/config.php";
class conexao
{
    public function getConexao(){
        try{
        $conexao = new PDO("mysql:host=".HOST."; dbname=".BANCO, USUARIO, SENHA);
        }catch (Exception $e){
            echo "Ocorreu um erro: {$e->getMessage()} na linha {$e->getLine()}";
        }
    }
}

$conexao = new Conexao;
$conexao->getConexao();