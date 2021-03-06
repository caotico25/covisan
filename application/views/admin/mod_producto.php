<section class="adminicio">
    <h2>Modificar producto.</h2>
    <article>
        <p class="tel">Modifique los datos necesarios del producto:</p>
        <?= form_open('admin/productos/modificar_producto') ?>
            <p class="error"><?= strip_tags(form_error('nombre')) ?></p>
            <label for="nombre">Nombre</label><input type="text" name="nombre" value="<?= $producto['nombre'] ?>" id="nombre"/>
            <p class="error"><?= strip_tags(form_error('descripcion')) ?></p>
            <label for="descripcion">Descripción</label><textarea name="descripcion" id="descripcion"><?= $producto['descripcion'] ?></textarea>
            <p class="error"><?= strip_tags(form_error('precio')) ?></p>
            <label for="precio">Precio</label><input type="text" name="precio" value="<?= $producto['precio'] ?>" id="precio" placeholder="00.00" step="any"/>
            <input type="hidden" name="id_producto" value="<?= $producto['id'] ?>" id="id_producto"/>
            <div class="boton"><input type="submit" name="enviar" value="Guardar" id="enviar"/></div>
        <?= form_close() ?>
        <?= form_open('admin/productos/subir_imagen') ?>
            <input type="hidden" name="id_producto" value="<?= $producto['id'] ?>" id="id_producto"/>
            <div class="boton"><input type="submit" name="enviar" value="Modificar imagen" id="enviar"/></div>
        <?= form_close() ?>
        <?= form_open('admin/productos') ?>
            <input type="submit" name="volver" value="Volver" id="volver"/>
        <?= form_close() ?>
    </article>
</section>