<?php include('functions.php')?>    

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Do Science</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="css/responsive.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <p style= "color: #1a7ff1d5; width: 100%; text-align: center;   font-size: 80px; margin-top: 80px" >
            doScience
        </p>
	</head>

	<body>
    <!-- header-img -->
    <div class="container">
        <section id="banner">
            <img class="img-responsive" src="images/doScience.png" style="width: 100%;" alt="">
            <br><br><br><br><br>
        </section>
    </div>

	<!-- Header -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default navbar-fixed-top ">
                          <div class="container-fluid">
                            <!-- Como será mostrado em dispositivos móveis -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class=  "sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                              
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right" id="top-nav">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#sobre">Sobre</a></li>
                                    <!--<li><a href="#blog">Blog</a></li>-->
                                    <li><a href="#contact-us">Registro</a></li>
                                    <li><a href="login.php">Login</a></li>
                                </ul>
                            </div>
                          </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
   
   
    
    <!--Sobre-->
    <section id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div>
                       
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" ><span>Quem Somos ?</span></h1>
                       <FONT SIZE="5"> </font><p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms"><br>A DoScience é uma empresa de pesquisa cientifica. Objetivo de levar conhecimento aos alunos.</p></br>
                        
                    </div>
                </div>
            </div>
        </div>
   </div>
    </section>
    
    <!-- blog -->
    
    <div class="row">
			<div class="col-xs col-sm-12 col-md-4 col-lg-4">
				<div class="thumbnail">
					<div>
						<i class="fa fa-plane fa-4x" aria-hidden="true">

						</i>
					</div>

					<div class="caption">
						<h3>Passagens aéreas</h3>
						<p>Aqui você encontra as melhores ofertas e oportunidades de voar nas melhores companhias do mundo</p>
						<p><a href="https://www.decolar.com/" target="blank" class="btn btn-success" role="button">Pesquisar</a></p>
					</div>
					
				</div>
			</div>

			<div class="col-xs col-sm-12 col-md-4 col-lg-4">
					<div class="thumbnail">
						<div>
							<i class="fa fa-bed fa-4x" aria-hidden="true">
	
							</i>
						</div>
	
						<div class="caption">
							<h3>Hotéis</h3>
							<p>Os melhores hotéis, com os melhores preços para que sua viagem seja ainda mais especial e aconchegante</p>
							<p><a href="https://www.booking.com/index.pt-br.html?aid=331424;sid=27e78124906f5a79d4bc8d7fea4f1961;keep_landing=1&sb_price_type=total&" target="blank" class="btn btn-success" role="button">Pesquisar</a></p>
						</div>
						
					</div>
				</div>

				<div class="col-xs col-sm-12 col-md-4 col-lg-4">
						<div class="thumbnail">
							<div>
								<i class="fa fa-car fa-4x" aria-hidden="true">
		
								</i>
							</div>
		
							<div class="caption">
								<h3>Carros</h3>
								<p>Aqui você encontra as melhores ofertas e oportunidades de voar nas melhores companhias do mundo</p>
								<p><a href="https://www.localizahertz.com/others/en-us" target="blank" class="btn btn-success" role="button">Pesquisar</a></p>
							</div>
							
						</div>
					</div>
			
			

		</div>

    <!--Contatos -->

    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>Faça seu cadastro!</span></h1>
                        <form>
                            <FONT SIZE="5" </font><p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Nome</p>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="text" class="form-control" placeholder="Digite seu nome aqui..." name="username" value="<?php echo $username; ?>">
                            </div>
                            <FONT SIZE="5" </font><p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Email</p>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="text" class="form-control" placeholder="Digite seu e-mail aqui ..." name="email" value="<?php echo $email; ?>" >
                            </div>
                            <FONT SIZE="5" </font><p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Senha</p>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="password" class="form-control" placeholder="Digite sua senha aqui ..." name="password_1">
                            </div>
                            <FONT SIZE="5" </font><p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Confirme a senha</p>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="password" class="form-control" placeholder="Digite sua senha aqui novamente ..." name="password_2">
                            </div>

                        </form>
                        <a class="btn" type= "submit" name="register_btn" style="color: rgb(255, 255, 255)" data-wow-duration="500ms" data-wow-delay="1300ms" href="home.php" role="button">Cadastrar</a>
<!-- <a class="btn btn-default wow bounceIn" style="color: rgb(255, 255, 255)" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">Registrar-se</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
     
    <!--Inscrever -->
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> <span>Nossos Parceiros</span></h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" style="font-size: 1.3em; margin-bottom: 5px; color: #1a7ff1d5">Universidades parceiras da doScience fazendo ciência.</p>

                        <img src="images/uerj.png" alt="blog-img" width="200" height="200">
                        <img src="images/uezo.png" alt="blog-img" width="200" height="200">
                        <img src="images/uff.png" alt="blog-img"  width="200" height="200">
                        <img src="images/ufrgs.png" alt="blog-img" width="200" height="200">
                        <img src="images/unirio.png" alt="blog-img" width="200" height="200">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="700ms">
                        <h3>Informações de contato</h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <h4><i class="fa fa-phone"></i>Telefone</h4>
                                    <p>(55) 21 99874-3359</p>    
                                </li>
                                <li>
                                    <h4><i class="fa fa-map-marker"></i>Endereço</h4>
                                    <p>Rua Santa Luzia 735 sala 705, Cinelandia -RJ </p>
                                </li>
                                <li>
                                    <h4><i class="fa fa-envelope"></i>E-mail</h4>
                                    <p>contato@doscience.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="700ms">
                        <h3>Navegue</h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <h4><a href="#">Home</a></h4>
                                    <p>Os melhores conteúdos sobre Hip-Hop.</p>
                                </li>
                                <li>
                                    <h4><a href="404.php">Blog</a></h4>
                                    <p>As melhores música e lançamentos.</p>
                                </li>
                                <li>
                                    <h4><a href="login.php">Login</a></h4>
                                    <p>Notícias sempre atualizadas para você.</p>
                                </li>
                            </ul>                
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                          <h3>Siga-nos</h3>
                        <div class="social-media-link">
                            <ul>
                                <li><a target="_blank" href="https://twitter.com/bancaoficial"> <i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank"  href="https://www.facebook.com/bancaclandestina"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank"  href="https://www.instagram.com/bancacompany/"><i class="fa fa-instagram"></i></a></li>
                                <li> <a target="_blank"  href="https://www.youtube.com/user/bancaclandestina/videos"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================= footer-bottom  start ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2019 - Todos os direitos reservados. Desenvolvido por <a href="#">doScience</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>