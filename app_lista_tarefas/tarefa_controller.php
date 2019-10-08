<?php
   require "app_lista_tarefas/conexao.php";
   require "app_lista_tarefas/tarefa_model.php";
   require "app_lista_tarefas/tarefa_service.php";

   $tarefa = new Tarefa();
   $tarefa->__set('tarefa', $_POST['tarefa']);

   $conexao = new Conexao();

   $tarefaService = new TarefaService($conexao, $tarefa);
   $tarefaService->Inserir();

   header('Location: nova_tarefa.php?inclusao=1');

?>