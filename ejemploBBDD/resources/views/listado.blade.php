<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        
    </head>
    <body>
        <?php
        foreach ($pers as $usuario) {
            echo $usuario->DNI.' '.$usuario->Nombre.' '.$usuario->Tfno.' '.$usuario->edad.'<br>';
            //echo $usuario->DNI.' '.$usuario->Nombre.' '.$usuario->edad.'<br>';
            //echo $usuario->DNI . ' ' . $usuario->Nombre . ' ' . $usuario->edad . ' ' . $usuario->Marca . ' ' . $usuario->Modelo . '<br>';
        }
        ?>
        <a href='indice'>Volver</a>

    </body>
</html>
