<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corretora - Leticia Cafona</title>

    <style>
        :root {
            --primary: #ffffff;
            --secundary: #283256;
            --terciary: #d8d8d8
        }

    </style>
 <!-- Favicons -->
  <link href="images/imobi.jpg" rel="icon">
  <link href="images/imobi.jpg" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&amp;display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="plugins/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-1.8.1/slick/slick-theme.css">

    <link rel="stylesheet" href="plugins/lightbox2-2.11.3/dist/css/lightbox.min.css">

    <link rel="stylesheet" href="style.css">


</head>

<body>

    <header>
        <div class="container">
            <a href="" target="_blank" class="logo">
                <img src="images/logo.png" alt="">
            </a>

            <nav class="header__nav">
                <ul>
                    <li>
                        <a class="header__nav__link" href="#main">Inicial</a>
                    </li>
                    <li>
                        <a class="header__nav__link" href="#destaquecard__nav">Imóveis</a>
                    </li>
                    <li>
                        <a class="header__nav__link" href="#maisinfo">Informações</a>
                    </li>
                    <li>
                        <a class="header__nav__link" href="#localizacao">Localização</a>
                    </li>
                    <li>
                        <a class="header__nav__link" href="#main">Contato</a>
                    </li>
                    <li>
                        <a href="" class="header__btn">Atendimento On-line</a>
                    </li>
                </ul>
            </nav>

            <a href="" class="header__btn">
                <span>(18) 996638901</span>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>

            <button class="header__togglemobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </div>
    </header>

    <main id="main">
        <!--formulário-->
        <div id="id01" class="modal__form">
            <div class="modal-content__form">
                <div class="main__col__form-popup">
                    
                   <i onclick="document.getElementById('id01').style.display='none'" class="fa fa-times fa-2x" aria-hidden="true" style="margin-left: 320px;"></i>
                    <div class="main__col__form-popup__text">
                        <h4>mensagem para leticia cafona</h4>
                        <hr>
                        
                    </div>
    
                    <form action="">
                        <input type="text" name="" id="" placeholder="Seu Nome">
                        <input type="text" name="" id="" placeholder="Seu E-mail">
                        <input type="text" name="" id="" placeholder="Seu Telefone">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Escreva Sua Mensagem"></textarea>
                        <div class="main__col__form-popup__captcha">
                            <span>1234 repita:</span>
                            <input type="text" name="" id="" placeholder="1234" maxlength="4">
                        </div>
    
                        
    
                        <button type="submit" class="btn">ENVIAR</button>
                    </form>
                </div>
              </div>
            </div>
          </div>

        <div class="main__frm_corretor">
            <h1 class="main__frm_corretor__title">CORRETORA</h1>
            <div class="main__frm_corretor__img">
                <img src="images/foto_corretor.jpg">
            </div>

            <div class="main__frm_corretor__info">
                <span class="corretor__nome">Leticia Cafona</span>
                <span class="corretor__creci">CRECI: 123456</span>
                <span class="corretor__desc">Especialista em casa alto padrão em condomínios.<br></span>

                <div class="main__frm_corretor__img-icone">
                    <a href="#"><img src="images/icon_whatsapp.png" style="margin-right: 16px;max-width: 35px;"></a>
                    <a href="#"><img src="images/icon_insta.png" style="max-width: 35px;"></a>
                </div>
                
                <a href="#" style="color: #868e96;font-size: 19px;"><span class="corretor__tel"><i
                            class="fa fa-whatsapp" aria-hidden="true"></i> 9 9663-8901</span></a>
                <a href="#" style="color: #868e96;font-size: 19px;"><span class="corretor__email"><i
                            class="fa fa-envelope-o" aria-hidden="true"></i>contato@imobibrasil.com.br</span></a>

                <a onclick="document.getElementById('id01').style.display='block'" class="main__form__btn">enviar mensagem</a>
                

            </div>

            
        </div>

        <div class="container">
            <div class="destaquecard__nav">
                <h3 class="destaquecard__nav__title"><strong>Imóveis</strong></h3>
            </div>

            <div class="destaquecard__carousel">

                <?php

                    $servidor = "191.252.132.163";
                    $usuario = "usuario2_user2";
                    $senha = "%#ER}Kgh16T#";
                    $dbname = "usuario2_banco2_teste";

                    $mysqli = new mysqli($servidor, $usuario, $senha, $dbname);
                    if($mysqli->connect_errno){
                        echo "Deu pau: (".$mysqli->cinnect_errno.")".$mysqli->connect_error;
                    }
                    
                    $query = "SELECT  im.codigo_cad, im.codigo_imo, im.descricao_imo , imm.arquivo_imm FROM perfil_busca pb INNER JOIN perfil_imoveis_compativeis ic 
                    ON pb.codigo_cad = ic.codigo_cad AND pb.codigo_pro = ic.codigo_pro INNER JOIN imovel im ON im.codigo_imo = ic.codigo_imo INNER JOIN imovel_imagem imm
                    ON imm.codigo_imo = im.codigo_imo WHERE pb.codigo_cad = 150 AND pb.codigo_pro = 71 AND imm.destaque_imm = 'S' GROUP BY im.codigo_imo ";

                $consulta = mysqli_query($mysqli, $query);
                If($consulta){
                    while($linha = mysqli_fetch_array($consulta)){
                        echo '<a href="#" title="teste" class="destaquecard venda"> <div class="destaquecard__img">
                        <img data-src="https://www.imobbrasil.com.br/imagens/imoveis/'.$linha['arquivo_imm'].'"'
                        .'src="https://www.imobbrasil.com.br/imagens/imoveis/'.$linha['arquivo_imm'].'"';
                        echo '<p class="destaquecard__tagimg">Exclusividade</p><div class="destaquecard__img__content">
                        <p class="destaquecard__valor">R$ 1.300.000</p></div></div>';
                        echo '<div class="destaquecard__details"><p class="destaquecard__name">Casa em Condomínio</p>
                        <p class="destaquecard__location">São Paulo, Centro</p><p class="destaquecard__description">'.$linha['descricao_imo'].'</p>';
                        
                        echo' <div class="destaquecard__tags"> <div class="destaquecard__tag"> <div class="destaquecard__tag__tooltip">Dormitórios</div>
                            <p><i class="fa fa-bed" aria-hidden="true"></i><span>2</span></p>                       </div>
                        <div class="destaquecard__tag"> <div class="destaquecard__tag__tooltip">Banheiros</div>
                            <p><i class="fa fa-shower" aria-hidden="true"></i><span>2</span></p>                      </div>
                        <div class="destaquecard__tag">                         <div class="destaquecard__tag__tooltip">Vagas</div>
                            <p><i class="fa fa-car" aria-hidden="true"></i><span>2</span></p>
                        </div>   <div class="destaquecard__tag">              <div class="destaquecard__tag__tooltip">Suítes</div>
                            <p><i class="fa fa-bath" aria-hidden="true"></i><span>2</span></p>
                        </div>              <div class="destaquecard__tag">      <div class="destaquecard__tag__tooltip">Privativa</div>
                            <p><i class="fa fa-expand" aria-hidden="true"></i><span>600</span></p>  </div>  </div> </div> </a>';
                    }
                }
                ?>

                <a href="#"
                    title="Casa em Condomínio para Venda, em São Paulo, bairro Centro, 2 dormitórios, 2 banheiros, 2 suítes, 2 vagas"
                    class="destaquecard venda">
                    <div class="destaquecard__img">
                        <img data-src="https://www.imobbrasil.com.br/imagens/imoveis/20150319090207759.jpg"
                            src="https://www.imobbrasil.com.br/imagens/imoveis/20150319090207759.jpg">
                        <p class="destaquecard__tagimg">Exclusividade</p>
                        <div class="destaquecard__img__content">
                            <p class="destaquecard__valor">R$ 1.300.000</p>
                        </div>
                    </div>
                    <div class="destaquecard__details">
                        <p class="destaquecard__name">Casa em Condomínio</p>
                        <p class="destaquecard__location">São Paulo, Centro</p>
                        <p class="destaquecard__description">Apto contendo 3 dormitorios, sendo 1 suite com closet, sala
                            2 amb c/ lavabo e sacada, cozinha planejada, area ...</p>

                        <div class="destaquecard__tags">
                            <div class="destaquecard__tag">
                                <div class="destaquecard__tag__tooltip">Dormitórios</div>
                                <p><i class="fa fa-bed" aria-hidden="true"></i><span>2</span></p>
                            </div>
                            <div class="destaquecard__tag">
                                <div class="destaquecard__tag__tooltip">Banheiros</div>
                                <p><i class="fa fa-shower" aria-hidden="true"></i><span>2</span></p>
                            </div>
                            <div class="destaquecard__tag">
                                <div class="destaquecard__tag__tooltip">Vagas</div>
                                <p><i class="fa fa-car" aria-hidden="true"></i><span>2</span></p>
                            </div>
                            <div class="destaquecard__tag">
                                <div class="destaquecard__tag__tooltip">Suítes</div>
                                <p><i class="fa fa-bath" aria-hidden="true"></i><span>2</span></p>
                            </div>
                            <div class="destaquecard__tag">
                                <div class="destaquecard__tag__tooltip">Privativa</div>
                                <p><i class="fa fa-expand" aria-hidden="true"></i><span>600</span></p>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
           

    </main>
    <div class="footer">
    <section class="faleconosco">
        <div class="faleconosco__container">
            <div class="faleconosco__container__title">
                <h2>Fale Conosco</h2>
                
            </div>
            <form action="" class="faleconosco__container__form">
                <input type="text" name="" id="" placeholder="Seu Nome">
                <input type="text" name="" id="" placeholder="Seu E-mail">
                <input type="text" name="" id="" placeholder="Seu Telefone">
                <textarea name="" id="" cols="30" rows="10" placeholder="Escreva Sua Mensagem"></textarea>
                <div class="faleconosco__container__captcha">
                    <span style="margin-top: -27px; margin-right: -20px;">1234 repita:</span>
                    <input type="text" name="" id="" placeholder="1234" maxlength="4">
                </div>

                

                <button type="submit" class="faleconosco__container__form__btn">ENVIAR</button>
            </form>
        </div>
    </section>

   <!-- <section class="maisinfo">
        <div class="container">
            <div class="maisinfo__title">
                <h2>Sobre a Corretora</h2>
                <p>
                    Trabalho há 14 anos no mercado imobiliário, atuando na cidade de Presidente Prudente e região.
                    Trabalho pela imobiliária Vem Sonhar Comigo. Especializado em realizar sonho da casa própria.
                </p>
            </div>
        </div>
    </section>-->
    
    <section class="localizacao">
        <div class="localizacao__title">
            <div class="container">
                <h2>Localização</h2>

                <ul>
                    <li>
                        <p>Avenida Manoel Goulart, 505 Centro - Pres. Prudente/SP</p>
                    </li>
                    <li>
                        <p>Creci. 12.3456</p>
                    </li>
                    <li>
                        <p>Telefone: (18) 3222-2222 / 3222-2222</p>
                    </li>
                    <li>
                        <p>E-mail: contatoimobibrasil.com.br</p>
                    </li>
                </ul>

            </div>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31759686.343711037!2d-69.6447615210402!3d-13.662942201364466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrazil!5e0!3m2!1sen!2sbr!4v1611749828645!5m2!1sen!2sbr"
            width="100%" height="340px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </section>
</div>

    <section class="rodape">
       <div class="container">
            <a href="" class="rodape__item">
                <i class="fa fa-commenting" aria-hidden="true"></i>
                <span>Atendimento Online</span>
            </a>

            <a href="" class="rodape__item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>Fone: (99) 9999-9999</span>
            </a>

            <a href="" class="rodape__item">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>Email: contato@imobibrasil.com</span>
            </a>
        </div>

        <div class="rodape__signature">
            <a href="">
                <img src="images/imobi.png" alt="">
            </a>
        </div>
    </section>

    <script src="plugins/jquery-3.4.1.min.js"></script>
    <script src="plugins/slick-1.8.1/slick/slick.min.js"></script>
    <script src="plugins/lightbox2-2.11.3/dist/js/lightbox.js"></script>

    <script src="script.js"></script>
</body>

</html>