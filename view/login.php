<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEtec | Faça seu login</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../assets/css/login.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">

</head>

<body>
    <form method="post" action="../controller/get.php">
        <input type="hidden" name="action" id="action" value="login">

        <header>
            <div>
                <!-- <?php if(isset($_REQUEST['error'])) {echo ('<div class="alert alert-danger" role="alert">Faça seu login antes de entrar na home!</div>');}?> -->
                <?php if(isset($_REQUEST['error'])) {
                    echo ('
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>ERRO:</strong> Faça seu login antes de entrar na <em>home</em>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    ');
                }; ?>
                
            </div>
            <h1>Login</h1>
            <div class="row"></div>
        </header>

        <main>
            <fieldset class="input-container">
                <input type="number" name="rm" id="rm" class="input-field" max="99999" placeholder=" " required />
                <label for="rm" class="input-label">Registro de aluno</label>
            </fieldset>
            <fieldset class="input-container">
                <input type="password" name="password" id="password" class="input-field" placeholder=" " required />
                <label for="password" class="input-label">Senha</label>
            </fieldset>
        </main>

        <footer>
            <button type="submit">Entrar</button>
            <p>Ainda não realizou seu primeiro acesso? <a href="./acess.php">Clique aqui!</a></p>
        </footer>
    </form>

    <section class="section-left">
        <a href="../"><img src="../assets/img/logo-foretec.png" alt="Logo do aplicativo o número quatro com um lápis"></a>
        <h1>For<span class="title-red">Etec</span></h1>
    </section>
</body>

</html>