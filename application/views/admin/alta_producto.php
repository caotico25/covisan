<section class="adminicio">
    <h2>Añadir un nuevo producto.</h2>
    <article>
        <p class="tel">Introduzca los datos del nuevo producto:</p>
        <?= form_open('admin/productos/nuevo_producto') ?>
            <p class="error"><?= strip_tags(form_error('nombre')) ?></p>
            <label for="nombre">Nombre</label><input type="text" name="nombre" value="" id="nombre"/>
            <p class="error"><?= strip_tags(form_error('descripcion')) ?></p>
            <label for="descripcion">Descripción</label><textarea name="descripcion" id="descripcion"></textarea>
            <p class="error"><?= strip_tags(form_error('precio')) ?></p>
            <label for="precio">Precio</label><input type="number" name="precio" value="" id="precio" placeholder="00.00" step="any"/>
            <div class="boton"><input type="submit" name="enviar" value="Continuar" id="enviar"/></div>
        <?= form_close() ?>
    </article>
</section>