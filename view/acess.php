<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEtec | Crie sua conta</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../assets/css/login.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
</head>

<body class="acess">
    <form method="post" action="../controller/controller.php">
        <input type="hidden" name="action" value="cadaster">

        <header>
            <h1>Acesso</h1>
            <div class="row"></div>
        </header>

        <main>
            <fieldset class="input-container">
                <input type="text" name="name" id="name" class="input-field" placeholder=" " required>
                <label for="name" class="input-label">Nome</label>
            </fieldset>
            
            <fieldset class="input-container">
                <input type="number" name="rm" id="rm" class="input-field" max="99999" placeholder=" " required>
                <label for="rm" class="input-label">Registro de aluno</label>
            </fieldset>

            <fieldset class="input-container">
                <input type="date" name="data_nascimento" id="data_nascimento" class="input-field" placeholder="Data de nascimento" required>
                <label for="data_nascimento" class="input-label">Data de nascimento</label>
            </fieldset>

            <fieldset class="input-container">
                <input type="password" name="password" id="password" class="input-field" placeholder=" " required>
                <label for="password" class="input-label">Senha</label>
            </fieldset>

            <fieldset class="input-container">
                <input type="password" name="c-password" id="c-password" class="input-field" placeholder=" " required>
                <label for="c-password" class="input-label">Confirme a senha</label>
            </fieldset>

            
        </main>

        <footer>
            <button type="submit">Criar conta</button>
            <p>Você já possui uma conta? <a href="./login.php">Clique aqui!</a></p>
        </footer>
    </form>

    <section class="section-left">
        <a href="../"><img src="../assets/img/logo-foretec.png" alt="Logo do aplicativo o número quatro com um lápis"></a>
        <h1>For<span class="title-red">Etec</span></h1>
    </section>

    <script>
        const password = document.querySelector('input#password');
        const confirmPassword = document.querySelector('input#c-password');
        const submitButton = document.querySelector('button[type="submit"]');

        confirmPassword.addEventListener('change', () => {
            if(password.value !== confirmPassword.value) {
                submitButton.disabled = true;
                confirmPassword.invalid = true; 

                confirmPassword.style.border = '2px solid var(--color3);';
            } else {
                submitButton.disabled = false;
            }
        })
    </script>
</body>

</html>