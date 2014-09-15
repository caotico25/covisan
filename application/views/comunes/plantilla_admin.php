<!DOCTYPE html>
<html lang="ES">
    
    <head>
        <meta charset="UTF-8" />
        <title>Bodegas Covisan</title>
        <script src="<?= base_url('javascript/jquery-1-10-2.js') ?>" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet/less" href="css/responsive.less" type="text/css" media="screen" />
        <script src="javascript/less.js" type="text/javascript" charset="utf-8"></script>
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'> <!-- FUENTE CABECERA -->
        <script type="text/javascript">
            
            $(document).ready(function() {
                
                $("body").on("click", "#eliminar", function() {
                    
                    confirm("¿Seguro que desea eliminar este producto?");
                    
                });
                
            });
            
        </script>

    </head>
    
    <body>
        <div id="contenedor">
            
            <header>
                <a href="<?= base_url('inicio') ?>" > </a>
            </header>

            <div id="contenido">
                
                <?= $contenido ?>
                
            </div>
            <div style="clear: both"></div> <!-- SOLUCION DEFINITIVA A LOS PROBLEMAS DE SALIDA DE SITIO EN ALTURA -->
            
        </div>
        <footer>
            <section id="mapa_del_sitio">
                <h5>Mapa del sitio</h5>
                <a href="<?= base_url('inicio') ?>" >Inicio</a>
                <a href="<?= base_url('productos') ?>" >Productos</a>
                <a href="<?= base_url('contacta') ?>" >Contacta</a>
            </section>
            <section id="enlaces_externos">
                <h5>Realizado por:</h5>
                <a href="<?= base_url('portal/inicio') ?>">Jose Francisco Dominguez Palacios</a>
            </section>
            <section>
                <h5>Tests pasados:</h5>
                <p><a href="<?= base_url('admin/inicio/login') ?>"><img src="<?= base_url('images/valid-html5.png') ?>" alt="HTML5 passed" align="center" /></a></p>
                <p><img src="<?= base_url('images/valid-css.png') ?>" alt="CSS3 passed" align="center" /></p>
            </section>
        </footer>
    </body>
    
</html>