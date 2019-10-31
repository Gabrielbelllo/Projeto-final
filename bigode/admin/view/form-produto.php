
<h1>CADASTRO DO ADMIN</h1>
    
    <form class="form-horizontal" method="post" action="ctrl-cadastro-produto.php">
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
      <label class="col-md-4 control-label" for="preco"></label>  
      <div class="col-md-4">
      <input id="preco" name="preco" type="text" placeholder="Preço" class="form-control input-md" required="">
        
      </div>
    </div><!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="descricao"></label>  
      <div class="col-md-4">
      <input id="descricao" name="descricao" type="text" placeholder="Descrição" class="form-control input-md" required="">
        
      </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="departamento"></label>  
      <div class="col-md-4">
      <select name="departamento" class="form-control input-md">
      <?php foreach($lista as $departamento) { ?>
        <option value="<?php echo $departamento['pk_departamento']?>"><?php echo $departamento['nome']?>  </option>
      <?php } ?> 
      
      </select>
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar Produto</button>
      </div>
    </div>
    
    </fieldset>
    </form>
    
    
    