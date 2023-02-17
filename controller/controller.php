<?php
switch ($_REQUEST['action']) {
    case 'cadaster':
        $rm = $_POST['rm'];
        $bornDate = $_POST['data_nascimento'];

        $sql = "INSERT INTO aluno (rm, data_nascimento)
        VALUES ('$rm', '$bornDate')";

        $res = $conn->query($sql);

        if ($res) {
            print("<script>alert('Usuário $rm foi cadastrado com sucesso!')</script>");
            print("<script>location.href='?page=login'</script>");
        } else {
            print("<script>alert('Falha ao cadastrar usuário!')</script>");
            print("<script>location.href='?page=acess'</script>");
        }
        break;
}