<?php

    session_start();
    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    $login = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/font.css">
    <title>Index</title>
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
            <a href="#">Olá, <?php echo $login ?> &#x25BE;</a>
            <ul class="dropdown">
                <li>
                    <a href="logout.php">Desconectar</a>
                </li>
                <li>
                    <a href="#">Alterar senha</a>
                </li>
                <li>
                    <a href="#">Modelo do BD</a>
                </li>
            </ul>
        </li>
    </ul>
    </nav>


    </div>

    <footer class="footer">
        <h3>TELECALL</h3>
    </footer>
</body>
</html>