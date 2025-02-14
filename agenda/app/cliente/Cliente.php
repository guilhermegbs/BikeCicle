<?php

include_once __DIR__ . '../../database/Database.php';

class Cliente {

    // Atributos
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $senha;

    // Método construtor
<<<<<<< HEAD
=======

>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205
    public function __construct($id, $nome, $telefone, $email, $senha)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    }

<<<<<<< HEAD
    // Método Get
=======

    // Método Get

>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205
    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    // Métodos Set
<<<<<<< HEAD
=======

>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205
    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setSenha($senha){
<<<<<<< HEAD
        $this->senha = $senha;
    }

    // Método de cadastro do cliente
    public function cadastrar(){
=======
        $this->id = $senha;
    }


    // Demais Métodos

    public function cadastrar(){

>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Salvar o cliente no banco de dados
<<<<<<< HEAD
        $stmt = $conn->prepare("INSERT INTO cliente (nome, telefone, email, senha) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $this->nome, $this->telefone, $this->email, $this->senha);
=======
        $stmt = $conn->prepare("INSERT INTO cliente (nome,telefone,email,senha) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$this->nome,$this->telefone,$this->email,$this->senha);
>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205

        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
<<<<<<< HEAD
        } else {
=======
        }
        else {
>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205
            $stmt->close();
            $db->closeConnection();
            return false;
        }
<<<<<<< HEAD
    }

    // Método de login
    public function realizaLogin(){
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Consulta para verificar o usuário no banco
        $stmt = $conn->prepare("SELECT * FROM cliente WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $this->email, $this->senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Usuário encontrado, login bem-sucedido
            $user = $result->fetch_assoc();
            session_start();
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario_nome'] = $user['nome'];
            $stmt->close();
            $db->closeConnection();
            return true; // Login bem-sucedido
        } else {
            // Caso o login falhe (usuário não encontrado)
            $stmt->close();
            $db->closeConnection();
            return false; // Falha no login
        }
    }

    // Método para buscar todos os clientes
    public function buscarClientes(){
        $db = new Database();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM cliente");
        $stmt->execute();
        $result = $stmt->get_result();

        $clientes = [];
        while ($row = $result->fetch_assoc()) {
            $clientes[] = $row;
        }

        $stmt->close();
        $db->closeConnection();
        return $clientes;
    }

    // Método para atualizar dados do cliente
    public function atualizar(){
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // SQL para atualizar os dados do cliente
        $stmt = $conn->prepare("UPDATE cliente SET nome = ?, telefone = ?, email = ?, senha = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $this->nome, $this->telefone, $this->email, $this->senha, $this->id);

        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        } else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    // Método para apagar dados do cliente
    public function apagar(){
        // Conectar com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // SQL para apagar o cliente
        $stmt = $conn->prepare("DELETE FROM cliente WHERE id = ?");
        $stmt->bind_param("i", $this->id);

        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        } else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }
}

?>
=======


    } 

    public function atualizar(){

    }

    public function apagar(){

    }

    public function realizaLogin(){

    }

    public function buscarClientes(){

    }


}



?>
>>>>>>> 1015e594b7f6086cff5bc772b245c164d9e42205
