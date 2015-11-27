<!DOCTYPE html>
<html lang="ES">
    
    <head>
        <meta charset="UTF-8" />
        <title>Bodegas Covisan</title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap-theme.min.css') ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/fonts/font-awesome/css/font-awesome.min.css') ?>" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('javascript/bootstrap-toastr/toastr.min.css') ?>" type="text/css" />
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
                            <li><a class="titulo" href="<?= base_url('productos') ?>" >Productos</a></li>
                            <li class="active"><a class="titulo" href="<?= base_url('contacta') ?>" >Contacto</a></li>
                        </ul>
                    </div>
                </nav>
                
            </header>

            <div class="container bg-gris-claro">
                
                <section id="presentacion" class="panel panel-default sombreado">
                    <div class="panel-heading">
                        <h2 class="panel-title titulo">Contacta con nosotros</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 text-center">
                                <p>
                                    Solicite información sobre nuestros productos, o si desea realizar 
                                    un pedido indíquenos la cantidad de los productos y nos pondremos 
                                    en contacto para ofrecerle un presupuesto sin compromiso.
                                </p>
                                <?= form_open('contacta/enviar_email', array('class' => 'form-horizontal col-sm-8 col-sm-offset-1')) ?>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="nombre">Su nombre:</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="nombre" value="" id="nombre"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="telefono">Su teléfono:</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="telefono" value="" id="telefono"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="email">Su e-mail:</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="email" name="email" value="" id="email"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="asunto">Asunto:</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="asunto" value="" id="asunto"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="mensaje">Mensaje:</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" type="text" name="mensaje" value="" id="mensaje"/></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-default col-sm-6 col-sm-offset-4" type="submit" name="enviar" value="Enviar" id="enviar"/>
                                    </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-8 col-sm-offset-2 text-center">
                                <p class="tel"><strong>Teléfono:</strong> 956 36 18 74</p>
                                <p class="tel"><strong>Móvil:</strong> 687 51 92 32</p>
                                <p class="tel"><strong>Fax:</strong> 956 36 15 58</p>
                                <p class="mapa"><strong>Dónde nos encontramos:</strong></p>
                                <p class="tel">Carretera de Jerez, Km 1,300. Sanlúcar de Barrameda, Cádiz</p>
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.370419520526!2d-6.337433599999978!3d36.76168030000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0dde6c5c522a1d%3A0x8f224262df7f54cd!2sCarretera+de+Jerez%2C+47%2C+11540+Sanl%C3%BAcar+de+Barrameda%2C+C%C3%A1diz!5e0!3m2!1ses!2ses!4v1410717247052"></iframe>
                                </div>
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
        <script src="<?= base_url('javascript/bootstrap-toastr/toastr.min.js') ?>"></script>
        <script type="text/javascript" charset="utf-8">
            
            <?php if ($this->session->flashdata('envio')): ?>
                toastr.success('<?= $this->session->flashdata('envio')['cuerpo'] ?>', '<?= $this->session->flashdata('envio')['cabecera'] ?>');
            <?php endif ?>
            
            <?php if ($this->session->flashdata('error')): ?>
                toastr.error('<?= $this->session->flashdata('error')['cuerpo'] ?>', '<?= $this->session->flashdata('error')['cabecera'] ?>');
            <?php endif ?>
            
        </script>
        <!-- FIN SCRIPTS -->
    </body>
    
</html>
