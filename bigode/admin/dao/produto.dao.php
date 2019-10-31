<?php

class DAOProduto{
    public function cadastrar(Produto $produto){
        $sql = "INSERT INTO Produto
        VALUES (default, :nome, :preco, :descricao, :departamento)";
        
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $produto->getNome());
        $con->bindValue(":preco", $produto->getPreco());
        $con->bindValue(":descricao", $produto->getDescricao());
        //$produto->getDepartamento() um objeto da classe departamento
        //entao $produto->getDepartamento()->getId() retorna o id do departamento
        $con->bindValue(":departamento", $produto->getDepartamento()->getId());
      
        $con->execute();
        return "Cadastro com sucesso";

    }
}
?>