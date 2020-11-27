<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <?php
        foreach ($pers as $usuario) {
            //echo $usuario->DNI.' '.$usuario->Nombre.' '.$usuario->Tfno.' '.$usuario->edad.'<br>';
            //echo $usuario->DNI.' '.$usuario->Nombre.' '.$usuario->edad.'<br>';
            echo $usuario->DNI . ' ' . $usuario->Nombre . ' ' . $usuario->edad . ' ' . $usuario->Marca . ' ' . $usuario->Modelo . '<br>';
        }
        ?>
        <a href='indice'>Volver</a>

    </body>
</html>
