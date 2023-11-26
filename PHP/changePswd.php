<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/change.css">
    <title>Mudança de Senha</title>
</head>
<body>

<form action="exe/password_exe.php" method="POST">

    <div class="container">
        <h1>Mude sua senha!</h1>
        <div class="input-box">
            <label for="legacyPassword">Senha antiga:</label>
            <div class="input">
                <input type="password" name="legacyPassword" id="legacyPassword" required>
                <i id="legacyIcon">
                    <img src="../assets/lock-solid.svg" alt="cadeado" width=15px>
                </i>
            </div>    
        </div>

        <div class="input-box">
            <label for="newPassword">Nova senha:</label>
            <div class="input">
               <input type="password" name="newPassword" id="newPassword" required>
               <i id="passIcon">
                    <img src='../assets/lock-solid.svg' width='14px'>
                </i>  
            </div>   
        </div>

        <div class="input-box">
            <label for="confirmPassword">Confirme sua Senha:</label>
            <div class="input">
                <input type="password" name="confirmPassword" id="confirm-password" required>
                <i id="confirmPassIcon">
                    <img src='../assets/lock-solid.svg' width='14px'>
                </i> 
            </div>
        </div>

        <div class="showPassword">
            <input type="checkbox" name="" id="showPass"> Mostrar senha
            <i id="showIcon">
                <img src='../assets/eye-regular.svg' width='15px'>
            </i>  
        </div>

        <div class="btn">
            <button type="submit" id="enviar">Mudar senha</button>
        </div>

    </div>

</form>

<script src="../scripts/change.js"></script>
</body>
</html>