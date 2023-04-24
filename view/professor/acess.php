<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEtec | Crie sua conta</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../assets/css/login.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="../../assets/favicon.ico" type="image/x-icon">
</head>

<body class="acess professor">
    <form method="post" action="../../controller/insert.php">
        <input type="hidden" name="action" id="action" value="cadaster-professor">

        <header>
            <h1>Acesso do Professor</h1>
            <div class="row"></div>
        </header>

        <main>
            <fieldset class="input-container">
                <input type="text" name="name" id="name" class="input-field" placeholder=" " required>
                <label for="name" class="input-label">Nome</label>
            </fieldset>

            <fieldset class="input-container">
                <input type="number" name="rp" id="rp" class="input-field" max="99999" placeholder=" " required>
                <label for="rp" class="input-label">Registro do professor</label>
            </fieldset>

            <fieldset class="input-container">
                <select name="materia" id="materia" required>
                    <option value="" disabled selected hidden>Selecione uma matéria</option>
                    <option value="historia">História</option>
                    <option value="historia">História</option>
                    <option value="historia">História</option>
                    <option value="historia">História</option>
                    <option value="historia">História</option>
                </select>
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
        <a href="../../"><img src="../../assets/img/branding/logo-w.png" alt="Logo do aplicativo o número quatro com um lápis"></a>
        <h1>ForEtec</h1>
    </section>

    <script>
        const password = document.querySelector('input#password');
        const confirmPassword = document.querySelector('input#c-password');
        const submitButton = document.querySelector('button[type="submit"]');

        confirmPassword.addEventListener('change', () => {
            if (password.value !== confirmPassword.value) {
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