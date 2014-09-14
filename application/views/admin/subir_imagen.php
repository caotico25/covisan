<section class="adminicio">
    <h2></h2>
    <article>
        <p class="tel">Seleccione de su equipo la imagen del nuevo producto.</p>
        <p class="tel">RECUERDE:</p>
        <p class="tel">- La imagen no debe pesar más de 1000Kb (1Mb).</p>
        <p class="tel">- El tamaño máximo de la imagen es de 1500x1500 píxeles</p>
        <p class="tel"></p>
        <?= form_open_multipart('admin/productos/subir_imagen') ?>
            <p class="error"><?= strip_tags($error) ?></p>
            <input type="hidden" name="id_producto" value="<?= $id_producto ?>" id="id_producto"/>
            <label for="imagen">Imagen</label><input type="file" name="imagen" value="" id="imagen"/>
            <div class="boton"><input type="submit" name="enviar" value="Finalizar" id="enviar"/></div>
        <?= form_close() ?>
        <?= form_open('admin/productos') ?>
            <div class="boton"><input type="submit" name="volver" value="Volver" id="volver"/></div>
        <?= form_close() ?>
    </article>
</section>