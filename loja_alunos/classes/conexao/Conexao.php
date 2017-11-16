<?php
require_once __DIR__. "/../../config/config.php";
class Conexao
{
    public static function getConexao(){
        try{
            $conexao = new PDO("mysql:host=".HOST."; dbname=".BANCO, USUARIO, SENHA);
            //é necessário configurara um atributo para ser informado dos erros no mysql
            //$conexao->set
            return $conexao;
        }catch (Exception $e){
            echo "Ocorreu um erro: {$e->getMessage()} na linha {$e->getLine()}";
        }
    }
}
//teste mensagem erro
//$conexao = new Conexao;
//$conexao->getConexao();