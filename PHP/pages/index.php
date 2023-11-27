<?php
session_start();

$login = "Entrar";

if(isset($_SESSION["usuario"])) {
    $login = $_SESSION["usuario"]["Login"];
};

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <title>Index</title>
</head>
<body>

<div class="index-container">

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
            <a href="./about.php">Sobre nós</a>
        </li>
        
        <li>
            <a href="./contact.php">Contato</a>
        </li>
        
        <?php
            if(isset($_SESSION["usuario"])):

        ?>

        <li class="dropdown-menu">
            <a href="#"><?php echo $_SESSION["usuario"]["Login"]; ?> &#x25BE;</a>
            <ul class="dropdown">
                <li>
                    <a href="../logout.php">Desconectar</a>
                </li>
                <li>
                    <a href="../changePswd.php">Alterar senha</a>
                </li>
                <li>
                    <a href="#">Modelo do BD</a>
                </li>
                <li>
                    <a href="./client.php">Área do Cliente</a>
                </li>
                <li>
                    <a href="./listaUsuarios.php">Lista de Usuários</a>
                </li>
            </ul>
        </li>
        <?php
            else:
                
        ?>
            <li>
                <a href="../login.php">Entrar/Cadastro</a>
            </li>
        <?php
            endif;
        ?>
    </ul>
    </nav>


</div>

<footer class="footer">
    <h3>TELECALL</h3>
    <h4>COPYRIGHT &copy; Todos os direitos reservados.

    <div class="footer_services">
                <h4>Serviços</h4>
                <ul>
                    <li><a href="2FA.php">Autenticação de dois fatores</a>
                    </li>
                    <li><a href="SMS-Programavel.php">SMS Programável</a>
                    </li>
                    <li><a href="Numero-Mascara.php">Número Máscara</a></li>
                    <li><a href="google-verified.php">Google Verified Calls</a></li>

                </ul>
            </div>

            <div class="contact-area">
                <h4>Fale Conosco</h4>
                <p>
                    Centro empresarial Mario Henrique Simonsen <br> Av. das Américas, 3434 | Bloco 1, Sala 505
                    Barra da Tijuca
                    | Rio de Janeiro, RJ <br><br>
                    <strong>Telefone:</strong> (21) 3030-101055<br>
                    <strong>Email:</strong>suporte@telecall.com<br>

                    Ou <a href="./contact.php">clique</a> e nos envie uma mensagem!
            </p>

    </div>
 </h4>
</footer>
</body>
</html>