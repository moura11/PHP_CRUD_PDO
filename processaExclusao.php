<?php

  require_once 'Conexao.php';
  require_once 'CRUDAluno.php';

  $crud = new CRUDAluno(Conexao::getInstance());

  $codigo = $_GET['cod'];

  $crud->excluir($codigo);

  header('location:listarAluno.php');

 ?>
