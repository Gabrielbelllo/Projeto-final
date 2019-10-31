
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
       
        </th>
    </thead>
    <tbody>
        <?php foreach($lista as $departamento) { ?>
            <tr>
                <th scope="row"><?php echo $departamento['pk_departamento']?></th>    
                <td><?php echo $departamento['nome']?></td>
               
            </tr>
        <?php } ?>
    </tbody>
</table>

