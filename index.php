<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEtec | Faça seu login</title>
</head>

<body>
    <form method="post">
        <header>
            <h1>Login</h1>
            <div class="row"></div>
        </header>

        <main>
            <fieldset>
                <label for="rm">Registro de aluno</label>
                <input type="number" name="rm" id="rm" max="99999">
            </fieldset>
            <fieldset>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password">
            </fieldset>
        </main>

        <footer>
            <button type="submit">Entrar</button>
            <p>Ainda não realizou seu primeiro acesso? <a href="acess.php">Clique aqui!</a></p>
        </footer>
    </form>

    <section>
        <img src="assets/img/logo-foretec.png" alt="Logo do aplicativo o número quatro com um lápis">
        <h1>For<span class="title-red">Etec</span></h1>
    </section>
</body>

</html>