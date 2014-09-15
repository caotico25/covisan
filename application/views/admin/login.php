<section class="adminicio">
    <h2>Login de administrador</h2>
    <article>
        <p class="tel">Introduzca nombre y contraseña para acceder a la zona de administrador.</p><br /><br />
        
        <?= form_open('admin/inicio/login') ?>
            <label for="usuario">Usuario</label><input type="text" name="usuario" value="" id="usuario"/>
            <p class="error"><?= strip_tags(form_error('usuario')) ?></p>
            <label for="passwd">Contraseña</label><input type="password" name="passwd" value="" id="passwd"/>
            <p class="error"><?= strip_tags(form_error('passwd')) ?></p>
            <div class="boton"><input type="submit" name="enviar" value="Entrar" id="enviar"/></div>
        <?= form_close() ?>
    </article>
    
</section>