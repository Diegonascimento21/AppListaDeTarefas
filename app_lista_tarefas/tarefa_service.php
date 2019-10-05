<?php

class TarefaService {

    private $conexao ;
    private $tarefa ;

    public function __construct(Conexao $conexao, Tarefa $tarefa){
        $this->conexao = $conexao->Conectar();
        $this->tarefa = $tarefa;
    }
    
    public function Inserir(){
        $query = 'INSERT INTO tb_tarefas(tarefa) values(:tarefa)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
    }
    public function Recuperar(){

    }
    public function Atualizar(){

    }
    public function Deletar(){

    }
}
 ?>