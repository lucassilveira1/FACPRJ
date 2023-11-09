<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
<div class="container">

    <h1>Entrar</h1>

    <form action="exe/login_exe.php" method="POST">

        <div class="input-box">
            <label for="login">Login</label>
            <div class="input">
                <input type="login" name="login" id="login">
                <i>
                    <img src="../assets/user-solid.svg" width="15px">
                </i>
            </div>
        </div>

        <div class="input-box">
            <label for="password">Senha</label>
            <div class="input">
            <input type="password" name="password" id="password">
            <i id="passIcon">
                <img src='../assets/lock-solid.svg' width='14px'>
            </i>
        </div>
    </div>
    
    <div class="showPassword">
        <input type="checkbox" name="" id="showPass"> Mostrar senha
        <i id="showPassIcon"><img src="../assets/eye-regular.svg" width="15px"></i>
    </div>
    
    
    <div class="togglebtn">
        <p id="toggleContent">
            Usuário Master?
        </p>
        <input type="checkbox" class="toggle" id="toggleBtn">
    </div>

    <div class="btn">
            <button type="submit">Entrar</button>
            <button type="reset" id="reset">Limpar</button>
        </div>
    </form>   
    
    <p class="account">Não possui conta? <span><a href="register.php">Cadastre-se!</a></span></p>

    <script src="../scripts/users.js"></script>
</body>
</html>