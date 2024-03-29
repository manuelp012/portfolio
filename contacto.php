<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="contacto">
    <header>
        <nav class="navbar navbar-expand-md ">
            <div class="container">

                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-align-justify"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link me-5" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-5" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-5" href="proyectos.php">Proyectos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.php">ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="en/Contact.php">EN</a>
                            </li>

                        </ul>
                    </form>
                    <div class="d-inline">
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="row">
            <div class="col 12 ">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Contactame enviando un mensaje o bien por whatsapp</p>
                <div class="codigo-qr">
                    <h2 class="mt-5">¡Escanea el codigo y escribeme!</h2>
                    <a href="http://api.whatsapp.com/send?phone=541128576478" target="_blank">
                        <img class="mb-5 mt-4 border bg-white" src="images/codigo qr.jpeg" alt="QR">
                    </a>
                </div>
            </div>


            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div>
                        <input type="text" name="txtNombre" placeholder="Nombre" id="txtNombre"
                            class="form-control mb-3">
                    </div>
                    <div>
                        <input type="email" name="txtCorreo" placeholder="Email" id="txtCorreo"
                            class="form-control mb-3">
                    </div>
                    <div>
                        <input type="tel" name="txtTelefono" placeholder="Telefono" id="txtTelefono"
                            class="form-control mb-3">
                    </div>
                    <div>
                        <textarea name="txtMensaje" placeholder="Mensaje" id="txtMensaje" cols="30" rows="10"
                            class="form-control"></textarea>
                    </div>
                    <div class="me-auto text-right">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn mt-4">ENVIAR</button>
                    </div>
                </form>

            </div>

        </div>
        
        
        
    </main>
    <footer class="footer mt-auto py-3 pb-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <a href="https://github.com/manuelp012" target="_blank" title="Github"><i
                            class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/manuel-angel-83a504249/" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-12 col-sm-3">
                    Sponsor<a href="http://depcsuite.com">Depc Suite</a>
                </div>
                <div class="col-12 col-sm-3">
                    <a href="mailto:manuelangel_1203@hotmail.com">manuelangel_1203@hotmail.com</a>
                </div>
            </div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="http://api.whatsapp.com/send?phone=541128576478" target="_blank"><i
                class="fa-brands fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>