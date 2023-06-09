<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{asset('sass/cadastro/style.css')}}">
    <link rel="shortcut icon" href="./src/image/icon.png" type="image/x-icon">
</head>
<body>
    <section class="email">
        <div class="centerEmail">
            <div class="card">
                <h1>Criar Conta</h1>
                
                <form action="/cadastro" method="POST" class="input2">
                    @csrf
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="Digite seu E-mail" class="inputEmail" required>
                    <p id="teste" class="teste2">E-mail est&aacute; sendo utilizado.</p>
                
                    <label for="aniversarioInput" class="labelAniversario">Data De Nascimento</label>
                    <input type="date" name="datanascimento" class="inputDate" required>

                    <label for="usuario" class="labelUsuario">Usu&aacute;rio</label>
                    <input type="text" name="nome" placeholder="Digite seu Usu&aacute;rio" class="inputUsuario" required>

                    <label for="senha1" class="labelSenha1">Senha</label>
                    <input type="password" name="senha1" required class="senha1" placeholder="Digite sua senha">
                    <div class="olhin" onclick="showHide1()"></div>
    
                    <label for="senha2" class="labelSenha2">Confirme sua Senha</label>
                    <input type="password" name="senha2" required class="senha2" placeholder="Confirme sua senha">
                    <div class="olhin1" onclick="showHide2()"></div>

                    <input type="submit" value="prosseguir" class="prosseguir">
                </form>

            </div>

        </div>
    </section>

</body>
</html>
