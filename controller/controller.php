<?php
switch (@$_REQUEST['action']) {
    case 'cadaster':
        require('./alunoController.php');
        require('../lib/uuidGenerator.php');

        $uuid = uuidV4();
        $name = $_POST['name'];
        $bornDate = $_POST['data_nascimento'];
        $rm = $_POST['rm'];
        $password = password_hash($_POST["senha"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO aluno (uuid, nome, data_nascimento, rm, senha) VALUES ('$uuid', '$name', '$bornDate', '$rm', '$password')";

        $res = $conn->prepare($sql);

        if ($res) {
            print("<script>alert('Usuário $rm foi cadastrado com sucesso!')</script>");
            print("<script>location.href='../view/login.php'</script>");
        } else {
            print("<script>alert('Falha ao cadastrar usuário!')</script>");
            print("<script>location.href='../view/acess.php'</script>");
        }
        break;
}