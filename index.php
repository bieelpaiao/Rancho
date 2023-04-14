<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rancho Macakinha</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
        <link href="assets/css/styles.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/18c0c84c7c.js" crossorigin="anonymous"></script>
        <script src="./assets/js/script.js" defer></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/img/logo_verde.png" alt="Logo Cia da Pesca" id="navbar-logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Início</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#about-area">Sobre nós</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#gallery-area">A Casa</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#services-area">Comodidades</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#values-area">Valores</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact-title">Reserve</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#location-area">Localização</a>
                            </li>                        
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>    

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/galeria/pescaria.jpg" class="d-block w-100 carousel-img" alt="Pescaria">
                        <div class="carousel-caption d-block">
                            <h2>Pescaria</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/galeria/acomodacoes.jpg" class="d-block w-100 carousel-img" alt="Acomodações">
                        <div class="carousel-caption d-block">
                            <h2>Acomodações</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/galeria/casinha-arvore.jpg" class="d-block w-100 carousel-img" alt="Casinha na Árvore">
                        <div class="carousel-caption d-block">
                            <h2>Casinha na Árvore</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/galeria/lazer.jpg" class="d-block w-100 carousel-img" alt="Lazer">
                        <div class="carousel-caption d-block">
                            <h2>Lazer</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/galeria/acesso-represa.jpg" class="d-block w-100 carousel-img" alt="Acesso à represa">
                        <div class="carousel-caption d-block">
                            <h2>Acesso à represa</h2>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div id="about-area">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="main-title">Sobre nós</h3>
                        </div>

                        <div class="col-12 about-text">
                            <p>O Rancho Macakinha é destinado a pescadores, grupo de amigos, famílias ou qualquer outro grupo que curta a natureza, tranquilidade, muito sossego e uma boa pescaria. Estamos localizados às margens do Rio São Matheus e os seus afluentes Rio Capivara e Rio Rancharia, no Distrito de Gardênia, Município de Rancharia – SP. O rancho é de fácil acesso, com asfalto até a sua entrada, local para embarque e desembarque de barcos de pesca e/ou caiaques, e amplo espaço de estacionamento e montagem de barracas.</p>
                            <p>As acomodações são muito aconchegantes e contam com varanda espaçosa, área de churrasqueira, fogão à lenha, deck de madeira com uma pequena piscina em fibra, uma casinha suspensa muito charmosa embaixo de uma grande árvore que proporciona sombra durante o dia todo com um espaço para descanso e uma boa prosa.</p>
                            <p>A casa é de madeira, composta por um quarto com acomodação para até 8 pessoas, ar-condicionado, TV, duas beliches, uma bicama e um colchão de casal avulso. Temos também uma cozinha completa com geladeira, fogão, armário, pia, gabinete, mesas, cadeiras de área, e todos os utensílios de cozinha. O banheiro tem um bom espaço interno e possui ducha externa com água natural e chuveiro quente. Temos também um barracão que pode ser usado para guardar barcos ou montagens de barracas se for o caso.</p>
                            <p><span class="obs">Observações</span>: Não fornecemos alimentação, devendo esta ser providenciada pelos hóspedes podendo, é claro, ser feita no próprio rancho. É necessário levar travesseiros e roupa de cama.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="gallery-area">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="main-title">A casa</h3>
                        </div>

                        <div class="d-flex align-items-center justify-content-center p-4">
                            <div class="wrapper">
                                <i id="left" class="fa-solid fa-angle-left"></i>
                                <div class="carrossel">
                                    <?php include "galeria.php" ?>
                                </div>
                                <i id="right" class="fa-solid fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Comodidades</h3>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 service-box">
                            <i class="fa-solid fa-person-swimming"></i>
                            <h4>Piscina Infantil</h4>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 service-box">
                            <i class="fa-solid fa-sailboat"></i>
                            <h4>Acesso ao rio</h4>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 service-box">
                            <i class="fa-solid fa-toilet"></i>
                            <h4>Banheiro</h4>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 service-box">
                            <i class="fa-solid fa-bed"></i>
                            <h4>Acomodação para 8 pessoas</h4>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 service-box">
                            <i class="fa-solid fa-wind"></i>
                            <h4>Ar-condicionado</h4>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 service-box">
                            <i class="fa-solid fa-house"></i>
                            <h4>Casinha na árvore</h4>
                        </div>    
                    </div>
                </div>
            </div>

            <div id="values-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Valores</h3>
                        </div>

                        <div class="col-12 col-sm-6 p-3 d-flex justify-content-center">
                            <div class="card text-center w-75">
                                <div class="card-body">
                                    <i class="fa-solid fa-money-bills"></i>
                                    <h6 class="card-title value">R$ 100,00</h6>
                                    <p class="card-text">Dias consecutivos</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 p-3 d-flex justify-content-center">
                            <div class="card text-center w-75">
                                <div class="card-body">
                                    <i class="fa-solid fa-money-bills"></i>
                                    <h6 class="card-title value">R$ 120,00</h6>
                                    <p class="card-text">Dia avulso</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contact-title">
                <div class="container-fluid text-center">
                    <div class="row align-items-center">
                        <div class="col-12" id="bg-contact-title">
                            <h3 class="contact-title">Reserve Agora!</h3>
                            <p class="contact-subtitle">Preencha o formulário e entraremos em contato</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="contact-content">
                <div class="container-fluid text-center">
                    <form class="row align-items-center ps-md-5 pe-md-5" action="form.php" method="POST">
                        <div class="col-lg-6 p-md-5 my-2 my-md-0">
                            <div class="dates-title-bg">
                                <span>Escolha as datas de interesse</span>
                            </div>
                            <div class="dates-bg">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputName" class="form-label">Entrada</label>
                                        <input type="date" class="form-control" id="data-entrada" name="data-entrada" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputName" class="form-label">Saída</label>
                                        <input type="date" class="form-control" id="data-saida" name="data-saida" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 m-0 px-md-5">
                            <div class="contact-form-bg p-3">
                                <form class="row g-3" action="form.php" method="POST">
                                    <div class="col-md-12 text-start">
                                        <label for="inputName" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome" name="nome" required>
                                    </div>

                                    <div class="col-md-12 text-start">
                                        <label for="inputEmail" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>

                                    <div class="col-md-12 text-start">
                                        <label for="mensagem" class="form-label">Mensagem</label>
                                        <textarea class="form-control" id="mensagem" name="mensagem" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                                    </div>
                                </form>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="location-area">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="main-title">Onde Estamos</h3>
                        </div>

                        <div class="col-12 p-2">
                            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1841.443653091019!2d-50.904992088127905!3d-22.62068309110906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbr!4v1679353317157!5m2!1sen!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div class="circle-bg-wpp d-flex align-items-center justify-content-center">
            <a href="https://api.whatsapp.com/send/?phone=5518998124063&text=Ol%C3%A1!%20Vi%20seu%20Rancho%20no%20site." target="_blank">
                <img src="./assets/img/whatsapp.svg" class="logo-whatsapp">
            </a>
        </div>

        <footer>
            <div id="copy-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img id="logo-copy" src="./assets/img/logo_verde.png" alt="Rancho Macakinha">
                            <p>Copyright <a href="">Rancho Macakinha</a> &copy; 2023 </br> Desenvolvido por  <a href="https://www.linkedin.com/in/gabrielpaiao/" target="_blank">Gabriel Paião</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
