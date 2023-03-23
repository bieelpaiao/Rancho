<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rancho Gardênia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
        <link href="assets/css/styles.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/18c0c84c7c.js" crossorigin="anonymous"></script>
        <script src="./assets/js/script.js" defer></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/img/logo_cia2.png" alt="Logo Cia da Pesca" id="navbar-logo">
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
                                <a class="nav-link" href="#">A Casa</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#services-area">Comodidades</a>
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
            <div class="col-12">
                <h3 class="main-title">A casa</h3>
            </div>

            <div class="d-flex align-items-center justify-content-center">
                <div class="wrapper">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <div class="carrossel">
                        <img src="./assets/galeria/img-1.jpg" alt="img" draggable="false" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="./assets/galeria/img-2.jpg" alt="img" draggable="false">
                        <img src="./assets/galeria/img-3.jpg" alt="img" draggable="false">
                        <img src="./assets/galeria/img-4.jpg" alt="img" draggable="false">
                        <img src="./assets/galeria/img-5.jpg" alt="img" draggable="false">
                        <img src="./assets/galeria/img-6.jpg" alt="img" draggable="false">
                        <img src="./assets/galeria/img-7.jpg" alt="img" draggable="false">
                        <img src="./assets/galeria/img-8.jpg" alt="img" draggable="false">
                        <img src="./assets/galeria/img-9.jpg" alt="img" draggable="false">

                        <div class="modal" id="exampleModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php //include "galeria.php"; ?>
                    </div>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                </div>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
