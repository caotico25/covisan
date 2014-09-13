<?php if (!isset($mensaje)) $mensaje = ''; ?>

<section class="adminicio">
    <h2>Modificación de la presentación</h2>
    <br /><br />
    <article>
        <p class="tel">Realice los cambios necesarios.</p>
        <p class="tel">RECUERDE: una vez guardados, los cambios no podrán recuperarse.</p>
        <p class="error"><?= strip_tags($mensaje) ?></p>
        <?= form_open('admin/presentaciones/modificar_presentacion') ?>
            <div class="presen"><textarea name="content"><?= $content->presentacion ?></textarea></div>
            <div class="boton"><input type="submit" name="modificar" value="Modificar" id="modificar"/></div>
        <?= form_close() ?>
    </article>
</section>