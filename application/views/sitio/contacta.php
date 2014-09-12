<section>
    <h2>Contacta con nosotros</h2>
    <article>
        <p class="tel">
            Solicite información sobre nuestros productos, o si desea realizar 
            un pedido indíquenos la cantidad de los productos y nos pondremos 
            en contacto para ofrecerle un presupuesto sin compromiso.
        </p>
        <p><?php echo $this->session->flashdata('envio'); ?></p>
        <?= form_open('contacta/enviar_email') ?>
            <label for="nombre">Nombre:</label><input type="text" name="nombre" value="" id="nombre"/>
            <label for="telefono">Teléfono:</label><input type="text" name="telefono" value="" id="telefono"/>
            <label for="email">E-mail:</label><input type="email" name="email" value="" id="email"/>
            <label for="asunto">Asunto:</label><input type="text" name="asunto" value="" id="asunto"/>
            <label for="mensaje">Mensaje:</label><textarea name="mensaje" rows="8" cols="40"></textarea>
            <div class="boton"><input type="submit" name="enviar" value="Enviar" id="enviar"/></div>
        <?= form_close() ?>
    </article>
    
    <article>
        <p class="tel">Teléfono: 956 36 18 74</p>
        <p class="tel">Móvil: 687 51 92 32</p>
        <p class="tel">Fax: 956 36 15 58</p>
        <p class="mapa">Dónde nos encontramos:</p>
        <p class="tel">Carretera de Jerez, Km 1,300. Sanlúcar de Barrameda, Cádiz</p>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424.76231864502097!2d-6.3375825730533295!3d36.76148675045285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0dde6c5c522a1d%3A0x8f224262df7f54cd!2sCarretera+de+Jerez%2C+47%2C+11540+Sanl%C3%BAcar+de+Barrameda%2C+C%C3%A1diz!5e1!3m2!1ses!2ses!4v1408364957469" width="600" height="450" frameborder="0" style="border:0"></iframe>
    </article>
</section>