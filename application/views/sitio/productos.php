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
                    <p><?= $producto['descripcion'] ?></p>
                    <p><?= $producto['precio'] ?></p>
                </div>
            </div>
        <?php endforeach ?>
        
        <div class="articulo">
            <figure>
                <img src="images/botellasmanzanilla.jpg" alt="botellas de manzanilla" width="350" height="400" />
                <figcaption>Nuestra manzanilla en sus modalidades de 75cl y 35cl.</figcaption>
            </figure>
            <div>
                <h1>Manzanilla</h1>
                <p>Descripcion</p>
            </div>
        </div>
        <div class="articulo">
            <figure>
                <img src="images/cajaybotella2.jpg" alt="caja especial y botella de vino de mesa" width="350" height="400" />
                <figcaption>Nuestro vino en su modalidad caja con dispensador.</figcaption>
            </figure>
            <div>
                <h1>Vino</h1>
                <p>Descripcion</p>
            </div>
        </div>
        <div class="articulo">
            <figure>
                <img src="images/botellacream.jpg" alt="botella de Cream" width="350" height="400" />
                <figcaption>Nuestro Cream en su modalidad de 75cl</figcaption>
            </figure>
            <div>
                <h1>Cream</h1>
                <p>Descripcion</p>
            </div>
        </div>
        <div class="articulo">
            <figure>
                <img src="images/botellapedroximenez.jpg" alt="botella de Pedro Ximenez" width="350" height="400" />
                <figcaption>Nuestro Pedro Ximenez en modalidad de 75cl</figcaption>
            </figure>
            <div>
                <h1>Pedro Ximénez</h1>
                <p>Descripcion</p>
            </div>
        </div>
        <div class="articulo">
            <figure>
                <img src="images/botellapedroximenez.jpg" alt="botella de Pedro Ximenez" width="350" height="400" />
                <figcaption>Nuestro vino blanco en modalidad de botella</figcaption>
            </figure>
            <div>
                <h1>Vino blanco</h1>
                <p>Descripcion</p>
            </div>
        </div>
    </article>
</section>