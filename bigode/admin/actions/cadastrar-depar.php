<?php

    require_once  'model/conexao.php';
    require_once  'model/departamento.class.php';
    require_once  'dao/departamento.dao.php';

    if($_POST){

        try{
            $obj = new Departamento();
            $obj->setNome($_POST['nome']);
           

            $DAO = new DAODepartamento();
            $msg = $DAO->cadastrar($obj);

        }catch(Exception $e){
            $msg = $e->getMessage();
        }
    }

?>