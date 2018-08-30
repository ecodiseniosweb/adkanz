<?php

require 'include/header.php';

?>

<?php

require 'include/menu.php';

?>

<section class="main">

    <article class="center">
        <h1>Bienvenido al Area de Intranet</h1>
    </article>

    <section>
    
        <div class="col-md-4 offset-4">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="user" class="text-light h5">Usuario:</label>
            <input type="text" name="user" id="USER" placeholder="usuario" required>
            <label for="pass" class="text-light h5">Contraseña:</label>
            <input type="password" name="pass" id="pass" placeholder="password" required>

                
                <?php 
                if(!empty($errores)): ?>
                <div class="alert error">
                    
                        <?php echo $errores; ?>
                    
                </div>
                <?php endif;?>

            <div class="btn">
                <input type="submit" name="entrar" value="Entrar">
            </div>
            </form>
        </div>

    </section>

</section>

<?php

require 'include/aside.php';

?>

<?php

require 'include/footer.php';

?>