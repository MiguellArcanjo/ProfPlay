<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProfPlay</title>
    <link rel="stylesheet" href="{{asset('sass/login/style.css')}}">
    <link rel="shortcut icon" href="./src/image/icon.png" type="image/x-icon">
</head>
<body>
    <section class="login">
        <div class="loginEsquerda">
            <div class="card">
                <h1>LOGIN</h1>

                <form action="teste.php" method="POST" class="inputs">
                    <label for="email" class="labelEmail">E-mail</label>
                    <input type="text" name="email" placeholder="Digite seu E-mail" class="inputEmail" required>

                    <label for="senha" class="labelSenha">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua Senha" class="inputSenha" required>
                    <div class="olhin" onclick="showHide()"></div>
    
                    <div class="checkremember">
                        <input type="checkbox" name="remember" class="remember" required>
                        <label for="remember" class="rememberLabel">Deseja se manter conectado? </label>
                    </div>

                    <input type="submit" value="Login" class="btnLogin">
                </form>
                
                <form class="registrar" action="{{ url('paginaCadastro') }}">
                    <input type="submit" value="Criar Conta" class="criarConta">
                </form>

                <form action="">
                    <input type="submit" value="Recuperar Senha" class="recuperarSenha">
                </form>


            </div>
        </div>
    </section>


    <script src="/login/src/js/main.js"></script>
    <script src="/login/processa.php"></script>
</body>
</html>