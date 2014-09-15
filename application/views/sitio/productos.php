<section id="productos" class="seccion">
    <h2>Nuestros productos</h2>
    <article>
        <?php foreach ($productos as $producto): ?>
            <div class="articulo">
                <figure>
                    <img src="<?= $producto['imagen'] ?>" alt="" width="350" height="400" />
                </figure>
                <div>
                    <h1><?= $producto['nombre'] ?></h1>
                    <p><?= nl2br($producto['descripcion']) ?></p>
                    <p>Precios por unidad: <?= $producto['precio'] ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </article>
</section>