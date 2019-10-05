<?php
   require "app_lista_tarefas/conexao.php";
   require "app_lista_tarefas/tarefa_model.php";
   require "app_lista_tarefas/tarefa_service.php";

   echo "<pre>";
   print_r($_POST);
   echo "<pre>";

   $tarefa = new Tarefa();
   $tarefa->__set('tarefa', $_POST['tarefa']);

   $conexao = new Conexao();

   $tarefaService = new TarefaService($conexao, $tarefa);
   $tarefaService->Inserir();
   
   echo "<pre>";
   print_r($tarefaService);
   echo "<pre>";


?>