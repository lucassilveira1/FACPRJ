<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/contact.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar">

        <div class="brand">
            Tele<span>Call</span>
        </div>

        <ul class="links_list">

            <li>
                <a href="index.php">
                    Home
                </a>
            </li>

            <li>
                <a href="register.php">
                    Cadastro
                </a>
            </li>

            
            <li>
                <a href="../html/about.html">Sobre nós</a>
            </li>
            
            <li>
                <a href="contact.php">Contato</a>
            </li>
            
            <li class="dropdown-menu">
                <a href="#">Olá, <?php echo $_SESSION['usuario']['Login']; ?> &#x25BE;</a>
                <ul class="dropdown">
                    <li>
                        <a href="../logout.php">Desconectar</a>
                    </li>
                    <li>
                        <a href="changePswd.php">Alterar senha</a>
                    </li>
                    <li>
                        <a href="#">Modelo do BD</a>
                    </li>
                    <li>
                        <a href="#">Área do Cliente</a>
                    </li>
                    <li>
                        <a href="./listaUsuarios.php">Lista de Usuários</a>
                    </li>
                </ul>
            </li>
        </ul>
        </nav>
    </div>

    <div class="formulario-contato">
        <form method="post">
        <input type="text" id="nome" name="nome" placeholder="Nome" required>

        <input type="email" id="email" name="email" placeholder="E-mail" required>

        <input type="text" id="assunto" name="assunto" placeholder="Assunto" required>

        <textarea id="mensagem" name="mensagem" rows="4" placeholder="Mensagem" required></textarea>

        <input type="submit" value="Enviar">
    </form>

        
    </div>

    

    <footer class="footer">
        <h3>TELECALL</h3>
    </footer>
</body>
</html>