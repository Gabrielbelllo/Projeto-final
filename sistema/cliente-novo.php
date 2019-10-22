<?php
  if($_POST){
   
    //incluindo a conexao com banco de dados
    include "incluedes/conexao.php";
    include "incluedes/funcoes.php";
    //capturar os dados do post
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $msg = "E-mail Inválido";
    }else if(!validaCPF($cpf)){
      $msg = "CPF inválido";
    }
    else{

    //criar o sql
    $sql = "INSERT INTO cliente VALUE
     (default,'{$nome}','{$telefone}','{$email}','{$cpf}')";

    //
    $resposta = $conn->query($sql);
    //
    if($resposta === true){
      $msg = "Cadastrado com sucesso";
    }
    else{
      $msg = "Erro ao Cadastrar". $conn->error;
    }
  }
  
  }
?>
  
<?php include "incluedes/header.php";?>
<div class="container">
<h1>CADASTRO DE CLIENTE</h1>
    
<form class="form-horizontal" method="post" action="cliente-novo.php">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone"></label>  
  <div class="col-md-4">
  <input id="telefone" name="telefone" type="text" placeholder="Telefone" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email"></label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf"></label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" type="text" placeholder="CPF" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>
<div>
<?php if(isset($msg))echo $msg;?>
</div>


</div>


    <?php include "incluedes/footer.php";?>

   
   