<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/SMS.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <title>Google Verified Calls</title>
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

    <h2>Google Verified Calls</h2>

        <div class="section-title">


            <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                <h2>O que é o Google Verified Calls?</h2>
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 video-box">
                            <img src="../../assets/img/img-google.png" style="margin-top: 50px;" class="img-fluid"
                                alt="google-verified">
                        </div>

                        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-check"></i></div>

                                <h4 class="title">Chamadas verificadas.</h4>
                                <p class="description">Esse novo recurso do Google, exclusivo para
                                    telefones Android, permite que empresas exibam
                                    para o cliente na hora da chamada sua marca,
                                    logotipo e até mesmo o motivo da chamada. <br> <br>
                                    A Telecall é a primeira operadora de telecom no
                                    Brasil a oferecer esse recurso do Google.
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <div class="section-title">
                <h2>O Problema...</h2>

                <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-6 video-box">
                                <img src="../../assets/img/estatistica.png" width="350px" class="img-fluid" alt="">

                            </div>

                            <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-check"></i></div>
                                    <h4 class="title">Ligações de spam.</h4>
                                    <p class="description">
                                        O Brasil é o país que mais sofre com ligações de spam no mundo. <br> <br>
                                        Desde 2017, as chamadas telefônicas de spam no Brasil aumentaram 141%. <br> <br>
                                        O brasileiro recebe em média 49,9 ligações de spam por mês.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <div class="section-title">
                    <h2>Compatibilidade</h2>

                    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                        <div class="container">

                            <div class="row">
                                <div class="col-lg-6 video-box">
                                    <img src="../../assets/img/cell.png" width="550px" class="img-fluid" alt="">
                                </div>

                                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                                    <div class="icon-box">
                                        <div class="icon"><i class="bx bx-check"></i></div>

                                        <p class="description">
                                            Exclusivo para sistema operacional <b>Android</b>através do aplicativo
                                            <b>Telefone</b>. <br> <br>
                                            Pré-instalado em telefones mais recentes ou pode ser baixado do <b>Google
                                                Play Store</b> para a
                                            maioria dos dispositivos com Android 9.0. <br> <br>
                                            Hoje no Brasil existem quase <b>239 milhões de celulares smartphone
                                                ativos</b>, sendo que o
                                            sistema
                                            Android detém uma participação de mais de <b>86%</b> do mercado de sistema
                                            operacional móvel no
                                            país.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <div class="section-title">
                        <h2>Como funciona?</h2>
                        <section class="services">
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                                        data-aos-delay="100">

                                        <div class="icon-box icon-box-cyan"> <br>

                                            <div class="icon"><img src="../../assets/img/mulher-google.png" width="110px"
                                                    style="margin: -50px;" alt="">
                                            </div>
                                            <br>
                                            <p class="description">Uma chamada telefônica
                                                de uma empresa assinante
                                                é feita para um cliente
                                                potencial ou existente.</p>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <div class="icon-box icon-box-cyan">

                                            <div class="icon"><img src="../../assets/img/config-google.png"
                                                    style="margin: -50px;" width="140px" alt="">
                                            </div>

                                            <p class="description">Em nanossegundos, a
                                                solicitação é encaminhada
                                                para a plataforma da Telecall
                                                que processa a chamada e
                                                adiciona as informações
                                                verificadas antes de
                                                encaminhá-la ao destinatário.</p>
                                        </div>
                                    </div>
                                    <br>


                                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <div class="icon-box icon-box-cyan"> <br>

                                            <div class="icon"><img src="../../assets/img/cell-gooogle.png"
                                                    style="margin: -50px;" width="100px" alt="">
                                            </div>
                                            <br><br>
                                            <p class="description">As informações aparecem
                                                na tela do celular do
                                                recipiente que atenderá a
                                                ligação com uma chamada
                                                de voz normal.</p>
                                        </div>
                                    </div>


                                </div>

                            </div>

                    </div>
                    </section>
                    <div class="section-title">
                        <h2>Benefícios</h2>
                        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-6 video-box">
                                        <img src="../../assets/img/imagem-hotspot-telecall-1536x1536.png" width="500px"
                                            class="img-fluid" alt="">
                                    </div>

                                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bx-check"></i></div>

                                            <p class="description">
                                                Estabeleça Confiança
                                                Clientes são mais propensos a atender chamadas de organizações com os
                                                quais estão
                                                familiarizadas e com as quais já tem relação.
                                                <br><br>

                                                Agilize a Conexão
                                                Quando o motivo da chamada é claro, a chance de o cliente atender é
                                                muito maior e a conexão
                                                com ele mais rápida e eficiente.
                                                <br><br>
                                                Melhore a Experiência do Cliente
                                                O nome da marca, logotipo e a visualização do motivo da chamada oferecem
                                                uma experiencia
                                                melhor e muito mais amigável para o cliente.
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </section>

                        <h2>Usos</h2>
                        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-6 video-box">
                                        <img src="../../assets/img/ultima.jpg" width="550px" class="img-fluid" alt="">
                                    </div>

                                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bx-check"></i></div>

                                            <p class="description">
                                                Aviso de problemas de fraude de cartão de crédito. <br> <br>
                                                Aviso de atrasos e cancelamentos de voos. <br> <br>
                                                Agendamentos de serviços, entregas, reparos e
                                                instalações. <br> <br>
                                                Avisos sobre agendamentos, exames e resultados. <br> <br>
                                                Oferecer uma melhor experiência de vendas e
                                                promoções. <br></p>
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