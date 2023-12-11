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
    <link rel="stylesheet" href="../../CSS/index.css">
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Index</title>
</head>
<body>
<div class="principal">
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

<div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../assets/bootstrap/CEL-EMPRESARIAL.png" class="d-block w-100" alt="Celular Empresarial">
          </div>
          <div class="carousel-item">
            <img src="../../assets/bootstrap/internet-dedicada.png" class="d-block w-100" alt="homem-segurando-um-tablet">
          </div>
          <div class="carousel-item">
            <img src="../../assets/bootstrap/PABX2.png" class="d-block w-100" alt="homem-falando-ao-telefone">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <p class="text-center fs-1 mt-4 text-primary-emphasis fw-bold">Conectando um mundo melhor</p>
      <br>
      <br>
      <div class="container ">
        <div class="row align-itens-center">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">Celular Empresarial</h5>
              <p class="card-text">Monte seu plano de celular personalizado com soluções inteligentes de conexão para seus colaboradores e pague apenas quando utilizar.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">Infraestrutura Local</h5>
              <p class="card-text">Realizamos toda conexão local necessária para manter sua empresa sempre na rede, com todo suporte que você precisa para se destacar no mercado.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <h2 class="cliente-title">Nossos Clientes</h2>
            <h3 class="cliente-subtitle">Os que acreditam em nossos serviços</h3>

            <div class="card-container">
              <div class="card-cliente">
                <div id="imagem">
                  <h3><img src="../../assets/clientes/logo-rock-in-rio.png" alt="" class="cliente-img"></h3>
                </div>
                <p class="cliente-txt">É com o coração transbordando de orgulho e gratidão que concluímos uma edição do Rock in Rio. Toda a magia que vivemos nesses 7 dias de festival jamais seria possível sem a participação de marcas e profissionais como vocês que acreditaram na gente e ajudaram a tornar esse sonho realidade. A edição 2017 ficará para a história e agora nosso desafio é ainda maior. Fica aqui mais uma vez, o nosso muito obrigada e que venha 2019!!</p>
                <p class="cliente-name">Laila Dias</p>
                <p class="cliente-exe">Account Executive - Brazil</p>
              </div>
            
              <div class="card-cliente">
                <div id="imagem">
                  <h3><img src="../../assets/clientes/mcdonalds-logo-footer-bg-white.png" alt="" class="cliente-img"></h3>
                </div>
                <p class="cliente-txt">O Mc Donald conheceu a Telecall durante os Jogos Olímpicos Rio 2016 para um pedido urgente de um evento de mídia ao vivo, quatro dias mais tarde. A Telecall foi extremamente proﬁssional... Nós simplesmente não teríamos conseguido sem a parceria da equipe Telecall. Só usaremos eles em eventos no Rio.</p>
                <p class="cliente-name">Kathy Whalen</p>
                <p class="cliente-exe">Project Manager, Consumer Events | Creative & Event Solutions | Global Business Services</p>
              </div>
            
              <div class="card-cliente">
                <div id="imagem">
                  <h3><img src="../../assets/clientes/Untitled-design-16.png" alt="" class="cliente-img"></h3>
                </div>
                <p class="cliente-txt">Gostaríamos de agradecer a Telecall pelo trabalho maravilhoso que realizaram. O trabalho da equipe é sensacional, com rapidez e atenção... parabéns a toda equipe da Telecall e muito obrigada.</p>
                <p class="cliente-name">Suelen Campos</p>
                <p class="cliente-exe">PROGOLF - CAMPO DE GOLFE OLÍMPICO - BARRA DA TIJUCA</p>
              </div>
            </div>
      <br>
      <br>
      <br>
      <br>
      <p class="text-center fs-1 mt-1 text-primary-emphasis fw-bold">Nossa história</p>
    </div>
    <div class="container ">
      <div class="row align-itens-center">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card border border-0">
          <div class="card-body text-center">
            <p class="card-text fs-4">A Telecall é uma operadora de telecomunicações brasileira que oferece a seus clientes o mais alto padrão de qualidade,
               velocidade e acessibilidade em soluções de comunicação. Serviços que incluem uma ampla gama de valores agregados, oferecendo aos clientes operações mais produtivas,
               inovadoras e eficazes. Com mais de 20 anos de experiência na indústria global, a Telecall hoje é sinônimo de qualidade e eficiência.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card border border-0">
          <div class="card-body text-center">
            <p class="card-text">
              <img src="../../assets/bootstrap/quem-somos.png" class="img-fluid" alt="mapa-mundi-clientes-telecall">
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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