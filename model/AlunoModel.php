<?php 
require('../src/config.php');
class AlunoModel {
    private $conn;
 
    public function __construct($db) {
       $this->conn = $db;
    }
 
    public function getAll() {
       $query = "SELECT * FROM aluno";
       $stmt = $this->conn->prepare($query);
       $stmt->execute();
       return $stmt;
    }
 
    public function getById($id) {
       $query = "SELECT * FROM aluno WHERE id = ?";
       $stmt = $this->conn->prepare($query);
       $stmt->bindParam(1, $id);
       $stmt->execute();
       return $stmt;
    }
    public function getByRM($rm) {
      $query = "SELECT * FROM aluno WHERE registro_matricula = ?";
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(1, $rm);
      $stmt->execute();
      return $stmt;
   }
 
    public function create($aluno) {
       $query = "INSERT INTO aluno (uuid, nome_completo, data_nascimento, registro_matricula) VALUES (?, ?, ?, ?)";
       $stmt = $this->conn->prepare($query);
       $stmt->bindParam(1, $aluno['uuid']);
       $stmt->bindParam(2, $aluno['nome_completo']);
       $stmt->bindParam(3, $aluno['data_nascimento']);
       $stmt->bindParam(4, $aluno['registro_matricula']);
       $stmt->execute();
       return $stmt;
    }
 
    public function update($aluno) {
       $query = "UPDATE aluno SET uuid = ?, nome_completo = ?, data_nascimento = ?, registro_matricula = ? WHERE id = ?";
       $stmt = $this->conn->prepare($query);
       $stmt->bindParam(1, $aluno['uuid']);
       $stmt->bindParam(2, $aluno['nome_completo']);
       $stmt->bindParam(3, $aluno['data_nascimento']);
       $stmt->bindParam(4, $aluno['registro_matricula']);
       $stmt->bindParam(5, $aluno['id']);
       $stmt->execute();
       return $stmt;
    }
 
    public function delete($id) {
       $query = "DELETE FROM aluno WHERE id = ?";
       $stmt = $this->conn->prepare($query);
       $stmt->bindParam(1, $id);
       $stmt->execute();
       return $stmt;
    }
 }