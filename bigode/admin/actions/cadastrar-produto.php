<?php
   if($_POST){
  require_once  "model/conexao.php";
  require_once  "model/departamento.class.php";
  require_once  "model/produto.class.php";
  require_once  "dao/produto.dao.php";
    
  try{
    //criamos um objeto prudoto
      $produto = new Produto();
      $produto->setNome($_POST['nome']);
      $produto->setPreco($_POST['preco']);
      $produto->setDescricao($_POST['descricao']);

      //cria um objeto departamento
      $departamento = new Departamento();
      $departamento->setId($_POST['departamento']);

      //definindo o departamento para o produto
      $produto->setDepartamento($departamento);

      $DAO = new DAOProduto();
      $msg = $DAO->cadastrar($produto);
      
  }catch(Exception $e){
      $msg = $e->getMessage();
  }
}
?>