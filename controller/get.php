<?php
if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'login') {
    // Cria uma conexão com o banco de dados
    require_once('../src/config.php');

    // Recebe dados do formulário
    $rm = $_POST['rm'];
    $senha = $_POST['password'];

    // Executa consulta SQL para selecionar os dados do aluno através do RM informado
    $result = $conn->query("SELECT * FROM alunos WHERE rm = $rm");

    // Se encontrou um usuário com esse email    
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        $hash = $row['senha'];

        // Se a senha está correta
        if (password_verify($senha, $hash)) {
            // Remove a senha do array
            unset($row['senha']);

            // Inicia a sessão
            session_start();
            $_SESSION['aluno'] = $row;

            // Redireciona para a página home.php
            header('Location: ../view/home.php');
            exit;
        } else {
            // Exibe um alerta informando que a senha está incorreta
            echo ('
                    <script>
                        alert("Senha incorreta!");
                        window.location.href = "../view/login.php";
                    </script>
                ');
        }
    } else {
        // Exibe um alerta informando que o usuário não foi encontrado
        echo ('
                <script>
                    alert("Usuário não encontrado!");
                    window.location.href = "../view/login.php";
                </script>
            ');
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} elseif (isset($_REQUEST['action']) && $_REQUEST['action'] === 'login-professor') {
    // Cria uma conexão com o banco de dados
    require_once('../src/config.php');

    // Recebe dados do formulário
    $rp = $_POST['rp'];
    $senha = $_POST['password'];

    // Executa consulta SQL para selecionar os dados do aluno através do RM informado
    $result = $conn->query("SELECT * FROM professores WHERE rp = $rp");

    // Se encontrou um usuário com esse email    
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        $hash = $row['senha'];

        // Se a senha está correta
        if (password_verify($senha, $hash)) {
            // Remove a senha do array
            unset($row['senha']);

            // Inicia a sessão
            session_start();
            $_SESSION['professor'] = $row;

            // Redireciona para a página home.php
            header('Location: ../view/professor/home.php');
            exit;
        } else {
            // Exibe um alerta informando que a senha está incorreta
            echo ('
                    <script>
                        alert("Senha incorreta!");
                        window.location.href = "../index.php";
                    </script>
                ');
        }
    } else {
        // Exibe um alerta informando que o usuário não foi encontrado
        echo ('
                <script>
                    alert("Usuário não encontrado!");
                    window.location.href = "../index.php";
                </script>
            ');
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
