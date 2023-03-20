<?php
    if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'login') {
        // Cria uma conexão com o banco de dados
        $conn = new mysqli("localhost", "root", "123456", "foretec");

        // Verifica se houve erro ao conectar ao banco de dados
        if ($conn->connect_error) {
            // Interrompe o script e exibe mensagem de erro
            die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
        }

        // Recebe dados do formulário
        $rm = $_POST['rm'];
        $senha = $_POST['password'];

        // Executa consulta SQL para selecionar os dados do aluno através do RM informado
        $result = $conn->query("SELECT * FROM aluno WHERE rm = $rm");

        // Armazena os dados de UUID e senha criptografada recuperados do banco de dados
        while ($row = $result->fetch_assoc()) {
            $uuid = $row['uuid'];
            $nome = $row['nome'];
            $data_nascimento = $row['data_nascimento'];
            $hash = $row['senha'];
        }

        // Verifica se a senha informada corresponde à senha criptografada armazenada no banco de dados
        if (password_verify($senha, $hash)) {
            // Inicia uma sessão e armazena o UUID do aluno
            session_start();
            $_SESSION["uuid"]=$uuid;
            $_SESSION["nome"]=$nome;
            $_SESSION["data_nascimento"]=$data_nascimento;

            // Redireciona para a página home.php
            header("Location: ../view/home.php");
            exit();
        } else {
            // Interrompe o script e exibe mensagem de erro
            die("Senha incorreta!");
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }

    // if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'uuid') {
    //     // Cria uma conexão com o banco de dados
    //     $conn = new mysqli("localhost", "root", "123456", "foretec");
        
    //     // Verifica se houve erro ao conectar ao banco de dados
    //     if ($conn->connect_error) {
    //         // Interrompe o script e exibe mensagem de erro
    //         die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    //     }
        
    //     // die($_REQUEST['action']);
    //     // Executa consulta SQL para selecionar os dados do aluno através do RM informado
    //     $result = $conn->query("SELECT * FROM aluno WHERE uuid = ". $_REQUEST['uuid']);

    //     // Armazena os dados de UUID e senha criptografada recuperados do banco de dados
    //     while ($row = $result->fetch_assoc()) {
    //         $uuid = $row['uuid'];
    //         $name = $row['name'];
    //         $data_nascimento = $row['data_nascimento'];
    //     }

    //     header("Location: ../view/home.php");
    //     exit();

    //     // Fecha a conexão com o banco de dados
    //     $conn->close();
    // }