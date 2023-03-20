<?php
    if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'cadaster') {
        // Criar conexão com o banco de dados
        $conn = new mysqli("localhost", "root", "123456", "foretec");
                
        // Verificar conexão
        if ($conn->connect_error) {
            die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
        }

        // Receber dados do formulário
        include('../lib/uuidGenerator.php');
        $uuid = uuidV4();
        echo ('<script>console.warn('.strlen($uuid).')</script>');
        $nome = $_POST['name'];
        $rm = $_POST['rm'];
        $data_nascimento = $_POST['data_nascimento'];
        $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Preparar instrução SQL para inserção
        $sql = "INSERT INTO aluno (id, uuid, nome, rm, data_nascimento, senha) VALUES (null, ?, ?, ?, ?, ?)";

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
    }