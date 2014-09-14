<section class="adminicio">
    <h2>Modificación de productos</h2>
    <br /><br />
    <article>
        <p class="tel">A continuación se listan los productos existentes y sus opciones:</p>
        <div class="tabla">
            <div class="cabecera">
                <div>PRODUCTO</div>
                <div>OPCIONES</div>
            </div>
            <div class="cuerpo">
                <?php foreach ($productos as $producto): ?>
                    <div><?= $producto['nombre'] ?></div>
                    <div>
                        <?= form_open() ?>
                            <input type="hidden" name="id_producto" value="<?= $producto['id']?>" id="id_producto"/>
                            <input type="submit" name="modificar" value="Modificar" id="modificar"/>
                        <?= form_close() ?>
                        <?= form_open() ?>
                            <input type="hidden" name="id_producto" value="<?= $producto['id']?>" id="id_producto"/>
                            <input type="submit" name="eliminar" value="Eliminar" id="eliminar"/>
                        <?= form_close() ?>
                    </div>
                <?php endforeach ?>
                <div>
                    <?= form_open('admin/productos/nuevo_producto', array('class' => 'anadir')) ?>
                        <input type="submit" name="anadir" value="Añadir nuevo producto" id="anadir" class="anadir" />
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </article>
</section>