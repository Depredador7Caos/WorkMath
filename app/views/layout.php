<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php isset($title) ? $title : "Manejo de plantillas"; ?> </title>

    <!-- ACCESO A STYLES PERZONALIZADOS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ACCESO A BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ACCESO A FONTS 'ROBOTO' GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="nav-left">
                <a class="logo" href="?url=home">
                    <img class="img-logo" src="assets/img/logo-principal.png" alt="not found">
                    WorkMath
                </a>
            </div>
            <!-- BOTTOM RESPONSIVE -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?url=cursosDisponibles">Cursos
                            Disponibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?url=clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="?url=opciones">Configuracion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container">

        <aside class="main-lateral">
            <div class="navbar-lateral">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#"> opc-1 </a></li>
                    <li class="nav-item">opc-2</li>
                    <li class="nav-item">opc-3</li>
                    <li class="nav-item">opc-4</li>
                    <li class="nav-item">opc-5</li>
                </ul>
            </div>
        </aside>


        <main class="contenido-page shadow-form m-1">

            <?php echo $contenido; ?>

        </main>

    </section>

    <footer class="footer bg-color-purple">
        <div class="contetn-footer">
            <div class="footer-head">
                <div class="footer-ctr-title center">
                    <h2 class="text-color-white font-2">Title de aplication</h2>
                </div>
                <div class="footer-ctr-btn col-12 center py-1">
                    <button class="btn btn-secondary btn-md text-color-white col-10" type="button">Empezar
                        ahora</button>
                </div>
            </div>
            <div class="footer-content py-1 px-1">
                <div class="content-footer px-2">
                    <h2 class="text-color-white font-1-md"> Acerca de nosotros </h2>
                    <div class="contentenido px-2">
                        <a href="#">Mision</a>
                        <a href="#">Manual de "Name"</a>
                        <a href="#">Contactanos</a>
                    </div>
                </div>
                <div class="content-footer px-2">
                    <h2 class="text-color-white font-1-md"> Ayuda y soporte </h2>
                    <div class="contentenido px-2">
                        <a href="#">App</a>
                        <a href="#">Estado</a>
                    </div>
                </div>
                <div class="content-footer px-2">
                    <h2 class="text-color-white font-1-md"> Cursos </h2>
                    <div class="contentenido px-2">
                        <a href="#">Pensamiento Matematico I</a>
                        <a href="#">Pensamiento Matematico II</a>
                    </div>
                </div>
            </div>
            <div class="footer-footer py-1">
                <div class="title-items mt-1">
                    <h2 class="text-color-white font-2 center"> Nuestras redes sociales</h2>
                </div>
                <div class="footer-content-items">
                    <div class="item-content"><i class='bx bxl-discord-alt'></i></div>
                    <div class="item-content"><i class='bx bxl-instagram-alt'></i></div>
                    <div class="item-content"><i class='bx bxl-facebook-circle'></i></div>
                    <div class="item-content"><i class='bx bxl-github'></i></div>
                    <div class="item-content"><i class='bx bxl-youtube'></i></div>
                    <div class="item-content"><i class='bx bxl-whatsapp'></i></div>
                    <div class="item-content"><i class='bx bxl-messenger'></i></div>
                    <div class="item-content"><i class='bx bxl-twitter'></i></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/actions.js"></script>

</body>

</html>