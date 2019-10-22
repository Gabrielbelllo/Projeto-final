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
    $id = $_POST['id'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $msg = "E-mail Inválido";
    }else if(!validaCPF($cpf)){
      $msg = "CPF inválido";
    }
    else{

    //criar o sql
    $sql = "UPDATE cliente SET
        nome = '{$nome}',
        telefone = '{$telefone}',
        email = '{$email}',
        cpf = '{$cpf}'
        WHERE pk_cliente = {$id}";

    //
    $resposta = $conn->query($sql);
    //
    if($resposta === true){
      $msg = "Atualizado com sucesso";
    }
    else{
      $msg = "Erro ao Atualizar". $conn->error;
    }
  }
  
  }
?>
<?php 

include "incluedes/conexao.php";

$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE pk_cliente ={$id}";
$lista = $conn->query($sql);
$cliente = $lista->fetch_assoc();



?>
<?php include "incluedes/header.php";?>
    
    <div class="container">
    <h1>Informaçoes do cliente</h1>

    
<form class="form-horizontal" method="post" action="cliente-visualizar.php?id=<?php echo $cliente['pk_cliente'];?>">
<fieldset>
<input value="<?php echo $cliente['pk_cliente'];?>" id="id" name="id" type="hidden">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id">ID</label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['pk_cliente'];?>"id="id" name="id" disabled="disabled" type="text" placeholder="ID" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['nome'];?>"id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone"></label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['telefone'];?>" id="telefone" name="telefone" type="text" placeholder="Telefone" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email"></label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['email'];?>"id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf"></label>  
  <div class="col-md-4">
  <input value="<?php echo $cliente['cpf'];?>"id="cpf" name="cpf" type="text" placeholder="CPF" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Atualizar</button>
  </div>
</div>

</fieldset>
</form>
<div>
<?php if(isset($msg))echo $msg;?>
</div>


</div>




    <?php include "incluedes/footer.php";?>

   
   