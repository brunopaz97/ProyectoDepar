<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DepAR</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Dep<span>AR</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link">Inicio</a>
                        <a href="team.php" class="nav-item nav-link">Nosotros</a>
                        <a href="menu.php" class="nav-item nav-link">Galería</a>
                        <a href="contact.php" class="nav-item nav-link active">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contáctanos</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Contáctanos</p>
                    <h2>Contacto para cualquier consulta</h2>
                </div>
                <div class="row align-items-center contact-information">
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Ubícanos</h3>
                                <p>Avenida Rosa Toro 485 - San Luis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Llámanos</h3>
                                <p>+51 993 215 879</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Escríbenos</h3>
                                <p>appdepar01@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-share"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Síguenos</h3>
                                <div class="contact-social">
                                    <a href="https://twitter.com/Depar61638251" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/people/Depar-Trujillo/100087537776755/?mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://youtube.com/@depar7546" target="_blank"><i class="fab fa-youtube"></i></a>
                                    <a href="https://instagram.com/trujillodepar?igshid=MDM4ZDc5MmU=" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-form">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1950.7698048839175!2d-76.99557932833402!3d-12.075165601260839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1669125346587!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Su Nombre" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Su Correo" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Asunto" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Ingrese mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-contact">
                                    <h2>Ubícanos</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Avenida Rosa Toro 485, San Luis, Lima, Perú</p>
                                    <p><i class="fa fa-phone-alt"></i>+51 993 215 879</p>
                                    <p><i class="fa fa-envelope"></i>appdepar01@gmail.com</p>
                                    <div class="footer-social">
                                        <a href="https://twitter.com/Depar61638251" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/people/Depar-Trujillo/100087537776755/?mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://youtube.com/@depar7546" target="_blank"><i class="fab fa-youtube"></i></a>
                                        <a href="https://instagram.com/trujillodepar?igshid=MDM4ZDc5MmU=" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Suscríbete</h2>
                            <p style="text-align: justify;">
                                Semana a semana, accede a las últimas novedades del mercado inmobiliaria y de noticias de avances de la Realidad Aumentada en este sector. 
                            </p>
                            <div class="form">
                                <form name="sentSub" id="contactSub" novalidate="novalidate">
                                    <div class="control-group">
                                        <input  type="email" class="form-control" id="correo" placeholder="Ingrese su correo" required="required" data-validation-required-message="Porfavor, ingrese un correo" />
                                        <p class="help-block text-danger"></p>
                                        <button class="btn custom-btn" type="submit" id="sendSubButton">Enviar</button>
                                    </div>
                                </form>
                            </div>
                            <div id="registrado"></div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#" disabled>Depar</a>, Todos los Derechos Reservados.</p>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqValidation.min.js"></script>
        <script src="mail/suscrip.js"></script>
        <script src="mail/contacto.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
