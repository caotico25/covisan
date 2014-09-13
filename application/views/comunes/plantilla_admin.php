<!DOCTYPE html>
<html lang="ES">
    
    <head>
        <meta charset="UTF-8" />
        <title>Bodegas Covisan</title>
        <script src="<?= base_url('javascript/jquery-1-10-2.js') ?>" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet/less" href="<?= base_url('css/responsive.less') ?>" type="text/css" media="screen" />
        <script src="<?= base_url('javascript/less.js') ?>" type="text/javascript" charset="utf-8"></script>
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'> <!-- FUENTE CABECERA -->
        <script type="text/javascript" src="<?= base_url('javascript/tinymce/tinymce.min.js') ?>"></script>
        <script type="text/javascript">
            tinymce.init({
                    // General options
                    mode : "textareas",
                    theme : "advanced",
                    plugins : "safari,spellchecker,pagebreak,style,layer,save,advhr,advimage,advlink,iespell,preview,media,contextmenu,paste,directionality,noneditable,visualchars,nonbreaking,xhtmlxtras,template,imagemanager,filemanager",
                     
                    // Theme options
                    theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
                    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
                    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
                    theme_advanced_toolbar_location : "top",
                    theme_advanced_toolbar_align : "left",
                    theme_advanced_statusbar_location : "bottom",
                    theme_advanced_resizing : true,
                     
                    // Drop lists for link/image/media/template dialogs
                    template_external_list_url : "js/template_list.js",
                    external_link_list_url : "js/link_list.js",
                    external_image_list_url : "js/image_list.js",
                    media_external_list_url : "js/media_list.js"
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
                <a href="<?= base_url('portal/inicio') ?>">SoftCaos</a>
            </section>
            <section>
                <h5>Tests pasados:</h5>
                <p><a href="<?= base_url('admin/inicio/login') ?>"><img src="<?= base_url('images/valid-html5.png') ?>" alt="HTML5 passed" align="center" /></a></p>
                <p><img src="<?= base_url('images/valid-css.png') ?>" alt="CSS3 passed" align="center" /></p>
            </section>
        </footer>
    </body>
    
</html>