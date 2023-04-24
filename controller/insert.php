<?php
if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'cadaster') {
    // Cria uma conexão com o banco de dados
    require_once('../src/config.php');

    // Receber dados do formulário
    include('../lib/uuidGenerator.php');
    $uuid = uuidV4();
    echo ('<script>console.warn(' . strlen($uuid) . ')</script>');
    $nome = $_POST['name'];
    $rm = $_POST['rm'];
    $data_nascimento = $_POST['data_nascimento'];
    $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Preparar instrução SQL para inserção
    $sql = "INSERT INTO alunos (id, uuid, nome, rm, data_nascimento, senha) VALUES (null, ?, ?, ?, ?, ?)";

    // Preparar declaração SQL com placeholders (?)
    $stmt = $conn->prepare($sql);

    // Vincular parâmetros aos placeholders
    $stmt->bind_param("ssiss", $uuid, $nome, $rm, $data_nascimento, $senha);

    // Executar a instrução SQL
    if ($stmt->execute()) {
        header('Location: ../view/login.php');
        exit();
    } else {
        echo "Erro ao cadastrar aluno: " . $conn->error;
    }

    // Fechar conexão
    $conn->close();
} elseif (isset($_REQUEST['action']) && $_REQUEST['action'] === 'cadaster-professor') {
    // Cria uma conexão com o banco de dados
    require_once('../src/config.php');

    // Receber dados do formulário
    include('../lib/uuidGenerator.php');
    $uuid = uuidV4();
    echo ('<script>console.warn(' . strlen($uuid) . ')</script>');
    $nome = $_POST['name'];
    $rp = $_POST['rp'];
    $materia = $_POST['materia'];
    $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Preparar instrução SQL para inserção
    $sql = "INSERT INTO professores (id, uuid, nome, rp, materia, senha) VALUES (null, ?, ?, ?, ?, ?)";

    // Preparar declaração SQL com placeholders (?)
    $stmt = $conn->prepare($sql);

    // Vincular parâmetros aos placeholders
    $stmt->bind_param("ssiss", $uuid, $nome, $rp, $materia, $senha);

    // Executar a instrução SQL
    if ($stmt->execute()) {
        header('Location: ../view/professor/login.php');
        exit();
    } else {
        echo "Erro ao cadastrar professor: " . $conn->error;
    }

    // Fechar conexão
    $conn->close();
}
