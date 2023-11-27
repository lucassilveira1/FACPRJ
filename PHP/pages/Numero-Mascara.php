<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/SMS.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <title>Número Máscara</title>
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

            <h2>Número Máscara</h2>


        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="../../assets/img/numero-mascara.png" style="margin-top: 50px;" class="img-fluid" alt="">

                    </div>


                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">


                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-check"></i></div>
                            <h4 class="title">Proteja identidades profissionais</h4>
                            <p class="description">Garanta aos seus clientes a capacidade de fazer chamadas e enviar
                                mensagens sem expor seus números de telefone pessoais. <br> <br>
                                <b>Mascare</b> um número de telefone para interações com mais privacidade. <br>
                                <b>Permite</b> que empresas façam negócios usando menos números de telefone. <br>
                                <b>Oferece</b> uma experiência mais segura e profissional.



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
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">

                            <div class="icon-box icon-box-cyan"> <br>
                                <p class="description">Usuário faz uma
                                    chamada através
                                    de um aplicativo.</p> <br>
                                <div class="icon"><img src="../../assets/img/number_masking1.png" width="150px"
                                        style="margin: -50px;" alt=""></div>
                                <br>
                                <p class="description">Ex: usuário liga para o
                                    entregador ou motorista
                                    de taxi ou entra em
                                    contato com a central de
                                    atendimento.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan"> <br>
                                <p class="description">Plataforma mascara o número original.</p> <br>
                                <div class="icon"><img src="../../assets/img/number_masking2.png" style="margin: -50px;"
                                        width="150px" alt=""></div>
                                <br>
                                <p class="description">A plataforma recebe a
                                    chamada e mascara o
                                    número antes de conectar
                                    com o destinatário.</p>
                            </div>
                        </div>
                        <br>


                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan"> <br>
                                <p class="description">Usuário faz uma
                                    chamada através
                                    de um aplicativo.</p> <br> <br>
                                <div class="icon"><img src="../../assets/img/smartphone-pin2FA.png" style="margin: -50px;"
                                        width="70px" alt=""></div>
                                <br> <br>
                                <p class="description">Após inserir seu número, a Telecall envia para o usuário por SMS
                                    ou chamada de
                                    voz um código PIN de uso único.</p>
                            </div>
                        </div>


                    </div>

                </div>

        </div>
        </section>
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="../../assets/img/numr-mascara.jpg" width="500px" style="margin-top: 50px;"
                            class="img-fluid" alt="">

                    </div>


                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">


                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-check"></i></div>
                            <h4 class="title">Recursos Avançados</h4>
                            <p class="description"> <b>SMS</b> – Número máscara é totalmente funcional para chamadas de
                                voz e SMS.
                                <br>
                                <b>Geo Match</b> – Combine o código do país do número mascarado com o da chamada de
                                origem
                                passando pro cliente a impressão de que vocês estão na mesma região. <br>
                                <b>Gestão de Sessões</b> – Habilite números máscara permanentes, bloqueie chamadas
                                indesejadas,
                                validade de sessão e etc. <br>
                                <b>Relatórios</b> – Acesso direto do cliente à relatórios detalhados.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-check"></i></div>
                            <h4 class="title"></h4>
                            <p class="description"><b>Números Simultâneos</b> - Use o mesmo número máscara em várias
                                ligações
                                simultâneas. <br>
                                <b>Triagem de Conteúdo</b> – Recurso SMS onde você pode sinalizar conteúdos sensíveis
                                para proteger
                                dados do cliente. <br>
                                <b>Escalabilidade Ilimitada</b> – compre e adicione números conforme necessário.
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
                                <div class="icon"><img src="../../assets/img/taxi.png" width="60px" style="margin: -50px;"
                                        alt=""></div>
                                <br>
                                <h4 class="title">Apps de Transporte</h4>
                                <p class="description">Permite que motorista e
                                    passageiro se comuniquem
                                    sem compartilhar seus
                                    números pessoais.

                                </p>

                            </div>

                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan"> <br>
                                <div class="icon"><img src="../../assets/img/chat.png"
                                        style="margin: -0px; margin-bottom: 40px;" width="56px" alt=""></div>
                                <br>
                                <h4 class="title">Apps de Relacionamento</h4>
                                <p class="description">Permite uma maneira
                                    privada e segura para
                                    usuários interagirem sem
                                    expor contatos pessoais.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan"> <br>
                                <div class="icon"><img src="../../assets/img/shopping-cart.png" style="margin: 0px;"
                                        width="50px" alt=""></div>
                                <br> <br>
                                <h4 class="title">E-Commerce</h4>
                                <p class="description">Permite que clientes
                                    entrem em contato através
                                    do aplicativo. Podem
                                    também integrar chamadas
                                    internacionais.</p>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box icon-box-cyan"> <br><br>
                                <div class="icon"><img src="../../assets/img/express-delivery.png" style="margin: -50px;"
                                        width="60px" alt=""></div>
                                <br>
                                <h4 class="title">Entregas
                                    & Logística</h4>
                                <p class="description"> Mantenha seu cliente
                                    informado sobre
                                    entregas e serviços, tire
                                    dúvidas, etc.</p>
                            </div>
                        </div>



                    </div>

                </div>
            </section>

            <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6 video-box">
                            <img src="../../assets/img/fundo-2.jpg" style="margin-top: 50px;" class="img-fluid" alt="">

                        </div>


                        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">


                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-check"></i></div>
                                <h4 class="title">Quem também pode usar?</h4>
                                <p class="description">43% das empresas brasileiras adotou o Home
                                    Office como padrão. Mesmo após o fim da pandemia, estatísticas
                                    indicam que o modelo de trabalho Home
                                    Office deve crescer cerca de 30%.


                            </div>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-check"></i></div>
                                <h4 class="title"><a href=""></a></h4>
                                <p class="description">Funcionários que não possuem celular empresarial ou ramal
                                    virtual podem se beneficiar do uso de um número máscara
                                    permanente do trabalho vinculado ao seu telefone celular,
                                    assim protegendo seus número pessoais.
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