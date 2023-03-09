<?php

require('../model/AlunoModel.php');

class AlunoController {
    private $model;
 
    public function __construct($model) {
       $this->model = $model;
    }
 
    public function index() {
       $alunos = $this->model->getAll();
       require_once('views/aluno/index.php');
    }
 
    public function create($aluno) {
       $this->model->create($aluno);
       header('Location: index.php?page=login');
    }

    public function acess() {
        $rm = $_POST['rm'];
        $aluno = $this->model->getByRM($rm);
        $this->create($aluno);
    }
 
    public function store() {
       $aluno = $_POST['aluno'];
       $this->model->create($aluno);
       header('Location: index.php');
    }
 
    public function edit() {
       $id = $_GET['id'];
       $aluno = $this->model->getById($id);
       require_once('views/aluno/edit.php');
    }
 
    public function update() {
       $aluno = $_POST['aluno'];
       $this->model->update($aluno);
       header('Location: index.php');
    }
}