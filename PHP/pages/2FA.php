<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../css/index.css"> -->
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/2FA.css">
    <title>2FA</title>
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
                <a href="../html/about.html">Sobre nós</a>
            </li>
            
            <li>
                <a href="./contact.php">Contato</a>
            </li>
            
            <?php if(isset($_SESSION["usuario"])): ?>

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
                        <a href="#">Área do Cliente</a>
                    </li>
                    <li>
                        <a href="./listaUsuarios.php">Lista de Usuários</a>
                    </li>
                </ul>
            </li>
            <?php else: ?>
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

<h2>Autenticação de dois fatores</h2>


<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 video-box">
                <img src="../../assets/img/internet-01.jpg" style="margin-top: 50px;" class="img-fluid" alt="">

            </div>


            <div class="col-lg-6 d-flex flex-column justify-content-center p-5">


                <div class="icon-box">
                    <div class="icon"><i class="bx bx-check"></i></div>
                    <h4 class="title">Two-Factor Authentication</a></h4>
                    <p class="description">O 2FA é um procedimento de segurança que garante que serão
                        necessários 2 fatores únicos para liberação de uma ação. O
                        primeiro fator é a senha que o usuário e o segundo pode ser
                        autenticado via token, via detecção de impressão digital,
                        reconhecimento facial, código enviado via sms, entre outros.
                        <br>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title">O 2FA permite que você:</h4>
                        </a></h4>
                        <p class="description">Envie uma senha via SMS, voz ou e-mail para autenticação do
                            usuário. <br>
                            • Ofereça maior segurança para usuários.</p>


                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title">Fortaleça a estratégia de segurança de seu negócio.</h4>
                        <p class="description">Adicionar um número de telefone de recuperação a uma
                            conta individual pode bloquear até: <br>

                            100% dos bots automatizados,

                            99% dos ataques de phishing em massa,

                            e 66% dos ataques direcionados.</p>
                    </div>

                </div>
            </div>

        </div>
</section>
<div class="section-title">
    <h2>Como Funciona?</h2>
    <section class="services">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-cyan"> <br>
                        <div class="icon"><img src="../../assets/img/laptop-2fa.png" width="150px"
                                style="margin: -50px;" alt=""></div>
                        <br>
                        <p class="description">Usuário acessa seu site ou aplicativo e digita a senha cadastrada
                            para entrar em
                            seu perfil ou completar uma transação.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-cyan"> <br>
                        <div class="icon"><img src="../../assets/img/warning.png" style="margin: -50px;"
                                width="100px" alt=""></div>
                        <br>
                        <p class="description">A Telecall recebe a tentativa de login e solicita que o usuário
                            insira seu número
                            de telefone para autorizar o acesso.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-cyan"> <br>
                        <div class="icon"><img src="../../assets/img/smartphone-pin2FA.png" style="margin: -50px;"
                                width="70px" alt=""></div>
                        <br> <br>
                        <p class="description">Após inserir seu número, a Telecall envia para o usuário por SMS
                            ou chamada de
                            voz um código PIN de uso único.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-cyan"> <br><br>
                        <div class="icon"><img src="../../assets/img/laptop-2fa.png" style="margin: -50px;"
                                width="150px" alt=""></div>
                        <br>
                        <br>
                        <p class="description">O usuário insere o código no site ou aplicativo para concluir o
                            processo de
                            verificação.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="../../assets/img/2fa-steps.png" style="margin-top: 50px;" class="img-fluid" alt="">

                </div>


                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">


                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title">benefícios do 2FA</h4>
                        <p class="description">Ofereça segurança aprimorada para seus clientes. <br>
                            Reduza casos de fraude e invasões e evite o acesso a dados por invasores. <br>
                            Envio de OTP por meio de vários canais, incluindo SMS e voz.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title"></h4>
                        <p class="description">Flexibilidade de canais garante que o usuário conseguirá
                            completar a tarefa
                            desejada. <br>
                            API simples e de rápida implementação. <br>
                            Plataforma intuitiva que permite visualizar relatórios de uso por dia, mês ou ano.
                        </p>
                    </div>

                </div>
            </div>

        </div>



    </section>
    <div class="section-title">
        <h2>Quem usa?</h2>

        <section class="services">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box icon-box-cyan"> <br>
                            <div class="icon"><img src="../../assets/img/governoo.png" width="70px"
                                    style="margin: -40px;" alt=""></div>
                            <br>
                            <h4 class="title">Governo</h4>
                            <p class="description">Acesso ao portal/app <br>
                                Gestão de
                                informações
                                Agendamentos <br>
                                Recuperação de Senha</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box icon-box-cyan"> <br>
                            <div class="icon"><img src="../../assets/img/turismoo.png" style="margin: -50px;"
                                    width="75px" alt=""></div>
                            <br>
                            <h4 class="title">Turismo</h4>
                            <p class="description">Acesso ao
                                portal/app <br>
                                Gestão de Reservas <br>
                                Acesso ao histórico <br>
                                Salvar dados de
                                pagamentos <br>
                                Recuperação de
                                Senha</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box icon-box-cyan"> <br>
                            <div class="icon"><img src="../../assets/img/saudee.png" style="margin: -50px;"
                                    width="65px" alt=""></div>
                            <br> <br>
                            <h4 class="title">Saúde</h4>
                            <p class="description">Acesso ao
                                portal/app <br>
                                Agendamentos
                                Tokens de
                                autorização <br>
                                Telemedicina</p>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box icon-box-cyan"> <br><br>
                            <div class="icon"><img src="../../assets/img/finançass.png" style="margin: -50px;"
                                    width="60px" alt=""></div>
                            <br>
                            <h4 class="title">Finanças</h4>
                            <p class="description"> Acesso ao portal/app <br>
                                Autenticação para
                                transações bancárias. <br>
                                Pagamentos Online
                                (PicPay, PayPal) <br>
                                Digital Wallets (Google
                                Pay, Apple Pay,
                                Samsung Pay).</p>
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