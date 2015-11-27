<!DOCTYPE html>
<html lang="ES">
    
    <head>
        <meta charset="UTF-8" />
        <title>Bodegas Covisan</title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap-theme.min.css') ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/fonts/font-awesome/css/font-awesome.min.css') ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/custom.css') ?>" type="text/css" />
        
        <!-- <script src="<?= base_url('javascript/jquery-1-10-2.js') ?>" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet/less" href="<?= base_url('css/responsive.less') ?>" type="text/css" media="screen" />
        <script src="<?= base_url('javascript/less.js') ?>" type="text/javascript" charset="utf-8"></script> -->
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'> <!-- FUENTE CABECERA -->
        
    </head>
    
    <body class="container fondo">
        <!-- <div id="contenedor"> -->
            
            <header class="container">
                
                <a class="" href="<?php echo base_url('inicio') ?>">
                    <img class="img-thumbnail" src="<?= base_url('images/FachadaCooperativa.png') ?>" alt="Fachada COVISAN" />
                </a>
                
                <nav class="navbar navbar-default">
                    <div class="nav-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a class="titulo" href="<?= base_url('inicio') ?>" >Inicio</a></li>
                            <li><a class="titulo" href="<?= base_url('productos') ?>" >Productos</a></li>
                            <li><a class="titulo" href="<?= base_url('contacta') ?>" >Contacto</a></li>
                        </ul>
                    </div>
                </nav>
                
            </header>

            <div class="container bg-gris-claro">
                
                <section id="presentacion" class="panel panel-default sombreado">
                    <div class="panel-heading">
                        <h2 class="panel-title titulo">Nuestra historia</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="text-center lead">
                                    La Cooperativa del Campo Vitivinícola Sanluqueña COVISAN fue constituida el 13 de Julio de 1968, inicialmente formada por 41 socios.
                                    <br /><br />
                                    Actualmente tenemos una producción de unos 4.000.000 de kilogramos de uvas y unos 3.000.000 de litros de vino anualmente, obtenidos de las 350 hectáreas de viñedo de nuestros socios y proveedores.
                                    <br /><br />
                                    Disponemos de una bodega de crianza con 615.000 litros de manzanilla y 30.000 litros de vinos con denominación Jerez-Xérès-Sherry, envejecidos en 1.450 botas de roble. 
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/BotasEnvejecimiento.png" alt="Botas de envejecimiento" class="img-responsive" />
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-6 col-sm-offset-6">
                                <img src="images/DepositoFermentacionControladaINOX.png" alt="Depósitos de fermentación controlada de acero inoxidable" class="img-responsive" />
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-4">
                                <img src="images/marco-jerex.jpg" alt="Ruta del vino y el brandy" class="img-responsive" />
                            </div>
                            <div class="col-sm-1">
                                <img src="images/covisan.jpg" alt="Logotipo de COVISAN" class="img-responsive" />
                            </div>
                            <div class="col-sm-6">
                                <br />
                                <p class="text-center lead">Bodegas COVISAN forma parte del Marco de Jerez y la ruta del vino y el brandy.</p>
                                <p class="text-center lead">Nuestras bodegas están disponibles para los visitantes:</p>
                                <p class="text-center lead">Horario de vistas: Sábados de 11:00 a 14:00.</p>
                                <br />
                                <p class="text-center lead">Si desea contactar con nosotros puede hacerlo desde nuestra <a href="<?= base_url('contacta') ?>">zona de contacto</a>.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
            <div style="clear: both"></div> <!-- SOLUCION DEFINITIVA A LOS PROBLEMAS DE SALIDA DE SITIO EN ALTURA -->
            
        <!-- </div> -->
        <footer class="container bg-gradiente">
            <!-- <div class="footer bg-gris-claro"> -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="list-group text-center">
                            <h5>Mapa del sitio</h5>
                            <a class="list-group-item" href="<?= base_url('inicio') ?>" >Inicio</a>
                            <a class="list-group-item" href="<?= base_url('productos') ?>" >Productos</a>
                            <a class="list-group-item" href="<?= base_url('contacta') ?>" >Contacta</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="list-group text-center">
                            <h5>Realizado por:</h5>
                            <a class="list-group-item" href="<?= base_url('portal/inicio') ?>">Jose Francisco Dominguez Palacios</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="list-group text-center">
                            <h5>Tests pasados:</h5>
                            <p><a href="<?= base_url('admin/inicio/login') ?>"><img src="<?= base_url('images/valid-html5.png') ?>" alt="HTML5 passed" align="center" /></a></p>
                            <p><img src="<?= base_url('images/valid-css.png') ?>" alt="CSS3 passed" align="center" /></p>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </footer>
    
        <!-- SCRIPTS -->
        <script src="<?= base_url('javascript/jquery-1.113.min.js') ?>"></script>
        <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
        <!-- FIN SCRIPTS -->
    </body>
    
</html>
