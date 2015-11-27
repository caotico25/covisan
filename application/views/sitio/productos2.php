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
                            <li><a class="titulo" href="<?= base_url('inicio') ?>" >Inicio</a></li>
                            <li class="active"><a class="titulo" href="<?= base_url('productos') ?>" >Productos</a></li>
                            <li><a class="titulo" href="<?= base_url('contacta') ?>" >Contacto</a></li>
                        </ul>
                    </div>
                </nav>
                
            </header>

            <div class="container bg-gris-claro">
                
                <section id="presentacion" class="panel panel-default sombreado">
                    <div class="panel-heading">
                        <h2 class="panel-title titulo">Nuestros productos</h2>
                    </div>
                    <div class="panel-body">
                        
                        <?php foreach ($productos as $producto): ?>
                            
                            <div class="row articulo sombreado">
                                <div class="col-sm-4">
                                    <img src="<?= $producto['imagen'] ?>" class"img-responsive" style="max-width: 100%;" />
                                </div>
                                <div class="col-sm-8">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title titulo"><?= $producto['nombre'] ?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <?= nl2br($producto['descripcion']) ?>
                                        </div>
                                        <div class="panel-footer">
                                            Precio por unidad: <?= $producto['precio'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <?php endforeach ?>
                        
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
