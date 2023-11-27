<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/SMS.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <title>SMS Programável</title>
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
<main id="main">

            <h2>SMS Programável</h2>


        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="../../assets/img/sms-prgmv.png" style="margin-top: 50px;" class="img-fluid"
                            alt="SMS-Programavel">

                    </div>


                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">


                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-check"></i></div>
                            <h4 class="title">Conecte-se com seus clientes.</h4>
                            <p class="description">É muito provável que você já tenha recebido uma
                                mensagem de texto de uma empresa ou organização. <br> <br>
                                Com uma API, qualquer empresa pode enviar mensagens
                                de texto e impactar clientes, prospects ou fornecedores
                                como parte de seu processo comercial. <br> <br>
                                Com essa ferramenta você envia mensagens de SMS com
                                as informações que o seu cliente precisa e com a
                                segurança, a velocidade e a confiabilidade que você
                                espera.
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <div class="section-title">
            <h2>SMS é a forma mais rápida, eficiente e de baixo custo para se comunicar com seus clientes.</h2>
            <section class="services">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan">
                                <h1 class="t1-sms">98%</h1>

                                <p class="p1-sms">de taxa de abertura</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan">
                                <h1 class="t1-sms">90%</h1>

                                <p class="p1-sms">dos SMS são lido em até 3 minutos</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan">
                                <h1 class="t1-sms">80%</h1>

                                <p class="p1-sms">das pessoas interagem com SMS comerciais</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan">
                                <h1 class="t1-sms">35%</h1>

                                <p class="p1-sms">maior a probabilidade de um cliente abrir um SMS do que um e-mail.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 video-box">
                            <img src="../../assets/img/campanha-sms-em-massa.png" width="250px" style="margin-top: 50px;"
                                class="img-fluid" alt="">

                        </div>


                        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-check"></i></div>
                                <h4 class="title">Benefícios</h4>
                                <p class="description">
                                    Comunicação rápida, efetiva e escalável. <br>
                                    Baixo custo. <br>
                                    Alta taxa de entrega e leitura. <br>
                                    Personalização de data, hora e conteúdo. <br>
                                    Interação bidirecional: recebimento de respostas. <br>
                                    Plataforma user-friendly. <br>
                                    Acompanhamento de métricas e relatórios <br>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
</main>

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