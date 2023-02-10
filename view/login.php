<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEtec | Faça seu login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <form method="post">
        <header>
            <h1>Login</h1>
            <div class="row"></div>
        </header>

        <main>
            <fieldset class="input-container">
                <input type="number" name="rm" id="rm" class="input-field" max="99999" placeholder=" " required>
                <label for="rm" class="input-label">Registro de aluno</label>
            </fieldset>
            <fieldset class="input-container">
                <input type="password" name="password" id="password" class="input-field" placeholder=" " required>
                <label for="password" class="input-label">Senha</label>
            </fieldset>
        </main>

        <footer>
            <button type="submit">Entrar</button>
            <p>Ainda não realizou seu primeiro acesso? <a href="acess.php">Clique aqui!</a></p>
        </footer>
    </form>

    <section class="section-left">
        <img src="../assets/img/logo-foretec.png" alt="Logo do aplicativo o número quatro com um lápis">
        <h1>For<span class="title-red">Etec</span></h1>
    </section>
</body>

</html>