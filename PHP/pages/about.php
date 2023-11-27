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
    <link rel="stylesheet" href="../../css/about.css">
    <title>Sobre</title>
</head>
<body>

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
                                <a href="./client.php">Área do Cliente</a>
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

    <section class="about" data-aos="fade-up">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3 class="section-title">Nossa História</h3>
                        <p class="font-italic text-start text-justify">
                            Telecall é uma operadora regulada pela ANATEL (Licenças SCM, STFC e SMP), proprietária de
                            uma rede de
                            fibra de alta capacidade, oferecendo a seus clientes o mais alto padrão de qualidade,
                            velocidade e
                            acessibilidade em soluções telefônicas e de internet. Serviços que incluem uma ampla gama de
                            valores
                            agregados, oferecendo aos clientes operações mais produtivas, dinâmicas e eficazes. Com a
                            aquisição da
                            licença SMP, a Telecall agora também opera serviços móveis (voz e dados), oferecendo aos
                            clientes
                            corporativos uma variedade de planos e comodidades de valor agregado. Além disso, Telecall
                            opera como uma
                            MVNE e MVNA, oferecendo seus sistemas e redes para outras empresas que estão interessadas em
                            lançar suas
                            próprias operações móveis para alavancar suas marcas. Com experiência acumulada de mais de
                            20 anos e a
                            busca constante por inovação e tecnologia, a Telecall é hoje referência no segmento de
                            telecomunicações e
                            sinônimo de qualidade e eficiência. A Telecall foi fundada em 1998 e está sediada no Brasil,
                            com
                            escritórios em Miami, Portugal e Inglaterra.
                        </p>

                        </p>
                    </div>
                </div>

            </div>
        </section>
        <section class="skills" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Prêmios</h2>

                    <p class="text-start text-justify">Eleito Melhor Operador Regional do Ano na Premiação CC – Global
                        Awards 2019
                        em Berlim

                        Destaque em Infraestrutura e Soluções de Conectividade e Comunicação Unificada na Premiação da
                        Aberimest em
                        2018, entregue pelo ministro de telecomunicações Gilberto Kassab e Juarez Quadros, presidente da
                        Anatel.

                        Destaque como Operadora em Inovações Móveis e pelas Soluções de Convergência Fixo-Móvel, Split
                        Billing,
                        Integração e Colaboração Empresarial da Aberimest em 2019.

                        Duas vezes vencedor do Prêmio de Voip Hospedado entregue pela Revista Internet Telephony em 2018
                        pelo
                        produto Callphone de Comunicação Unificada e Colaboração.

                        #2517 no ranking Inc. 5000 das empresas privadas de maior crescimento acelerado nos EUA de 2020.
                    </p>
                </div>

            </div>

            </div>
        </section>
        <section class="testimonials" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Linha do tempo</h2>


                    <p class="text-start">+ 20 anos de experiência global em soluções de comunicação</p>
                    <img src="../assets/img/linha-do-tempo-nova-1024x576.jpg" class="img-fluid" width="800px" alt="">
                </div>

                <div class="section-title">
                    <h2>Ser Telecall</h2>

                    <p class="text-start text-justify">Ser Telecall é a busca constante do aperfeiçoamento, é ver o
                        futuro como
                        meta presente e ser um time com competitividade e produtividade no sangue.</p>

                    <br>

                    <div class="section-title">
                        <h2>Interconexões</h2>
                        <p class="text-start text-justify">Com início em 1998 oferecendo serviços de voz no Japão, a
                            divisão
                            internacional Telecall Wholesale foi criada com o objetivo de apoiar o setor de varejo da
                            empresa. Desde
                            seu lançamento, a Telecall Wholesale sempre teve muita pressão interna para oferecer
                            serviços de alta
                            qualidade com tarifas competitivas em um mercado extremamente competitivo. Com essa
                            filosofia, a Telecall
                            focou no mercado internacional e alcançou uma cobertura global com parceiros estratégicos,
                            obtendo hoje,
                            mais de 600 interconexões com algumas das maiores operadoras do mundo.
                            Com uma enorme capacidade de lidar com diferentes mercados e culturas, a Telecall Wholesale
                            pôde apoiar e
                            adaptar-se quando a empresa lançou em 2005, um produto de varejo nos EUA, um dos mercados
                            mais
                            competitivos do mundo. <br>
                            Outro desafio veio em 2010, quando a Telecall decidiu construir sua própria rede de fibra
                            óptica na cidade
                            do Rio de Janeiro, no Brasil, e começou a oferecer serviços empresariais de voz e dados.
                            <br>
                            Em um curto espaço de tempo a Telecall vem ganhando respeito nacional e internacional, e fez
                            história ao
                            participar com muito sucesso nos Jogos Olímpicos de 2014 no Brasil e do Rock in Rio em 2017.
                            <br>
                            Após quase 20 anos de sucesso e crescimento exponencial, a Telecall Wholesale é conhecida
                            hoje como uma
                            Global Carrier, com sólidas relações comerciais, capaz de se adaptar e lidar com os
                            constantes desafios e
                            mudanças do mundo dos negócios.
                        </p> <br>
                        <img src="../assets/img/mapa-interconexoes.png" class="img-fluid" width="800px" alt="">

                        <br>
                        <div class="section-title">
                            <h2>Fibras Telecall</h2>
                            <img src="../../assets/img/mapa-fibra-rj-1-1024x558.png" width="490px" class="img-fluid"
                                alt="">

                            <div class="section-title" style="display: inline-block;">

                                <img src="../../assets/img/mapa-fibra-sp-1536x1155.png" width="390px" height="100px"
                                    class="img-fluid" alt="">

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

    <!-- <footer class="footer footer2">
        <div class="col-lg-3 col-md-6 footer-info">
            <h3>Sobre</h3>
                <p>Telecall é uma operadora regulada pela ANATEL (Licenças SCM, STFC e SMP), proprietária de uma
                    rede de fibra de alta capacidade, oferecendo a seus clientes o mais alto padrão de qualidade,
                    velocidade e acessibilidade em soluções telefônicas e de internet.
                </p>
             <div class="social-links">

                <a href="https://www.facebook.com/TelecallBr/?locale=pt_BR" target="_blank"
                    class="facebook"><i>
                        <img src="../../assets/social/facebook.svg" alt="Facebook logo">
                    </i></a>
                <a href="https://www.instagram.com/telecallbr/" target="_blank" class="instagram">
                    <i>
                        <img src="../../assets/social/instagram.svg" alt="Instagram logo">
                    </i>
                </a>
                <a href="https://br.linkedin.com/company/telecall" target="_blank" class="linkedin">
                    <i>
                        <img src="../../assets/social/linkedin.svg" alt="Linkedin logo">
                    </i>
                </a>
             </div>
        </div>
    </footer> -->
</body>
</html>