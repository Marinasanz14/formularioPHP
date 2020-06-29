<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario Conyacto</title>
        <link rel="stylesheet" href="estilos.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="wrap">
            <form action="<?php echo htmlspecialchars($_SERVER{'PHP_SELF']); ?>" method="post">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre:" value="<?php if($enviado && isset($nombre)) echo $nombre ?>">

                <input type="text" class="form-control" name="correo" placeholder="Correo:" value="<?php if($enviado && isset($correo)) echo $correo ?>">

                <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"><?php if($enviado && isset($mensaje)) echo $mensje ?></textarea>

                <?php if (!empty($errores)); ?>
                    <div class="alert error">
                        <?php echo $errores; ?>
                    </div>
                <?php elseif ($enviado); ?>
                    <div class="alert success">
                        <p>Enviado correctamente</p>
                    </div> 
                <?php endif ?>       



                <input type="submit" name="submit" class="btn btn-primary" value="Enviar correo">
            </form>
        </div>    
    </body>
</html>
