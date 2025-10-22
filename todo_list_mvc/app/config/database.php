<?php 

class Database{

    private $host = "localhost"; 
<<<<<<< HEAD
    private $usuario = "root"; 
=======
    private $usario = "root"; 
>>>>>>> a590af7f8f5be0ba442d7bbdb2b86567652a1b1b
    private $senha = ""; 
    private $banco = "todo_list"; 
    public $conn; 

    public function conectar(){
<<<<<<< HEAD
        $this->conn = new mysqli($this->host, $this->usuario, $this->senha, $this->banco); 
=======
        $this->conn = new mysqli($this->host, $this->usario, $this->senha, $this->banco); 
>>>>>>> a590af7f8f5be0ba442d7bbdb2b86567652a1b1b
        if($this->conn->connect_error){
            die ("Algo deu errado com a conexão" . $this->conn->connect_error); 
        }

        return $this->conn; 
    }

}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> a590af7f8f5be0ba442d7bbdb2b86567652a1b1b
