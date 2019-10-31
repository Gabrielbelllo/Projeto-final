<?php
    require_once "model/conexao.php";
    require_once  "dao/departamento.dao.php";

        $obj = new DAODepartamento();

        $lista = $obj->listaDepartamento();

?>