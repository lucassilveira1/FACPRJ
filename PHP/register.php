<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // conectando ao banco
            $mysqli = new mysqli("localhost", "root", "", "projeto");
            // verificando conexão
            if($mysqli->connect_error) {
                die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
            };

            // Dados do Formulário
            $name = $_POST["name"];
            $data = $_POST["date"];
            $sexo = $_POST["sexo"];
            $motherName = $_POST["motherName"];
            $cpf = $_POST["cpf"];
            $cellphone = $_POST["celular"];
            $telFixo = $_POST["fixo"];
            $email = $_POST["email"];
            $endereco = $_POST["address"];
            $login = $_POST["login"];
            $senha = $_POST["password"];

            // criando a instrução para inserir os dados na tabela
            $sql = "INSERT INTO register (Nome, `Data de Nascimento`, Sexo, `Nome Materno`, CPF, `Tel Celular`, `Tel Fixo`, `E-mail`, Endereço, `Login`, `Senha`)
                VALUES ('$name','$data', '$sexo', '$motherName', '$cpf', '$cellphone', '$telFixo', '$email', '$endereco', '$login', '$senha')";

            // executando a instrução
            if($mysqli->query($sql) === TRUE) {
                header("Location: login.php");
            } else {
                header("Location: register.php");
            }
            
            // finalizando a conexão
            $mysqli->close();
        }

        
        ?>

        <h1>Cadastre-se!!</h1>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <div class="input-box">
            <label for="name">Nome</label>
            <input type="text" placeholder="Nome e Sobrenome" id="name" name="name" required>
        </div>

        <div class="input-box">
            <label for="date">Data de Nascimento</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div class="input-box">
            <label for="sexo">Sexo</label>
            <select id="sexo" name="sexo">
                <option value="male">Masculino</option>
                <option value="female">Feminino</option>
                <option value="other">Outro</option>
                <option value="nothing">Prefiro não informar</option>
            </select>
        </div>

        <div class="input-box">
            <label for="motherName">Nome Materno</label>
            <input type="text" placeholder="Nome Materno" id="motherName" name="motherName" required>
        </div>

        <div class="input-box">
          <label for="cpf">CPF</label>
          <input type="text" placeholder="Digite seu CPF" required id="cpf" name="cpf">
        </div>

        <div class="input-box">
            <label for="celular">Telefone Celular</label>
            <div class="input">
                <input type="tel" placeholder="Número de Celular" required id="celular" name="celular">
                <i>
                    <img src="../assets/mobile-solid.svg" alt="ícone de celular" width="14px">
                </i>           
             </div>
        </div>

        <div class="input-box">
            <label for="fixo">Telefone Fixo</label>
            <div class="input"> 
                <input type="tel" placeholder="Número Tel. Fixo" required id="fixo" name="fixo">
                <i>
                 <img src="../assets/phone-solid.svg" alt="ícone de envelope" width="15px">
                </i>
            </div>
        </div>

        <div class="input-box">
            <label for="email">E-mail</label>
            <div class="input">
                <input type="email" placeholder="Digite seu e-mail" id="email" name="email" required>
                <i>
                    <img src="../assets/envelope-solid.svg" alt="ícone de envelope" width="15px">
                </i>
            </div>
        </div>

        <div class="input-box">
            <label for="address">Endereço</label>
            <div class="input">
                <input type="text" placeholder="Digite seu endereço completo" id="address" name="address" required>
                <i>
                    <img src="../assets/location-dot-solid.svg" alt="ícone de localização" width="14px">
                </i>
            </div>
        </div>

        <div class="input-box">
            <label for="login">Login</label>
            <div class="input">
                <input type="text" placeholder="Crie um login" id="login" name="login" required>
                <i>
                    <img src="../assets/user-solid.svg" alt="ícone de pessoa" width="14px">
                </i>           
             </div>
        </div>

        <div class="input-box">
            <label for="password">Senha</label>
            <div class="input">
                <input type="password" placeholder="Crie uma senha" id="password" name="password" required>
                <i id="passIcon">
                    <img src='../assets/lock-solid.svg' width='14px'>
                </i>         
            </div>
        </div>

        <div class="showPassword">
            <input type="checkbox" id="showPassword"> Mostrar senha  
            <i id="showIcon">
                <img src='../assets/eye-regular.svg' width='15px'>
            </i>        
        </div>

        <div class="input-box">
            <label for="password">Confirme sua senha</label>
            <div class="input">
                <input type="password" placeholder="Confirme sua senha" id="confirm-password" required>
                <i id="confirmPassIcon">
                    <img src='../assets/lock-solid.svg' width='14px'>
                </i> 
            </div>           
        </div>
        <div class="btn">
            <button type="submit">Cadastrar</button>
            <button type="reset">Limpar</button>
        </div>
        <p class="account">Já possui conta? <span><a href="login.php"> Entre!</a></span></p>
        </form>
    </div>
    
    <script src="../scripts/validation.js"></script>
</body>
</html>