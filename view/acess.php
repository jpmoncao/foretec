<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEtec | Crie sua conta</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
</head>

<body class="acess">
    <form method="post">
        <header>
            <h1>Acesso</h1>
            <div class="row"></div>
        </header>

        <main>
            <fieldset class="input-container">
                <input type="number" name="rm" id="rm" class="input-field" max="99999" placeholder=" " required>
                <label for="rm" class="input-label">Registro de aluno</label>
            </fieldset>

            <fieldset class="input-container">
                <input type="date" name="data_nascimento" id="data_nascimento" class="input-field" placeholder="Data de nascimento" required>
                <label for="data_nascimento" class="input-label">Data de nascimento</label>
            </fieldset>
        </main>

        <footer>
            <button type="submit">Criar conta</button>
            <p>Você já possui uma conta? <a href="?page=login">Clique aqui!</a></p>
        </footer>
    </form>

    <section class="section-left">
        <a href="./"><img src="assets/img/logo-foretec.png" alt="Logo do aplicativo o número quatro com um lápis"></a>
        <h1>For<span class="title-red">Etec</span></h1>
    </section>
</body>

</html>