<?php 
require_once __DIR__ .'/../models/tarefa.php';
class TarefaController{
    private $tarefaModel;
    public function __construct(){
        $this->tarefaModel = new Tarefa();

    }

    ## criar
    public function criar(){
        if(isset($_POST['descricao']) && !empty(trim($_POST['descricao']))){
            $this->tarefaModel->criar($_POST['descricao']);
        }

        header("Location: index.php");
        
    }
    # excluir

    public function excluir(){
        if(isset($_GET['delete'])){
            $this->tarefaModel->excluir($_GET['delete']);
        }
        header("Location: index.php");
    }

}


?>