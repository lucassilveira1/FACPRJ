<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Entrar</h1>

        <div class="input-box">
            <label for="login">Login</label>
            <input type="login" name="login" id="login">
        </div>

        <div class="input-box">
            <label for="password">Senha</label>
            <div class="input">
            <input type="password" name="password" id="password">
            <i id="passIcon">
                <img src='/assets/lock-solid.svg' width='14px'>
            </i>
            </div>
        </div>

        
        <div class="btn">
            <a href="index.html"><button type="submit">Entrar</button></a>
            <button type="reset" id="reset">Limpar</button>
        </div>
        <div class="showPassword">
            <input type="checkbox" name="" id="showPass"> Mostrar senha
            <i id="showPassIcon"><img src="/assets/eye-regular.svg" width="15px"></i>
        </div>
        <p class="account">Não possui conta? <a href="cadastro.html"> Cadastre-se!</a></p>
    </div>

    <script src="/js/login.js"></script>
</body>
</html>